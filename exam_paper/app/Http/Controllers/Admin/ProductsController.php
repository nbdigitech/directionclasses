<?php

namespace App\Http\Controllers\Admin;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\SubCategory;
use App\Board;
use File;
use Session;

class ProductsController extends Controller
{
    public function index(){
    	$product = Product::join('boards','boards.id','products.BoardId')->join('categories','categories.id','products.CategoryId')->join('sub_categories','sub_categories.id','products.SubCategoryId')->select('products.*','categories.Name as CategoryName','sub_categories.Name as SubCategoryName','boards.Name as BoardName')->get();
    	return view('Admin.Product.Index',compact('product'));
    }

    public function create(){
         $cat_id = Category::orderBy('id','desc')->get();
         $board = Board::orderBy('id','desc')->get();
         $sub_cat_id = SubCategory::orderBy('id','desc')->get();
    	return view('Admin.Product.Add',compact('cat_id','sub_cat_id','board'));
    }

    public function store(request $request){
    	$product = new Product;
    	$product->Title = $request->Title;
    	$product->Description = $request->Description;
        $product->Prise = $request->Prise;
        $product->CategoryId = $request->CategoryId;
        $product->SubCategoryId = $request->SubCategoryId;
        $product->BoardId = $request->BoardId;
        $product->Status = $request->Status;
        $product->PremOrFree = $request->PremOrFree;
    	if($request->hasFile('Image')){
    		$file = $request->file('Image');
    		$filename = rand(000000,999999).'.'.$file->getClientOriginalExtension();
    		$file->move(public_path('assets/uploads'),$filename);
    		$product->Image = $filename;
    	}

    	if($request->hasFile('PDF')){
    		$pdf_file = $request->file('PDF');
    		$pdf_filename = rand(000000,999999).'.'.$pdf_file->getClientOriginalExtension();
    		$pdf_file->move(public_path('assets/uploads'),$pdf_filename);
    		$product->PDF = $pdf_filename;
    	}

    	$product->save();
    	$request->session()->flash('success','Your File Uploaded successfully!');
    	return redirect()->route('Admin/Products');
    }


    public function delete(request $request){
    	$delete = Product::where('id',$request->Delete)->first();
    	if(File::exists('public/assets/uploads/'.$delete->Image) && File::exists('public/assets/uploads/'.$delete->PDF)){
    		File::delete('public/assets/uploads/'.$delete->Image);
    		File::delete('public/assets/uploads/'.$delete->PDF);
    		$delete->delete();
    	}

    	elseif(File::exists('public/assets/uploads/'.$delete->Image)){
    		File::delete('public/assets/uploads/'.$delete->Image);
    		$delete->delete();
    	}

    	elseif(File::exists('public/assets/uploads/'.$delete->PDF)){
    		File::delete('public/assets/uploads/'.$delete->PDF);
    		$delete->delete();
    	}

    	else{
    		$delete->delete();
    	}
    	$delete->delete();

    	$request->session()->flash('success','Your File Deleted Successfully!');
    	return redirect()->route('Admin/Products');
    }


    public function editsession(request $request){
    	Session::put('edit_id', $request->Edit);
    	return redirect()->route('Admin/Products/Edit');
    }

    public function edit(request $request){
          $cat_id = Category::orderBy('id','desc')->get();
         $board = Board::orderBy('id','desc')->get();
         $sub_cat_id = SubCategory::orderBy('id','desc')->get();
    	$edit_id = Session::get('edit_id');
    	$edit = Product::where('id',$edit_id)->first();
    	return view('Admin.Product.Add',compact('edit','cat_id','board','sub_cat_id'));
    }


    public function update(request $request){
    	$update_id  = $request->Update;
    	$product = Product::where('id',$update_id)->first();
    	$product->Title = $request->Title;
        $product->Description = $request->Description;
        $product->Prise = $request->Prise;
        $product->CategoryId = $request->CategoryId;
        $product->BoardId = $request->SubCategoryId;
        $product->BoardId = $request->BoardId;
        $product->Status = $request->Status;
        $product->PremOrFree = $request->PremOrFree;
        if($request->hasFile('Image')){
            $file = $request->file('Image');
            $filename = rand(000000,999999).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('assets/uploads'),$filename);
            $product->Image = $filename;
        }

        if($request->hasFile('PDF')){
            $pdf_file = $request->file('PDF');
            $pdf_filename = rand(000000,999999).'.'.$pdf_file->getClientOriginalExtension();
            $pdf_file->move(public_path('assets/uploads'),$pdf_filename);
            $product->PDF = $pdf_filename;
        }

    	$product->save();
    	$request->session()->flash('success','Your File Updated Successfully!');
    	return redirect()->route('Admin/Products');
    }
}
