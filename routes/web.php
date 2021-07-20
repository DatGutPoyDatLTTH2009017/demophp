<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\LayoutController;
use Illuminate\Support\Facades\Route;

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
//Route::prefix('admin')->group(function (){
//    Route::get('/hello',[\App\Http\Controllers\cuong_demo_controller::class,'viewindex'])->name('hello');
//    Route::get('/aboutus',[\App\Http\Controllers\cuong_demo_controller::class,'viewaboutus'])->name('aboutus');
//    Route::get('/contact',[\App\Http\Controllers\cuong_demo_controller::class,'viewcontact'])->name('contact');
//    Route::post('/hello',[\App\Http\Controllers\cuong_demo_controller::class,'viewpost'])->name('hellopost');
//    Route::get('/updateproduct/{id}',[\App\Http\Controllers\cuong_demo_controller::class,'update_product'])->name('update_product');
//    Route::post('/addproduct',[\App\Http\Controllers\cuong_demo_controller::class,'add_product'])->name('add_product');
//});
////router của hjnh
//
//Route::prefix('bai-tap-cua-hjnh')->group(function (){
//    Route::get('/login',[\App\Http\Controllers\Hjnh_demo_faceook_controller::class,'view_login'])->name('view_login');
//    Route::post('/register',[\App\Http\Controllers\Hjnh_demo_faceook_controller::class,'register'])->name('register');
//});
////router của hjnh
//
//
////routers của cường
//Route::prefix('baitapcuacuong')->group(function (){
//    Route::get('/login',[\App\Http\Controllers\cuong_demo_facebook_controler::class,'vew_login'])->name('view_login');
//    Route::post('/register',[\App\Http\Controllers\cuong_demo_facebook_controler::class,'register'])->name('register');
//    Route::post('/articlepost',[\App\Http\Controllers\cuong_demo_facebook_controler::class,'articlepost'])->name('article_post');
//    Route::get('/articleget',[\App\Http\Controllers\cuong_demo_facebook_controler::class,'articleget'])->name('article_get');
//    Route::get('/datlogin',[\App\Http\Controllers\cuong_demo_facebook_controler::class, 'datlogin'])->name('login');
//});
//routers của cường
//Route::prefix('baitapcuadet')->group(function (){
//    Route::post('/login',[\App\Http\Controllers\Datcontroller::class,'login'])->name('datlogin');
////});
//Route::get('/index',[\App\Http\Controllers\Datcontroller::class, 'index'])->name('datindex');
//Route::post('/register',[\App\Http\Controllers\Datcontroller::class, 'register'])->name('datregister');
//Route::post('/status',[\App\Http\Controllers\Datcontroller::class, 'status'])->name('status');
//
//Route::get('/home',[\App\Http\Controllers\Datcontroller::class, 'home'])->name('dathome');


Route::get('/data-handle/{id}/path',[\App\Http\Controllers\DataHandleController::class, 'handlePathVariable']);
Route::get('/data-handle/query-string',[\App\Http\Controllers\DataHandleController::class, 'handleQueryString']);
Route::get('/data-handle/form',[\App\Http\Controllers\DataHandleController::class, 'returnForm']);
Route::post('/data-handle/form',[\App\Http\Controllers\DataHandleController::class, 'processForm']);


Route::get('',[LayoutController::class,'masterLayout']);
Route::get('/form',[LayoutController::class,'create']);
Route::get('/list',[LayoutController::class,'list']);


Route::get('/admin/event/create',[EventController::class, 'create']);
Route::post('/admin/event/create',[EventController::class, 'store']);
Route::get('/admin/event/list',[EventController::class, 'list']);
Route::get('/admin/event/edit/{id}',[EventController::class, 'edit']);
Route::put('/admin/event/edit/{id}',[EventController::class, 'update']);
Route::delete('/admin/event/delete/{id}',[EventController::class, 'delete']);
//CRUD

//bai2
Route::get('/demo/validate/create',[\App\Http\Controllers\Datcontroller::class,'create']);
Route::post('/demo/validate/store',[\App\Http\Controllers\Datcontroller::class,'store']);

