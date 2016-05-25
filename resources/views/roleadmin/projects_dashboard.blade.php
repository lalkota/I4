  @extends('app')


  @section('content')
  <div class="right_col" role="main">

          <br />
          <div class="">

            <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-check-square-o"></i>
                  </div>
                  <div class="count">{{ $count['employees'] }}</div>

                  <h3>Employees </h3>
                  <p>No. Of Employees</p>
                </div>
              </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-check-square-o"></i>
                  </div>
                  <div class="count">{{ $count['clients'] }}</div>

                  <h3>Clients </h3>
                  <p>No. Of Clients</p>
                </div>
              </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-check-square-o"></i>
                  </div>
                  <div class="count">{{ $count['completed'] }}</div>

                  <h3>Projects</h3>
                  <p>Completed</p>
                </div>
              </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-check-square-o"></i>
                  </div>
                  <div class="count">{{ $count['ongoing'] }}</div>

                  <h3>Projects</h3>
                  <p>Ongoining</p>
                </div>
              </div>
        
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Completed Projects <small>Lists</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    @foreach ($completed_projects as $completed_project)
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">April</p>
                        <p class="day">23</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">{{ $completed_project->name }}</a>
                        <p>{{ $completed_project->desc }}</p>
                      </div>
                    </article>
                    @endforeach
                    {!! $completed_projects->render() !!}
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ongoing Projects <small>Lists</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    @foreach ($ongoing_projects as $ongoing_project)
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">April</p>
                        <p class="day">23</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">{{ $ongoing_project->name }}</a>
                        <p>{{ $ongoing_project->desc }}</p>
                      </div>
                    </article>
                    @endforeach
                    {!! $ongoing_projects->render() !!}
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Employees <small>List</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    @foreach ($employees as $employee)
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">April</p>
                        <p class="day">23</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">{{ $employee->name }}</a>
                        
                        <p>@if($employee->designation==3)
                          <span>Project Manager</span>
                          @else
                          <span>Employee</span>
                          @endif

                          </p>
                      </div>
                    </article>
                    @endforeach
                    {!! $employees->render() !!}
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Clients <small>List</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    @foreach ($clients as $client)
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">April</p>
                        <p class="day">23</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">{{ $client->name }}</a>
                        
                      </div>
                    </article>
                    @endforeach
                    {!! $clients->render() !!}
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

          @endsection