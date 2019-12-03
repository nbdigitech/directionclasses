
<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/demo/favicon.png">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600%7CRoboto:400" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/public/assets/login_assets/css/material-icons.css" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/public/assets/login_assets/css/monosocialiconsfont.css" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/public/assets/login_assets/css/feather.css" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/public/assets/login_assets/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/public/assets/login_assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
    <script src="{{url('/')}}/public/assets/login_assets/js/modernizr.min.js"></script>
    <style type="text/css">
        .error{
            color:red;
            margin-left: 5px;
            font-weight: normal;
        }

    </style>
</head>

<body class="body-bg-full profile-page" style="background-image: url('assets/img/logo-ipms.jpg')">
    <div id="wrapper" class="row wrapper">
        <div class="container-min-full-height d-flex justify-content-center align-items-center">
            <div class="login-center">
                <div class="navbar-header text-center mt-2 mb-4">
                    <a >
                        <img alt="" src="{{url('/')}}/public/assets/images/logo.png" style="height: 130px; ">
                    </a>
                </div>
                <!-- /.navbar-header -->
                <form action="{{route('Admin/Login/Attempt')}}" method="post" id="RegisterValidation">
                  @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{session()->get('error')}}
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
                    </div>
                  @endif
                  <div class="form-group">
                        {{csrf_field()}}         
                        <input type="text" placeholder="xyz@gmail.com" class="form-control form-control-line" name="Email" required="true" email="true">
                          </div>
                    <div class="form-group">
                        <input type="password" required="true" placeholder="******" name="Password" class="form-control form-control-line">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-lg btn-primary text-uppercase fs-12 fw-600" type="submit" style="background-color: #E93F7A; border:none;">Login</button>
                    </div>
                    <div class="form-group no-gutters mb-0">
                        <div class="col-md-12 d-flex">
                            <div class="checkbox checkbox-primary mr-auto mr-0-rtl ml-auto-rtl">
                                
                            <!-- </div><a href="#" id="to-recover" class="my-auto pb-2 text-right">Forgot Password?</a> -->
                        </div>
                        <!-- /.col-md-12 -->
                    </div>
                    <!-- /.form-group -->
                </form>
                
            </div>
            <!-- /.login-center -->
        </div>
        <!-- /.d-flex -->
    </div>
    <!-- /.body-container -->
    <!-- Scripts -->
    <script src="{{url('/')}}/public/assets/login_assets/js/jquery.min.js"></script>
    <script src="{{url('/')}}/public/assets/login_assets/js/bootstrap.min.js"></script>
    <script src="{{url('/')}}/public/assets/login_assets/js/jquery.validate.min.js"></script>
</body>

<script>
    function setFormValidation(id) {
      $(id).validate({
        highlight: function(element) {
          $(element).closest('.form-group').removeClass('has-success').addClass('has-danger');
          $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
        },
        success: function(element) {
          $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');
          $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
        },
        errorPlacement: function(error, element) {
          $(element).closest('.form-group').append(error);
        },
      });
    }

    $(document).ready(function() {
      setFormValidation('#RegisterValidation');
      setFormValidation('#TypeValidation');
      setFormValidation('#LoginValidation');
      setFormValidation('#RangeValidation');
    });
  </script>


<script type="text/javascript">
$(document).on({
    "contextmenu": function(e) {
        console.log("ctx menu button:", e.which); 

        // Stop the context menu
        e.preventDefault();
    },
    "mousedown": function(e) { 
        console.log("normal mouse down:", e.which); 
    },
    "mouseup": function(e) { 
        console.log("normal mouse up:", e.which); 
    }
});
</script>

<script type="text/javascript">
    history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };

</script>
</html>