@include('admin.layouts.Header')
<body class="">
  <div class="wrapper ">
    @include('admin.layouts.LeftSide')
    <div class="main-panel">
      <!-- Navbar -->
      @include('admin.layouts.TopMenu')
      <!-- End Navbar -->
     @yield('RightSide')

     @include('admin.layouts.Footer')
      