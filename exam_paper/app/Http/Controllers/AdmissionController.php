<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Admission;
use App\News;
use Mail;

class AdmissionController extends Controller
{
    public function index(){
    	$footer_news = News::orderBy('id','desc')->limit(3)->get();
    	return view('Admission',compact('footer_news'));
    }

    public function store(request $request){
    	$data = new Admission;
    	$data->Name = $request->Name;
    	$data->Email = $request->Email;
    	$data->Age = $request->Age;
    	$data->Gender = $request->Gender;
    	$data->Class = $request->Class;
    	$data->Guardian = $request->Guardian;
    	$data->City = $request->City;
    	$data->Address = $request->Address;
    	$data->Contact = $request->Contact;
    	$data->save();

    	$mail_data = array('name'=>$request->Name, 'email'=>$request->Email, 'contact'=>$request->Contact, 'class' => $request->Class);
    	Mail::send('mail.Admission',$mail_data, function($message){
    		$message->to('counsellor@chanakyacommunitycollege.com','Chanakya School');
    		$message->from('counsellor@chanakyacommunitycollege.com','Chanakya School');
    	});
    	$request->session()->flash('success','Your Form Submited Successfully!');
    	return redirect()->route('Admission');
    }
}
