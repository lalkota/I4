    @extends('app')


    @section('content')
    <div class="right_col" role="main">

      <div class="">
        <div class="clearfix"></div>

        <div class="row">
          <div class="col-md-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Notification Pannel</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">

                <!-- start project list -->
                <table class="table table-striped projects">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>From</th>
                      <th>Title</th>
                      <th>View</th>
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
                        <P>Vijay Kumar</P>
                      </td>
                      
                      
                      <td>
                        <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
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
                        <P>Vijay Kumar</P>
                      </td>
                      
                      
                      <td>
                        <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
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