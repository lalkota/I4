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