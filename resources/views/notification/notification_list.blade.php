  @extends('app')


  @section('content')
  <div class="right_col" role="main">

    <div class="">
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Notification Details</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
            <!-- start project list -->
              <table class="table table-striped projects">
                <thead>
                  <tr>
                    <th>From</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>#Edit</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>kumar</td>
                    <td>meassage title</td>
                    <td>2016-2-25</td>
                    <td>view</td>
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