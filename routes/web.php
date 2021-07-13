<?php

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



Route::get('/',function (){
    return view('welcome');
});
Route::get('/data-handle/{id}/path',[\App\Http\Controllers\DataHandleController::class, 'handlePathVariable']);
Route::get('/data-handle/query-string',[\App\Http\Controllers\DataHandleController::class, 'handleQueryString']);
Route::get('/data-handle/form',[\App\Http\Controllers\DataHandleController::class, 'returnForm']);
Route::post('/data-handle/form',[\App\Http\Controllers\DataHandleController::class, 'processForm']);

