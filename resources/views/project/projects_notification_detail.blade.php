  @extends('app')


  @section('content')
   
      
  <div class="right_col" role="main">

            <div class="">
              
              <div class="clearfix"></div>

              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Notification</h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                      <form class="form-horizontal form-label-left" novalidate>

                       
                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">From 
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" readonly="readonly" data-validate-words="2" name="name" placeholder="vijay kumar" required="required" type="text">
                          </div>
                        </div>
                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Title 
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="title" required="required" type="text" readonly="readonly">
                          </div>
                        </div>
              <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Description <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea id="textarea" required="required" name="textarea" class="form-control col-md-7 col-xs-12" readonly="readonly"></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-primary">Cancel</button>
                          </div>
                        </div>
              
              
                        
                        <div class="ln_solid"></div>
                        
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endsection