<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Backend;
use App\Http\Controllers\Backend\Controllercategory;
use App\Http\Controllers\Backend\Controllerbrand;
use App\Http\Controllers\Backend\Controllerproduct;
use App\Http\Controllers\Backend\Controllerproductmanager;
use App\Http\Controllers\Backend\Controllercount;
use App\Http\Controllers\Backend\Controllerproductbybrand;
use App\Http\Controllers\Backend\Controllerlogin;
use App\Http\Controllers\Backend\Controllerroles;
use App\Http\Controllers\Backend\Controllerusers;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





// For login
Route::get('/', [Controllerlogin::class, 'index'])->name('adminlogin');
Route::post('/adminloginform', [Controllerlogin::class, 'adminlogin'])->name('adminloginform');

Route::group(['middleware'=>'admin'], function(){
Route::get('/dashboard', [Backend::class, 'index'])->name('dashboard');



// For Category
Route::get('/addcategory', [Controllercategory::class, 'index'])->name('addcategory');
Route::post('/insertcategory', [Controllercategory::class, 'insert'])->name('insertcategory');
Route::get('/viewcategory', [Controllercategory::class, 'view'])->name('viewcategory');
Route::get('/activecategory/{id}', [Controllercategory::class, 'active'])->name('activecategory');
Route::get('/inactivecategory/{id}', [Controllercategory::class, 'inactive'])->name('inactivecategory');
Route::get('/editcategory/{id}', [Controllercategory::class, 'edit'])->name('editcategory');
Route::post('/updatecategory/{id}', [Controllercategory::class, 'update'])->name('updatecategory');
Route::get('/deletecategory/{id}', [Controllercategory::class, 'delete'])->name('deletecategory');

// For Brand
Route::get('/addbrand', [Controllerbrand::class, 'index'])->name('addbrand');
Route::post('/insertbrand', [Controllerbrand::class, 'insert'])->name('insertbrand');
Route::get('/viewtbrand', [Controllerbrand::class, 'view'])->name('viewtbrand');
Route::get('/activebrand/{id}', [Controllerbrand::class, 'active'])->name('activebrand');
Route::get('/inactivebrand/{id}', [Controllerbrand::class, 'inactive'])->name('inactivebrand');
Route::get('/editbrand/{id}', [Controllerbrand::class, 'edit'])->name('editbrand');
Route::post('/updatebrand/{id}', [Controllerbrand::class, 'update'])->name('updatebrand');
Route::get('/deletebrand/{id}', [Controllerbrand::class, 'delete'])->name('deletebrand');

// For Product
Route::get('/addproduct', [Controllerproduct::class, 'index'])->name('addproduct');
Route::post('/insertproduct', [Controllerproduct::class, 'insert'])->name('insertproduct');
Route::get('/viewproduct', [Controllerproduct::class, 'view'])->name('viewproduct');
Route::get('/editproduct/{id}', [Controllerproduct::class, 'edit'])->name('editproduct');
Route::Post('/updateproduct/{id}', [Controllerproduct::class, 'update'])->name('updateproduct');
Route::get('/deleteproduct/{id}', [Controllerproduct::class, 'delete'])->name('deleteproduct');


// For Product Manager
Route::get('/addproductmanager', [Controllerproductmanager::class, 'index'])->name('addproductmanager');
Route::post('/insertproductmanager', [Controllerproductmanager::class, 'insert'])->name('insertproductmanager');
Route::get('/viewproductmanager', [Controllerproductmanager::class, 'view'])->name('viewproductmanager');
Route::get('/editproductmanager/{id}', [Controllerproductmanager::class, 'edit'])->name('editproductmanager');
Route::post('/updateproductmanager/{id}', [Controllerproductmanager::class, 'update'])->name('updateproductmanager');
Route::get('/deleteproductmanager/{id}', [Controllerproductmanager::class, 'delete'])->name('deleteproductmanager');

//Product By Brand
Route::get('/productbybrand/{brand_id}', [Controllerproductbybrand::class, 'showbybrand'])->name('productbybrand');

//For Roles & Permission
Route::get('/rolemanage', [Controllerroles::class, 'create'])->name('rolemanage');
Route::get('/roleindex', [Controllerroles::class, 'index'])->name('roleindex');
Route::post('/roleadd', [Controllerroles::class, 'store'])->name('roleadd');
Route::get('/roleedit/{id}', [Controllerroles::class, 'edit'])->name('roleedit');
Route::post('/roleupdate/{id}', [Controllerroles::class, 'update'])->name('roleupdate');
Route::get('/roledelete/{id}', [Controllerroles::class, 'delete'])->name('roledelete');

//For Users
Route::get('/userlist', [Controllerusers::class, 'index'])->name('userlist');
Route::get('/adduser', [Controllerusers::class, 'create'])->name('adduser');
Route::post('/insertuser', [Controllerusers::class, 'store'])->name('insertuser');
Route::get('/edituser/{id}', [Controllerusers::class, 'edit'])->name('edituser');
Route::post('/updateuser/{id}', [Controllerusers::class, 'update'])->name('updateuser');
Route::get('/deleteuser/{id}', [Controllerusers::class, 'delete'])->name('deleteuser');


Route::get('/logout', [Controllerlogin::class, 'adminlogout'])->name('adminlogout');
});