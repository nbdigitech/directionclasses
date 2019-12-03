<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\News;

class VideoGalleryController extends Controller
{
    public function index(){
    	$video = Video::get();
    	$footer_news = News::orderBy('id','desc')->limit(3)->get();
    	return view('GalleryVideos',compact('video','footer_news'));
    }
}
