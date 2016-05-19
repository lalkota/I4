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

                      <p>Simple table with project listing with progress and editing options</p>

                      <!-- start project list -->
                      <table class="table table-striped projects">
                        <thead>
                          <tr>
                            <th style="width: 1%">#</th>
                            <th style="width: 20%">Project Name</th>
                            <th>Team Members</th>
                            <th>Project Progress</th>
                            <th>Status</th>
                            <th style="width: 20%">#Edit</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>#</td>
                            <td>
                              <a>Pesamakini Backend UI</a>
                              <br />
                              <small>Created 01.01.2015</small>
                            </td>
                            <td>
                            
                              <ul class="list-inline">
                                <li>
                                  <img src="{{ URL::asset('images/user.png') }}" class="avatar" alt="Avatar">
                                </li>
                                <li>
                                  <img src="{{ URL::asset('images/user.png') }}" class="avatar" alt="Avatar">
                                </li>
                                <li>
                                  <img src="{{ URL::asset('images/user.png') }}" class="avatar" alt="Avatar">
                                </li>
                                <li>
                                  <img src="{{ URL::asset('images/user.png') }}" class="avatar" alt="Avatar">
                                </li>
                              </ul>
                            </td>
                            <td class="project_progress">
                              <div class="progress progress_sm">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="57"></div>
                              </div>
                              <small>57% Complete</small>
                            </td>
                            <td>
                              <button type="button" class="btn btn-success btn-xs">Success</button>
                            </td>
                            <td>
                              <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                              <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                              <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                            </td>
                          </tr>
                          <tr>
                            <td>#</td>
                            <td>
                              <a>Pesamakini Backend UI</a>
                              <br />
                              <small>Created 01.01.2015</small>
                            </td>
                            <td>
                              <ul class="list-inline">
                                <li>
                                  <img src="{{ URL::asset('images/user.png') }}" class="avatar" alt="Avatar">
                                </li>
                                <li>
                                  <img src="{{ URL::asset('images/user.png') }}" class="avatar" alt="Avatar">
                                </li>
                              </ul>
                            </td>
                            <td class="project_progress">
                              <div class="progress progress_sm">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="47"></div>
                              </div>
                              <small>47% Complete</small>
                            </td>
                            <td>
                              <button type="button" class="btn btn-success btn-xs">Success</button>
                            </td>
                            <td>
                              <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                              <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                              <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                            </td>
                          </tr>
                          
                        </tbody>
                      </table>
                      <!-- end project list -->

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          @endsection