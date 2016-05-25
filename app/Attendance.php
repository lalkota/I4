<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $table = "attendance";
	protected $guarded = array('id');
	public $timestamps  = false;

	protected $fillable = array('emp_id', 'attend', 'current_date');

	public static $rules = array(
	'emp_id' => 'required'
	);
}
