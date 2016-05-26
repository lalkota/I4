@extends('app')
@section('content')
<div class="right_col" role="main">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
    <div class="x_title">
    <h2>Attendance Report <small>list</small></h2>
    <div class="clearfix"></div>
    </div>
    <div class="x_content">
    <div style="margin-bottom:10px;">
      <h2>Current Date :  {{ date('d-m-Y')}}</h2>
    </div>
    <form  method="POST" action="http://localhost/I4/public/attendance/list" class="form-horizontal form-label-left" novalidate>
    <div style="margin-bottom:10px; background-color: #EDEDED; padding:20px; border-radius: 5px;">
    <p><span style="font-size: 10px;color:#73879C;">Please select Employee name, From Date and To Date.</span></p>
    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="from_date">Employee
    </label>
    <div class="col-md-2 col-sm-2 col-xs-12">
    @if ($employees->count())
    <select class="select2_single form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="name">
    <option value="">Select Employee</option>
    @foreach ($employees as $employee)
    <option value="{{ $employee->id }}"> {{ $employee->name }}</option>
    @endforeach
    @endif
    </select>
    </div>
    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="from_date">From Date
    </label>
    <input id="from_date"  class="control-label col-md-2 col-sm-2 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="from_date" placeholder="Employee Name" required="required" type="date">
    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="to_date">To Date
    </label>
    <input id="to_date"  class="control-label col-md-2 col-sm-2 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="to_date"  required="required" type="date">&nbsp;&nbsp;
    <button id="send" type="submit" class="btn btn-success">Submit</button><br />
    </div>
    </form>

    <form  method="POST" action="http://localhost/I4/public/attendance/list_status" class="form-horizontal form-label-left" novalidate>
    <div style="margin-bottom:10px; background-color: #EDEDED; padding:20px; border-radius: 5px;">
    <p><span style="font-size: 10px;color:#73879C;">Please select Attendance Status and Date.</span></p>
    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="from_date">Attendance
    </label>
    <div class="col-md-2 col-sm-2 col-xs-12">
    <select class="form-control" name="attend" class="required">
    <option>Select status</option>
    <option value="1">Present</option>
    <option value="0">Absent</option>
    </select>
    </div>
    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="current_date">Date
    </label>
    <input id="current_date"  class="control-label col-md-2 col-sm-2 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="current_date" required="required" type="date">&nbsp;&nbsp;
    <button id="send" type="submit" class="btn btn-success">Submit</button><br />
    </div>
    </form>

    </div>
    @if ($lists->count())
    <table  class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <thead>
    <tr>
    <th>Employee Name</th>
    <th>Status</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($lists as $list)
    <tr>
    <td> {{ App\Employee::find($list->emp_id)->name }} </td>
    <td>@if($list->attend==1)
      <span>Present</span>
      @else
      <span>Absent !</span>
      @endif 
    </td>
    </tr>
    @endforeach 
    </tbody>
    </table>
    @endif
    </div>
  </div>
</div>
</div>
@endsection