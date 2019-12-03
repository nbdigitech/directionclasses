<?php
include "config.php";
//include 'sms/sms_api.php';
	
	$purpose = "Live Concerts";
	$name = $_POST["name"];
	$name1 = $_POST["name1"];
    $name2 = $_POST["name2"];
	$name3 = $_POST["name3"];
	$name4 = $_POST["name4"];
	$name5 = $_POST["name5"];
	$values= array($name1,$name2,$name3,$name4,$name5);
	$ticket_holders = implode(",",$values);
	
	$email = $_POST["email"];
	$mobile= $_POST["mobile"];
	$price= $_POST["tickets"];
	$quantity= $_POST["ticketQuantity"];

	$total_amount = $price * $quantity;

    $payment_type = "Online";
    $agentId = $_POST["agentId"];

    $pdate = date("Y/m/d H:i:s");
	$min = 1000;
    $max = 9000;




    include "src/Instamojo.php";

	$api = new Instamojo\Instamojo('7ab8075d15bf350dd5dc4b9b88bdb1f3','a9456074c5403a1e3614e4b07ddf50ca','https://www.instamojo.com/api/1.1/');


	try
	{
		$response = $api -> paymentRequestCreate(array(

			"purpose" => $purpose,
			"amount" => $total_amount,
			"buyer_name" => $name,
			"phone" => $mobile,
			"send_email" => true,
			"send_sms" => true,
			"email" => $email,
			
			"date" => $pdate,
			'allow_repeated_payments:' => false,
			"redirect_url" => "http://maroonentertainment.in/payments/thankyou.php",
			"webhook" => "http://maroonentertainment.in/payments/webhook.php"
			
			
   


		));
		
	if($response)
    {
            if($quantity==1)
          {
            $tickets =rand($min,$max);
            $sql = "insert into tktbooking(tickets,purpose,name,ticket_holders,email,mobile,price,quantity,total_amount,payment_type,agentId,date) values('$tickets','$purpose','$name','$ticket_holders','$email','$mobile','$price','$quantity','$total_amount','$payment_type','$agentId',NOW())";
          $run = mysqli_query($conn,"$sql");

            
          }
          
          else if($quantity==2)
          {
            $ticket1 =rand($min,$max);
            $ticket2 =rand($min,$max);
            $ticket = array($ticket1,$ticket2);
            $tickets = implode(",",$ticket);
            
            $sql1 = "insert into tktbooking(tickets,purpose,name,ticket_holders,email,mobile,price,quantity,total_amount,payment_type,agentId,date) values('$tickets','$purpose','$name','$ticket_holders','$email','$mobile','$price','$quantity','$total_amount','$payment_type','$agentId',NOW())";
            $run1 = mysqli_query($conn,"$sql1");

            
          }
          
          else if($quantity==3)
          {
            $ticket1 =rand($min,$max);
            $ticket2 =rand($min,$max);
            $ticket3 =rand($min,$max);
            $ticket = array($ticket1,$ticket2,$ticket3);
            $tickets = implode(",",$ticket);
            
            $sql2 = "insert into tktbooking(tickets,purpose,name,ticket_holders,email,mobile,price,quantity,total_amount,payment_type,agentId,date) values('$tickets','$purpose','$name','$ticket_holders','$email','$mobile','$price','$quantity','$total_amount','$payment_type','$agentId',NOW())";
            $run2 = mysqli_query($conn,"$sql2");
            
          }
          
          else if($quantity==4)
          {
            $ticket1 =rand($min,$max);
            $ticket2 =rand($min,$max);
            $ticket3 =rand($min,$max);
            $ticket4 =rand($min,$max);
            $ticket = array($ticket1,$ticket2,$ticket3,$ticket4);
            $tickets = implode(",",$ticket);
            
            $sql3 = "insert into tktbooking(tickets,purpose,name,ticket_holders,email,mobile,price,quantity,total_amount,payment_type,agentId,date) values('$tickets','$purpose','$name','$ticket_holders','$email','$mobile','$price','$quantity','$total_amount','$payment_type','$agentId',NOW())";
            $run3 = mysqli_query($conn,"$sql3");
           
          }
                
            else
          {
            $ticket1 =rand($min,$max);
            $ticket2 =rand($min,$max);
            $ticket3 =rand($min,$max);
            $ticket4 =rand($min,$max);
            $ticket5 =rand($min,$max);
            $ticket = array($ticket1,$ticket2,$ticket3,$ticket4,$ticket5);
            $tickets = implode(",",$ticket);
            
            $sql4 = "insert into tktbooking(tickets,purpose,name,ticket_holders,email,mobile,price,quantity,total_amount,payment_type,agentId,date) values('$tickets','$purpose','$name','$ticket_holders','$email','$mobile','$price','$quantity','$total_amount','$payment_type','$agentId',NOW())";
            $run4 = mysqli_query($conn,"$sql4");
            
          }
        }
        
        
        // $mailin = new MailinSms('32fTpO1KwhY7Pnyc');

        // $mailin->addTo($mobile)

       // ->setFrom('Maroon Entertainment') // If numeric, then maximum length is 17 characters and if alphanumeric maximum length is 11 characters.
       // ->setText('Text message to send') // 160 characters per SMS.
       // ->setTag('Test Tag Name')

        //->setType('transactional') ;// Two possible values: marketing or transactional.
       // //->setCallback('http://callbackurl.com/');

   // $res = $mailin->send();
        
        
        
        

		$pay_url = $response['longurl'];

		header("Location: $pay_url");
		
		
		
		
		
		exit();
	}


	catch(Exception $e)
	{
		print('Error:' .$e->getMessage());
		
	}
	
	
	
	
	


    
      
	
	
?>
<a href="http://fortuneventures.in/maroon/index.html">back</a>


