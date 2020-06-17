<?php namespace OkTamam\Companies\Components;

use Cms\Classes\ComponentBase;

class Companies extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'companies Component',
            'description' => 'List all companies'
        ];
    }

    public function employees(){
        return [
            ['name' => 'owiesnama',
             'phone' => '0920754234',
             'email' => 'owiesnama@gmail.com',
            ]
        ];
    }
}
