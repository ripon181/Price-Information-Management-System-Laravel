<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Models\admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\tbl_category;

class Controllercategory extends Controller
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
        if (is_null($this->user) || !$this->user->can('category.view')) {
            $exceptionMessage = 'Sorry, you are unauthorized to access this page.';
            return response()->view('backend.pages.errors.403', compact('exceptionMessage'), Response::HTTP_FORBIDDEN);
        }
        return view('backend.pages.category.add');
    }

    public function insert(Request $rqst){
        if (is_null($this->user) || !$this->user->can('category.create')) {
            $exceptionMessage = 'Sorry, you are unauthorized to create any Category.';
            return response()->view('backend.pages.errors.403', compact('exceptionMessage'), Response::HTTP_FORBIDDEN);
        }
        $category = new tbl_category;
        $category->name = $rqst->name;
        $category->status = $rqst->status;
        $category->save();
        toastr()->success('Category has been Saved successfully!', '', ['timeOut' => 5000]);
        return redirect()->Route('viewcategory');
    }

    public function view(){
        if (is_null($this->user) || !$this->user->can('category.view')) {
            $exceptionMessage = 'Sorry, you are unauthorized to access this page.';
            return response()->view('backend.pages.errors.403', compact('exceptionMessage'), Response::HTTP_FORBIDDEN);
        }
        $categories = tbl_category::all();
        return view('backend.pages.category.manage' , compact('categories'));
    }

    public function active($id){
        $category = tbl_category::find($id);
        $category->status = '2';
        $category->update();
        toastr()->success('Category Inactive successfully!', '', ['timeOut' => 5000]);
        return back();
       
    }

    public function inactive($id){
        $category = tbl_category::find($id);
        $category->status = '1';
        $category->update();
        toastr()->success('Category Active successfully!', '', ['timeOut' => 5000]);
        return back();
       
    }

    public function edit($id){
        if (is_null($this->user) || !$this->user->can('category.edit')) {
            $exceptionMessage = 'Sorry, you are unauthorized to edit any category.';
            return response()->view('backend.pages.errors.403', compact('exceptionMessage'), Response::HTTP_FORBIDDEN);
        }
        if (is_null($this->user) || !$this->user->can('category.edit')) {
            abort(403, 'Sorry !! You are Unauthorized to view any admin !');
        }
        $category = tbl_category::find($id);
        return view('backend.pages.category.edit', compact('category'));
    }

    public function update(Request $rqst, $id){
        if (is_null($this->user) || !$this->user->can('category.edit')) {
            $exceptionMessage = 'Sorry, you are unauthorized to create any category.';
            return response()->view('backend.pages.errors.403', compact('exceptionMessage'), Response::HTTP_FORBIDDEN);
        }
        $category = tbl_category::find($id);
        $category->name = $rqst->name;
        $category->status = $rqst->status;
        $category->update();
        toastr()->success('Category has been updated successfully!', '', ['timeOut' => 5000]);
        return redirect()->Route('viewcategory');

    }

    public function delete($id){
        if (is_null($this->user) || !$this->user->can('category.delete')) {
            $exceptionMessage = 'Sorry, you are unauthorized to delete any category.';
            return response()->view('backend.pages.errors.403', compact('exceptionMessage'), Response::HTTP_FORBIDDEN);
        }
        $category = tbl_category::find($id);
        $category->delete();
        toastr()->success('Category has been Deleted successfully!', '', ['timeOut' => 5000]);
        return back();
    }
}