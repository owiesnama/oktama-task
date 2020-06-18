<?php

namespace OkTamam\Companies\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
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

        $company->name = post('name');
        $company->website = post('website');
        $company->email = post('email');

        $company->logo = Input::file('logo');

        $company->save();

        return redirect('/companies');
    }

    public function onUpdateCompany()
    {
        $company = Company::find($this->param('company'));
        $company->name = post('name');
        $company->website = post('website');
        $company->email = post('email');

        $company->logo = Input::file('logo');

        $company->save();

        return redirect('/companies');
    }
}
