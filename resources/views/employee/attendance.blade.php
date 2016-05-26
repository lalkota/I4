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
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
    <h2>Attendance <small>update</small></h2>
    <div class="clearfix"></div>
    </div>
    <div class="x_content">
    {{ Form::open(array('method' => 'POST', 'route' => array('attendance.store'), 'class'=>'form-horizontal form-label-left' )) }}
    <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
      <div class="row">
        <div class="col-sm-12">
          @if ($attendance->count() == 0)
          @if ($employees->count())
          <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
          <thead>
          <tr role="row">
          <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 160px;">Employee Name</th>
          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 261px;">Status</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($employees as $employee)
          <tr role="row" class="odd">
          <td class="sorting_1">{{ $employee->name }}  </td>
          <td><p>Present<input type="radio" class="flat" name="emp_id[{{ $employee->id }}]" id="P{{ $employee->id }}" value="1" checked required /> Absent
          <input type="radio" class="flat" name="emp_id[{{ $employee->id }}]" id="A{{ $employee->id }}" value="0" /></p>
          </td>
          </tr>
          @endforeach  
          </tbody>
          </table>
          @endif
        </div>
        
        @else
        <div class="col-sm-12">
          @if ($attendance->count())
          <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
          <thead>
          <tr role="row">
          <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 160px;">Employee Name</th>
          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 261px;">Status</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($attendance as $attendance)
          <tr role="row" class="odd">
          <td class="sorting_1">{{ App\Employee::find($attendance->emp_id)->name }} </td>
          <td>
            <p>Present @if($attendance->attend == 1) <input type="radio" class="flat" name="emp_id[{{ $attendance->emp_id }}]" id="P{{ $attendance->attend }}" value="1" checked required /> 
            @else
            <input type="radio" class="flat" name="emp_id[{{ $attendance->emp_id }}]" id="P{{ $attendance->attend }}" value="1" /> 
            @endif
             Absent @if($attendance->attend == 0)
          <input type="radio" class="flat" name="emp_id[{{ $attendance->emp_id }}]" id="A{{ $attendance->attend }}" value="0"  checked required /> 
          @else
          <input type="radio" class="flat" name="emp_id[{{ $attendance->emp_id }}]" id="A{{ $attendance->attend }}" value="0"  /></p>
          @endif
          </td>
          </tr>
          @endforeach  
          </tbody>
          </table>
          @endif
          </div>
        
        @endif
      </div>
    </div>
    </div>
    <div class="form-group">
      <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
        <button type="submit" class="btn btn-primary">Cancel</button>
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
    {{ Form::close() }}
  </div>
</div>
</div>
@endsection