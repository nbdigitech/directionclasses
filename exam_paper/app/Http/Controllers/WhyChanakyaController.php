<?php

namespace App\Http\Controllers;
use App\News;
use Illuminate\Http\Request;

class WhyChanakyaController extends Controller
{
    public function index(){
    	$footer_news = News::orderBy('id','desc')->limit(3)->get();
    	return view('WhyChanakya',compact('footer_news'));
    }
}
