<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\News;
use Mail;

class ContactController extends Controller
{
    public function index(){
    	$footer_news = News::orderBy('id','desc')->limit(3)->get();
    	return view('Contact',compact('footer_news'));
    }

    public function store(request $request){
    	$data = new Contact;
    	$data->Name = $request->Name;
    	$data->Email = $request->Email;
    	$data->Subject = $request->Subject;
    	$data->Phone = $request->Phone;
    	$data->Message = $request->Message;
    	$data->save();

    	$mail_data = array('name'=>$request->Name, 'email'=>$request->Email, 'subject'=>$request->Subject, 'Phone'=>$request->Phone, 'Message'=>$request->Message);
    	Mail::send('mail.Contact',$mail_data,function($message){
    		$message->to('kunal1071996@gmail.com','Chanakya Community College')->subject('Course Enquiry');
    		$message->from('kunal1071996@gmail.com','kunal');
    	});

    	$request->session()->flash('success','Your Form Submited Successfully! We Will Contact You Soon');
    	return redirect()->route('Contact');
    }



    public function enquiry(request $request){
    	$data = new Contact;
    	$data->Name = $request->Name;
    	$data->Email = $request->Email;
    	$data->Subject = $request->Subject;
    	$data->Phone = $request->Phone;
    	$data->Message = $request->Message;
    	$data->save();

    	$mail_data = array('name'=>$request->Name, 'email'=>$request->Email, 'subject'=>$request->Subject, 'Phone'=>$request->Phone, 'Message'=>$request->Message);
    	Mail::send('mail.Contact',$mail_data,function($message){
    		$message->to('kunal1071996@gmail.com','Chanakya Community College')->subject('Course Enquiry');
    		$message->from('kunal1071996@gmail.com','kunal');
    	});

    	$request->session()->flash('success','Your Form Submited Successfully!');
    	return redirect()->route('Index');
    }
}
