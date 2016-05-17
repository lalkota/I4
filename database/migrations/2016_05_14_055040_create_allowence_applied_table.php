<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllowenceAppliedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allowence_applied', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('emp_id');
            $table->integer('allowence_type');
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
        Schema::drop('allowence_applied');
    }
}
