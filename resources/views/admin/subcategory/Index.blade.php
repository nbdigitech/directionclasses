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

div.dataTables_wrapper div.dataTables_paginate{
  display: none;
}

div.dataTables_wrapper div.dataTables_info{
  display: none;
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
                      <h4 class="card-title ">Board SubCategory Manage
                        <span><a href="{{route('admin/SubCategory/Add')}}" class="pull-right btn btn-info" style="color:white; font-size: 15px;"><i class="fa fa-plus"></i> Add New</a>
                      </h4>
                      <p class="card-category"> Here is a board SubCategory for this table
                        </span>
                      </p>
                    </div>
                    <div class="card-body">
                      @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{session()->get('success')}}
                        </div>
                      @endif
                      <div class="table-responsive">
                        <div id="example_wrapper" class="e">
                        <table class="table" id="example">
                          <thead class=" text-primary">
                            <th>
                              Sr No.
                            </th>
                            <th>
                              Subject Name
                            </th>
                            
                            <th>
                              Edit
                            </th>
                            <th>Delete</th>
                          </thead>

                          <tbody>
                            @php $i = 1; @endphp
                            @foreach($result as $row)
                            <tr>
                              <td>
                                {{$i++}}
                              </td>
                              <td>
                                {{$row->SubjectName}}
                              </td>
                              <td>
                                <form>
                                  <button class="btn btn-info" action="#">
                                    <i class="fa fa-pencil"></i>
                                  </button>
                                </form>
                              </td>
                              <td>
                                <form action="{{url('admin/SubCategory/Delete')}}" method="post">
                                  {{csrf_field()}}
                                  <input type="hidden" name="Delete" value="{{$row->id}}">
                                  <button class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                  </button>
                                </form>
                              </td>
                            </tr>
                        @endforeach
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

  