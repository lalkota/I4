<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = "project";
	protected $guarded = array('id');
	public $timestamps  = false;

	protected $fillable = array('name', 'desc', 'start_date', 'end_date', 'project_manager', 'client');

	public static $rules = array(
	'name' => 'required|min:5',
	'desc' => 'required',
	'start_date' => 'required|date',
	'end_date' => 'required|date',
	'project_manager' => 'required',
	'client' => 'required'
	);
}
