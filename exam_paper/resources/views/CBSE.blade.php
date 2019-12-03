<!DOCTYPE html>
<html amp>
<head>
  <title>Direction Classes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/frontend/css/style.css">
  <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/frontend/css/docs.theme.min.css">
  <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/frontend/css/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/frontend/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
  .owl-theme .owl-dots .owl-dot{
    display: none;
  }

  .tab_menu{
    padding:10px;
    border:1px solid #e6e6e6;
  }

  .tab_menu a{
    text-decoration: none;
   
    color:white;
  }

  .tab_menu img{
    width: 30%;
  }

  .pull-right{
    margin-top: -40px;
    margin-right: 10px;

  }

  .owl-theme h6{
    margin-top: 20px;
    font-size: 14px;
    margin-left: 20px;
    width:150px;
  }

  .owl-carousel .item img{
    height: 350px;
    border-radius: 10px;
  }

  .owl-carousel .item{
    border-radius: 10px;
    background: #e6e6e6;
    padding-bottom:20px;

  }

  .breadcrumb{
    margin-bottom: 50px;
  }

  #left_menu{
    
  }

  .owl-carousel .owl-nav button.owl-next, .owl-carousel .owl-nav button.owl-prev, .owl-carousel button.owl-dot{
    margin-top: 50px;
  }

  .owl-carousel .owl-nav button.owl-next, .owl-carousel .owl-nav button.owl-prev, .owl-carousel:hover{
    background: #e6e6e6;
  }

  #tab_row{
    margin-top: -40px;
  }

  #select_cat{
    margin-top: -20px;
  }

  #tab_img{
    width: 30%;
  }

  #left_menu_mobile{
    display: none;
  }

  #select_cat{
    font-size: 16px; margin-left: 50px; padding-top: 30px;
  }

  #menu_row{
    margin-left: 50px; margin-right: 70px;
  }

  #carousel_col{
    padding-left: 80px;
  }

  @media(max-width: 768px){
    #carousel_col{
      padding-left: 20px;
    }

    .owl-carousel .item img{
      height: 250px;
      border-radius: 10px;
    }

    #left_menu_mobile{
      display: block;

    }

     .owl-carousel .item{
    padding-bottom:50px;

  }

    #menu_row{
      margin-left: 0px; margin-right: 0px;
    }

    #left_menu_mobile ul{
      list-style-type: none;
      margin-left: 10px;
      margin-top: -30px;
      padding-bottom: 30px;
    }

    #left_menu_mobile ul li{
      float: left;
      font-weight: bold;
      padding:5px;
      padding-left: 10px;
      padding-right: 10px;
    }

    #left_menu_mobile ul li a{
      text-decoration: none;
      color:#2773BD;
      font-size: 12px;
    }



    #left_menu{
      display: none;
    }

    .tab{
      height: 50px;
      line-height: 30px;

    }

    .tab_menu img{
    width: 80%;
    margin-top: 10px;
  }

    #select_cat{
      font-size: 12px; margin-left: 20px; font-weight: bold; padding-top: 0px; padding-bottom: 40px;
      margin-top: 20px;

    }

    #tab_img{
      width: 70%
    }


    .sidebar-nav .navbar .navbar-collapse {
      padding: 0;
      max-height: none;
    }
    .sidebar-nav .navbar ul {
      float: none;
      display: block;
    }
    .sidebar-nav .navbar li {
      float: none;
      display: block;
    }
    .sidebar-nav .navbar li a {
      padding-top: 12px;
      padding-bottom: 12px;
    }

    #tab_row{
      margin-right: 50px;
      margin-left: -50px;
      margin-top: -90px;
    }

    #tab_row #last_tab_col{

    }

    .btn-primary{
      margin-top: 0px;
      float: left;
      margin-left: 20px;
    }

    .owl-theme h6{
    margin-top: 20px;
    font-size: 14px;
    margin-left: 20px;
    width:100%;
  }

  }


  @media(max-width: 400px){
    .owl-carousel .item img{
      height: 170px;
      border-radius: 10px;

    }

     .owl-theme h6{
    font-size: 12px;
  }



    #left_menu_mobile ul li{
      float: left;
      font-weight: bold;
      padding:5px;
      padding-left: 7px;
      padding-right: 7px;
    }

  .btn-primary{
    font-size: 11px;
  }

  .owl-carousel .owl-nav button.owl-next, .owl-carousel .owl-nav button.owl-prev, .owl-carousel{
    display: none;

  }


}


