<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gallery_Image;
use App\Category;
use Session;
use File;

class ImageController extends Controller
{
    public function index(){

    	$image = Gallery_Image::join('categories','categories.id','gallery_images.Category')->select('gallery_images.*','categories.Name as CategoryName')->get();
    	return view('Admin.Image.Index',compact('image'));
    }

    public function create(){
    	$category = Category::get();
    	return view('Admin.Image.Add',compact('category'));
    }

    public function store(request $request){
    	$image = new Gallery_Image;
    	$image->Title = $request->Title;
    	$image->Category = $request->Category;
    	if($request->hasFile('Image')){
    	$file = $request->file('Image');
    	$file_name = time().'.'.$file->getClientOriginalExtension();
    	$file->move(public_path('assets/uploads'),$file_name);
    	$image->Image = $file_name;
    	}
    	$image->save();
    	$request->session()->flash('success','Your File Uploaded successfully!');
    	return redirect()->route('Admin/Image');
    }


    public function editsession(request $request){
    	Session::put('edit',$request->Edit);
    	return redirect()->route('Admin/Image/Edit');
    }

    public function edit(request $request){
    	$edit_id = Session::get('edit');
    	$edit = Gallery_Image::where('id',$edit_id)->first();
    	$category = Category::get();
    	return view('Admin.Image.Add',compact('category','edit'));	
    }


    public function delete(request $request){
    	$delete = Gallery_Image::where('id',$request->Delete)->first();
    	if(File::exists('public/assets/uploads/'.$delete->Image)){
    		File::delete('public/assets/uploads/'.$delete->Image);
    		$delete->delete();
    	}

    	else{
    		$delete->delete();
    	}
    	
    	$request->session()->flash('success','Your File Deleted successfully!');
    	return redirect()->route('Admin/Image');
    }


    public function update(request $request){
    	$image = Gallery_Image::where('id',$request->Update)->first();
    	$image->Title = $request->Title;
    	$image->Category = $request->Category;
    	if($request->hasFile('Image')){
    	$file = $request->file('Image');
    	$file_name = time().'.'.$file->getClientOriginalExtension();
    	$file->move(public_path('assets/uploads'),$file_name);
    	$image->Image = $file_name;
    	}
    	
    	$image->save();
    	$request->session()->flash('success','Your File Updated successfully!');
    	return redirect()->route('Admin/Image');
    }
}
