  @extends('admin.layouts.Master')
  @section('css')
    <style type="text/css">
      .form-inline{
            display: block;
      }
      div.dataTables_wrapper div.dataTables_length select {
    
    display: inline-block;
    padding-left: 20px;
}


div.dataTables_wrapper div.dataTables_filter label{
  text-align: right;
}

@media (min-width: 576px){
.form-inline label {
    display:block;
    justify-content: center;
    margin-bottom: 0;
}

}
    </style>
  @endsection
  @section('RightSide')
          <div class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header card-header-primary">
                      <h4 class="card-title ">Board Course Manage
                        <span><a href="{{route('admin/Course/Add')}}" class="pull-right" style="color:white; font-size: 15px;"><i class="fa fa-plus"></i> Add New</a>
                      </h4>
                      <p class="card-category"> Here is a board Course for this table
                        </span>
                      </p>
                    </div>
                    <div class="card-body">

                      <div class="table-responsive">
                        <div id="example_wrapper" class="e">
                        <table class="table" id="example">
                          <thead class=" text-primary">
                            <th>
                              ID
                            </th>
                            <th>
                              Name
                            </th>
                            <th>
                              Country
                            </th>
                            <th>
                              City
                            </th>
                          </thead>

                          <tbody>
                            <tr>
                              <td>
                                1
                              </td>
                              <td>
                                Dakota Rice
                              </td>
                              <td>
                                <form>
                                  <button class="btn btn-info">
                                    <i class="fa fa-pencil"></i>
                                  </button>
                                </form>
                              </td>
                              <td>
                                <form>
                                  <button class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                  </button>
                                </form>
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
          </div>
  @endsection