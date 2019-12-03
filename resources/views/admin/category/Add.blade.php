 @extends('admin.layouts.Master')
 @section('RightSide')
 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title" style="color:white;">Board Category
                    <span class="pull-right" style="color:white; font-size: 15px;"> Home / <a href="{{route('admin/Category') }}" > Board Category</a>
                  </h4>
                  <p class="card-category">Board Category Create Here</p>
                </div>
                <div class="card-body">
                  @if(session()->has('success'))
                    <div class="alert alert-success">
                      {{session()->get('success')}}
                    </div>
                  @endif
                  <form action="@if(isset($edit->id)) {{route('admin/Category/Update')}} @else {{route('admin/Category/Store')}} @endif" method="post">
                    {{csrf_field()}}
                    @if(isset($edit->id))
                    <input type="hidden" name="Update" value="{{$edit->id}}">
                    @endif
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Enter Board Category</label>
                          <input type="text" class="form-control" name="BoardName" value="@if(isset($edit->id)) {{$edit->BoardName}} @endif {{ old('BoardName') }}">
                          @if($errors->has('BoardName'))
                            <p class="text-danger" style="font-weight: bold;">{{$errors->first('BoardName')}}</p>
                          @endif
                        </div>
                      </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary pull-right">
                      @if(isset($edit->id))
                      Update
                      @else
                        Submit
                      @endif
                    </button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
@endsection