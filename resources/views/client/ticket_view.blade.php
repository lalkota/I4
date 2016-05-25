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
                      <h2>View Ticket</h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content form-horizontal form-label-left">

                     <form  method="GET" action="http://localhost/I4/public/client/ticket" class="form-horizontal form-label-left" novalidate>

                        <div class="item form-group">
                          
                          {{ Form::label('name', 'Title', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          {{ Form::label('name',$tickets->title,array('class' => 'form-control col-md-7 col-xs-12')) }}
                          </div>
                        </div>
                        <div class="item form-group">
                          {{ Form::label('company_name', 'Discription', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          {{ Form::textarea('company_name',$tickets->desc,array('class' => 'form-control col-md-7 col-xs-12', 'readonly')) }}
                          </div> 
                        </div>

                        
                        <div class="item form-group">
                          {{ Form::label('email', 'Status', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          {{ Form::label('email',$tickets->status,array('class' => 'form-control col-md-7 col-xs-12')) }}
                          </div>
                        </div>
                        
                        <div class="item form-group">
                          {{ Form::label('contact_no', 'Priority', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          {{ Form::label('contact_no',$tickets->priority,array('class' => 'form-control col-md-7 col-xs-12')) }}
                          </div>
                        </div>
                        
                        <div class="item form-group">
                          {{ Form::label('address', 'User Name', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                         {{ Form::label('address',App\Employee::find($tickets->user_id)->name ,array('class' => 'form-control col-md-7 col-xs-12')) }}
                          </div>
                        </div>

                        <div class="item form-group">
                          {{ Form::label('address', 'Project Name', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          {{ Form::label('address', App\Project::find($tickets->project_id)->name,array('class' => 'form-control col-md-7 col-xs-12')) }}
                          </div>
                        </div>

                        <div class="item form-group">
                          {{ Form::label('address', 'Uploaded File', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          
                           <a href="{{ URL::asset( $tickets->attached_path) }}" target="_blank" >{{ URL::asset( $tickets->attached_path) }} click here</a>
                          

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