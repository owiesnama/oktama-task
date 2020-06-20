<?php

namespace OkTamam\Companies\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Validation\Validator;
use October\Rain\Exception\ValidationException;
use OkTamam\Companies\Models\Company;
use RainLab\User\Facades\Auth;

class CreateCompany extends ComponentBase
{
    public $company;

    public function componentDetails()
    {
        return [
            'name'        => 'createCompany Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function onRun()
    {
        if ($id = $this->param('company')) {
            $this->company = Company::find($id);
        } else {
            $this->company = new Company;
        }

        if (!(Auth::user()->isAdmin())) {

            return redirect('/');
        }
    }

    public function onAddCompany()
    {
        $company = new Company;

        if ($this->validatedRequest()->fails()) {
            return back()->withErrors($this->validatedRequest());
        }

        $company->name = post('name');
        $company->website = post('website');
        $company->email = post('email');

        $company->logo =  $company->id . '.' . Input::file('logo')->getClientOriginalExtension();




        Storage::put(
            'public/' . $company->logo,
            file_get_contents(Input::file('logo')->getRealPath())
        );

        $company->save();

        return redirect('/companies');
    }

    public function onUpdateCompany()
    {
        $company = Company::find($this->param('company'));

        if ($this->validatedRequest()->fails()) {
            return back()->withErrors($this->validatedRequest());
        }

        $company->name = post('name');
        $company->website = post('website');
        $company->email = post('email');


        $company->logo =  $company->id . '.' . Input::file('logo')->getClientOriginalExtension();




        Storage::put(
            'public/' . $company->logo,
            file_get_contents(Input::file('logo')->getRealPath())
        );


        $company->save();


        return redirect('/companies');
    }


    public function validatedRequest()
    {
        return FacadesValidator::make(
            post(),
            [
                'name' => 'required',
                'logo' => 'mimes:jpeg,jpg,png,gif|dimensions:min_width=100,min_height=100'
            ]
        );
    }
}
