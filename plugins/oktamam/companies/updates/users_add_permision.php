<?php

namespace OkTamam\Companies\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class UsersAddPermision extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('permision')->nullable();
        });
    }

    public function down()
    {
        if (Schema::hasColumn('users', 'permision')) {
            Schema::table('users', function ($table) {
                $table->dropColumn('permision');
            });
        }
    }
}
