<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Input;
use Validator;
use App\Employee;
use Illuminate\Support\Facades\Redirect;

class ProjectController extends Controller
{
   
    /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    
    $project = Project::all();
    return view('employee.employee_list', compact('employees'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
     $employees = Employee::where('designation');
    return view('project.create_project', compact('employees'));
  }


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
