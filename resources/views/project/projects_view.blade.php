@extends('app')


@section('content')
<div class="right_col" role="main">
          @if (count($errors) > 0)
              <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
          @endif
          <div class="">
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>View Project </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content form-horizontal form-label-left">

                   <form  method="GET" action="http://localhost/I4/public/project/index" class="form-horizontal form-label-left" novalidate>

                      <div class="item form-group">
                        
                        {{ Form::label('name', 'Project Name', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('name',$project->name,array('class' => 'form-control col-md-7 col-xs-12')) }}
                        </div>
                      </div>

                      <div class="item form-group">
                        {{ Form::label('desc', 'Project description', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('desc',$project->desc,array('class' => 'form-control col-md-7 col-xs-12')) }}
                        </div> 
                      </div>

                      <div class="item form-group">
                        {{ Form::label('start_date', 'Start Date', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('dob',$project->start_date,array('class' => 'form-control col-md-7 col-xs-12')) }}
                        </div>
                      </div>

                      <div class="item form-group">
                        {{ Form::label('end_date', 'End Date', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('dob',$project->end_date,array('class' => 'form-control col-md-7 col-xs-12')) }}
                        </div>
                      </div>

                      <div class="item form-group">
                        {{ Form::label('project_manager', 'Project Manager', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('dob',$project->project_manager,array('class' => 'form-control col-md-7 col-xs-12')) }}
                        </div>
                      </div>

                      <div class="item form-group">
                        {{ Form::label('client', 'Client Name', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('dob',$project->client,array('class' => 'form-control col-md-7 col-xs-12')) }}
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Members :  </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        @if ($employees->count())
                          @foreach ($employees as $employee)
                          @foreach ($team as $emp)
                          @if($emp->employee_id == $employee->id)
                          {{ Form::label('Member',$employee->name) }},
                          @break
                          @endif
                          @endforeach 
                          @endforeach
                          @endif
                          
                          </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        @endsection