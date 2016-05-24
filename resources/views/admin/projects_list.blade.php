  @extends('app')

  @section('content')
  <div class="right_col" role="main">
    <div class="">
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Projects Details</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
            <form  method="POST" action="http://localhost/I4/public/admin/show_by_date" class="form-horizontal form-label-left" novalidate>
            <div style="float:right;margin-bottom:10px;">
            <label class="control-label col-md-2 col-sm-1 col-xs-12" for="from_date">From Date<span class="required">*</span>
                    </label>
                    <input id="from_date"  class="control-label col-md-3 col-sm-3 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="from_date" placeholder="Employee Name" required="required" type="date">
                     <label class="control-label col-md-2 col-sm-1 col-xs-12" for="to_date">To Date<span class="required">*</span>
                    </label>
                    <input id="to_date"  class="control-label col-md-3 col-sm-3 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="to_date" placeholder="Employee Name" required="required" type="date">
                    &nbsp;&nbsp;
                    <button id="send" type="submit" class="btn btn-success">Submit</button><br />
                    </form>

                    </div>

             @if ($projects->count())
             <table  class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Project Name</th>
                  <th>Project Manager</th>
                  <th>Client name</th>
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th>#Edit</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($projects as $project)
                <tr>
                  <td>{{ $project->name }}</td>
                  <td>{{ $project->project_manager }}</td>
                  <td>{{ $project->client }}</td> 
                  <td>{{ $project->start_date }}</td>
                  <td>{{ $project->end_date }}</td>
                  <td>
                    {{ link_to_route('project.show', ' View', array($project->id), array('class' => 'btn btn-primary fa fa-folder')) }}
                  </td>
                </tr>
                @endforeach 
              </tbody>
            </table>
            @endif

          </div>
        </div>
      </div>
    </div>
  </div>
</div>        
@endsection