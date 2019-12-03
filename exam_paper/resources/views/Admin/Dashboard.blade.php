@extends('Admin.layouts.Master')

@section('css')

@endsection

@section('MainSection')
<div class="content">
<div class="content">
<div class="container-fluid">
  <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-header card-header-warning card-header-icon">
                                <div class="card-icon">
                                  <i class="material-icons">weekend</i>
                                </div>
                                <p class="card-category">Board </p>
                                <h3 class="card-title">{{$board}}</h3>
                              </div>
                              <div class="card-footer" style="display: block;">
                                <div class="stats">
                                  
                                  <a href="{{route('Admin/Contact')}}" style="display: block;">Click Here Full Details</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-header card-header-rose card-header-icon">
                                <div class="card-icon">
                                  <i class="material-icons">equalizer</i>
                                </div>
                                <p class="card-category">Category </p>
                                <h3 class="card-title">{{$category}}</h3>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                   <a href="{{route('Admin/Category')}}" style="display: block;">Click Here Full Details</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-header card-header-success card-header-icon">
                                <div class="card-icon">
                                  <i class="material-icons">store</i>
                                </div>
                                <p class="card-category">Sub Category</p>
                                <h3 class="card-title">{{$sub_cat}}</h3>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                    <a href="{{route('Admin/SubCategory')}}" style="display: block;">Click Here Full Details</a>
                                </div>
                              </div>
                            </div>
                          </div>


                          <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-header card-header-warning card-header-icon">
                                <div class="card-icon">
                                  <i class="material-icons">weekend</i>
                                </div>
                                <p class="card-category">Products </p>
                                <h3 class="card-title">{{$product}}</h3>
                              </div>
                              <div class="card-footer" style="display: block;">
                                <div class="stats">
                                  
                                  <a href="{{route('Admin/Products')}}" style="display: block;">Click Here Full Details</a>
                                </div>
                              </div>
                            </div>
                          </div>
                         
                        </div>
</div>
</div>
@endsection

@section('js')

@endsection