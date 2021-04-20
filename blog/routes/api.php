<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/get-demo',function(){
	getParams();
});
Route::post('/post-form-urlencode',function(){
	postFormUrlEncode();
});
Route::post('/post-form-data',function(){
	postFormData();
});
Route::post('/post-json',function(){
	postJson();
});

function getParams()
{
	print_r($_GET);
	$id=$_GET['id'];
	$name=$_GET['name'];
	echo $id . ' ' . $name;
}
function postFormUrlEncode(){
	print_r($_POST);
	$firstParam = $_POST['first_param'];
	$secondParam = $_POST['second_param'];
	echo $firstParam . ' ' . $secondParam;
}
function postFormData(){
	print_r($_POST);
	$firstParam = $_POST['first_param'];
	$secondParam = $_POST['second_param'];
	echo $firstParam . ' ' . $secondParam;
}
function postJson(){
	$re =file_get_contents('php://input');
	$reArr=json_decode($re,true);
	print_r($reArr);
	$firstParam = $reArr['first_param'];
	$secondParam = $reArr['second_param'];
	echo $firstParam . ' ' . $secondParam;
}
// Route::get('Controller',[TestController::class,'test2']);
Route::post('insert',[TestController::class,'insert']);
// Route::get('Controller',[TestController::class,'select']);
// Route::get('Controller',[TestController::class,'updata']);
// Route::get('Controller',[TestController::class,'delete']);