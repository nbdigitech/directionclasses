<?php

namespace App\Http\Controllers\admin;
use App\Category;
use App\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CrashCourseController extends Controller
{
    public function index(){
        
    	return view('admin.crashcourse.Index');
    }

    public function create(){
        $cat = Category::orderBy('id','desc')->get();
        $subcat = Subject::orderBy('id','desc')->get();
    	return view('admin.crashcourse.Add',compact('cat','subcat'));
    }

     public function store(){
    	
    }

    public function edit(){
    	return view('admin.crashcourse.Add');
    }

    public function update(){
    	
    }

    public function delete(){
    	
    }
}
