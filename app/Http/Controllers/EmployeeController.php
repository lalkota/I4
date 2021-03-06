<?php

  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use App\Http\Requests;
  use Input;
  use Validator;
  use App\Employee;
  use Illuminate\Support\Facades\Redirect;
  use App\Role;
  use App\User;
  use App\Attendance;

  /**
   * Class EmployeeController
   * @package App\Http\Controllers
   */
  class EmployeeController extends Controller
  {
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
      $employees = Employee::paginate(3);
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

      if ($validation->passes()) {
        // Must not already exist in the `email` column of `users` table
        $rules = array('email' => 'unique:users,email');
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
          return Redirect::route('employee.create')
              ->withInput()
              ->withErrors($validator)
              ->with('message', 'User already exist!');
        }

        $id = Employee::create($input)->id;
        User::create(array(
          'username' => $input["name"],
          'email' => $input["email"],
          'password' => 'employee',
          'role_id' => $input["designation"],
          'ref_id' => $id
          ));
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
       * @param  int $id
       * @return Response
       */
      public function show($id)
      {
        $employee = Employee::find($id);
        if (is_null($employee)) {
          return Redirect::route('employee.index');
        }
        return view('employee.employee_view', compact('employee'));
      }

      /**
       * Show the form for editing the specified resource.
       *
       * @param  int $id
       * @return Response
       */
      public function edit($id)
      {
        $employee = Employee::find($id);
        if (is_null($employee)) {
          return Redirect::route('employee.index');
        }
        return view('employee.employee_edit', compact('employee'));
      }

      /**
       * Update the specified resource in storage.
       *
       * @param  int $id
       * @return Response
       */
      public function update($id)
      {
        $input = Input::all();
        $validation = Validator::make($input, Employee::$rules);
        if ($validation->passes()) {
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
       * @param  int $id
       * @return Response
       */
      public function destroy($id)
      {
        Employee::find($id)->delete();
        User::where(array('role_id'=>$role_id,'ref_id'=>$id))->get()[0]->delete();
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

      /**
       * @return mixed
       */
      public function attshow()
      {
        $timestamps  = date('Y-m-d');
        $employees = Employee::all();
        $attendance = Attendance::where('current_date','=', $timestamps)->get();
        return view('employee.attendance', compact('employees','attendance'));
      }


      /**
       * @return mixed
       */
      public function notificationshow()
      {
        return view('employee.employee_notification');
      }

      /**
       * @return mixed
       */
      public function dashboardshow()
      {
        return view('employee.employee_dashboard');

      }

      /**
       * @return mixed
       */
      public function absenceshow()
      {
        return view('employee.employee_absence');
      }

      /**
       * @return mixed
       */
      public function allowenceshow()
      {
        return view('employee.employee_allowence');
      }

      /**
       * @return mixed
       */
      public function registrationshow()
      {
        return view('employee.employe_registration');
      }
    }
