<?php

namespace App\Http\Controllers\admin;
use App\Subject;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubCategoryController extends Controller
{
    public function index(){
    	$result = Subject::orderBy('id','desc')->paginate(12);
    	return view('admin.subcategory.Index',compact('result'));
    }

    public function create(){
    	$board = Category::orderBy('id','desc')->get();
    	return view('admin.subcategory.Add',compact('board'));
    }

     public function store(request $request){
     	$request->validate(['BoardName'=>'required', 'SubjectName'=>'required']);
    	$store = new Subject;
    	$store->BoardName = $request->BoardName;
    	$store->SubjectName = $request->SubjectName;
    	$store->save();
    	$request->session()->flash('success','Successful! Subject Submited');
    	return redirect('admin/SubCategory/Add');
    }

    public function editsession(request $request){

    }

    public function edit(){
    	return view('admin.subcategory.Add');
    }

    public function showsession(){

    }

    public function show(request $request){

    }

    public function update(){
    	
    }

    public function destroy(request $request){
    	Subject::where('id',$request->Delete)->delete();
    	$request->session()->flash('success','Successful! Subject Deleted');
    	return redirect('admin/SubCategory');
    }
}
