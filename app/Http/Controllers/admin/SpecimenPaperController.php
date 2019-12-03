<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpecimenPaperController extends Controller
{
    public function index(){
    	return view('admin.specimenpaper.Index');
    }

    public function create(){
    	return view('admin.specimenpaper.Add');
    }

     public function store(){
    	
    }

    public function edit(){
    	return view('admin.specimenpaper.Add');
    }

    public function update(){
    	
    }

    public function delete(){
    	
    }
}
