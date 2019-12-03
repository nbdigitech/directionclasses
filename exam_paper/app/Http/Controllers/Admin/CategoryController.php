<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Session;
use App\Board;
class CategoryController extends Controller
{
    public function index(){
    	$category = Category::join('boards','boards.id','categories.BoardId')->select('categories.*','boards.Name as BoardName')->orderBy('categories.id','desc')->get();
        $board_id = Board::orderBy('id','desc')->get();
    	return view('Admin.Category.Index',compact('category','board_id'));
    }

    public function store(request $request){
    	$category = new Category;
    	$category->Name = $request->Name;
        $category->BoardId = $request->BoardId;
    	$category->save();
    	$request->session()->flash('success','Category Added!');
    	return redirect()->route('Admin/Category');
    }

    public function delete(request $request){
    	$delete = Category::where('id',$request->Delete)->delete();
    	$request->session()->flash('deleted','Category Deleted Successful!');
    	return redirect()->route('Admin/Category');
    }

    public function editsession(request $request){
        Session::put('edit_id',$request->Edit);
        return redirect()->route('Admin/Category/Edit');
    }

    public function edit(request $request){
       $category = Category::join('boards','boards.id','categories.BoardId')->select('categories.*','boards.Name as BoardName')->orderBy('categories.id','desc')->get();
        $edit_id = Session::get('edit_id');
        $board_id = Board::orderBy('id','desc')->get();
        $edit = Category::where('id',$edit_id)->first();
        return view('Admin.Category.Index',compact('category','edit','board_id'));
    }

    public function update(request $request){
        $update_id = $request->Update;
        $category = Category::where('id',$update_id)->first();
        $category->Name = $request->Name;
        $category->BoardId = $request->BoardId;
        $category->save();
        $request->session()->flash('success','Category Updated Successfully!');
        return redirect()->route('Admin/Category');
    }
}
