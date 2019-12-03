@extends('Admin.layouts.Master')

@section('css')
<style type="text/css">
  #Category-error{
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
              <form id="TypeValidation" class="form-horizontal" action="@if(isset($edit->id)) {{route('Admin/Image/Update')}} @else {{route('Admin/Image/Store')}} @endif" method="post" enctype="multipart/form-data">

                {{csrf_field()}}
                <input type="hidden" name="Update" value="@if(isset($edit->id)) {{$edit->id}} @endif">
                <div class="card ">
                  <div class="card-header card-header-primary card-header-icon" style="margin-top: -15px;">
                  <div style="background-color: #E93F7A; padding: 10px; padding-left: 16px; padding-top:16px; border-radius: 3px;" style="width: 100%;">
                    <h4>@if(isset($edit->id)) Update Image Gallery @else Create Image Gallery @endif
                      <a href="{{route('Admin/Image')}}" class="btn btn-success pull-right" style="margin-top: -7px; background-color: white; color:#E93F7A;">Manage</a></h4>
                  </div>
                  
                </div>
                  <div class="card-body ">
                    <div class="row" style="margin-bottom: 30px;">
                      <label class="col-sm-2 col-form-label">Category Name:</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <select class="form-control" name="Category" required="true" required>
                            <option value="">Select Category</option>
                            @foreach($category as $row)
                              <option value="{{$row->id}}" @if(isset($edit->id)) @if($edit->Category==$row->id) selected @endif @endif>{{$row->Name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>

                     <div class="row" style="margin-bottom: 30px;">
                      <label class="col-sm-2 col-form-label">Gallery Title:</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <input type="text" name="Title" class="form-control" required="true" value="@if(isset($edit->id)) {{$edit->Title}} @endif">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <label class="col-sm-2 col-form-label" style="margin-top: 40px;">Gallery Image:</label>
                      <div class="col-md-10 col-sm-10">
                      <div class="fileinput text-center fileinput-exists" data-provides="fileinput">
                        <div class="fileinput-new thumbnail">
                          <img src="{{url('/')}}/public/assets/img/image_placeholder.jpg" alt="...">
                        </div>
                        
                        <div>

                          <span class="btn btn-rose btn-round btn-file" style="margin-top: -50px;">
                            <span class="fileinput-new">Select image</span>

                            <span class="fileinput-exists">Upload</span>
                            <input type="hidden" name="Image"><input type="file" @if(!isset($edit->id)) required="true" @endif name="Image">

                          <div class="ripple-container"></div></span>

                          <div class="fileinput-preview fileinput-exists thumbnail" style=""><img src="@if(isset($edit->id)) {{url('/')}}/public/assets/uploads/{{$edit->Image}} @else {{url('/')}}/public/assets/img/image_placeholder.jpg @endif"></div>
                        
                        </div>
                      </div>
                    </div>
                    </div>
                    <div class="card-footer ml-auto mr-auto">
                    <button type="submit" style="width: 100%;" class="btn btn-large btn-rose">
                      @if(isset($edit->id))
                    Update
                    @else
                    Submit
                    @endif
                  </button>
                  </div>    
                </div>
              </form>
            </div>
          </div>
</div>
</div>
@endsection

@section('js')
  

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
@endsection