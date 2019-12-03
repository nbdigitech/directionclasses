<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{url('/')}}/public/admin/assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Direction Classes
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="{{route('admin')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('admin/Category')}}">
              <i class="material-icons">content_paste</i>
              <p>Board Category</p>
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="{{route('admin/SubCategory')}}">
              <i class="material-icons">content_paste</i>
              <p>Board Sub Category</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('admin/TestSeries')}}">
              <i class="material-icons">library_books</i>
              <p>Test Series</p>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('admin/SpecimenPaper')}}">
              <i class="material-icons">content_paste</i>
              <p>Specimen Paper</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('admin/CrashCourse')}}">
              <i class="material-icons">library_books</i>
              <p>Crash Course</p>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="{{route('admin/PastPaper')}}">
              <i class="material-icons">library_books</i>
              <p>Past Paper</p>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="{{route('admin/TopicWisePaper')}}">
              <i class="material-icons">library_books</i>
              <p>Topic Wise Paper</p>
            </a>
          </li>
          <!-- <li class="nav-item ">
            <a class="nav-link" href="./icons.html">
              <i class="material-icons">bubble_chart</i>
              <p>Test Series</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <i class="material-icons">location_ons</i>
              <p>Specimen Paper</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./notifications.html">
              <i class="material-icons">notifications</i>
              <p>Cash Course</p>
            </a>
          </li> -->

          <li class="nav-item ">
            <a class="nav-link" href="">
              <i class="fa fa-sign-out"></i>
              <p>Logout</p>
            </a>
          </li>
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>