</style>
</head>
<body>
  <center><img src="{{url('/')}}/public/frontend/images/logo.png"></center><br>  
  <!-- <ul class="tab-list">

    <li class="tab is-active" style="font-weight: bold; font-size: 20px;"><img src="{{url('/')}}/public/frontend/images/1.png" id="tab_img"></li>
    <li class="tab "><img src="{{url('/')}}/public/frontend/images/1.png" id="tab_img"></li>
    <li class="tab"><img src="{{url('/')}}/public/frontend/images/3.png" id="tab_img"></li>
  </ul> -->
    <div class="row">
    
    <div class="col-md-4 col-sm-4 col-4 tab_menu" style=" color:black;">
      <a href="{{route('Homes')}}" style="line-height: 50px; color: black;">
      <center>All Boards</center>
      <a href="#">
    </div>

     <div class="col-md-4 col-sm-4 col-4 tab_menu" style="background: #2773BD;">
        <form action="{{route('IGCSESession')}}" method="post">
           <input type="hidden" name="CBSE" value="4">
      <button type="submit" style="background: none; border:none; width: 100%;">
      <center><img src="{{url('/')}}/public/frontend/images/1.png" style="display: block;"></center>
     </a>
   </button>
 </form>
    </div>

     <div class="col-md-4 col-sm-4 col-4 tab_menu">
      <form action="{{route('IGCSESession')}}" method="post">
        <input type="hidden" name="IGCSE" value="5">
      <button type="submit" style="background: none; border:none; width: 100%; -bottom: -50px;">
      <center><img src="{{url('/')}}/public/frontend/images/2.png" style="display: block;"></center>
      </a>
     </button>
     </form>
    </div>
    </a>
  </div>
  <div class="main">
    <!--タブを切り替えて表示するコンテンツ-->
    <div class="content is-show">

      <div class="container-fluid" style="background: white;">
        <h2 id="select_cat">Select Your Category</h2>
       <div class="row" id="tab_row">
        @foreach($data as $row)
        <div class="col-md-4 col-4">
         <div class="box" style="background: url('{{url('/')}}/public/frontend/images/{{$row->Image}}'); background-size: cover;">
          {{$row->Name}}
        </div>
      </div>
      @endforeach
</div>



   <div class="row" id="menu_row">  
     <div class="col-md-3" id="left_menu">
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Board</a></li>
    <li class="breadcrumb-item"><a href="#">Category</a></li>
    <li class="breadcrumb-item active" aria-current="page">Subect</li>
  </ol>
