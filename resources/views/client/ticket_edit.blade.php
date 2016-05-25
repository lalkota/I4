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

            {{ Form::model($tickets, array('method' => 'PATCH', 'route' => array('ticket.update', $tickets->id))) }}

              <div class="item form-group">

                {{ Form::label('title', 'Title', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                <div class="col-md-6 col-sm-6 col-xs-12">
                  {{ Form::text('title',$tickets->title,array('class' => 'form-control col-md-7 col-xs-12')) }}
                </div>
              </div>
              <div class="item form-group">
                {{ Form::label('desc', 'Discription', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                <div class="col-md-6 col-sm-6 col-xs-12">
                  {{ Form::textarea('desc',$tickets->desc,array('class' => 'form-control col-md-7 col-xs-12')) }}
                </div> 
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                <div class="col-md-6 col-sm-6 col-xs-12">

                 <select class="form-control" name="status">
                  @if($tickets->status!=' ')
                  <option value="{{ $tickets->status }}" selected="selected"> {{ $tickets->status }}</option>
                  <option value="Open">Open</option>
                  <option value="In Progress">In Progress</option>
                  <option value="Closed">Closed</option>
                  @endif
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Priority</label>
              <div class="col-md-6 col-sm-6 col-xs-12">

               <select class="form-control" name="priority">
                @if($tickets->priority!=' ')
                <option value="{{ $tickets->priority }}" selected="selected"> {{ $tickets->priority }}</option>
                <option value="High">High</option>
                <option value="Medium">Medium</option>
                <option value="Low">Low</option>
                @endif
              </select>
            </div>
          </div>

          <div class="item form-group">
            {{ Form::label('user_id', 'User Name', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
             <select class="form-control" name="user_id">
                <option value="{{ $tickets->user_id }}" selected="selected"> {{ App\Employee::find($tickets->user_id)->name  }}</option>
              </select>
           </div>
         </div>

         <div class="item form-group">
          {{ Form::label('project_id', 'Project Name', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
          <div class="col-md-6 col-sm-6 col-xs-12">
            <select class="form-control" name="project_id">
                <option value="{{ $tickets->project_id }}" selected="selected"> {{App\Project::find($tickets->project_id)->name  }}</option>
              </select>
          </div>
        </div>

        <div class="item form-group">
          {{ Form::label('attached_path', 'Uploaded File', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
          <div class="col-md-6 col-sm-6 col-xs-12">

           <a href="{{ URL::asset( $tickets->attached_path) }}" target="_blank" >{{ URL::asset( $tickets->attached_path) }} click here</a>


         </div>
       </div>


       <div class="ln_solid"></div>
       <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
          <button type="submit" class="btn btn-primary">Cancel</button>
          <button id="send" type="submit" class="btn btn-success">Update</button>
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