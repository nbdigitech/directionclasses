<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Board;
use App\Category;
use App\SubCategory;
use Session;
class BoardController extends Controller
{
    public function index(){
    	$board = Board::get();
    	return view('Admin.Board.Index',compact('board'));
    }

    public function store(request $request){
    	$board = new Board;
    	$board->Name = $request->Name;
    	$board->save();
    	$request->session()->flash('success','Board Added!');
    	return redirect()->route('Admin/Board');
    }

    public function delete(request $request){
    	$delete = Board::where('id',$request->Delete)->delete();
    	$request->session()->flash('deleted','Board Deleted Successful!');
    	return redirect()->route('Admin/Board');
    }

    public function editsession(request $request){
        Session::put('edit_id',$request->Edit);
        return redirect()->route('Admin/Board/Edit');
    }

    public function edit(request $request){
        $board = Board::get();
        $edit_id = Session::get('edit_id');
        $edit = Board::where('id',$edit_id)->first();
        return view('Admin.Board.Index',compact('board','edit'));
    }

    public function update(request $request){
        $update_id = $request->Update;
        $board = Board::where('id',$update_id)->first();
        $board->Name = $request->Name;
        $board->save();
        $request->session()->flash('success','Board Updated Successfully!');
        return redirect()->route('Admin/Board');
    }


    public function show_category(request $request){
        $board_id = $request->board_id;
        $data = Category::where('BoardId',$board_id)->get();
        foreach($data as $row){
           $data = '<option value="'.$row->id.'">'.$row->Name.'</option>';
           echo $data;

        }
        
    }

    public function show_sub_category(request $request){
        $cat_id = $request->cat_id;
        $data = SubCategory::where('CategoryId',$cat_id)->get();
        foreach($data as $row){
           $data_cat = '<option value="'.$row->id.'">'.$row->Name.'</option>';
           echo $data_cat;
        }
        
    }



}
