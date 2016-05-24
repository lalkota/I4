      @extends('app')


      @section('content')
        <div class="right_col" role="main">
          @if (count($errors) > 0)
        <div class="alert alert-danger">
          <strong>Whoops!</strong> There were some problems with your input.<br><br>
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <div class="">

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Send Notification</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br>

                  {{ Form::open(array('method' => 'POST', 'route' => array('notification.store'), 'class'=>'form-horizontal form-label-left' )) }}

                    

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">TO</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                     @if ($employees->count())
                     <select class="select2_notification form-control select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true" name="to[]">
                      <option value="">Select Members</option>
                      @foreach ($employees as $employee)
                      <option value="{{ $employee->id }}"> {{ $employee->name }}</option>
                      @endforeach
                      @endif
                    </select>
                  </div>
                </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title 
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                       <input type="text" name="title" class="form-control" placeholder="Title">
                     </div>
                   </div>

                   <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="desc" >Description
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <textarea class="form-control" rows="3" name="desc" placeholder="Notification Description"></textarea>
                    </div>
                  </div>
                  
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" class="btn btn-primary">Cancel</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                 
                 {{ Form::close() }}

                 <script src="{{ URL::asset('jquery/dist/jquery.min.js') }}"></script>
                  <!-- Select2 -->
                  <script>
                    $(document).ready(function() {
                      $(".select2_single").select2({
                        placeholder: "Select a state",
                        allowClear: true
                      });
                      $(".select2_group").select2({});
                      $(".select2_notification").select2({
                        allowClear: true
                      });
                    });
                  </script>
                  <!-- /Select2 -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection