<?php
Route::group(['prefix' => 'api'], function () {
    Route::get('/companies', 'OkTamam\Companies\Controllers\CompaniesController@index');
    Route::get('/companies/{company}', 'OkTamam\Companies\Controllers\CompaniesController@show');
    Route::get('/companies/{company}/employees', 'OkTamam\Companies\Controllers\CompaniesController@employees');
    Route::get('/employees', 'OkTamam\Companies\Controllers\EmployeesController@index');
    Route::get('/employees/{employee}', 'OkTamam\Companies\Controllers\EmployeesController@show');
});