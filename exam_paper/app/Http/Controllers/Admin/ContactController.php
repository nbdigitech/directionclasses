<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactController extends Controller
{
    public function index(){
    	$data = Contact::orderBy('id','desc')->get();
    	return view('Admin.Contact.Index',compact('data'));
    }

}
