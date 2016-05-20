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
                  <h2>Edit Project </h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content form-horizontal form-label-left">

                {{ Form::model($project, array('method' => 'PATCH', 'route' => array('project.update', $project->id))) }}

                  <div class="item form-group">
                    <span class="required">
                      {{ Form::label('name', 'Project Name', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}*</span>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{ Form::text('name',$project->name,array('class' => 'form-control col-md-7 col-xs-12')) }}
                    </div>
                  </div>
                  
                  <div class="item form-group">
                    <span class="required">
                      {{ Form::label('desc', 'Project Description', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}*</span>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{ Form::text('desc',$project->desc,array('class' => 'form-control col-md-7 col-xs-12')) }}
                    </div>
                  </div>  

                  <div class="item form-group">
                    <span class="required">
                      {{ Form::label('start_date', 'Start Date', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}*</span>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{ Form::date('start_date',$project->start_date,array('class' => 'form-control col-md-7 col-xs-12')) }}
                    </div>
                  </div>

                  <div class="item form-group">
                    <span class="required">
                      {{ Form::label('end_date', 'End Date', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}*</span>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{ Form::date('end_date',$project->end_date,array('class' => 'form-control col-md-7 col-xs-12')) }}
                    </div>
                  </div>

                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Manager</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                       @if ($managers->count())
                       <select class="form-control" name="project_manager">
                        <option value="">Select Project Manager</option>
                        @foreach ($managers as $manager)
                        @if($project->project_manager==$manager->id)
                        <option value="{{ $manager->id }}" selected="selected"> {{ $manager->name }}</option>
                        @else
                        <option value="{{ $manager->id }}"> {{ $manager->name }}</option>
                        @endif
                        @endforeach
                        @endif
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Client</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      @if ($clients->count())
                      <select class="form-control" name="client">
                        <option value="">Select Client</option>
                        @foreach ($clients as $client)
                          @if($project->client==$client->id)
                            <option value="{{ $client->id }}"  selected="selected"> {{ $client->name }}</option>
                          @else
                            <option value="{{ $client->id }}"> {{ $client->name }}</option>
                          @endif
                          
                        @endforeach
                        @endif
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Add Member</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                     @if ($employees->count())
                     <select class="select2_multiple form-control select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true" name="employee[]">
                      <option value="">Select Members</option>

                      @foreach ($employees as $employee)
                        <?php $selected = ''; ?>
                        @foreach ($team as $emp)
                          @if($emp->employee_id == $employee->id)
                          <?php $selected = 'selected="selected"'; ?>
                          @break
                          @endif
                        @endforeach  
                      <option value="{{ $employee->id }}" {{ $selected }}> {{ $employee->name }}</option>
                      @endforeach
                      @endif
                    </select>
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
                    <script src="{{ URL::asset('jquery/dist/jquery.min.js') }}"></script>
                      <script>
                    $(document).ready(function() {
                      $(".select2_single").select2({
                        placeholder: "Select a state",
                        allowClear: true
                      });
                      $(".select2_group").select2({});
                      $(".select2_multiple").select2({
                        maximumSelectionLength: 6,
                        placeholder: "With Max Selection limit 6",
                        allowClear: true
                      });
                    });
                  </script>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        @endsection