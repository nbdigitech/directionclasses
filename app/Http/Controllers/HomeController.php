<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;
use App\Mail\SendMailable;

use App\Mailin;
class HomeController extends Controller
{
    public function mail(Request $request)
    {


        $name = $request->Name;
        $email = $request->Email;
        $mobile = $request->Mobile;

        DB::insert('insert into home_page_contact_user (Name,Email,Mobile,Status) values (?, ?, ?, ?)', array($name,$email,$mobile, 0));        
        
        
        
        $url = "Course Enquiry";
		$email_body = 
		"
		<strong><h3 style='text-align:center;'>Enquiry Email</h3><br>
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
        
        
        
        $request->session()->flash('success','Thank you for enquire. we will get you soon.');
        return redirect('Thankyou');
    }
    
    
    
    
    
    public function contactmail(Request $request)
    {
        $name = $request->Name;
        $email = $request->Email;
        $mess = $request->Message;
        
        DB::insert('insert into contact_page_contact_user (Name,Email,Mess,Status) values (?, ?, ?, ?)', array($name,$email,$mess, 0)); 
        
        $url = "Contact From DC";
		$email_body = 
		"
		<strong><h3 style='text-align:center;'>Enquiry Email</h3><br>
		<strong>Name :- </strong>".$name."<br>
		<strong>Email :- </strong>".$email."<br>
		<strong>Messge :- </strong>".$mess."<br>
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
        
        
        
        	$mailin = new Mailin("https://api.sendinblue.com/v2.0","kG7vd1NOMz9wLfEj");

    	$data1 = array("to" => array("directionclassesmumbai@gmail.com"=>"Direction Classes"),
            "from" => array("cvtodc@gmail.com","CVDC"),
            "subject" => "Lead",
            "html" => $email_body);
    		
    		echo '<br><br>';
    	$data2=array("email" =>$email,
            "attributes" => array("FIRSTNAME"=>$name,"SUBJECTS"=>$url),
            "listid" => array(120));	
            
            
            
            $data3 = array("to" => array($email=>"Direction Classes"),
            "from" => array("cvtodc@gmail.com","Direction Classes"),
            "subject" => "Please fill this form",
            "html" => $email_body1);
    		
    		echo '<br><br>';
            $mailin->send_email($data1);
    		$mailin->create_update_user($data2);
		    $mailin->send_email($data3);
        
        
        
        
        
        
        
        
        
    	//Mail::send(new mailing());
    	
        // $data = array('name' => $name, 'email' => $email, 'mess' => $mess, "body" => "Enquiry Email" );

        // Mail::send('emails.contactmail', $data, function($message){
        //   $message->to('directionclassesmumbai@gmail.com','DC')->subject('Contact From DC');
        //   $message->from('directionclassesmumbai@gmail.com','DC');
        // });
        
        $request->session()->flash('success','Thank you for enquire. we will get you soon.');
        return redirect('Thankyou');
    }
    
    
    
}

