<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectTeam extends Model
{
    protected $table = "project_team";
	protected $guarded = array('id');
	public $timestamps  = false;

	protected $fillable = array('project_id', 'employee_id');

	

	public function scopeProjectTeam($query)
	{
    	return $query->where('project_id', 4);
	}

	public function employee()
	{
		return $this->hasMany('App\Employee');
	}
}
