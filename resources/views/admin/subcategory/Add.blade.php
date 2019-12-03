 @extends('admin.layouts.Master')
 @section('RightSide')
 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title" style="color:white;">Board SubCategory
                    <span class="pull-right" style="color:white; font-size: 15px;"> Home / <a href="{{route('admin/SubCategory') }}" > Course</a>
                  </h4>
                  <p class="card-category">Board SubCategory Create Here</p>
                </div>
                <div class="card-body">
                  @if(session()->has('success'))
                    <div class="alert alert-success">
                      {{session()->get('success')}}
                    </div>
                  @endif
                  <form action="{{route('admin/SubCategory/Store')}}" method="post">
                    {{csrf_field()}}
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <select class="form-control" name="BoardName">
                            <option value="">Select Board Category</option>
                            @foreach($board as $result)
                              <option value="{{$result->id}}" @if(old('BoardName') == $result->id)  selected @endif>{{$result->BoardName}}</option>
                            @endforeach
                          </select>
                          @if($errors->has('BoardName'))
                            <p class="text-danger" style="font-weight: bold;">{{$errors->first('BoardName')}}</p>
                          @endif
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group" style="margin-top: 32px;">
                          <label class="bmd-label-floating">Enter Board SubCategory</label>
                          <input type="text" class="form-control" name="SubjectName" value="{{old('SubjectName')}}">
                          @if($errors->has('SubjectName'))
                            <p class="text-danger" style="font-weight: bold">
                              {{$errors->first('SubjectName')}}
                            </p>
                          @endif
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