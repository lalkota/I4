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
            <h2>View Notification Detail</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content form-horizontal form-label-left">
            <form  method="GET" action="http://localhost/I4/public/notification/index" class="form-horizontal form-label-left" novalidate>

            <div class="item form-group">
              {{ Form::label('from', 'From : ', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
              <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::label('name',App\Employee::find($notification->notification->from)->name,array('class' => 'form-control col-md-7 col-xs-12')) }}
              </div>
            </div>

            <div class="item form-group">
              {{ Form::label('from', 'Title : ', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
              <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::label('title',$notification->notification->title,array('class' => 'form-control col-md-7 col-xs-12')) }}
              </div>
            </div>
            
            <div class="item form-group">
              {{ Form::label('desc', 'Description : ', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
              <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::textarea('desc',$notification->notification->desc,array('class' => 'form-control col-md-7 col-xs-12','readonly')) }}
              </div>
            </div>

            <div class="item form-group">
              {{ Form::label('created_date', 'Date : ', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
              <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::label('created_date',$notification->notification->created_date,array('class' => 'form-control col-md-7 col-xs-12')) }}
              </div>
            </div>

            <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                  <button type="submit" class="btn btn-primary">Cancel</button>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection