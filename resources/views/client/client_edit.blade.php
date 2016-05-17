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
              <h2>Edit Client</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a>
                    </li>
                    <li><a href="#">Settings 2</a>
                    </li>
                  </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content form-horizontal form-label-left">

              {{ Form::model($client, array('method' => 'PATCH', 'route' => array('client.update', $client->id))) }}

              <div class="item form-group">
                <span class="required">
                  {{ Form::label('name', 'Client Name', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}*</span>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    {{ Form::text('name',$client->name,array('class' => 'form-control col-md-7 col-xs-12')) }}
                  </div>
                </div>
                <div class="item form-group">
                  <span class="required">
                    {{ Form::label('company_name', 'Company Name', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}*</span>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{ Form::text('company_name',$client->company_name,array('class' => 'form-control col-md-7 col-xs-12')) }}
                    </div> 
                </div>

                <div class="item form-group">
                  <span class="required">
                    {{ Form::label('email', 'Email', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}*</span>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{ Form::text('email',$client->email,array('class' => 'form-control col-md-7 col-xs-12')) }}
                    </div>
                </div>

                <div class="item form-group">
                  <span class="required">
                    {{ Form::label('contact_no', 'Contact No.', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}*</span>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{ Form::text('contact_no',$client->contact_no,array('class' => 'form-control col-md-7 col-xs-12')) }}
                    </div>
                  </div>

                  <div class="item form-group">
                    <span class="required">
                      {{ Form::label('address', 'Address', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}*</span>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::text('address',$client->address,array('class' => 'form-control col-md-7 col-xs-12')) }}
                      </div>
                  </div>
                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                      <button type="submit" class="btn btn-primary">Cancel</button>
                      <button id="send" type="submit" class="btn btn-success">Update</button>
                    </div>
                  </div>
                {{ Form::close() }}
              </div>
            </div>
          </div>
         </div>
      </div>
    </div>

  @endsection