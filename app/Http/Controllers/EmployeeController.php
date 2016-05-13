<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EmployeeController extends Controller
{
    /**
     * show view after login
     */
    public function show()
    {
        return view('employee.employe_registration');
    }

     public function attshow()
    {
        return view('employee.attendance');
    }

     public function absenceshow()
    {
        return view('employee.employee_absence');
    }

     public function allowenceshow()
    {
        return view('employee.employee_allowence');
    }
}
