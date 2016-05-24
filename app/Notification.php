<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = "notification";
	protected $guarded = array('id');
	public $timestamps  = false;

	protected $fillable = array('title', 'desc', 'from');

	public static $rules = array(
	'title' => 'required',
	'desc' => 'required',
	'to' => 'required'
	);
}
