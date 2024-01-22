<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\tbl_brands;
use App\Models\tbl_productManager;
use Image;
use File;

class Controllerproductmanager extends Controller
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
    if (is_null($this->user) || !$this->user->can('productmanager.view')) {
        $exceptionMessage = 'Sorry, you are unauthorized to access this page.';
        return response()->view('backend.pages.errors.403', compact('exceptionMessage'), Response::HTTP_FORBIDDEN);
    }
        $brands = tbl_brands::all();
        return view('backend.pages.product_manager.add', compact('brands'));
   }

   public function insert(Request $rqst){
    if (is_null($this->user) || !$this->user->can('productmanager.create')) {
        $exceptionMessage = 'Sorry, you are unauthorized to create any product manager.';
        return response()->view('backend.pages.errors.403', compact('exceptionMessage'), Response::HTTP_FORBIDDEN);
    }
    $rqst->validate (['name' =>'required', 'brand_id' =>'required', 'phoneNumber' =>'required', 'email' =>'required','image' =>'required']);

    $productsManager = new tbl_productManager;
    if($rqst->image){
        $image = $rqst->file('image');
        $customName = rand() . "." .$image->getClientOriginalExtension();
        $location = public_path("backend/product_manager/" .$customName);
        Image::make($image)->resize(300, 200)->save($location);
       }

       $productsManager->name = $rqst->name;
       $productsManager->brand_id =$rqst->brand_id;
       $productsManager->phoneNumber =$rqst->phoneNumber;
       $productsManager->email =$rqst->email;
       $productsManager->image = $customName;
       $productsManager->save();
       toastr()->success('Product Manager Added successfully!', '', ['timeOut' => 5000]);
       return redirect()->Route('viewproductmanager');
    }

    public function view(){
        if (is_null($this->user) || !$this->user->can('productmanager.view')) {
            $exceptionMessage = 'Sorry, you are unauthorized to access this page.';
            return response()->view('backend.pages.errors.403', compact('exceptionMessage'), Response::HTTP_FORBIDDEN);
        }
        $productsManager = tbl_productManager::all();
        $brands = tbl_brands::all();
        return view('backend.pages.product_manager.manage', compact('productsManager','brands'));
    }

    public function edit($id){
        if (is_null($this->user) || !$this->user->can('productmanager.edit')) {
            $exceptionMessage = 'Sorry, you are unauthorized to edit any product manager.';
            return response()->view('backend.pages.errors.403', compact('exceptionMessage'), Response::HTTP_FORBIDDEN);
        }
        $productsManager = tbl_productManager::find($id);
        $brands = tbl_brands::all();
        return view('backend.pages.product_manager.edit', compact('productsManager','brands'));

    }

    public function update(Request $rqst, $id){
        if (is_null($this->user) || !$this->user->can('productmanager.edit')) {
            $exceptionMessage = 'Sorry, you are unauthorized to edit any product manager.';
            return response()->view('backend.pages.errors.403', compact('exceptionMessage'), Response::HTTP_FORBIDDEN);
        }
        $productsManager = tbl_productManager::find($id);
        if($rqst->image){
            if(File::exists(public_path("backend/product_manager/".$productsManager->image))){
                File::delete(public_path("backend/product_manager/".$productsManager->image));
                $image = $rqst->file('image');
                $customName = rand() . "." .$image->getClientOriginalExtension();
                $location = public_path("backend/product_manager/" .$customName);
                Image::make($image)->resize(300, 200)->save($location);
                
                $productsManager->name = $rqst->name;
                $productsManager->brand_id =$rqst->brand_id;
                $productsManager->phoneNumber =$rqst->phoneNumber;
                $productsManager->email =$rqst->email;
                $productsManager->image = $customName;
                $productsManager->update();

        }
    }
    else{
                $productsManager->name = $rqst->name;
                $productsManager->brand_id =$rqst->brand_id;
                $productsManager->phoneNumber =$rqst->phoneNumber;
                $productsManager->email =$rqst->email;
                $productsManager->update();

    }
    toastr()->success('Product Manager Update successfully!', '', ['timeOut' => 5000]);
        return redirect()->Route('viewproductmanager');
    }

    public function delete($id){
        if (is_null($this->user) || !$this->user->can('productmanager.delete')) {
            $exceptionMessage = 'Sorry, you are unauthorized to delete any product manager.';
            return response()->view('backend.pages.errors.403', compact('exceptionMessage'), Response::HTTP_FORBIDDEN);
        }
        $productsManager = tbl_productManager::find($id);
        if(File::exists(public_path("backend/product_manager/".$productsManager->image))){
            File::delete(public_path("backend/product_manager/".$productsManager->image));
        }
        $productsManager->delete();
        toastr()->success('Product Manager Deleted successfully!', '', ['timeOut' => 5000]);
        return back();
    }
}
