 @extends('admin.layouts.Master')
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
                  <form action="{{route('admin/Course/Store')}}">
                    {{csrf_field()}}
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <select class="form-control" name="Category">
                            <option>Select Board Category</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group" style="margin-top: 32px;">
                          <label class="bmd-label-floating">Enter Board SubCategory</label>
                          <input type="text" class="form-control" name="SubCategory">
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