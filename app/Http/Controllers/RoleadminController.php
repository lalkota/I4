<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RoleadminController extends Controller
{
    /**
     * show view after login
     */
    public function show()
    {
        return view('roleadmin.create_role_admin');
    }

    public function createprojectshow()
    {
        return view('roleadmin.create_project');
    }

    public function viewprojectshow()
    {
        return view('roleadmin.projects_view');
    }

    public function projectdashboardshow()
    {
        return view('roleadmin.projects_dashboard');
    }
    
}
