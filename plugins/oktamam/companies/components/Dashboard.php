<?php

namespace OkTamam\Companies\Components;

use Cms\Classes\ComponentBase;
use OkTamam\Companies\Models\Company;

class Dashboard extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'dashboard Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function recentCompanies()
    {
        return Company::latest()->take(4);
    }
}
