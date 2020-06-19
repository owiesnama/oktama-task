<?php

namespace OkTamam\Companies\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Validator;
use October\Rain\Exception\ValidationException;
use OkTamam\Companies\Models\Company;
use OkTamam\Companies\Models\Employee;
use RainLab\User\Facades\Auth;

class CreateEmployee extends ComponentBase
{
    public $employee;

    public function componentDetails()
    {
        return [
            'name'        => 'createEmployee Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function onRun()
    {
        if ($id = $this->param('employee')) {
            $this->employee = Employee::find($id);
        } else {
            $this->employee = new Employee;
        }



        if (!(Auth::user()->isAdmin())) {

            return redirect('/');
        }
    }

    public function companies()
    {
        return Company::all();
    }

    public function onAddEmployee()
    {
        $employee = new Employee();

        if ($this->validatedRequest()->fails()) {
            throw new ValidationException($this->validatedRequest());
        }

        $employee->first_name = post('first_name');
        $employee->last_name = post('last_name');
        $employee->phone = post('phone');
        $employee->email = post('email');
        $employee->company_id = post('company');

        $employee->save();

        return  redirect('/employees');
    }


    public function onUpdateEmployee()
    {
        $employee = Employee::find($this->param('employee'));


        if ($this->validatedRequest()->fails()) {
            throw new ValidationException($this->validatedRequest());
        }
        $employee->first_name = post('first_name');
        $employee->last_name = post('last_name');
        $employee->phone = post('phone');
        $employee->email = post('email');
        $employee->company_id = post('company');

        $employee->save();

        return redirect('/employees');
    }


    public function validatedRequest()
    {
        return Validator::make(
            post(),
            [
                'first_name' => 'required',
                'last_name' => 'required'
            ]
        );
    }
}
