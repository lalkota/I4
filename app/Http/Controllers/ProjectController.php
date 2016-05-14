<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProjectController extends Controller
{
    /**
     * show view after login
     */
   
    public function createprojectshow()
    {
        return view('project.create_project');
    }

    public function viewprojectshow()
    {
        return view('project.projects_view');
    }

    public function projectdashboardshow()
    {
        return view('project.projects_dashboard');
    }

    public function projectnotificationdashboardshow()
    {
        return view('project.projects_notification');
    }

    public function projectnotificationdetaildashboardshow()
    {
        return view('project.projects_notification_detail');
    }
    
}
