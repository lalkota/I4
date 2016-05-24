<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = "employee";
    protected $guarded = array('id');
    public $timestamps  = false;

    protected $fillable = array(
        'name',
        'designation',
        'dob',
        'doj',
        'gross_salary' ,
        'net_salary',
        'pf',
        'cl',
        'salary_date',
        'email',
        'contact_no',
        'address'
    );

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



public function scopeRoleAdminEmployee($query)
{
    return $query->where('designation', 2);
}


    /**
     * @param $query
     * @return mixed
     */
    public function scopeManager($query)
    {
        return $query->where('designation', 3);
    }


    /**
     * @param $query
     * @return mixed
     */
    public function scopeEmployee($query)
    {
        return $query->where('designation', 4);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->hasOne('App\User','ref_id');
    }
}
