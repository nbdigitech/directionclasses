<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery_Image;
use App\News;
use App\Category;
use App\Board;
use App\SubCategory;
use App\Product;

class IndexController extends Controller
{
    public function frontpage(){
    	$for_id = array(31,28);
    	$most_id = array(27,30);
    	$test_id = array(29,32);
    	$formula = Product::whereIn('CategoryId',$for_id)->get();
    	$mostlikely = Product::whereIn('CategoryId',$most_id)->get();
    	$testpaper = Product::whereIn('CategoryId',$test_id)->get();
    	
    	return view('Home',compact('formula','mostlikely','testpaper'));
    }
}
