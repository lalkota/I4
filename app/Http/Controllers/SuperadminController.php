<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Input;
use Validator;
use App\Employee;
use Illuminate\Support\Facades\Redirect;
use App\Role;

class SuperadminController extends Controller
{
    /**
     * show view after login
     */
    public function index()
    {

        return view('admin.superadmin_dashboard');
    }

    public function create()
    {
        $roles = Role::superadminRole()->get();
        return view('roleadmin.create_role_admin', compact('roles'));
    }

    public function show($id)
    {
        
        $employee = Employee::find($id);
            if (is_null($employee))
            {
              $employees = Employee::RoleAdminEmployee()->get();  
              return view('roleadmin.role_admin_list', compact('employees'));
            }
            
            return view('roleadmin.role_admin_view', compact('employee'));
    }

    public function store()
    {
    //
        $input = Input::all();
        $validation = Validator::make($input, Employee::$rules);

        if ($validation->passes())
        {
          Employee::create($input);

          return Redirect::route('admin.index');
      }

      return Redirect::route('admin.create')
      ->withInput()
      ->withErrors($validation)
      ->with('message', 'There were validation errors.');    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $admin = Employee::find($id);
    if (is_null($admin))
    {
      return Redirect::route('roleadmin.role_admin_list');
    }
    return view('roleadmin.role_admin_edit', compact('admin'));
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
      return Redirect::route('admin.show', $id);
    }
    return Redirect::route('admin.edit', $id)
    ->withInput()
    ->withErrors($validation)
    ->with('message', 'There were validation errors.');    
  }





}
