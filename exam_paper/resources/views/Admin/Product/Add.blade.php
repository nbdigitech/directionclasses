@extends('Admin.layouts.Master')

@section('css')
<style type="text/css">
  #CategoryId-error{
    margin-top: 40px;
  }

  #SubCategoryId-error{
    margin-top: 40px;
  }

  #BoardId-error{
    margin-top: 40px;
  }

  #PremOrFreeId-error{
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
              <form id="TypeValidation" class="form-horizontal" action="@if(isset($edit->id)) {{route('Admin/Products/Update')}} @else {{route('Admin/Products/Store')}} @endif" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="Update" value="@if(isset($edit->id)) {{$edit->id}} @endif">
                <div class="card ">
                  <div class="card-header card-header-primary card-header-icon" style="margin-top: -15px;">
                  <div style="background-color: #E93F7A; padding: 10px; padding-left: 16px; padding-top:16px; border-radius: 3px;" style="width: 100%;">
                    <h4>
                      @if(isset($edit->id)) Update Product @else Create Product @endif
                      <a href="{{route('Admin/Products')}}" class="btn btn-success pull-right" style="margin-top: -7px; background-color: white; color:#E93F7A;">Manage</a></h4>
                  </div>
                  
                </div>
                  <div class="card-body" >
                    <div class="row" style="margin-bottom: 30px;">
                        <label class="col-sm-2 col-form-label">Select Board :</label>
                      <div class="col-sm-4">
                        <div class="form-group">
                            <select name="BoardId" class="form-control board_sel" required="true" style="padding-left:20px;">
                            <option value="">Select Board</option>
                            @foreach($board as $row)
                            <option value="{{$row->id}}" @if(isset($edit->id)) @if($edit->BoardId==$row->id)  selected @endif  @endif>{{$row->Name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>

                      <label class="col-sm-2 col-form-label">Category :</label>
                      <div class="col-sm-4">
                        <div class="form-group">
                            <select name="CategoryId" class="form-control cat_sel" id="category_show" required="true" style="padding-left:20px;">
                            <option value="">Select Category</option>
                            
                          </select>
                        </div>
                      </div>
                  </div>


                  <div class="row" style="margin-bottom: 30px;">
                    
                       <label class="col-sm-2 col-form-label">Sub Category :</label>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <select name="SubCategoryId" class="form-control" id="sub_category_show" required="true" style="padding-left:20px;">
                            <option value="">Select SubCategory</option>
                          
                          </select>
                      </div>
                    </div>


                    <label class="col-sm-2 col-form-label">Premium or Free :</label>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <select name="PremOrFree" class="form-control" required="true" style="padding-left:20px;">
                            <option value="">Select Pro Or Free</option>
                            <option value="1" @if(isset($edit->id)) @if($edit->PremOrFree==1) selected  @endif @endif>Premium</option>
                            <option value="0"  @if(isset($edit->id)) @if($edit->PremOrFree==0) selected  @endif @endif>Free</option>
                          </select>
                      </div>
                    </div>
                  </div>


                     <div class="row" style="margin-bottom: 30px;">
                      <label class="col-sm-2 col-form-label">Product Title:</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <input type="text" name="Title" class="form-control" required="true" value="@if(isset($edit->id)) {{$edit->Title}} @endif">
                        </div>
                      </div>
                    </div>

                    <div class="row" style="margin-bottom: 30px;">
                      <label class="col-sm-2 col-form-label">Description:</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <textarea class="form-control" required="true" name="Description">@if(isset($edit->id)) {{$edit->Description}} @endif</textarea>
                        </div>
                      </div>
                    </div>

                  <div class="row">
                    <label class="col-sm-2 col-form-label">Image:</label>
                    <div class="col-md-4 col-sm-4">
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail"  style="height: 165px;">
                          <img src="@if(isset($edit->id)) {{url('/')}}/public/assets/uploads/{{$edit->Image}} @else {{url('/')}}/public/assets/img/image_placeholder.jpg @endif" alt="..." height="165px">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                        <div>
                          <span class="btn btn-rose btn-round btn-file">
                            <span class="fileinput-new">Upload Image</span>
                            <span class="fileinput-exists">Change Image</span>
                            <input type="file" name="Image" accept="image/jpeg, image/jpg, image/png, image/gif" @if(!isset($edit->id)) required="true" @endif>
                          </span>
                          <p>Upload Only Image Formate </p>
                          <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                      </div>
                    </div>




                    <label class="col-sm-2 col-form-label">PDF:</label>
                    <div class="col-md-4 col-sm-4">
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail" style="height: 165px;">
                          <embed src="@if(isset($edit->id)) {{url('/')}}/public/assets/uploads/{{$edit->PDF}} @else {{url('/')}}/public/assets/img/image_placeholder.jpg @endif" alt="..." height="200px">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                        <div>
                          <span class="btn btn-rose btn-round btn-file">
                            <span class="fileinput-new">Upload PDF</span>
                            <span class="fileinput-exists">Change PDF</span>
                            <input type="file" name="PDF" accept="application/pdf">
                          </span>
                          <p>Upload Only PDF Formate </p>
                          <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                      </div>
                    </div>
                    </div>

                     <div class="row" style="margin-bottom: 30px;">
                      <label class="col-sm-2 col-form-label">Prise :</label>
                      <div class="col-sm-4">
                        <div class="form-group">
                           <input type="text" required name="Prise" value="@if(isset($edit->id)) {{$edit->Prise}} @endif" class="form-control">
                        </div>
                      </div>


                       <label class="col-sm-2 col-form-label">Status :</label>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <select name="Status" class="form-control" required="true" style="padding-left:20px;">
                            
                            <option value="1"  @if(isset($edit->id)) @if($edit->Status==1) selected  @endif @endif>Active</option>
                            <option value="0"  @if(isset($edit->id)) @if($edit->Status==0) selected  @endif @endif>InActive</option>
                          </select>
                      </div>
                    </div>
                  </div>
                    <div class="card-footer ml-auto mr-auto">
                    <button type="submit" style="width: 100%;" class="btn btn-large btn-rose">
                      @if(isset($edit->id)) Update @else Submit @endif
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
  
 <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc"></script>
  
  <script type="text/javascript">
    tinymce.init({
  selector: 'textarea',
  height: 100,
  theme: 'modern',
  
  
  
  autoresize_bottom_margin: 0,
  image_advtab: true,
  image_caption: true,
  image_list: [
    {title: 'Dog', value: 'mydog.jpg'},
    {title: 'Cat', value: 'mycat.gif'}
  ],
  font_formats: 'Aileron=aileron, sans-serif;Helvetica=helvetica, arial;Lato=lato, sans-serif;Lobster=lobster, chicago, serif;Noto Serif=noto serif, serif;Permanent Marker=permanent marker, sans-serif;Raleway=raleway, sans-serif;Roboto=roboto, sans-serif;Source Code Pro=source code pro, monospace',
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_style: 'body {margin:25px}',
  content_css: [
    'https://fonts.googleapis.com/css?family=Lato|Lobster|Noto+Serif|Permanent+Marker|Raleway|Roboto|Source+Code+Pro',
    '//www.tiny.cloud/css/codepen.min.css'
  ]
 });

  </script>

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
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    $(document).ready(function(){
      $(".board_sel").on('change',function(){
        var id = $(this).val();
        $.ajax({
          url:'{{route('show_category')}}',
          data:{board_id:id},
          type:'post',
          success:function(data){
          $("#category_show").empty();
          $("#category_show").append(data);
        },


        }

        );
      });
    });
  </script>


  <script type="text/javascript">
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    $(document).ready(function(){
      $(".cat_sel").on('change',function(){
        var id = $(this).val();
        $.ajax({
          url:'{{route('show_sub_category')}}',
          data:{cat_id:id},
          type:'post',
          success:function(data){
            $("#sub_category_show").empty();
          $("#sub_category_show").append(data);
        },
        

        }

        );
      });
    });
  </script>
@endsection