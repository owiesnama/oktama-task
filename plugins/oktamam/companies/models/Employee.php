<?php

namespace OkTamam\Companies\Models;

use Model;

/**
 * employee Model
 */
class Employee extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'oktamam_companies_employees';

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Rules for the attributes to be validated before insterting 
     */
    protected $rules = [];
    /**
     * @var array Attributes to be cast to Argon (Carbon) instances
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];


    public function getNameAttribute()
    {
        return $this->attributes['first_name'] . ' ' . $this->attributes['last_name'];
    }
    /**
     * @var array Relations
     */

    public $belongsTo = [
        'company' => 'OkTamam\Companies\Models\Company'
    ];

}
