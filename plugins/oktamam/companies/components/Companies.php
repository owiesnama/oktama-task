<?php namespace OkTamam\Companies\Components;

use Cms\Classes\ComponentBase;
use OkTamam\Companies\Models\Company;

class Companies extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'companies Component',
            'description' => 'List all companies'
        ];
    }

    public function companies(){
        return Company::all();
    }
}
