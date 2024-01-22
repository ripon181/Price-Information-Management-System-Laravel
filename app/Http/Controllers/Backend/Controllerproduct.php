<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\tbl_category;
use App\Models\tbl_brands;
use App\Models\tbl_products;
use Image;
use File;

class Controllerproduct extends Controller
{
    public $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });
    }
    public function index(){
        if (is_null($this->user) || !$this->user->can('product.create')) {
            $exceptionMessage = 'Sorry, you are unauthorized to access this page.';
            return response()->view('backend.pages.errors.403', compact('exceptionMessage'), Response::HTTP_FORBIDDEN);
        }
        $categories = tbl_category::all();
        $brands = tbl_brands::all();
        return view('backend.pages.product.add', compact('categories','brands'));
    }

    public function insert(Request $rqst){
        if (is_null($this->user) || !$this->user->can('product.create')) {
            $exceptionMessage = 'Sorry, you are unauthorized to create any product.';
            return response()->view('backend.pages.errors.403', compact('exceptionMessage'), Response::HTTP_FORBIDDEN);
        }
        $rqst->validate (['product_name' =>'required', 'product_model' =>'required', 'category_id' =>'required', 'brand_id' =>'required','image' =>'required', 'product_stock' =>'required', 'product_dpprice' =>'required', 'product_mrpprice' =>'required', 'product_shortdesc' =>'required']);

        $products = new tbl_products;
        if($rqst->image){
            $image = $rqst->file('image');
            $customName = rand() . "." .$image->getClientOriginalExtension();
            $location = public_path("backend/products/" .$customName);
            Image::make($image)->resize(300, 200)->save($location);
           }

           $products->product_name = $rqst->product_name;
           $products->product_model =$rqst->product_model;
           $products->category_id =$rqst->category_id;
           $products->brand_id =$rqst->brand_id;
           $products->image = $customName;
           $products->product_stock =$rqst->product_stock;
           $products->product_dpprice =$rqst->product_dpprice;
           $products->product_mrpprice =$rqst->product_mrpprice;
           $products->product_offerprice =$rqst->product_offerprice;
           $products->product_shortdesc =$rqst->product_shortdesc;
           $products->save();
           toastr()->success('Product Added successfully!', '', ['timeOut' => 5000]);
           return redirect()->Route('viewproduct');
    }

    public function view(){
        if (is_null($this->user) || !$this->user->can('product.view')) {
            $exceptionMessage = 'Sorry, you are unauthorized to access this page.';
            return response()->view('backend.pages.errors.403', compact('exceptionMessage'), Response::HTTP_FORBIDDEN);
        }
        $products = tbl_products::all();
        $categories = tbl_category::all();
        $brands = tbl_brands::all();
        return view('backend.pages.product.manage', compact('products','categories','brands'));
    }

    public function edit($id){
        if (is_null($this->user) || !$this->user->can('product.edit')) {
            $exceptionMessage = 'Sorry, you are unauthorized to edit any product.';
            return response()->view('backend.pages.errors.403', compact('exceptionMessage'), Response::HTTP_FORBIDDEN);
        }
        $product = tbl_products::find($id);
        $categories = tbl_category::all();
        $brands = tbl_brands::all();
        return view('backend.pages.product.edit', compact('product','categories','brands'));

    }

    public function update(Request $rqst, $id){
        if (is_null($this->user) || !$this->user->can('product.edit')) {
            $exceptionMessage = 'Sorry, you are unauthorized to edit any product.';
            return response()->view('backend.pages.errors.403', compact('exceptionMessage'), Response::HTTP_FORBIDDEN);
        }
        $product = tbl_products::find($id);
        if($rqst->image){
            if(File::exists(public_path("backend/products/".$product->image))){
                File::delete(public_path("backend/products/".$product->image));
                $image = $rqst->file('image');
                $customName = rand() . "." .$image->getClientOriginalExtension();
                $location = public_path("backend/products/" .$customName);
                Image::make($image)->resize(300, 200)->save($location);
                
                $product->product_name = $rqst->product_name;
                $product->product_model = $rqst->product_model;
                $product->category_id = $rqst->category_id;
                $product->brand_id = $rqst->brand_id;
                $product->image = $customName;
                $product->product_stock =$rqst->product_stock;
                $product->product_dpprice =$rqst->product_dpprice;
                $product->product_mrpprice =$rqst->product_mrpprice;
                $product->product_offerprice =$rqst->product_offerprice;
                $product->product_shortdesc =$rqst->product_shortdesc;
                $product->update();

        }
    }
    else{
                $product->product_name = $rqst->product_name;
                $product->product_model = $rqst->product_model;
                $product->category_id = $rqst->category_id;
                $product->brand_id = $rqst->brand_id;
                $product->product_stock =$rqst->product_stock;
                $product->product_dpprice =$rqst->product_dpprice;
                $product->product_mrpprice =$rqst->product_mrpprice;
                $product->product_offerprice =$rqst->product_offerprice;
                $product->product_shortdesc =$rqst->product_shortdesc;
                $product->update();

    }
    toastr()->success('Product Update successfully!', '', ['timeOut' => 5000]);
        return redirect()->Route('viewproduct');
    }

    public function delete($id){
        if (is_null($this->user) || !$this->user->can('product.delete')) {
            $exceptionMessage = 'Sorry, you are unauthorized to delete any product.';
            return response()->view('backend.pages.errors.403', compact('exceptionMessage'), Response::HTTP_FORBIDDEN);
        }
        $product = tbl_products::find($id);
        if(File::exists(public_path("backend/products/".$product->image))){
            File::delete(public_path("backend/products/".$product->image));
        }
        $product->delete();
        toastr()->success('Product Deleted successfully!', '', ['timeOut' => 5000]);
        return back();
    }
}
