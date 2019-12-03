<?php

namespace App\Http\Controllers;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
    	$news = News::get();
    	$footer_news = News::orderBy('id','desc')->limit(3)->get();
    	return view('News',compact('news','footer_news'));
    }
}