</nav>
       <p>Search By Subject</p>
       <ul>
        <li><a href="#">Maths</a></li>
        <li><a href="#">Physics</a></li>
        <li><a href="#">Chemistry</a></li>
        <li><a href="#">Biology</a></li>
        <li><a href="#">English</a></li>
      </ul>
    </div>   




    <div class="col-md-3" id="left_menu_mobile">

      <ul>
        <li><a href="#">Maths</a></li>
        <li><a href="#">Physics</a></li>
        <li><a href="#">Chemistry</a></li>
        <li><a href="#">Biology</a></li>
        <li><a href="#">English</a></li>

      </ul>
    </div>   

    <div class="col-md-9" id="carousel_col">  
      <i class="fa fa-search" style="position: absolute; margin-top: 15px; margin-left: 20px;"> </i>
      <input type="text" name="" placeholder="Search Formula, Text Paper, Most Likely" class="form-control" style="width: 100%; height: 50px; padding-left: 50px;">
      <br><br>
      <h2 style="font-size: 18px;">Most Likely</h2>
      <hr>
      <div class="owl-carousel owl-theme">
        <div class="item"><img src="{{url('/')}}/public/frontend/images/physics.jpg"> 
          <h6>Physics for the life science</h6>
          <h6>Price : <span style="color:#2773BD; font-weight: bold;">Rs. 200</span></h6>
          <a href="#" class="btn btn-primary pull-right">Purchase</a>
        </div>
        <div class="item"><img src="{{url('/')}}/public/frontend/images/maths.jpg"><h6>Physics for the life science</h6>
          <h6>Price : <span style="color:#2773BD; font-weight: bold;">Rs. 200</span></h6>
          <a href="#" class="btn btn-primary pull-right">Purchase</a></div>

          <div class="item"><img src="{{url('/')}}/public/frontend/images/chemistry.jpg"><h6>Physics for the life science</h6>
            <h6>Price : <span style="color:#2773BD; font-weight: bold;">Rs. 200</span></h6>
            <a href="#" class="btn btn-primary pull-right">Purchase</a></div>

            <div class="item"><img src="{{url('/')}}/public/frontend/images/bilogy.jpg"><h6>Physics for the life science</h6>
              <h6>Price : <span style="color:#2773BD; font-weight: bold;">Rs. 200</span></h6>
              <a href="#" class="btn btn-primary pull-right">Purchase</a></div>
              <div class="item"><img src="{{url('/')}}/public/frontend/images/chemistry.jpg"><h6>Physics for the life science</h6>
                <h6>Price : <span style="color:#2773BD; font-weight: bold;">Rs. 200</span></h6>
                <a href="#" class="btn btn-primary pull-right">Purchase</a></div>

                <div class="item"><img src="{{url('/')}}/public/frontend/images/bilogy.jpg"><h6>Physics for the life science</h6>
                  <a href="#" class="btn btn-primary pull-right">Purchase</a></div>


                </div>




<br><br>
<h2 style="font-size: 18px;">Formula</h2>
      <hr>
                <div class="owl-carousel owl-theme">
                  <div class="item"><img src="{{url('/')}}/public/frontend/images/physics.jpg"> 
                    <h6>Physics for the life science</h6>
                    <h6>Price : <span style="color:#2773BD; font-weight: bold;">Rs. 200</span></h6>
                    <a href="#" class="btn btn-primary pull-right">Purchase</a>
                  </div>
                  <div class="item"><img src="{{url('/')}}/public/frontend/images/maths.jpg"><h6>Physics for the life science</h6>
                    <h6>Price : <span style="color:#2773BD; font-weight: bold;">Rs. 200</span></h6>
                    <a href="#" class="btn btn-primary pull-right">Purchase</a></div>

                    <div class="item"><img src="{{url('/')}}/public/frontend/images/chemistry.jpg"><h6>Physics for the life science</h6>
                      <h6>Price : <span style="color:#2773BD; font-weight: bold;">Rs. 200</span></h6>
                      <a href="#" class="btn btn-primary pull-right">Purchase</a></div>

                      <div class="item"><img src="{{url('/')}}/public/frontend/images/bilogy.jpg"><h6>Physics for the life science</h6>
                        <h6>Price : <span style="color:#2773BD; font-weight: bold;">Rs. 200</span></h6>
                        <a href="#" class="btn btn-primary pull-right">Purchase</a></div>
                        <div class="item"><img src="{{url('/')}}/public/frontend/images/chemistry.jpg"><h6>Physics for the life science</h6>
                          <h6>Price : <span style="color:#2773BD; font-weight: bold;">Rs. 200</span></h6>
                          <a href="#" class="btn btn-primary pull-right">Purchase</a></div>

                          <div class="item"><img src="{{url('/')}}/public/frontend/images/bilogy.jpg"><h6>Physics for the life science</h6>
                            <h6>Price : <span style="color:#2773BD; font-weight: bold;">Rs. 200</span></h6>
                            <a href="#" class="btn btn-primary pull-right">Purchase</a></div>
                          </div>





