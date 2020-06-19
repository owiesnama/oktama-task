<?php

namespace OkTamam\Companies\Controllers;

use Illuminate\Routing\Controller;
use OkTamam\Companies\Models\Company;
use OkTamam\Companies\Models\Employee;

/**
 * Sample Resourceful Test Controller
 */
class CompaniesController extends Controller
{
    public function index()
    {
        return response(Company::all());
    }

    public function show($company)
    {
        $company = Company::find($company);
        return response($company);
    }

    public function employees($company)
    {
        $employees = Employee::where('company_id' ,$company)
        ->get();
        return response($employees);
    }
}
