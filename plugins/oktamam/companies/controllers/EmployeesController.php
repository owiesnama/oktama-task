<?php

namespace OkTamam\Companies\Controllers;

use Illuminate\Routing\Controller;
use OkTamam\Companies\Models\Company;
use OkTamam\Companies\Models\Employee;

/**
 * Sample Resourceful Test Controller
 */
class EmployeesController extends Controller
{
    public function index()
    {
        return response(Employee::all());
    }

    public function show($employee)
    {
        $employee = Employee::find($employee);
        return response($employee);
    }
}
