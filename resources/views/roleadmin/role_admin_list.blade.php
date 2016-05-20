  @extends('app')


  @section('content')
  <div class="right_col" role="main">

            <div class="">
              <div class="clearfix"></div>

              <div class="row">
                <div class="col-md-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Role Admin List</h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      @if ($employees->count())
                        <!-- start project list -->
                        <table class="table table-striped projects">
                          <thead>
                            <tr>
                              <th style="width: 1%">#</th>
                              <th>Name</th>
                              <th>Designation</th>
                              <th>Email id</th>
                              <th>Contact No.</th>
                              <th>#Edit</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($employees as $admin)
                            <tr>
                              <td>#</td>
                              <td>
                                {{ $admin->name }}
                              </td>
                              <td>
                               {{ $admin->designation }}
                              </td>
                              <td class="project_progress">
                               {{ $admin->email }}
                              </td>
                              <td>
                                {{ $admin->contact_no  }}
                              </td>
                              <td>
                                {{ link_to_route('admin.show', 'View', array($admin->id), array('class' => 'btn btn-primary btn-xs fa fa-folder')) }}
                                {{ link_to_route('admin.edit', 'Edit', array($admin->id), array('class' => 'btn btn-info btn-xs fa fa-pencil')) }}
                                {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.destroy', $admin->id))) }}                       
                                {{ Form::submit('Delete', array('class' => 'btn btn-danger btn-xs fa fa-trash-o')) }}
                                {{ Form::close() }}
                              </td>
                            </tr>
                            @endforeach                          
                          </tbody>
                        </table>
                        <!-- end project list -->
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          @endsection