<?php

namespace App\Http\Controllers\admin;
use Session;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(){
        $result = Category::orderBy('id','desc')->paginate(12);
    	return view('admin.category.Index',compact('result'));
    }

    public function create(){
    	return view('admin.category.Add');
    }

    public function store(request $request){
        $request->validate(['BoardName'=>'required']);
    	$store = new Category;
        $store->BoardName = $request->BoardName;
        $store->save();
        $request->session()->flash('success','Successfull! Board Category Submited');
        return redirect('admin/Category/Add');
    }

    public function editsession(request $request){
        Session::put('EditSession',$request->Edit);
        return redirect()->route('admin/Category/Edit');
    }

    public function edit(){
        $get_ses = Session::get('EditSession');
        $edit = Category::where('id',$get_ses)->first();
    	return view('admin.category.Add',compact('edit'));
    }

    public function update(request $request){
        $request->validate(['BoardName'=>'required']);
        $store = Category::where('id',$request->Update)->first();
        $store->BoardName = $request->BoardName;
        $store->save();
        $request->session()->flash('success','Successfull! Board Category Updated');
        return redirect('admin/Category/Add');	
    }

    public function destroy(request $request){
    	Category::where('id',$request->Delete)->delete();
        $request->session()->flash('success','Board Deleted Successful!');
        return redirect('admin/Category');
    }
}
