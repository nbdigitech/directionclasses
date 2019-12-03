<?php

namespace App\Http\Controllers;
use App\News;
use Illuminate\Http\Request;
use Session;
use App\Board;
use App\Category;
use App\SubCategory;

class IGCSEController extends Controller
{
    public function indexsession(request $request){
 		$id = Session::put('id',$request->IGCSE);
    	return redirect()->route('IGCSE');
    }

    public function index(request $request){
    	$id = Session::get('id');

    	$data = Category::where('BoardId',$id)->get();
    	
    	return view('IGCSE',compact('data'));
    }


}