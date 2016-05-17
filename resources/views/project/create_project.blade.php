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
        <h2>Create Project</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <form  method="POST" action="http://localhost/I4/public/project" class="form-horizontal form-label-left" novalidate>

         
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Project Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Project Name" required="required" type="text">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Project Description <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea id="textarea" required="required" name="textarea" class="form-control col-md-7 col-xs-12"></textarea>
            </div>
          </div>
          <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Start Date <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="birthday" type="date" class="date-picker form-control col-md-7 col-xs-12" required="required">
                </div>
              </div>
          <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">End Date <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="birthday" type="date" class="date-picker form-control col-md-7 col-xs-12" required="required">
                </div>
              </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Manager</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
             @if ($employees->count())
              <select class="form-control">
               @foreach ($employees as $employee)
                <option>Select Project Manager</option>
                <option> {{ $employee->name }}</option>
                @endforeach
                @endif
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Client</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="form-control">
                <option>Select client</option>
                <option>Option one</option>
                <option>Option two</option>
                <option>Option three</option>
                <option>Option four</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Add Member</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="select2_multiple form-control select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true">
                <option>Select Employee</option>
                <option>Option one</option>
                <option>Option two</option>
                <option>Option three</option>
                <option>Option four</option>
                <option>Option five</option>
                <option>Option six</option>
              </select>
            </div>
          </div>
          
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <button type="submit" class="btn btn-primary">Cancel</button>
              <button id="send" type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>
          <script src="{{ URL::asset('jquery/dist/jquery.min.js') }}"></script>
          <!-- Select2 -->
            <script>
              $(document).ready(function() {
              $(".select2_single").select2({
              placeholder: "Select a state",
              allowClear: true
              });
              $(".select2_group").select2({});
              $(".select2_multiple").select2({
              maximumSelectionLength: 6,
              placeholder: "With Max Selection limit 6",
              allowClear: true
              });
              });
            </script>
          <!-- /Select2 -->
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>

@endsection