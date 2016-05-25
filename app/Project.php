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


	public function team()
	{
		return $this->hasMany('App\ProjectTeam', 'project_id', 'id');
	}

	public function manager()
	{
		return $this->hasOne('App\Employee','id','project_manager');
	}

	public function clients()
	{
		return $this->hasOne('App\Client','id','client');
	}

	    /**
     * @param $query
     * @return mixed
     */
    public function scopeOnGoingProjects($query)
    {
        return $query->where('start_date','<=', date('Y-m-d'))->where('end_date','>=',date('Y-m-d'));
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeCompletedProjects($query)
    {
        return $query->where('end_date','<', date('Y-m-d'));
    }

}
