  @extends('app')


  @section('content')
  <!-- page content -->
    <div class="right_col" role="main">
            <div class="">

              <div class="page-title">
                <div class="title_left">
                  <h3>
                        Check Ticket Status
                        
                    </h3>
                </div>
              </div>

              <div class="clearfix"></div>

              <div class="row">

                

                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Ticket Status </h2>
                      <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                      <div class="table-responsive">
                        <table class="table table-striped jambo_table bulk_action">
                          <thead>
                            <tr class="headings">
                              <th class="column-title">Ticket No </th>
                              <th class="column-title">Title</th>
                              <th class="column-title">Ticket Date </th>
                              <th class="column-title">Ticket Status</th>
                              <th class="column-title no-link last"><span class="nobr">Action</span>
                              </th>
                              <th class="bulk-actions" colspan="7">
                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                              </th>
                            </tr>
                          </thead>
                          @if ($tickets->count())
                           @foreach ($tickets as $ticket)
                          <tbody>
                            <tr class="odd pointer">
                              <td class=" ">{{ $ticket->id }}</td>
                              <td>{{ $ticket->title }}</td>
                              <td class=" ">{{ $ticket->created_date }}</td>
                              <td class=" ">{{ $ticket->status }}<i class="success fa fa-long-arrow-up"></i>
                              </td>
                              <td class=" last"> 
                              {{ link_to_route('ticket.show', ' View', array($ticket->id), array('class' => 'btn btn-primary fa fa-folder')) }}
                              {{ link_to_route('ticket.edit', ' Edit', array($ticket->id), array('class' => 'btn btn-info fa fa-pencil')) }}
                              {{ Form::open(array('method' => 'DELETE', 'route' => array('ticket.destroy', $ticket->id))) }}                       
                                {{ Form::submit('Delete', array('class' => 'btn btn-danger fa fa-trash-o')) }}
                                {{ Form::close() }}
                                
                              </td>
                            </tr>
                          </tbody>
                           @endforeach  
                            @endif
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>     
  @endsection