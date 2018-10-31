<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longText('description')->nullable();
            $table->Integer('company_id')->unsigned()->nullable();
            $table->Integer('user_id')->unsigned()->nullable();
            $table->integer('days')->unsigned()->nullable();

            $table->foreign('company_id')->references('id')->on('companies'); //foreign key 
            $table->foreign('user_id')->references('id')->on('users'); //foreign key 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
