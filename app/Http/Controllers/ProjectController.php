<?php
  namespace App\Http\Controllers;

  use Illuminate\Http\Request;

  use App\Http\Requests;
  use Input;
  use Validator;
  use App\Employee;
  use App\Client;

  use Illuminate\Support\Facades\Redirect;
  use App\Project;
  use App\ProjectTeam;

  class ProjectController extends Controller
  {

     $employees = Employee::where('designation');
    return view('project.create_project', compact('employees'));
  }


    /**
     * show view after login

     
      /**
     * Display a listing of the resource.
     *
     * @return Response

     */
    public function index()
    {
      
      $project = Project::all();
      return view('project.projects_list', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
       $managers = Employee::manager()->get();
       $employees = Employee::employee()->get();
       $clients = Client::all();


      return view('project.projects_create',  compact('managers','clients','employees'));
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

          $validation = Validator::make($input, Project::$rules);

          if ($validation->passes())
          {
              $employees = array_pop($input);
              $id = Project::create($input)->id;
              foreach($employees as $employee) {
                ProjectTeam::create(array('project_id'=>$id,'employee_id'=>$employee));    
              }
              return Redirect::route('project.index');
          }

          return Redirect::route('project.create')
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
        $project = Project::find($id);
        if (is_null($project))
        {
            return Redirect::route('project.index');
        }
        return view('project.projects_list', compact('project'));    
      }

      /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return Response
      */
      public function edit($id)
      {
          $project = Client::find($id);
          if (is_null($project))
          {
            return Redirect::route('project.index');
          }
          return view('project.project_edit', compact('project'));
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
      $validation = Validator::make($input, Project::$rules);
      if ($validation->passes())
      {
        $project = Project::find($id);
        $project->update($input);
        return Redirect::route('project.show', $id);
      }
        return Redirect::route('project.edit', $id)
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
          Project::find($id)->delete();
          return Redirect::route('project.index');    
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
          return view('project.projects_list');
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
