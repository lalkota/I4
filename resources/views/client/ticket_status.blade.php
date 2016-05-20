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

                          <tbody>
                            <tr class="odd pointer">
                              <td class=" ">121000039</td>
                              <td>title</td>
                              <td class=" ">May 23, 2014 11:30:12 PM</td>
                              <td class=" ">121000208 <i class="success fa fa-long-arrow-up"></i>
                              </td>
                              <td class=" last"><a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                              </td>
                            </tr>
                            <tr class="even pointer">
                              <td class=" ">121000038</td>
                              <td>title</td>
                              <td class=" ">May 24, 2014 10:55:33 PM</td>
                              <td class=" ">121000203 <i class="success fa fa-long-arrow-up"></i>
                              </td>
                              <td class=" last"><a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                              </td>
                            </tr>
                            
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>     
  @endsection