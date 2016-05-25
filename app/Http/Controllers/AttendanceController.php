<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Input;
use Validator;
use App\Attendance;
use App\Employee;
use Illuminate\Support\Facades\Redirect;

class AttendanceController extends Controller
{
    /**
     * show view after login
     */
    public function index()
    {

        $timestamps  = date('Y-m-d');
        $employees = Employee::all();
        $attendance = Attendance::where('current_date','=', $timestamps)->get();
        return view('employee.attendance_list_all', compact('attendance','employees'));
    }

    public function createattendanceshow()
    {
        return view('attendance.create_project');
    }

    public function store()
    {
        $input = Input::all();
        $validation = Validator::make($input, Attendance::$rules);

        if ($validation->passes()) {
            foreach($input["emp_id"] as $key=>$val){
                $attendance = Attendance::where("emp_id",$key)->where("current_date",date('Y-m-d'))->get();
                if($attendance->count()) {
                    $attendance[0]->update(array("emp_id"=>$key, "attend"=>$val, "current_date"=>date('Y-m-d')));    
                } else {
                    Attendance::create(array("emp_id"=>$key, "attend"=>$val, "current_date"=>date('Y-m-d')));
                }
            }
            return Redirect::route('attendance.index');
        }
        return Redirect::route('employee.index')
        ->withInput()
        ->withErrors($validation)
        ->with('message', 'There were validation errors.');
    }

    public function listattendence(){

        $rules = array(
            'from_date' => 'required',
            'to_date' => 'required',
            'name' => 'required' 
        );

        $input = Input::all();
        $validation = Validator::make($input, $rules);

        if ($validation->passes()) {
            $emp_id = Input::get('name');
            $lists = Attendance::where('current_date','>=',$input["from_date"])->where('current_date','<=',$input["to_date"])->where('emp_id','=', $input["name"])->get();
            $employees = Employee::all();
            return view('employee.attendance_list_date', compact('employees','lists','emp_id'));
        }

        return Redirect::route('attendance.index')
        ->withInput()
        ->withErrors($validation)
        ->with('message', 'There were validation errors.');

    }

    public function listattendencestatus(){

        $rules = array(
            'current_date' => 'required',
            'attend' => 'required'
        );

        $input = Input::all();
        $validation = Validator::make($input, $rules);
        
        if ($validation->passes()) {
        $lists = Attendance::where('attend','=',$input["attend"])->where('current_date','=',$input["current_date"])->get();
        $employees = Employee::all();
        return view('employee.attendance_list_status', compact('employees','lists'));
        }
        return Redirect::route('attendance.index')
        ->withInput()
        ->withErrors($validation)
        ->with('message', 'There were validation errors.');
    }

}
