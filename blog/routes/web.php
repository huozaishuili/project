<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\home\IndexController;
use App\Http\Controllers\admin\IndexController2;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('Controller',[TestController::class,'index']);
// Route::get('Controller/home',[IndexController::class,'index']);
// Route::get('Controller/admin',[IndexController2::class,'index']);
// Route::get('shitu',function(){
// 	return view('index');
// });
// Route::get('shuzu/{title?}',function($title='我是标题'){
// 	return view('index',['title'=>$title]);
// });
// Route::get('with/{title?}',function($title='我是标题'){
// 	return view('index')->with('title',$title);
// });
// Route::get('update',[TestController::class,'update']);
// Route::get('select',[TestController::class,'select']);
// Route::get('delete',[TestController::class,'delete']);