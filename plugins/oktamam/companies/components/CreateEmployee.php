<?php

namespace OkTamam\Companies\Components;

use Cms\Classes\ComponentBase;
use OkTamam\Companies\Models\Employee;

class CreateEmployee extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'createEmployee Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function onAddEmployee()
    {
        $employee = new Employee();

        $employee->first_name = post('first_name');
        $employee->last_name = post('last_name');
        $employee->phone = post('phone');
        $employee->email = post('email');

        $employee->save();

        return  redirect('/employees');
    }
}
