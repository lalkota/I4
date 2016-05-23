  @extends('app')


  @section('content')
  <div class="right_col" role="main">

    <div class="">
      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Client List</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              @if ($clients->count())
              <!-- start project list -->
              <table class="table table-striped projects">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Company Name</th>
                    <th>Email id</th>
                    <th>Contact No.</th>
                    <th>#Edit</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($clients as $client)
                  <tr>
                    <td>#</td>
                    <td>
                      {{ $client->name }}
                    </td>
                    <td>
                     {{ $client->company_name }}
                   </td>
                   <td class="project_progress">
                     {{ $client->email }}
                   </td>
                   <td>
                    {{ $client->contact_no  }}
                  </td>
                  <td>
                    {{ link_to_route('client.show', ' View', array($client->id), array('class' => 'btn btn-primary fa fa-folder')) }}
                    {{ link_to_route('client.edit', ' Edit', array($client->id), array('class' => 'btn btn-info fa fa-pencil')) }}
                    {{ Form::open(array('method' => 'DELETE', 'route' => array('client.destroy', $client->id))) }}                       
                    {{ Form::submit('Delete', array('class' => 'btn btn-danger fa fa-trash-o')) }}
                    {{ Form::close() }}
                  </td>
                </tr>
                @endforeach                          
              </tbody>
            </table>
            {!! $clients->render() !!}
            <!-- end project list -->
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  @endsection