<br><br>
<h2 style="font-size: 18px;">Test Paper</h2>
      <hr>
                          <div class="owl-carousel owl-theme">
                            <div class="item"><img src="{{url('/')}}/public/frontend/images/physics.jpg"> 
                              <h6>Physics for the life science</h6>
                              <h6>Price : <span style="color:#2773BD; font-weight: bold;">Rs. 200</span></h6>
                              <a href="#" class="btn btn-primary pull-right">Purchase</a>
                            </div>
                            <div class="item"><img src="{{url('/')}}/public/frontend/images/maths.jpg"><h6>Physics for the life science</h6>
                              <h6>Price : <span style="color:#2773BD; font-weight: bold;">Rs. 200</span></h6>
                              <a href="#" class="btn btn-primary pull-right">Purchase</a></div>

                              <div class="item"><img src="{{url('/')}}/public/frontend/images/chemistry.jpg"><h6>Physics for the life science</h6>
                                <h6>Price : <span style="color:#2773BD; font-weight: bold;">Rs. 200</span></h6>
                                <a href="#" class="btn btn-primary pull-right">Purchase</a></div>

                                <div class="item"><img src="{{url('/')}}/public/frontend/images/bilogy.jpg"><h6>Physics for the life science</h6>
                                  <h6>Price : <span style="color:#2773BD; font-weight: bold;">Rs. 200</span></h6>
                                  <a href="#" class="btn btn-primary pull-right">Purchase</a></div>
                                  <div class="item"><img src="{{url('/')}}/public/frontend/images/chemistry.jpg"><h6>Physics for the life science</h6>
                                    <h6>Price : <span style="color:#2773BD; font-weight: bold;">Rs. 200</span></h6>
                                    <a href="#" class="btn btn-primary pull-right">Purchase</a></div>

                                    <div class="item"><img src="{{url('/')}}/public/frontend/images/bilogy.jpg"><h6>Physics for the life science</h6>
                                      <h6>Price : <span style="color:#2773BD; font-weight: bold;">Rs. 200</span></h6>
                                      <a href="#" class="btn btn-primary pull-right">Purchase</a></div>
                                    </div>
                                  </div>
                                </div>  
                              </div>
                            </div>















                            <!--second main tab-->
                            <div class="content">
                              <div class="container-fluid">
                               <div class="row">
                                <div class="col-md-4 col-4">
                                 <div class="box">
                                  Most Likely
                                </div>
                              </div>

                              <div class="col-md-4 col-4">
                               <div class="box">Formula</div>
                             </div>

                             <div class="col-md-4 col-4">
                               <div class="box">Text Paper</div>
                             </div>
                           </div>
                         </div>
                       </div>


                       <!--third main tab-->
                       <div class="content">
                         <div class="container-fluid">
                           <div class="row">
                            <div class="col-md-4 col-4">
                             <div class="box">
                              Most Likely
                            </div>
                          </div>

                          <div class="col-md-4 col-4">
                           <div class="box">Formula</div>
                         </div>

                         <div class="col-md-4 col-4">
                           <div class="box">Text Paper</div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>

               </body>
               <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
               <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js"></script>

               <script type="text/javascript" src="{{url('/')}}/public/frontend/js/highlight.js"></script>
               <script type="text/javascript" src="{{url('/')}}/public/frontend/js/owl.carousel.js"></script>
               <script type="text/javascript">
                 jQuery(function($){
                  $('.tab').click(function(){
                    $('.tab.is-active').removeClass('is-active');
                    $(this).addClass('is-active');
                    $(".content.is-show").removeClass('is-show');
    // クリックしたタブからインデックス番号を取得
    const index = $(this).index();
    // クリックしたタブと同じインデックス番号をもつコンテンツを表示
    $(".content").eq(index).addClass('is-show');
  });
                });
              </script>


              <script type="text/javascript">
                $('.owl-carousel').owlCarousel({
                  loop:true,
                  margin:10,
                  nav:true,
                  responsive:{
                    0:{
                      items:2
                    },
                    600:{
                      items:2
                    },
                    1000:{
                      items:3
                    }
                  }
                })
              </script>
              </html>