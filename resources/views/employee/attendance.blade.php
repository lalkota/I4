    @extends('app')


    @section('content')
    <div class="right_col" role="main">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Attendance <small>update</small></h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
          <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

            <div class="row">
              <div class="col-sm-12">
              
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
                      <td class="sorting_1">{{ $employee->name }}</td>
                      <td> <p>
                        Present
                        <input type="radio" class="flat" name="gender1" id="genderM" value="M" checked="" required /> Absent
                        <input type="radio" class="flat" name="gender1" id="genderF" value="F" />
                      </p></td>
                    </tr>
                     @endforeach  
                  </tbody>
                </table>
                @endif
              </div>
            </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
              <button type="submit" class="btn btn-primary">Cancel</button>
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>
        </div>

      </div>
    </div>

    @endsection