<?php namespace OkTamam\Companies\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use OkTamam\Companies\Models\Company;

class CreateCompany extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'createCompany Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function onAddCompany(){
        $company = new Company;

        $company->name = post('name');
        $company->website = post('website');
        $company->email = post('email');

        $company->logo = Input::file('logo');

        $company->save();

        return redirect('/companies');
    }
}
