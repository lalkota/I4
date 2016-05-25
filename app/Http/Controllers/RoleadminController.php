<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Employee;
use App\Client;
use App\Http\Requests;

class RoleadminController extends Controller
{
    /**
     * show view after login
     */
    public function show()
    {
        
        $count['completed'] = Project::completedprojects()->get()->count();
        $count['ongoing'] = Project::ongoingprojects()->get()->count();
        $count['employees'] = Employee::all()->count();
        $count['clients'] = Client::all()->count();

        $completed_projects = Project::completedprojects()->paginate(4);
        $ongoing_projects = Project::ongoingprojects()->paginate(4);
        $employees = Employee::paginate(4);
        $clients = Client::paginate(4);

        return view('roleadmin.projects_dashboard', compact('completed_projects','ongoing_projects','employees','clients','count'));
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
