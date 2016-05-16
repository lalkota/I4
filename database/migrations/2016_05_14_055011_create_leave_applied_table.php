<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaveAppliedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leave_applied', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('emp_id');
            $table->integer('leave_type');
            $table->date('from_date');
            $table->date('to_date');
            $table->text('reason_for_absent');
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
        Schema::drop('leave_applied');
    }
}
