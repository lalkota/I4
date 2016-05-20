
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $table = "attendance";
	protected $guarded = array('id');
	public $timestamps  = false;

	protected $fillable = array('emp_id', '	attend');

	public static $rules = array(
	'emp_id' => 'required',
	'attend' => 'required'
	);
}
