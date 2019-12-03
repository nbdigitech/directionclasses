<?php
$servername = "localhost";
$username = "direceye_shivram";
$password = "Alvaedison88#@!";
$db = 'direceye_wp2';
$conn = mysqli_connect($servername, $username, $password,$db);
if(!$conn){
    	die('connection faild'.mysqli_connect_error());
    }

?>
<?php
 require 'mailin.php';
	
	  $name=$_POST['AlvaedisonName'];
	  $email=$_POST['AlvaedisonEmail'];
	  $phone=$_POST['AlvaedisonPhone'];
	  $collegedetails=$_POST['AlvaedisonCollegeDetails'];
	  $qualification=$_POST['AlvaedisonQualification'];
	  $primarysubject=$_POST['AlvaedisonPrimarySubject'];
	  $experience=$_POST['AlvaedisonExperience'];
	  $location=$_POST['AlvaedisonLocation'];
	  
	  $img_name = $_FILES['AlvaedisonResume']['name'];
	  $img_tm = rand(000000,999999);
	  $img_tmp = $img_tm.'.pdf';
	  
	  move_uploaded_file($_FILES['AlvaedisonResume']['tmp_name'], __DIR__.'/resume/'.$img_tmp);
	  /*move_uploaded_file($img_tmp,"resume/$img_name");*/
	  $url = 'https://www.directionclasses.com/SendInBlue/resume/'.$img_tmp;
	  
	  $email_body = 
			"<strong>From: </strong>" . $name . "<br />
			<strong>Email: </strong>" . $email . "<br />	
			<strong>Phone: </strong>" . $phone . "<br />	
			<strong>Message: </strong>" . $qualification . "<br />	
			<strong>url: </strong>" . $url;
			
			
			
	$email_body_for_user = 
	        "<h3 style='text-align:center;'>Thank You For Apply. We Will Contact You Soon</h3> <br />
			<strong>From: </strong>" . $name . "<br />
			<strong>Email: </strong>" . $email . "<br />	
			<strong>Phone: </strong>" . $phone . "<br />	
			<strong>Message: </strong>" . $qualification . "<br />	
			<strong>url: </strong>" . $url;
			
        
        $stmnt = "INSERT INTO resumes(Name,Email,Phone,CollegeDetails,Qualification,PrimarySubject,Experience,Location,Resume) VALUES('$name', '$email', '$phone', '$collegedetails','$qualification','$primary_subject','$experience','$location','$img_tmp')";
    mysqli_query($conn,$stmnt);
   
		

    
	$mailin = new Mailin("https://api.sendinblue.com/v2.0","kG7vd1NOMz9wLfEj");

	$data1 = array("to" => array("cvtodc@gmail.com"=>"CVDC"),
        "from" => array("cvtodc@gmail.com","CVDC"),
        "subject" => "Job Applied",
        "html" => $email_body);
		
		echo '<br><br>';
	$data2=array("email" =>$email,
        "attributes" => array("FIRSTNAME"=>$name,"SMS"=>$phone,"SUBJECTS"=>$url),
        "listid" => array(120));	
        
         $mailin->send_email($data1);
	//echo '<br><br>';
	$mailin->create_update_user($data2);
	
	
	
	
	///send user mail //
	$data3 = array("to" => array($email=>$name),
        "from" => array("cvtodc@gmail.com","CVDC"),
        "subject" => "Your Application Appied",
        "html" => $email_body_for_user);
		
		echo '<br><br>';
	$data4=array("email" =>$email,
        "attributes" => array("FIRSTNAME"=>$name,"SMS"=>$phone,"SUBJECTS"=>$url),
        "listid" => array(120));	
        
    $mailin->send_email($data3);
	//echo '<br><br>';
	$mailin->create_update_user($data4);
	
	
    echo "<script>window.open('https://directionclasses.com/Thankyou','_self')</script>";   

	
 
    
   
    
?>