<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('designation');
            $table->date('DOB');
            $table->date('DOJ');
            $table->integer('gross_salary');
            $table->integer('net_salary');
            $table->integer('pf');
            $table->integer('cl');
            $table->date('salary_date');
            $table->string('email');
            $table->integer('contact_no');
            $table->string('address');
            $table->timestamp('created_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employee');
    }
}
