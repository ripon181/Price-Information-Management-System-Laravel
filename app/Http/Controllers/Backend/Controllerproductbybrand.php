<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\tbl_brands;
use App\Models\tbl_products;

class Controllerproductbybrand extends Controller
{
    public $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });
    }
    public function showbybrand($brand_id){
        if (
            $brand_id == 1 && $this->user->can('tenda.view') ||
            $brand_id == 2 && $this->user->can('cisco.view') ||
            $brand_id == 3 && $this->user->can('meetion.view') ||
            $brand_id == 4 && $this->user->can('phyhome.view') ||
            $brand_id == 5 && $this->user->can('rosenberger.view') ||
            $brand_id == 6 && $this->user->can('ubiquiti.view') ||
            $brand_id == 7 && $this->user->can('solitine.view') ||
            $brand_id == 8 && $this->user->can('marsriva.view') ||
            $brand_id == 9 && $this->user->can('ipcom.view')
        ) {
            $products = tbl_products::where('brand_id', $brand_id)->get();
            return view('backend.pages.product_by_brand.productbybrand', compact('products'));
        } else {
            $exceptionMessage = 'Sorry, you are unauthorized to access this page.';
            return response()->view('backend.pages.errors.403', compact('exceptionMessage'), Response::HTTP_FORBIDDEN);
        }}
}
