  @extends('app')


  @section('content')
  <div class="right_col" role="main">

    <div class="">
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Notification Details</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
            <!-- start project list -->
            @if ($notifications->count())
              <table class="table table-striped projects">
                <thead>
                  <tr>
                    <th>From</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>#Edit</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($notifications as $notification)
                  <tr>
                    <td>{{ App\Employee::find($notification->notification->from)->name }}</td>
                    <td>{{ $notification->notification->title }}</td>
                    <td><p> {{  str_limit($notification->notification->desc, 50, "...") }} </p></td>
                    <td>{{ $notification->notification->created_date }}</td>
                    <td>{{ link_to_route('notification.show', ' View', array($notification->id), array('class' => 'btn btn-primary fa fa-folder')) }}</td>
                  </tr>
                @endforeach 
                </tbody>
              </table>
              {!! $notifications->render() !!}
            <!-- end project list -->
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection