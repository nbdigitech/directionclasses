<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery_Image;
use App\News;

class ImageGalleryController extends Controller
{
    public function index(){
    	$image = Gallery_Image::get();
    	$footer_news = News::orderBy('id','desc')->limit(3)->get();
    	return view('ImageGallery',compact('image','footer_news'));
    }
}
