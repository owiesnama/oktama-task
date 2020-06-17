<?php namespace OkTamam\Companies\Components;

use Cms\Classes\ComponentBase;
use OkTamam\Companies\Models\Employee;

class Employees extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'employees Component',
            'description' => 'List all employees'
        ];
    }

    public function employees(){
        return Employee::paginate(10);
    }
}
