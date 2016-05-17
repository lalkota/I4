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
                    <h2>View Employee </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content form-horizontal form-label-left">

                   <form  method="GET" action="http://localhost/I4/public/employee/employee_dashboard" class="form-horizontal form-label-left" novalidate>

                      <div class="item form-group">
                        
                        {{ Form::label('name', 'Employee Name', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('name',$employee->name,array('class' => 'form-control col-md-7 col-xs-12')) }}
                        </div>
                      </div>
                      <div class="item form-group">
                        {{ Form::label('designation', 'Employee designation', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('designation',$employee->designation,array('class' => 'form-control col-md-7 col-xs-12')) }}
                        </div> 
                      </div>

                      <div class="item form-group">
                        {{ Form::label('DOB', 'Employee Date of Birth', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('dob',$employee->DOB,array('class' => 'form-control col-md-7 col-xs-12')) }}
                        </div>
                      </div>

                      <div class="item form-group">
                        {{ Form::label('DOJ', 'Employee Date of Joining', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('doj',$employee->DOJ,array('class' => 'form-control col-md-7 col-xs-12')) }}
                        </div>
                      </div>

                      <div class="item form-group">
                        {{ Form::label('gross_salary', 'Gross Salary', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('gross_salary',$employee->gross_salary,array('class' => 'form-control col-md-7 col-xs-12')) }}
                        </div>
                      </div>
              
                      <div class="item form-group">
                        {{ Form::label('net_salary', 'Net Salary', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('net_salary',$employee->net_salary,array('class' => 'form-control col-md-7 col-xs-12')) }}
                        </div>
                      </div> 
                        
                      <div class="item form-group">
                        {{ Form::label('pf', 'PF', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('pf',$employee->pf,array('class' => 'form-control col-md-7 col-xs-12')) }}
                        </div>
                      </div>  
                      
                      <div class="item form-group">
                        {{ Form::label('cl', 'CL', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('cl',$employee->cl,array('class' => 'form-control col-md-7 col-xs-12')) }}
                        </div>
                      </div> 
                      
                      <div class="item form-group">
                        {{ Form::label('salary_date', 'Salary Date', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('salary_date',$employee->salary_date,array('class' => 'form-control col-md-7 col-xs-12')) }}
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        {{ Form::label('email', 'Email', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('email',$employee->email,array('class' => 'form-control col-md-7 col-xs-12')) }}
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        {{ Form::label('contact_no', 'Contact No.', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('contact_no',$employee->contact_no,array('class' => 'form-control col-md-7 col-xs-12')) }}
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        {{ Form::label('address', 'Address', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('address',$employee->address,array('class' => 'form-control col-md-7 col-xs-12')) }}
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