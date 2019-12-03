<?php
namespace App\Http\Controllers;
use App\News;
use Illuminate\Http\Request;

class ChairmanMessageController extends Controller
{
    public function index(){
    	$footer_news = News::orderBy('id','desc')->limit(3)->get();
    	return view('ChairmanMessage',compact('footer_news'));
    }
}
