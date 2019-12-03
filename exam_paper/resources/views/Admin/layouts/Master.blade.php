@include('Admin.layouts.Header')
</head>

<body class="">
  <div class="wrapper">
    @include('Admin.layouts.LeftMenu')
    <div class="main-panel">
      <!-- Navbar -->
      @include('Admin.layouts.TopMenu')
      <!-- End Navbar -->
   @yield('MainSection')

</div>
</div>
@include('Admin.layouts.Javascript')
</body>

</html>