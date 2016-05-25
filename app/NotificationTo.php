<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotificationTo extends Model
{
    protected $table = "notification_to";
	protected $guarded = array('id');
	public $timestamps  = false;

	protected $fillable = array('notification_id', 'user_id');


	public function notification() 
	{
		return $this->hasOne('App\Notification','id','notification_id');
	}
}
