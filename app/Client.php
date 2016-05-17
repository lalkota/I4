<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //

	protected $table = "client";
	protected $guarded = array('id');
	public $timestamps  = false;

	protected $fillable = array('name', 'company_name', 'email', 'contact_no', 'address');

	public static $rules = array(
	'name' => 'required|min:5',
	'company_name' => 'required',
	'email' => 'required|email',
	'contact_no' => 'required',
	'address' => 'required'
	);
}
