<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Models\admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\tbl_brands;
use Image;
use File;

class Controllerbrand extends Controller
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
        if (is_null($this->user) || !$this->user->can('brand.view')) {
            $exceptionMessage = 'Sorry, you are unauthorized to access this page.';
            return response()->view('backend.pages.errors.403', compact('exceptionMessage'), Response::HTTP_FORBIDDEN);
        }
        return view('backend.pages.brand.add');
    }

    public function insert(Request $rqst){
        if (is_null($this->user) || !$this->user->can('brand.create')) {
            $exceptionMessage = 'Sorry, you are unauthorized to create any brand.';
            return response()->view('backend.pages.errors.403', compact('exceptionMessage'), Response::HTTP_FORBIDDEN);
        }
       $rqst->validate (['name' =>'required']);

       $brand = new tbl_brands;
       if($rqst->image){
        $image = $rqst->file('image');
        $customName = rand() . "." .$image->getClientOriginalExtension();
        $location = public_path("backend/brand/logo/" .$customName);
        Image::make($image)->resize(300, 200)->save($location);
       }

       $brand->name = $rqst->name;
       $brand->image = $customName;
       $brand->status = $rqst->status;
       $brand->save();
       toastr()->success('Brand has been Saved successfully!', '', ['timeOut' => 5000]);
       return redirect()->Route('viewtbrand');

    }

    public function view(){
        if (is_null($this->user) || !$this->user->can('brand.view')) {
            $exceptionMessage = 'Sorry, you are unauthorized to access this page.';
            return response()->view('backend.pages.errors.403', compact('exceptionMessage'), Response::HTTP_FORBIDDEN);
        }
        $brand = tbl_brands::all();
        return view('backend.pages.brand.manage', compact('brand'));
    }

    public function active($id){
        $brand = tbl_brands::find($id);
        $brand->status = '2';
        $brand->update();
        toastr()->success('Brand Inactive successfully!', '', ['timeOut' => 5000]);
        return back();
       
    }

    public function inactive($id){
        $brand = tbl_brands::find($id);
        $brand->status = '1';
        $brand->update();
        toastr()->success('Brand Active successfully!', '', ['timeOut' => 5000]);
        return back();
       
    }


    public function edit($id){
        if (is_null($this->user) || !$this->user->can('brand.edit')) {
            $exceptionMessage = 'Sorry, you are unauthorized to edit Brand.';
            return response()->view('backend.pages.errors.403', compact('exceptionMessage'), Response::HTTP_FORBIDDEN);
        }
        $brand = tbl_brands::find($id);
        return view('backend.pages.brand.edit', compact('brand'));

    }

    public function update(Request $rqst, $id){
        if (is_null($this->user) || !$this->user->can('brand.edit')) {
            $exceptionMessage = 'Sorry, you are unauthorized to edit Brand.';
            return response()->view('backend.pages.errors.403', compact('exceptionMessage'), Response::HTTP_FORBIDDEN);
        }
        $brand = tbl_brands::find($id);
        if($rqst->image){
            if(File::exists(public_path("backend/brand/logo/".$brand->image))){
                File::delete(public_path("backend/brand/logo/".$brand->image));
                $image = $rqst->file('image');
                $customName = rand() . "." .$image->getClientOriginalExtension();
                $location = public_path("backend/brand/logo/" .$customName);
                Image::make($image)->resize(300, 200)->save($location);
                $brand->name = $rqst->name;
                $brand->image = $customName;
                $brand->status = $rqst->status;
                $brand->update();

            }
        }
        else{
            $brand->name = $rqst->name;
            $brand->status = $rqst->status;
            $brand->update();

        }
        toastr()->success('Brand Update successfully!', '', ['timeOut' => 5000]);
        return redirect()->Route('viewtbrand');
    }

    public function delete($id){
        if (is_null($this->user) || !$this->user->can('brand.delete')) {
            $exceptionMessage = 'Sorry, you are unauthorized to delete Brand.';
            return response()->view('backend.pages.errors.403', compact('exceptionMessage'), Response::HTTP_FORBIDDEN);
        }
        $brand = tbl_brands::find($id);
        if(File::exists(public_path("backend/brand/logo/".$brand->image))){
            File::delete(public_path("backend/brand/logo/".$brand->image));
        }
        $brand->delete();
        toastr()->success('Brand Deleted successfully!', '', ['timeOut' => 5000]);
        return back();
    }

}
