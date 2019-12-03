<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SubCategory;
use App\Category;
use App\Board;
use Session;
class SubCategoryController extends Controller
{
    public function index(){
    	$category = SubCategory::join('categories','categories.id','sub_categories.CategoryId')->join('boards','boards.id','sub_categories.BoardId')->select('sub_categories.*','categories.Name as CategoryName','boards.Name as BoardName')->get();
        $board_id = Board::orderBy('id','desc')->get();
        $cat_id = Category::orderBy('id','desc')->get();
    	return view('Admin.SubCategory.Index',compact('category','cat_id','board_id'));
    }

    public function store(request $request){
    	$category = new SubCategory;
    	$category->Name = $request->Name;
        $category->CategoryId = $request->CategoryId;
        $category->BoardId = $request->BoardId;
    	$category->save();
    	$request->session()->flash('success','SubCategory Added!');
    	return redirect()->route('Admin/SubCategory');
    }

    public function delete(request $request){
    	$delete = SubCategory::where('id',$request->Delete)->delete();
    	$request->session()->flash('deleted','SubCategory Deleted Successful!');
    	return redirect()->route('Admin/SubCategory');
    }

    public function editsession(request $request){
        Session::put('edit_id',$request->Edit);
        return redirect()->route('Admin/SubCategory/Edit');
    }

    public function edit(request $request){
        $board_id = Board::orderBy('id','desc')->get();
        $category = SubCategory::join('categories','categories.id','sub_categories.CategoryId')->join('boards','boards.id','sub_categories.BoardId')->select('sub_categories.*','categories.Name as CategoryName','boards.Name as BoardName')->get();
        $edit_id = Session::get('edit_id');
        $cat_id = Category::orderBy('id','desc')->get();
        $edit = SubCategory::where('id',$edit_id)->first();
        return view('Admin.SubCategory.Index',compact('category','edit','cat_id','board_id'));
    }

    public function update(request $request){
        $update_id = $request->Update;
        $category = SubCategory::where('id',$update_id)->first();
        $category->Name = $request->Name;
        $category->BoardId = $request->BoardId;
        $category->CategoryId = $request->CategoryId;
        $category->save();
        $request->session()->flash('success','SubCategory Updated Successfully!');
        return redirect()->route('Admin/SubCategory');
    }
}
