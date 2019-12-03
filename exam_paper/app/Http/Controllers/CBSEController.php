<?php

namespace App\Http\Controllers;
use App\News;
use Illuminate\Http\Request;
use Session;
use App\Board;
use App\Category;
use App\SubCategory;

class CBSEController extends Controller
{
    public function indexsession(request $request){
 		$id = Session::put('id',$request->CBSE);
    	return redirect()->route('CBSE');
    }

    public function index(request $request){
    	$id = Session::get('id');
    	$data = Category::where('BoardId',$id)->get();
    	
    	return view('CBSE',compact('data'));
    }


}
