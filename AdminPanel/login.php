<?php session_start(); ?>
<style type="text/css">
 @import "bourbon";

body {
  background: #eee !important;
}

.wrapper {
  margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.1);

  .form-signin-heading,
  .checkbox {
    margin-bottom: 30px;
  }

  .checkbox {
    font-weight: normal;
  }

  .form-control {
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    @include box-sizing(border-box);

    &:focus {
      z-index: 2;
    }
  }

  input[type="text"] {
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
  }

  input[type="password"] {
    margin-bottom: 20px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
}

</style>
<?php

$servername = "localhost";
$username = "direceye_shivram";
$password = "Alvaedison88#@!";

$conn = new mysqli($servername, $username, $password, 'direceye_wp2');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>
<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
  <div class="wrapper">
    <form class="form-signin" action="login.php" method="post">       
      <h2 class="form-signin-heading">Please login</h2>
      <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" /><br>
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
     <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="sub">Login</button>   
    </form>
  </div>

  <?php
  if(isset($_POST['sub'])) {

$username = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
 

$sql = "SELECT * FROM admin_panel_users WHERE username = '$username' and password = '$password'";

$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$count = mysqli_num_rows($query);

if ($count > 0)
{

    $row = mysqli_fetch_row($query);
    $userid = $row[0]; // takes id from DataBase
    $dbusername = $row[1]; // takes username from DataBase
    $dbpassword = $row[2]; // takes userpass from DataBase
    $_SESSION['username'] = $dbusername;
    $_SESSION['password'] = $dbpassword;
   
  
    echo "<script>window.open('index.php','_self')</script>";
    die(); // using die() after header()

}
else {
    echo "<center>incorrect username or password.</center>";
}
}
?>