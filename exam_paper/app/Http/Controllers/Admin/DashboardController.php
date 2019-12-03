<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\SubCategory;
use App\Board;

class DashboardController extends Controller
{
    public function index(){
    	$sub_cat = SubCategory::count();
    	$product = Product::count();
    	$category = Category::count();
    	$board = Board::count();
    	return view('Admin.Dashboard',compact('product','category','board','sub_cat'));
    }
    
}
