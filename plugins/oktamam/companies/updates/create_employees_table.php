<?php namespace OkTamam\Companies\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateEmployeesTable extends Migration
{
    public function up()
    {
        Schema::create('oktamam_companies_employees', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->bigInteger('company_id')->nullable()->unsigned()->index();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('email');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('oktamam_companies_employees');
    }
}
