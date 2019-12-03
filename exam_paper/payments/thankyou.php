<?php
ob_start();
  require 'mailin.php';
  include "config.php";



	include "src/Instamojo.php";

	$api = new Instamojo\Instamojo('7ab8075d15bf350dd5dc4b9b88bdb1f3','a9456074c5403a1e3614e4b07ddf50ca','https://www.instamojo.com/api/1.1/');


	$payid = $_GET["payment_request_id"];
	
    $response = $api -> paymentRequestStatus($payid);
    
    
   $mob = $response['payments'][0]['buyer_phone'];
        
        
        $query =mysqli_query($conn,"select * from tktbooking");
        
        while($row=mysqli_fetch_array($query))
	{
	   $id=$row['id'];
	   $ticket= $row['tickets'];
	   $mobile=$row['mobile'];	
           $quantity=$row['quantity'];
        }
						
        
        $quant = $row['quantity'];
        
       
        $tickets = explode(",",$ticket);
        
        $tic1 = $tickets[0];
        $tic2 = $tickets[1];
        $tic3 = $tickets[2];
        $tic4 = $tickets[3];
        $tic5 = $tickets[4];
        
  
	$mailin = new Mailin("https://api.sendinblue.com/v2.0","IWZkH2FByxSzsXVq");
	$data = array( "to" => $mob,
		"from" => "WAY2SMSS",
		"text" => "Hello!
Your Ticket ID for Diljit Dosanjh concert is/are: "
.$tic1.", ".$tic2.", ".$tic3.", ".$tic4.", ".$tic5.


" , Venue - Kamal Vihar Raipur 
Date - 13 Jan 2017
(Note : Ticket holder photo id is compulsory for entry)",
		
		"web_url" => "http://www.fortuneventures.in/maroon/",
		"tag" => "Tag1",
		"type" => "transactional"
	);
   
	$mailin->send_sms($data);
      
?>

<!DOCTYPE html>
<html>
<head>
	<title>Maroon Entertainment | Event Organiser In Ripur | Event Organiser In Chhattisgarh</title>
	
	
	<style>
	html,body
	{
		padding:0px;
		margin:0px;
	}
	   header
	   {
               background-color:yellow;
	       width:100%;
	       height:80px;
	       
	      
	   } 
	   .leftdiv
	   {	
	       width:10%;
	       height:60px;
	      
	      
	       
	       color:white; 
	       line-height:60px; 
	       margin-left:50px; 
	       font-size:35px;
	       font-weight:bold;
	   }
	   .container
	   {
	   	width:100%;
	   	height:420px;
	   	 
	   }
	   .head
	   {
	       width:100%;
	       height:40px;
	      
	       background-color:#191A1E;
	      
	       
	   }
	   .head_body
	   {
	     width:100%;
	     height:300px;
	     
	     
	   }
	   h1
	   {
	    margin-top:-20px;
	     color:skyblue;
	   }
	   
	   
	    footer
	   {
               background-color:#191A1E;
	       width:100%;
	       height:99px;
	       
	      
	   }
	   
	   .ticket
	   {
	   	
	   	width:1000px;
	   	height:340px;
	   	margin:8% auto;
	   	border:1px solid black;
	   	border-style:dashed;
	   	
	   	
	   }
	   .ticket > img
	   {
	   	width:1000px;
	   	height:340px;
	   }
	  
	   .tn
	   {
	     margin-top:-342px;
	     margin-left:10px;
	     font-size:14px;
	     
	   }
	    .dt
	   {
	    
	     margin-left:785px;
	     margin-top:-12px;
	     font-size:14px;
	   }
	   
	   .nm,.em,.mb,.pi,.am,.qt
	   {
	   	font-size:13px;
	   }
	   .nm
	   {
	   	margin-top:220px;
	   	margin-left:530px;
	   }	
	   .em
	   {
	   	margin-left:530px;	
	   }
	   .mb
	   {
	   	margin-left:530px;	
	   }
	   .pi
	   {
	   	margin-left:530px;	
	   }	
	   .am
	   {
	   	margin-left:530px;	
	   }
	   .qt
	   {
	   	margin-left:690px;
	   	margin-top:-20px;	
	   }
	   
	   
	   
	   
	   .ticket1,.ticket2,.ticket3,.ticket4,.ticket5
	   {
	   	width:19%;
	   	height:auto;
	   	
	   }
	   .ticket1
	   {
	   	margin-left:35%;
	   	font-size:12px;
	   	margin-top:-15px;
	   }
	   .ticket2
	   {
	   	margin-left:52.7%;
	   	margin-top:-15px;
	   	font-size:12px;
	   }
	   .ticket3
	   {
	   	margin-left:35%;
	   	
	   	font-size:12px;
	   }
	   .ticket4
	   {
	   	margin-left:52.7%;
	   	margin-top:-15px;
	   	font-size:12px;
	   }
	   .ticket5
	   {
	   	margin-left:70.7%;
	   	margin-top:-15px;
	   	font-size:12px;
	   }
	   #im1,#im2,#im3,#im4,#im5
	   {
	   	display:none;
	   }
	</style>
