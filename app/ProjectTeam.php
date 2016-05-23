<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectTeam extends Model
{
    protected $table = "project_team";
	protected $guarded = array('id');
	public $timestamps  = false;

	protected $fillable = array('project_id', 'employee_id');

	public function employee()
	{
		return $this->hasOne('App\Employee', 'id', 'employee_id');
	}

}
