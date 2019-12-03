 @extends('admin.layouts.Master')
 @section('css')
 <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/admin/assets/css/fileupload.css">
 @endsection
 @section('RightSide')
 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title" style="color:white;">Board Course
                    <span class="pull-right" style="color:white; font-size: 15px;"> Home / <a href="{{redirect()->back()->getTargetUrl() }}" > Board Course</a>
                  </h4>
                  <p class="card-category">Board Course Create Here</p>
                </div>
                <div class="card-body">
                  <form action="{{route('admin/CrashCourse/Store')}}">
                    {{csrf_field()}}
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <select class="form-control" name="BoardName">
                            <option value="">Select Board Category</option>
                            @foreach($cat as $cats)
                              <option value="$cats->id">{{$cats->BoardName}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <select class="form-control" name="SubjectName">
                            <option value="">Select Subject</option>
                            @foreach($subcat as $subcats)
                              <option value="$subcats->id">{{$subcats->SubjectName}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <select class="form-control" name="Class">
                            <option>Select Class</option>
                            <option value="Seven">Seven</option>
                            <option value="Eight">Eight</option>
                            <option value="Nine">Nine</option>
                            <option value="Ten">Ten</option>
                            <option value="Eleven">Eleven</option>
                            <option value="Twelve">Twelve</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Course Title</label>
                          <input type="text" class="form-control" name="Title">
                        </div>
                      </div> 
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Course Description</label>
                          <textarea class="form-control" name="Description"></textarea>
                        </div>
                      </div> 
                    </div>


<div class="row">
<div class="col-md-6">
<div class="file-upload">
  <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>
  <div class="image-upload-wrap">
    <input class="file-upload-input" type='file' name="Image" onchange="readURL(this);" accept="image/*" />
    <div class="drag-text">
      <h3>Drag and drop a file or select add Image</h3>
    </div>
  </div>
  <div class="file-upload-content">
    <img class="file-upload-image" src="#" alt="your image" />
    <div class="image-title-wrap">
      <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
    </div>
  </div>
</div>
</div> 

<div class="col-md-6">
<div class="file-uploadd">
  <button class="file-upload-btnn" type="button" onclick="$('.file-upload-inputt').trigger( 'click' )">Add PDF</button>
  <div class="image-upload-wrapp">
    <input class="file-upload-inputt" name="PDF" type='file' onchange="readUR(this);" accept="image/*" />
    <div class="drag-text">
      <h3>Drag and drop a file or select add PDF</h3>
    </div>
  </div>
  <div class="file-upload-contentt">
    <img class="file-upload-imagee" src="#" alt="your image" />
    <div class="image-title-wrapp">
      <button type="button" onclick="removeUploadd()" class="remove-image">Remove <span class="image-titlee">Uploaded PDF</span></button>
    </div>
  </div>
</div>
</div> 
</div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          
                          <select class="form-control" name="Year">
                            <option value="">Select Year</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                          </select>
                        </div>
                      </div> 

                      <div class="col-md-6">
                        <div class="form-group" style="margin-top: 32px;">
                          <label class="bmd-label-floating">Date</label>

                          <input type="text" class="form-control" name="Date">
                        </div>
                      </div> 
                    </div>

                    
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
@endsection

@section('js')
  <script type="text/javascript" src="{{url('/')}}/public/admin/assets/js/fileupload.js"></script>
  @endsection