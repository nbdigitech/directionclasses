<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admission;

class AdmissionController extends Controller
{
    public function index(){
    	$data = Admission::orderBy('id','desc')->get();
    	return view('Admin.Admission.Index',compact('data'));
    }
}
