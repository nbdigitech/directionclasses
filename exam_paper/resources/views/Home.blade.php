<!DOCTYPE html>
<html amp>
<head>
  <title>Direction Classes</title>
  <meta charset="utf-8">
  <meta name="csrf-token" description="{{csrf_token()}}">
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

  .breadcrumb{
    margin-bottom: 50px;
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
  
  <div class="row">
    <div class="col-md-4 col-sm-4 col-4 tab_menu" style="background: #2773BD; color:white;">
      <a href="{{route('Homes')}}" style="line-height: 50px;">
      <center>All Boards</center>
      <a href="#">
    </div>

     <div class="col-md-4 col-sm-4 col-4 tab_menu">
      <form action="{{route('CBSESession')}}" method="post">
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
    <div class="content is-show">
      <div class="container-fluid" style="background: white;">
        <h2 id="select_cat">Select Your Category</h2>
       <div class="row" id="tab_row">

        <div class="col-md-4 col-4">
         <div class="box" style="background: url('{{url('/')}}/public/frontend/images/education-home-hero-img.jpg'); background-size: cover;">
          Most Likely
        </div>


      </div>

      <div class="col-md-4 col-4">
       <div class="box" style="background: url('{{url('/')}}/public/frontend/images/a376679da7f721a7aa05f8ce0336c48613409745.jpeg'); background-size: cover;">Formula</div>
     </div>

     <div class="col-md-4 col-4" id="last_tab_col">
       <div class="box" style="background: url('{{url('/')}}/public/frontend/images/education-home-hero-img.jpg'); background-size: cover;">Text Paper</div>
     </div>
   </div>


   <div class="row" id="menu_row">  
     <div class="col-md-3" id="left_menu">

        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
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
        @foreach($mostlikely as $row)
        <div class="item"><img src="{{url('/')}}/public/assets/uploads/{{$row->Image}}"> 
          <h6>{{$row->Title}}</h6>
          
          <a class="btn btn-primary" href="https://imojo.in/dwp8np" style="margin-left: 10px;">
            Ebook Rs. 99
          </button>

          <a class="btn btn-primary" href="https://imojo.in/dwp8np" style="margin-left: 10px;">
          Book Rs. 199
          </a>
        </div>
        @endforeach


                </div>




<br><br>
<h2 style="font-size: 18px;">Formula</h2>
      <hr>
                <div class="owl-carousel owl-theme">
                 @foreach($formula as $row)
        <div class="item"><img src="{{url('/')}}/public/assets/uploads/{{$row->Image}}"> 
          <h6>{{$row->Title}}</h6>
         <a class="btn btn-primary" href="https://imojo.in/dwp8np" style="margin-left: 10px;">
            Ebook Rs. 99
          </a>

         <a class="btn btn-primary" href="https://imojo.in/dwp8np" style="margin-left: 10px;">
          Book Rs. 199
          </a>
        </div>
        @endforeach
                          </div>





<br><br>
<h2 style="font-size: 18px;">Test Paper</h2>
      <hr>
      <div class="owl-carousel owl-theme">
      @foreach($testpaper as $row)
        <div class="item"><img src="{{url('/')}}/public/assets/uploads/{{$row->Image}}"> 
          <h6>{{$row->Title}}</h6>
         <a class="btn btn-primary" href="https://imojo.in/dwp8np" style="margin-left: 10px;">
            Ebook Rs. 99
          </a>

         <a class="btn btn-primary" href="https://imojo.in/dwp8np" style="margin-left: 10px;">
          Book Rs. 199
          </a>
        </div>
        @endforeach
                                    </div>
                                  </div>
                                </div>  
                              </div>
                            </div>



<!---->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content mobsize">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Fill Al The Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
                <div class="form-group">
                  
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name" required>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" name="email" id="email" placeholder="Enter Your Email" required>
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Your Mobile No." required>
                  </div>

                  <div class="price form-group">
                  <input type="hidden" class="form-control" name="tickets" id="PDFurl" required>

                  </div>

                  
                  <div class="btnn">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close">Close</button>
                      <input type="submit" class="btn btn-primary" name="submit" value="Pay Online" id="submitOn">
                  </div>
                  <div id="result"></div>
            
      </div>
      <div class="modal-footer">

        
      </div>
    </div>
  </div>
</div> 

               </body>
               <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
               <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
               <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js"></script>
               <script type="text/javascript" src="{{url('/')}}/public/frontend/js/owl.carousel.js"></script>




              <script>
    $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  //modal.find('.modal-title').text('New message to ' + recipient)
 // modal.find('.modal-body input').val(recipient)
  modal.find('.price input').val(recipient)
  modal.find('.modaltitle').text(recipient + ' /Ticket')
  
})
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


<script>
    $(document).ready(function()
    {
      $("#submitOn").click(function()
      {
                var name = $("#name").val();
                var email = $("#email").val();
                var mobile = $("#mobile").val();
          $.ajax(
          {
          
            url:'{{route('Payment')}}',
            data:{'name':name,'email':email,'mobile':mobile, 'url':PDFurl},
            type:'POST',
            async:true,
            cache:false,
            
            success:function(data)
            {
               
              $("#result").html(data);
            }
          });
      });
    });


  </script> 


              </html>