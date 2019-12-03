@extends('Admin.layouts.Master')

@section('css')
  <style type="text/css">
    #BoardId-error{
      margin-top: 40px;
    }
  </style>
@endsection

@section('MainSection')
<div class="content">
<div class="content">
<div class="container-fluid">
  <div class="row">
        <div class="col-md-12">
              <form id="TypeValidation" class="form-horizontal" action="@if(isset($edit->id)) {{route('Admin/Category/Update')}} @else {{route('Admin/Category/Store')}} @endif" method="post">
                {{csrf_field()}}
                <input type="hidden" name="Update" value="@if(isset($edit->id)) {{$edit->id}} @endif">
                <div class="card ">
                  <div class="card-header card-header-rose card-header-text">
                    <div class="card-text" style="width: 100%;">
                      <h4 class="card-title">@if(isset($edit->id)) Update Category @else Create Category @endif</h4>
                    </div>
                  </div>
                  <div class="card-body ">
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Select Board</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <select name="BoardId" class="form-control" required="true" style="padding-left:20px;">
                            <option value="">Select Board</option>
                            @foreach($board_id as $row)
                            <option value="{{$row->id}}" @if(isset($edit->id)) @if($edit->BoardId==$row->id)  selected @endif  @endif>{{$row->Name}}</option>
                            @endforeach
                          </select>
                        </div>
                        </div>
                        <div class="col-sm-3"></div>

                      <label class="col-sm-2 col-form-label">Category Name</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input class="form-control" type="text" name="Name" required="true" value="@if(isset($edit->id)) {{$edit->Name}} @endif"/>
                        </div>
                      </div>
                  <div class="card-footer ml-auto mr-auto">
                    <button type="submit" class="btn btn-rose">
                      @if(isset($edit->id)) Update @else Submit @endif
                    </button>
                  </div>    
                    </div>
                </div>
              </form>
            </div>
          </div>


        <div class="row" style="width: 100%; margin-left: 0px;">
             <div class="col-md-12">
 
              <div class="card">
                <div class="card-header card-header-rose card-header-icon">
                  <div class="card-text" style="width: 100%;">
                      <h4 class="card-title">Manage Category</h4>
                    </div>
                </div>
                <div class="card-body">
      @if(session()->has('success'))
    <div class="alert alert-success">
        {{session()->get('success')}}
        <a href="" class="pull-right"></a>
        <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
    </div>
    @endif

       @if(session()->has('deleted'))
    <div class="alert alert-success">
        {{session()->get('deleted')}}
        <a href="" class="pull-right"></a>
        <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
    </div>
    @endif

    
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="text-center" style="font-weight: bold;">#</th>
                          <th style="font-weight: bold;">Category Name</th>
                          <th style="font-weight: bold;">Board Name</th>
                          <th class="text-right" style="font-weight: bold;">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      @php $i = 1; @endphp
                      @foreach($category as $row)
                        <tr>
                          <td class="text-center">{{$i++}}</td>
                          <td>{{$row->Name}}</td>
                          <td>{{$row->BoardName}}</td>
                          <form action="{{route('Admin/Category/EditSession')}}" method="post">
                          <td class="td-actions text-right">
                            {{csrf_field()}}
                            <input type="hidden" name="Edit" value="{{$row->id}}">
                            <button type="submit" rel="tooltip" class="btn btn-success" style="background-color: #E93F7A; padding:10px; padding-left: 20px; padding-right: 20px;">
                              Edit
                            </button>
                            </form>

                            <button type="button" onclick="delete_function('{{$row->id}}')" class="btn btn-success" data-target="#myModal" data-toggle="modal" style="background-color: #E93F7A; padding:10px; padding-left: 15px; padding-right: 15px;" disabled>
                              Delete
                            </button>
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


<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header"  style="background-color: #E73774; color:white;">
        <h4 class="modal-title" style="margin-top: -10px; margin-bottom: 10px;">Are You Sure Delete It ?</h4>
        <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" style="text-align: center; padding-top: 50px;">
        If you are delete it. you can't get it after
      </div>

      <!-- Modal footer -->
      <div class="row" style="padding-bottom: 50px;">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
          <form action="{{route('Admin/Category/Delete')}}" method="post">
            {{csrf_field()}}
            <input type="hidden" id="delete_id" name="Delete">
            
          <button type="submit" class="btn btn-success" style="color:white; margin-right: 50px; width: 100%;">Yes</button>
          </form>
        </div>
        <div class="col-sm-4">
          <button type="button" class="btn btn-danger" data-dismiss="modal" style="color:white; width: 100%; background-color: #E73774;">No</button>
        </div>
        <div class="col-sm-2"></div>
      </div>
        
        
      

    </div>
  </div>
</div>
@endsection

@section('js')
  <script type="text/javascript" src="{{url('/')}}/public/assets/js/validate.min.js"></script>

  <script>
    function setFormValidation(id) {
      $(id).validate({
        highlight: function(element) {
          $(element).closest('.form-group').removeClass('has-success').addClass('has-danger');
          $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
        },
        success: function(element) {
          $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');
          $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
        },
        errorPlacement: function(error, element) {
          $(element).closest('.form-group').append(error);
        },
      });
    }

    $(document).ready(function() {
      setFormValidation('#RegisterValidation');
      setFormValidation('#TypeValidation');
      setFormValidation('#LoginValidation');
      setFormValidation('#RangeValidation');
    });
  </script>


  <script type="text/javascript">
    function delete_function(id){
    document.getElementById("delete_id").value = id;
  }
  </script>
@endsection