</head>
<body>
	<header>
	  <div>
	     <div class="leftdiv"><img src="img/logo.png" width="67px"></div>
	  </div>
	</header>
   
   
   
   
                <div class="container">
                	<div class="head">
                		<center><h1>Thank You</h1></center>
                	</div>
                	<div class="head_body">
                	
                	
				<div class="ticket">
				     
				     <img src="img/5000.jpg" id="im1">
				     <img src="img/3000.jpg" id="im2">
				     <img src="img/1500.jpg" id="im3">
				     <img src="img/1000.jpg" id="im4">
				     <img src="img/500.jpg" id="im5">
				        
				     <div class="tn"><strong>Order No. :<?php echo  $tic1; ?></strong></div>
				     <div class="dt"><strong>Invoice Date : <?php echo $date; ?></strong></div><!-- $response['payments'][0]['created_at']-->
				     
				     
				     <div class="ticket1" id="ticket11">Ticket No. : <?php echo $tic1; ?></div>
				     <div class="ticket2" id="ticket22">Ticket No. : <?php echo $tic2; ?></div>
				     <div class="ticket3" id="ticket33">Ticket No. : <?php echo $tic3; ?></div>
				     <div class="ticket4" id="ticket44">Ticket No. : <?php echo $tic4; ?></div>
				     <div class="ticket5" id="ticket55">Ticket No. : <?php echo $tic5; ?></div>
				     
				     
				     <div class="nm"><strong>Name : <?php echo $response['payments'][0]['buyer_name']; ?></strong></div>
				     <div class="em"><strong>Email : <?php echo $response['payments'][0]['buyer_email']; ?></strong></div>
				     <div class="mb"><strong>Mobile : <?php echo $response['payments'][0]['buyer_phone'] ?></strong></div>
				     <div class="pi"><strong>Payment ID : <?php echo $response['payments'][0]['payment_id']; ?></strong></div>
				     <div class="am"><strong>Amount : <?php echo $response['payments'][0]['amount']; ?></strong></div>
				     <div class="qt"><strong>Quantity: <?php echo $quantity; ?></strong></div>
				     
				     <input type="hidden" value="<?php echo $quantity; ?>" id="quan">
				     <input type="hidden" value="<?php echo $price; ?>" id="prc">
				</div>
				
				                	
                	</div>
                </div>
   
   
   
   
       <!--<footer>
   	  <div>
	   
	  </div>
       </footer>-->
   
   
 


 <script src="jquery.js"></script> 
   
   
   
   <script>
   	$(document).ready(function(){
   	
   		
   		var quan = $('#quan').val();
   		var prc= $('#prc').val();
   		
   		if(quan == 1){
   		       // console.log(quan);
   		        $('#ticket11').show();
   		        $('#ticket22').hide();
   		        $('#ticket33').hide();
   		        $('#ticket44').hide();
   		        $('#ticket55').hide();
   		}
   		
   		if(quan == 2){
   		        //console.log(quan);
   		        $('#ticket11').show();
   		        $('#ticket22').show();
   		        $('#ticket33').hide();
   		        $('#ticket44').hide();
   		        $('#ticket55').hide();
   		}
   		
   		if(quan == 3){
   		       // console.log(quan);
   		        $('#ticket11').show();
   		        $('#ticket22').show();
   		        $('#ticket33').show();
   		        $('#ticket44').hide();
   		        $('#ticket55').hide();
   		}
   		
   		if(quan == 4){
   		        //console.log(quan);
   		        $('#ticket11').show();
   		        $('#ticket22').show();
   		        $('#ticket33').show();
   		        $('#ticket44').show();
   		        $('#ticket55').hide();
   		}
   		
   		if(quan == 5){
   		       // console.log(quan);
   		        $('#ticket11').show();
   		        $('#ticket22').show();
   		        $('#ticket33').show();
   		        $('#ticket44').show();
   		        $('#ticket55').show();
   		}
   		
   		
   		if(prc == 5000){
   		       // console.log(quan);
   		        $('#im1').show();
   		        $('#im2').hide();
   		        $('#im3').hide();
   		        $('#im4').hide();
   		        $('#im5').hide();
   		}
   		
   		if(prc == 3000){
   		       // console.log(quan);
   		        $('#im1').hide();
   		        $('#im2').show();
   		        $('#im3').hide();
   		        $('#im4').hide();
   		        $('#im5').hide();
   		}
   		
   		if(prc == 1500){
   		       // console.log(quan);
   		        $('#im1').hide();
   		        $('#im2').hide();
   		        $('#im3').show();
   		        $('#im4').hide();
   		        $('#im5').hide();
   		}
   		
   		if(prc == 1000){
   		       // console.log(quan);
   		        $('#im1').hide();
   		        $('#im2').hide();
   		        $('#im3').hide();
   		        $('#im4').show();
   		        $('#im5').hide();
   		}
   		
   		if(prc == 500){
   		       // console.log(quan);
   		        $('#im1').hide();
   		        $('#im2').hide();
   		        $('#im3').hide();
   		        $('#im4').hide();
   		        $('#im5').show();
   		}
   	});
   	
   </script>
   
   
   

</body>
</html>



















