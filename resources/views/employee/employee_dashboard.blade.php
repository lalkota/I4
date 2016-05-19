  @extends('app')


  @section('content')
  <div class="right_col" role="main">
            <div class="">
            <div class="clearfix"></div>
              <div class="row">
                <div class="col-md-8">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Attendance <small>Red section indicates absent days </small></h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                      <div id='calendar'></div>

                    </div>
                  </div>
                </div>
                  <!-- Start to do list -->
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Employee Statics</h2>
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">

                        <div class="">
                          <ul class="to_do">
                            <li>
                              <p>
                                <div style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> Number of Leaves Taken: </p>
                            </li>
                            <li>
                              <p>
                                <div style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> Available Leaves :</p>
                            </li>
                            <li>
                              <p>
                                <div style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> PF :</p>
                            </li>
                            <li>
                              <p>
                                <div style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> Allowences :</p>
                            </li>
                            
                          </ul>
                        </div>
                      </div>
                    </div>
                  <!-- End to do list -->
                  
                  
                </div>
              </div>
            </div>
          </div>
          @endsection