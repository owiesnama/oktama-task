<?php namespace OkTamam\Companies\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateCompaniesTable extends Migration
{
    public function up()
    {
        Schema::create('oktamam_companies_companies', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('logo');
            $table->string('website');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('oktamam_companies_companies');
    }
}
