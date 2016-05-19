  @extends('app')


  @section('content')
  <div class="right_col" role="main">

            <div class="">
              <div class="clearfix"></div>

              <div class="row">
                <div class="col-md-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Employee List</h2>
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
                            @foreach ($employees as $employee)
                            <tr>
                              <td>#</td>
                              <td>
                                {{ $employee->name }}
                              </td>
                              <td>
                               {{ $employee->designation }}
                              </td>
                              <td class="project_progress">
                               {{ $employee->email }}
                              </td>
                              <td>
                                {{ $employee->contact_no  }}
                              </td>
                              <td>
                                {{ link_to_route('employee.show', 'View', array($employee->id), array('class' => 'btn btn-primary btn-xs fa fa-folder')) }}
                                {{ link_to_route('employee.edit', 'Edit', array($employee->id), array('class' => 'btn btn-info btn-xs fa fa-pencil')) }}
                                {{ Form::open(array('method' => 'DELETE', 'route' => array('employee.destroy', $employee->id))) }}                       
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