<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resume;
use Mail;
class CareerController extends Controller
{
    public function index(){
    	return view('Career');
    }
    
    
    public function apply(request $request){
        return view('Apply');
    }
    
    public function store(request $request){
        $data = new Resume;
        $data->Name = $request->Name;
        $data->Email = $request->Email;
        $data->Phone = $request->Phone;
        $data->CollegeDetails = $request->CollegeDetails;
        $data->Qualification = $request->Qualification;
        $data->PrimarySubject = $request->PrimarySubject;
        $data->Experience = $request->Experience;
        $data->Location = $request->Location;
        
               if($request->hasfile('Resume')) 
        { 
          $image = $request->file('Resume');
        $name = str_slug($request->Resume).'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/assets/resume');
        $imagePath = $destinationPath. "/".  $name;
        $image->move($destinationPath, $name);
        $data->Resume = $name;
        }
        
        $data->save();
        
        
         $data = array('name' => $request->Name, 'email' => $request->Email, 'mobile' => $request->Phone, "Qualification" => $request->Qualification, 'url'=>'https://www.directionclasses.com/public/assets/resume/'.$data->Resume);

        Mail::send('resume.mail', $data, function($message){
          $message->to('directionclassesmumbai@gmail.com','DC')->subject('Career Enquiry');
          $message->from('directionclassesmumbai@gmail.com','DC');
        });
    
        return redirect('Apply');
    }
    
    
     public function applyNonTeaching(){
        return view('Non-Teaching-Career');
    }
    
    public function store1(request $request){
        $data = new Resume;
        $data->Name = $request->Name;
        $data->Email = $request->Email;
        $data->Phone = $request->Phone;
        $data->CollegeDetails = $request->CollegeDetails;
        $data->Qualification = $request->Qualification;
        $data->PrimarySubject = $request->PrimarySubject;
        $data->Experience = $request->Experience;
        $data->Location = $request->Location;
        
               if($request->hasfile('Resume')) 
        { 
          $image = $request->file('Resume');
        $name = str_slug($request->Resume).'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/assets/resume');
        $imagePath = $destinationPath. "/".  $name;
        $image->move($destinationPath, $name);
        $data->Resume = $name;
        }
        
        $data->save();
        
        
         $data = array('name' => $request->Name, 'email' => $request->Email, 'mobile' => $request->Phone, "Qualification" => $request->Qualification, 'url'=>'https://www.directionclasses.com/public/assets/resume/'.$data->Resume);

        Mail::send('resume.mail', $data, function($message){
          $message->to('directionclassesmumbai@gmail.com','DC')->subject('Career Enquiry');
          $message->from('directionclassesmumbai@gmail.com','DC');
        });
    
        return redirect('Apply-Non-Teaching');
    }
    
    
    
   
}
