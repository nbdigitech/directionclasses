<header id="header" class="header">
    <div class="header-top bg-light sm-text-center style-bordered">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="widget">
              <!--<i class="fa fa-clock-o text-theme-colored"></i> Opening Hours:  Mon - Tues : 6.00 am - 10.00 pm-->
            </div>
          </div>
          <div class="col-md-7">
            <div class="widget">
              <ul class="list-inline pull-right flip sm-pull-none sm-text-center list-bordered">
                <li class="bg-theme-colored text-white mb-xs-5"><i class="fa fa-phone"></i> Call Us : <a class="text-white" href="#">+91 9981008000, 07712583955</a></li>
                <li class="bg-theme-colored3 text-white mb-xs-5"><i class="fa fa-envelope-o"></i> <a class="text-white" href="#"> counsellor@chanakyacommunitycollege.com</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord orange no-bg"><a class="pull-left flip mb-15" href="{{route('Index')}}" style="margin-top: 10px;"><img src="{{url('/')}}/public/frontend/images/logo.png" alt=""></a>
            <ul class="menuzord-menu">
              <li class="active"><a href="{{route('Index')}}">Home</a>
               </li>

               <li><a><span class="indicator"></span>About</a>
                <ul class="dropdown none" style="right: auto; display: block;">
                  <li><a href="{{route('AboutUs')}}">About Us</a></li>
                  <li><a href="{{route('ChairmanMessage')}}">Chairman's Message</a></li>
                  </li> 
                  </ul> 
               </li>

               <li><a href="{{route('WhyChanakya')}}">Why Chanakya</a>
               </li> 

               
               <li><a href="#">Gallery<span class="indicator"></span></a>
                <ul class="dropdown none" style="right: auto; display: block;">
                  <li><a href="{{route('Gallery/Images')}}">Images</a></li>
                  <li><a href="{{route('Gallery/Videos')}}">Videos</a></li>
                  </li> 
                  </ul> 
              </li>

               <li><a href="{{route('Admission')}}">Admission</a>
               </li>

               <li><a href="{{route('News')}}">Event</a>
               </li>

               <li><a href="{{route('Contact')}}">Contact Us</a>
               </li>
               
                <li><a href="http://chanakyacommunitycollege.com/Index" style="background:#0D5189; color:white;">College</a>
               </li>
          </nav>
        </div>
      </div>
    </div>
  </header>
