<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestSeriesController extends Controller
{
    public function index(){
    	return view('admin.testseries.Index');
    }

    public function create(){
    	return view('admin.testseries.Add');
    }

     public function store(){
    	
    }

    public function edit(){
    	return view('admin.testseries.Add');
    }

    public function update(){
    	
    }

    public function delete(){
    	
    }
}
