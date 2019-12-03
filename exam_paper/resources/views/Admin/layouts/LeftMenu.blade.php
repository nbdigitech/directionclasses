<div class="sidebar" data-color="rose" data-background-color="black" data-image="{{url('/')}}/public/assets/img/sidebar-1.jpg">

      <div class="logo">
       
        <a href="{{route('Admin/Dashboard')}}" class="simple-text logo-normal">
         <img src="{{url('/')}}/public/assets/images/logo.png" style="margin-left: 80px;">
        </a>
      </div>
      <div class="sidebar-wrapper">
        <div class="user">
          <div class="photo">
            <img src="{{url('/')}}/public/assets/img/faces/admin-image-png-3.png" />
          </div>
          <div class="user-info">
            <a data-toggle="collapse" href="#collapseExample" class="username">
              <span>
                Direction Classes
              </span>
            </a>
            
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item active ">
            <a class="nav-link" href="{{route('Admin/Dashboard')}}">
              <i class="material-icons">dashboard</i>
              <p> Dashboard </p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('Admin/Board')}}">
              <i class="material-icons">apps</i>
              <p> Board </p>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="{{route('Admin/Category')}}">
              <i class="material-icons">apps</i>
              <p> Category </p>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="{{route('Admin/SubCategory')}}">
              <i class="material-icons">apps</i>
              <p> Sub Category </p>
            </a>
          </li>

          

          <li class="nav-item ">
            <a class="nav-link" href="{{route('Admin/Products')}}">
              <i class="material-icons">widgets</i>
              <p> Products </p>
            </a>
          </li>

        </ul>
      </div>
    </div>