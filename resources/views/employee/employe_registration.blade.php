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
                <h2>Create Employee </h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">

                {{ Form::open(array('method' => 'POST', 'route' => array('employee.store'), 'class'=>'form-horizontal form-label-left' )) }}
                <!--<form  method="POST" action="http://localhost/I4/public/employee" class="form-horizontal form-label-left" novalidate> -->


                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Employee Name <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Employee Name" required="required" type="text">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Employee Designation <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                     @if ($roles->count())
                     <select class="form-control" name="designation" >
                       <option value="">Select Designation</option>
                       @foreach ($roles as $role)
                       <option value={{ $role->id }}> {{ $role->title }}</option>
                       @endforeach
                       @endif
                     </select>
                   </div>
                 </div>
                 <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="dob" name="dob" type="date" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Joining <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="doj" name="doj" type="date" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gross_salary">Gross Salry <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="number" id="gross_salary" name="gross_salary" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="net_salary">Net Salry <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="number" id="net_salary" name="net_salary" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pf">PF Amount<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="number" id="pf" name="pf" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cl">No. of CL/year<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="number" id="cl" name="cl" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Salary Date<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="salary_date" type="date" name="salary_date" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email" >Email <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contact_no">Contact No. <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="tel" id="contact_no" name="contact_no" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">Address <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea id="address" required="required" name="address" class="form-control col-md-7 col-xs-12"></textarea>
                  </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-6 col-md-offset-3">
                    <button type="submit" class="btn btn-primary">Cancel</button>
                    <button id="send" type="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>
              <!--</form> -->
              {{ Form::close() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection