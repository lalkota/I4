<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AttendanceController extends Controller
{
    /**
     * show view after login
     */
    public function show()
    {
        return view('attendance.create_role_admin');
    }

    public function createattendanceshow()
    {
        return view('attendance.create_project');
    }
}
