  @extends('app')


  @section('content')<!-- page content -->
         <div class="right_col" role="main">
            <div class="">

              <div class="page-title">
                <div class="title_left">
                  <h3>Absence Request</h3>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <br />
                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Employee Name <span class="required">*</span>
                          </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Employee Nunmber <span class="required">*</span>
                          </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="number" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Designation</label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Manager</label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Type of Absence</label>
                          <div class="col-md-1 col-sm-1 col-xs-12">
                           <input type="checkbox" value="">Sick
                          </div>
              <div class="col-md-1 col-sm-1 col-xs-12">
                           <input type="checkbox" value="">Vacation
                          </div>
              <div class="col-md-2 col-sm-1 col-xs-12" style="margin-right: -67px;" >
                           <input type="checkbox" value="">Bereavement
                          </div>
              <div class="col-md-2 col-sm-1 col-xs-12"  >
                           <input type="checkbox" value="">Time off without pay
                          </div>
              <div class="col-md-2 col-sm-1 col-xs-12"  >
                           <input type="checkbox" value="">Military
                          </div>
              
                        </div>
              <div class="form-group">
                          <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12"></label>
              <div class="col-md-1 col-sm-1 col-xs-12">
                           <input type="checkbox" value="">Military
                          </div>
              <div class="col-md-2 col-sm-1 col-xs-12" style="margin-right: -67px;">
                           <input type="checkbox" value="">Jury Duty
                          </div>
              <div class="col-md-2 col-sm-1 col-xs-12">
                           <input type="checkbox" value="">Maternity/paternity
                          </div>
              <div class="col-md-1 col-sm-1 col-xs-12">
                           <input type="checkbox" value="">Other
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">From Date</label>
                          <div class="col-md-2 col-sm-1 col-xs-12">
                           <input type="date" value="">
                          </div>
              <label class="control-label col-md-1 col-sm-1 col-xs-12">To Date</label>
                          <div class="col-md-2 col-sm-1 col-xs-12">
                           <input type="date" value="">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Reason For Absence<span class="required">*</span>
                          </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                           
                            <textarea id="textarea" required="required" name="textarea" class="form-control col-md-7 col-xs-12" style="margin: 0px; width: 627px; height: 184px;"></textarea>
                          
                        </div>
              </div>
                    <div class="form-group">
                          <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Date</label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <input id="middle-name" class="form-control col-md-7 col-xs-12" type="date" name="middle-name">
                          </div>
                        </div>      
                          

                        
                        <div class="form-group">
                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-primary">Cancel</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                          </div>
                        </div>
                        <div class="ln_solid"></div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  @endsection