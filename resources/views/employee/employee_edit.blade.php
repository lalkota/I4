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
                    <h2>Create Employee </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content form-horizontal form-label-left">

                    {{ Form::model($employee, array('method' => 'PATCH', 'route' => array('employee.update', $employee->id))) }}

                      <div class="item form-group">
                        <span class="required">
                        {{ Form::label('name', 'Employee Name', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}*</span>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::text('name',$employee->name,array('class' => 'form-control col-md-7 col-xs-12')) }}
                        </div>
                      </div>
                      <div class="item form-group">
                        <span class="required">
                        {{ Form::label('designation', 'Employee designation', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}*</span>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::text('designation',$employee->designation,array('class' => 'form-control col-md-7 col-xs-12')) }}
                        </div> 
                      </div>

                      <div class="item form-group">
                        <span class="required">
                        {{ Form::label('DOB', 'Employee Date of Birth', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}*</span>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::date('dob',$employee->DOB,array('class' => 'form-control col-md-7 col-xs-12')) }}
                        </div>
                      </div>

                      <div class="item form-group">
                        <span class="required">
                        {{ Form::label('DOJ', 'Employee Date of Joining', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}*</span>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::date('doj',$employee->DOJ,array('class' => 'form-control col-md-7 col-xs-12')) }}
                        </div>
                      </div>

                      <div class="item form-group">
                        <span class="required">
                        {{ Form::label('gross_salary', 'Gross Salary', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}*</span>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::text('gross_salary',$employee->gross_salary,array('class' => 'form-control col-md-7 col-xs-12')) }}
                        </div>
                      </div>
              
                      <div class="item form-group">
                        <span class="required">
                        {{ Form::label('net_salary', 'Net Salary', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}*</span>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::text('net_salary',$employee->net_salary,array('class' => 'form-control col-md-7 col-xs-12')) }}
                        </div>
                      </div> 
                        
                      <div class="item form-group">
                        <span class="required">
                        {{ Form::label('pf', 'PF', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}*</span>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::text('pf',$employee->pf,array('class' => 'form-control col-md-7 col-xs-12')) }}
                        </div>
                      </div>  
                      
                      <div class="item form-group">
                        <span class="required">
                        {{ Form::label('cl', 'CL', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}*</span>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::text('cl',$employee->cl,array('class' => 'form-control col-md-7 col-xs-12')) }}
                        </div>
                      </div> 
                      
                      <div class="item form-group">
                        <span class="required">
                        {{ Form::label('salary_date', 'Salary Date', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}*</span>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::date('salary_date',$employee->salary_date,array('class' => 'form-control col-md-7 col-xs-12')) }}
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <span class="required">
                        {{ Form::label('email', 'Email', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}*</span>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::text('email',$employee->email,array('class' => 'form-control col-md-7 col-xs-12')) }}
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <span class="required">
                        {{ Form::label('contact_no', 'Contact No.', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}*</span>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::text('contact_no',$employee->contact_no,array('class' => 'form-control col-md-7 col-xs-12')) }}
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <span class="required">
                        {{ Form::label('address', 'Address', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}*</span>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::text('address',$employee->address,array('class' => 'form-control col-md-7 col-xs-12')) }}
                        </div>
                      </div>
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Update</button>
                        </div>
                      </div>
                    {{ Form::close() }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        @endsection