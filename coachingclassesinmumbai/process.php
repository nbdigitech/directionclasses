	
<?php 
	$host = "localhost";
	$username = "direceye_shivram";
	$password = "Alvaedison88#@!";
	try{
	$conn = new PDO('mysql:host=localhost;dbname=direceye_wp2',$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e){
	echo $e->getMessage();
}
?>

<?php


	
	if(isset($_POST['submit'])){
	   // $msg = "Please Verify : Your Are Not a Robot";
	    $name = $_POST['Name'];
		$email = $_POST['Email'];
		$mobile = $_POST['Mobile'];
// 		$secret = '6Lc45Y0UAAAAAMsA79VrzthfGpz_ddomVPvh5aPk';
// 		$captcha = $_POST['g-recaptcha-response'];
// 		$ip = $_SERVER['REMOTE_ADDR'];
		
// 		$action = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
// 		$result = json_decode($action);
		
		
		
		 
	    
	       
		$query = $conn->prepare("INSERT INTO dc_lp1(Name,Email,Mobile) VALUES(:Name, :Email, :Mobile)");
		$query->bindParam(':Name',$name);
		$query->bindParam(':Email',$email);
		$query->bindParam(':Mobile',$mobile);
	
		
		if(	$query->execute()){
		
		
		require('mailin.php');
		$url = "Enuiry Form Landing Page";
		$email_body = 
		"
		<strong><h3 style='text-align:center;'>Enquiry Form Landing Page</h3><br>
		<strong>Name :- </strong>".$name."<br>
		<strong>Email :- </strong>".$email."<br>
		<strong>Mobile Number :- </strong>".$mobile."<br>
		";
		$email_body1 = 
		"
    	    <p>
    	            Dear Parents & Students,<br> 
                    Thank you for registering <br>
                    To help every board students we are providing Last minute important and revision material so that student can easily brush important concepts during his exams.<br> 
                    Fill the form --->>> https://goo.gl/forms/60czuvLsoO5NLG8W2<br><br><br>
                    
                    
                    Resources available are: <br><br>
                    
                    Maths:  Formula book.( Free of cost) 
                    ➡Per Registration one book only<br>
                    
                    Biology:  <br>
                    1.Important Terminologies and Definition Booklets(Rs.49) <br>
                    2.Most likely and important Questions( Rs. 49) <br>
                    3.Last minute Revision<br>
                    ( Rs.49) <br><br>
                    
                    Physics: <br>
                    1.Important Terminologies and Definition <br>
                    (Per booklet Rs. 49) <br>
                    2.Most likely Questions (Rs.49) <br>
                    
                    Chemistry: Important Terminologies and Definition <br>
                    (Per booklet Rs. 49) <br><br>
                    
                    
                    Let us know the number of copies required by today so we can arrange for your help ASAP. <br><br>
                    
                    Thankyou <br>
                    Direction Classes <br>
                    Facebook Instagram
                    
                    </p>
		";
//cvtodc
		$mailin = new Mailin("https://api.sendinblue.com/v2.0","kG7vd1NOMz9wLfEj");

    	$data1 = array("to" => array("directionclassesmumbai@gmail.com"=>"Direction Classes"),
            "from" => array("cvtodc@gmail.com","CVDC"),
            "subject" => "Lead",
            "html" => $email_body);
    		
    		echo '<br><br>';
    	$data2=array("email" =>$email,
            "attributes" => array("FIRSTNAME"=>$name,"SMS"=>$mobile,"SUBJECTS"=>$url),
            "listid" => array(120));	
            
            
            
            $data3 = array("to" => array($email=>"Direction Classes"),
            "from" => array("cvtodc@gmail.com","Direction Classes"),
            "subject" => "Please fill this form",
            "html" => $email_body1);
    		
    		echo '<br><br>';
            $mailin->send_email($data1);
    		$mailin->create_update_user($data2);
		    $mailin->send_email($data3);
		
		
		
		
		
		
		///send message 9987758132
		    $mobile_mess = "Message from DC Landing Page : %0a Name : $name %0a Email : $email %0a Mobile Number : $mobile";
			$authKey = "189400AOVwTl9S5bf9461e";
            $senderId = "BSPCON";
            $route = "4";
            $postData = array(
                'authkey' => $authKey,
                'mobiles' => '9987758132',
                'message' => $mobile_mess,
                'sender' => $senderId,
                'route' => $route,
                'country'=>'91'
        );	
            $url="https://control.msg91.com/api/sendhttp.php";
            $ch = curl_init();
                curl_setopt_array($ch, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $postData
            ));
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            $output = curl_exec($ch);
            
             if(curl_errno($ch))
            {
                echo 'error:' . curl_error($ch);
            }
            else{
                    curl_close($ch);    
            }
            
            
            
            
            
            // header("Location: https://www.directionclasses.com/Thankyou");
            // die();
            echo "<script>window.location.href ='https://www.directionclasses.com/Thankyou'</script>";
            // echo "<script>window.open('index.php?msg=$msg','_self')</script>";
		}
		else{
		    //echo "<script>window.open('index.php?msg=$msg','_self')</script>";
		   echo "<script>alert('hello')</script>";
		}
	}
		else{
		    //echo "<script>window.open('index.php?msg=$msg','_self')</script>";
		    echo "<script>alert('hello')</script>";
		}

	

	




	/*	echo "<script>womdpw.open('index.php','_self')</script>";
		echo "<script>alert('Form Submited Successfully')</script>";*/
?>