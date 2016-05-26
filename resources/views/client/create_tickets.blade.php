  @extends('app')


  @section('content')<!-- page content -->
  <div class="right_col" role="main">
   @section('content')<!-- page content -->
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

      <div class="page-title">
        <div class="title_left">
          <h3>Create Ticket</h3>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">

            <div class="x_content">
              <br />
              {{ Form::open(array('method' => 'POST', 'files'=>true , 'route' => array('ticket.store'), 'class'=>'form-horizontal form-label-left' )) }}

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="title" name="title" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Description<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">

                  <textarea id="desc" required="required" name="desc" class="form-control col-md-6 col-xs-12" style="margin: 0px; width: 627px; height: 184px;"></textarea>

                </div>
              </div>
              <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                 <div class="form-group">
                  <select class="form-control" name="status">
                    <option>Choose option</option>
                    <option value="Open">Open</option>
                    <option value="In Progress">In Progress</option>
                    <option value="Closed">Closed</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Priority</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="form-group">
                <select class="form-control" name="priority">
                  <option>Choose option</option>
                  <option value="High">High</option>
                  <option value="Medium">Medium</option>
                  <option value="Low">Low</option>
                </select>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Assign To</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
             <div class="form-group">
             @if ($projects->count())
               <select class="select2_single form-control" tabindex="-1" name="user_id">
                <option>Selct Project Manager</option>
                @foreach ($projects as $project)
                <option value="{{ $project->project_manager }}"> {{ App\Employee::find($project->project_manager)->name }}</option>
                @endforeach
                @endif
              </select>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Project</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
           <div class="form-group">
             @if ($projects->count())
             <select class="select2_single form-control" tabindex="-1" name="project_id">
               <option>Selct Projects </option>
               @foreach ($projects as $project)
               <option value="{{ $project->client }}"> {{ App\Project::find($project->client)->name }}</option>
               @endforeach
               @endif
             </select>
           </div>
         </div>
       </div>

       <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Choose File<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="file" class="date-picker form-control col-md-7 col-xs-12" name="attached_path" required="required" >
        </div>
      </div>
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
          <button type="submit" class="btn btn-primary">Cancel</button>
          <button type="submit" class="btn btn-success">Create</button>
        </div>
      </div>
      <script src="{{ URL::asset('select2/dist/js/select2.full.min.js') }}"></script>
      <script>
        $(document).ready(function() {
          $(".select2_single").select2({

            allowClear: true
          });
          $(".select2_group").select2({});
        });
      </script>
      {{ Form::close() }}

    </div>
  </div>
</div>
</div>
</div>
</div>
@endsection