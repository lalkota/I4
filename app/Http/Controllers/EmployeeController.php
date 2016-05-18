<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Input;
use Validator;
use App\Employee;
use Illuminate\Support\Facades\Redirect;

class EmployeeController extends Controller
{
   

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $employees = Employee::all();
    return view('employee.employee_list', compact('employees'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $roles = Role::all();
    return view('employee.employe_registration', compact('roles'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    //
      $input = Input::all();

      $validation = Validator::make($input, Employee::$rules);

      if ($validation->passes())
      {
          Employee::create($input);

          return Redirect::route('employee.index');
      }

      return Redirect::route('employee.create')
          ->withInput()
          ->withErrors($validation)
          ->with('message', 'There were validation errors.');    
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
      $employee = Employee::find($id);
      if (is_null($employee))
      {
          return Redirect::route('employee.index');
      }
      return view('employee.employee_view', compact('employee'));    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
      $employee = Employee::find($id);
      if (is_null($employee))
      {
          return Redirect::route('employee.index');
      }
      return view('employee.employee_edit', compact('employee'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
      $input = Input::all();
      $validation = Validator::make($input, Employee::$rules);
      if ($validation->passes())
      {
          $employee = Employee::find($id);
          $employee->update($input);
          return Redirect::route('employee.show', $id);
      }
      return Redirect::route('employee.edit', $id)
          ->withInput()
          ->withErrors($validation)
          ->with('message', 'There were validation errors.');    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
        Employee::find($id)->delete();
        return Redirect::route('employee.index');    
  }

   /**
     * show view after login
     */
    /*
    public function show()
    {
        return view('employee.employe_registration');
    }*/

     public function attshow()
    {
        return view('employee.attendance');
    }


     public function notificationshow()
    {
        return view('employee.employee_notification');
    }

    public function dashboardshow()
    {
        return view('employee.employee_dashboard');

	}
	public function absenceshow()
    {
        return view('employee.employee_absence');
    }

     public function allowenceshow()
    {
        return view('employee.employee_allowence');
    }

     public function registrationshow()
    {
        return view('employee.employe_registration');
    }
}
