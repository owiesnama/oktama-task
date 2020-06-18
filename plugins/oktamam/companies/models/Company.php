<?php

namespace OkTamam\Companies\Models;

use Model;

/**
 * company Model
 */
class Company extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'oktamam_companies_companies';

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Validation rules for attributes
     */
    public $rules = [];

    /**
     * @var array Attributes to be cast to Argon (Carbon) instances
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * @var array Relations
     */
    public $hasMany = [
        'employees' => 'OkTamam\Companies\Models\Employee',
    ];
}
