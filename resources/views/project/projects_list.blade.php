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
            <!-- start project list -->
              @if ($projects->count())
              <table class="table table-striped projects">
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
                      {{ link_to_route('project.show', 'View', array($project->id), array('class' => 'btn btn-primary fa fa-folder')) }}

                      {{ link_to_route('project.edit', 'Edit', array($project->id), array('class' => 'btn btn-info  fa fa-pencil')) }}

                      {{ Form::open(array('method' => 'DELETE', 'route' => array('project.destroy', $project->id))) }}                       
                      {{ Form::submit('Delete', array('class' => 'btn btn-danger fa fa-trash-o')) }}
                      {{ Form::close() }}
                      
                    </td>
                  </tr>
                  @endforeach 
                </tbody>
              </table>
              {!! $projects->render() !!}
            <!-- end project list -->
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection