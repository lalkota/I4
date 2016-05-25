<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //

    protected $table = "Ticket";
    protected $guarded = array('id');
    public $timestamps  = false;

    protected $fillable = array(
        'title',
        'desc',
        'status',
        'priority',
        'user_id' ,
        'project_id',
        'attached_path'
        
    );

    public static $rules = array(
        'title' => 'required|min:5',
        'desc' => 'required',
        'status' => 'required',
        'priority' => 'required',
        'user_id' => 'required',
        'project_id' => 'required',
        'attached_path' => 'required'
        
    );
}
