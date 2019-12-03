<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ParentTestimonialController extends Controller{
	public function index(){
		return view('ParentTestimonial');
	}
}