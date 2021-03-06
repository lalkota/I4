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
              <h2>Edit Role Admin Employee </h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content form-horizontal form-label-left">

              {{ Form::model($admin, array('method' => 'PATCH', 'route' => array('admin.update', $admin->id))) }}

              <div class="item form-group">
                <span class="required">
                  {{ Form::label('name', 'Employee Name', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}*</span>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    {{ Form::text('name',$admin->name,array('class' => 'form-control col-md-7 col-xs-12')) }}
                  </div>
                </div>
                <div class="item form-group">
                  
                    {{ Form::hidden('designation', 'Employee designation', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{ Form::hidden('designation',$admin->designation,array('class' => 'form-control col-md-7 col-xs-12'), ['readonly']) }}
                    </div> 
                  </div>

                  <div class="item form-group">
                    <span class="required">
                      {{ Form::label('DOB', 'Employee Date of Birth', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}*</span>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::date('dob',$admin->DOB,array('class' => 'form-control col-md-7 col-xs-12')) }}
                      </div>
                    </div>

                    <div class="item form-group">
                      <span class="required">
                        {{ Form::label('DOJ', 'Employee Date of Joining', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}*</span>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {{ Form::date('doj',$admin->DOJ,array('class' => 'form-control col-md-7 col-xs-12')) }}
                        </div>
                      </div>

                      <div class="item form-group">
                        <span class="required">
                          {{ Form::label('gross_salary', 'Gross Salary', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}*</span>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            {{ Form::text('gross_salary',$admin->gross_salary,array('class' => 'form-control col-md-7 col-xs-12')) }}
                          </div>
                        </div>
                        
                        <div class="item form-group">
                          <span class="required">
                            {{ Form::label('net_salary', 'Net Salary', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}*</span>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              {{ Form::text('net_salary',$admin->net_salary,array('class' => 'form-control col-md-7 col-xs-12')) }}
                            </div>
                          </div> 
                          
                          <div class="item form-group">
                            <span class="required">
                              {{ Form::label('pf', 'PF', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}*</span>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                {{ Form::text('pf',$admin->pf,array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </div>
                            </div>  
                            
                            <div class="item form-group">
                              <span class="required">
                                {{ Form::label('cl', 'CL', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}*</span>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  {{ Form::text('cl',$admin->cl,array('class' => 'form-control col-md-7 col-xs-12')) }}
                                </div>
                              </div> 
                              
                              <div class="item form-group">
                                <span class="required">
                                  {{ Form::label('salary_date', 'Salary Date', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}*</span>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    {{ Form::date('salary_date',$admin->salary_date,array('class' => 'form-control col-md-7 col-xs-12')) }}
                                  </div>
                                </div>
                                
                                <div class="item form-group">
                                  <span class="required">
                                    {{ Form::label('email', 'Email', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}*</span>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      {{ Form::text('email',$admin->email,array('class' => 'form-control col-md-7 col-xs-12')) }}
                                    </div>
                                  </div>
                                  
                                  <div class="item form-group">
                                    <span class="required">
                                      {{ Form::label('contact_no', 'Contact No.', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}*</span>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        {{ Form::text('contact_no',$admin->contact_no,array('class' => 'form-control col-md-7 col-xs-12')) }}
                                      </div>
                                    </div>
                                    
                                    <div class="item form-group">
                                      <span class="required">
                                        {{ Form::label('address', 'Address', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}*</span>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                          {{ Form::text('address',$admin->address,array('class' => 'form-control col-md-7 col-xs-12')) }}
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