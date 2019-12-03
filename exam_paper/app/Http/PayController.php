<?php

namespace App\Http\Controllers;
use App\News;
use Illuminate\Http\Request;
use Session;
use App\Board;
use App\Category;
use App\SubCategory;
use App\Student;
use Mail;

class CBSEController extends Controller
{


public function index(){

    $purpose = "Selling Books";
	$name = $request->name;
	$email = $request->email;
	$mobile = $request->mobile;

    $pdate = date("Y/m/d H:i:s");
	$min = 1000;
    $max = 9000;

   

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
			"redirect_url" => "https://directionclasses.com/payments/thankyou.php",
			"webhook" => "https://directionclasses.com/payments/webhook.php"

		));
		
		if($response)
   		{
          
          $student = new Student;
          $student->Name = $request->name;
          $student->Email = $request->email;
          $student->Phone = $request->mobile;
          $student->save();

          $mail_data = array('Name'=>$request->name, 'Email'=>$request->email, 'Phone'=>$request->mobile);
         Mail::send('mail.Paymail',$mail_data, function($message){
    		$message->to('kunal1071996@gmail.com','DC');
    		$message->from('kunal1071996@gmail.com','DC');
    	});
   			// DAta 
   			// Email
            
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
	

}




}

