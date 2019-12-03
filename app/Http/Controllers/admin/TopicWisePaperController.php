<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TopicWiseController extends Controller
{
    public function index(){
    	return view('admin.tipicwise.Index');
    }

    public function create(){
    	return view('admin.topicwise.Add');
    }

     public function store(){
    	
    }

    public function edit(){
    	return view('admin.topicwise.Add');
    }

    public function update(){
    	
    }

    public function delete(){
    	
    }
}
