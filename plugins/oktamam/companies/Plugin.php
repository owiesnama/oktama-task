<?php

namespace OkTamam\Companies;

use Backend;
use October\Rain\Auth\Models\User;
use RainLab\User\Controllers\Users;
use System\Classes\PluginBase;

/**
 * Companies Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * @var array Plugin dependencies
     */
    public $require = ['RainLab.User'];
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Companies',
            'description' => 'Manage companies and it\'s employees',
            'author'      => 'OkTamam',
            'icon'        => 'icon-building'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {

        return [
            'OkTamam\Companies\Components\Companies' => 'companies',
            'OkTamam\Companies\Components\Employees' => 'employees',
            'OkTamam\Companies\Components\CreateCompany' => 'createCompany',
            'OkTamam\Companies\Components\CreateEmployee' => 'createEmployee',
            'OkTamam\Companies\Components\Dashboard' => 'companiesDashboard',
        ];
    }

    public function boot()
    {
        Users::extendFormFields(function ($form, $model, $context) {
            $form->addTabFields([
                'permision' => [
                    'label'   => 'permision',
                    'type'    => 'text',
                    'tab' => 'Rols'
                ]
            ]);
        });

        User::extend(function ($model) {
            $model->addDynamicMethod('isAdmin', function() use ($model) {
                return !! $model->permision == 'admin';
            });
        });
    }
}
