<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PastPaperController extends Controller
{
    public function index(){
    	return view('admin.pastpaper.Index');
    }

    public function create(){
    	return view('admin.pastpaper.Add');
    }

     public function store(){
    	
    }

    public function edit(){
    	return view('admin.pastpaper.Add');
    }

    public function update(){
    	
    }

    public function delete(){
    	
    }
}
