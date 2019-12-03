  <!-- Footer -->
  <footer id="footer" class="footer bg-black-111">
    <div class="container pt-70 pb-40">
      <div class="row border-bottom-black">
        <div class="col-sm-6 col-md-4">
          <div class="widget dark">
            <img class="mt-10 mb-20" alt="" src="{{url('/')}}/public/frontend/images/white-logo.png">
            <p>Address :</p>
            <ul class="list-inline mt-5">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-map-marker text-theme-color-2 mr-5"></i> <a class="text-gray" href="#">  
RING ROAD NO 1, NEAR SARONA BRIDGE, TATIBAND,RAIPUR CG 492099</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-2 mr-5"></i> <a class="text-gray" href="#"> 0771-2583935, 99810 08000</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-color-2 mr-5"></i> <a class="text-gray" href="#">  counsellor@chanakyacommunitycollege.com
</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-color-2 mr-5"></i> <a class="text-gray" href="#">Chanakya Community College</a> </li>
            </ul>
          </div>
          <div class="widget dark">
            <h5 class="widget-title mb-10">Connect With Us</h5>
            <ul class="styled-icons icon-dark mt-20">
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".1s" data-wow-offset="10"><a href="#" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s" data-wow-offset="10"><a href="#" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
           
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s" data-wow-offset="10"><a href="#" data-bg-color="#C22E2A"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Latest Event</h5>
            <div class="latest-posts">
            @foreach($footer_news as $row)
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="#" class="post-thumb"><img alt="" src="{{url('/')}}/public/assets/uploads/{{$row->Image}}" width="100px"></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="{{route('News')}}" target="_blank">{{ str_limit($row->Title, 25) }}</a></h5>
                  @if($row->PDF!='')
                  <p class="post-date mb-0 font-12"><a href="{{url('/')}}/public/assets/uploads/{{$row->PDF}}">Download PDF</a></p>
                  @endif
                </div>
              </article>
            @endforeach
            </div>
          </div>
          
        </div>
        <div class="col-sm-6 col-md-3">
          
          <div class="widget dark">
            <h5 class="widget-title">Useful Links</h5>
            <ul class="list-border">
              <li><a href="{{route('AboutUs')}}">About Us</a></li>
              <li><a href="{{route('WhyChanakya')}}">Why Chanakya</a></li>
              <li><a href="{{route('Admission')}}">Admission</a></li>
              <li><a href="{{route('News')}}">Event</a></li>
              <li><a href="#">Policy</a></li>
               
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom bg-black-222">
      <div class="container pt-10 pb-0">
        <div class="row">
          <div class="col-md-12 text-center">
            <p class="font-14 text-black-777 m-0 mb-10">Copyright &copy;2019 Chanakya Academy . All Rights Reserved. Designed By<a href="https://nbdigitech.com"> NBDT</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>