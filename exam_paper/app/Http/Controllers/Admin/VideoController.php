<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;
use Session;


class VideoController extends Controller
{
    public function index(){
    	$video = Video::get();
    	return view('Admin.Video.Index',compact('video'));
    }

    public function store(request $request){
    	$video = new Video;
    	$video->URL = $request->URL;
    	$video->save();
    	$request->session()->flash('success','Your Video Link Submited Successfully!');
    	return redirect()->route('Admin/Video');
    }

    public function editsession(request $request){
    	Session::put('edit_id',$request->Edit);
    	return redirect()->route('Admin/Video/Edit');
    }

    public function edit(request $request){
    	$video = Video::get();
    	$edit_id = Session::get('edit_id');
    	$edit = Video::where('id',$edit_id)->first();
    	return view('Admin.Video.Index',compact('video','edit'));
    }

    public function update(request $request){
    	$update_id = $request->Update;
    	$video = Video::where('id',$update_id)->first();
    	$video->URL = $request->URL;
    	$video->save();
    	$request->session()->flash('success','Your Video Link Updated Successfully!');
    	return redirect()->route('Admin/Video');
    }


    public function delete(request $request){
    	
    }
}
