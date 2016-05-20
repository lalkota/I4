<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //

	protected $table = "employee";
	protected $guarded = array('id');
	public $timestamps  = false;

	protected $fillable = array('name', 'designation', 'dob', 'doj', 'gross_salary' ,'net_salary', 'pf', 'cl','salary_date', 'email', 'contact_no', 'address');

	public static $rules = array(
	'name' => 'required|min:5',
	'designation' => 'required',
	'dob' => 'required|date',
	'doj' => 'required|date',
	'gross_salary' => 'required',
	'net_salary' => 'required',
	'pf' => 'required',
	'cl' => 'required',
	'salary_date' => 'required|date',
	'email' => 'required|email',
	'contact_no' => 'required',
	'address' => 'required'
	);


public function scopeManager($query)
{
    return $query->where('designation', 3);
}

public function scopeEmployee($query)
{
    return $query->where('designation', 4);
}

public function scopeRoleAdminEmployee($query)
{
    return $query->where('designation', 2);
}



	public function role() 
	{
		return $this->hasOne('App\Role');
	}
}
