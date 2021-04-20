<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Response\ResponseJson;

class TestController extends Controller
{
    use ResponseJson;
    public function index()
    {
        return view('api/index');
    }
    // public function select(){
        
    //     $users=DB::table('user')->get();
        
    //     return $users;
    // }
    // public function updata() {
    //  $name = request()->name;
    //  $age=request()->age;
    //  $email=request()->email;
    //  DB::table('user')->insert(
    //   ['name' => $name='qin','age'=>$age=14,'email'=>$email='xong@126.com']);
    //  $users = DB::table('user')->get();
    //  return json_encode($users);
    //  }
    //  public function delete() {
    //   $id = request()->id;
    //   DB::table('user')
    //    ->where('id', $id=23)
    //    ->delete();
    //   }
    //   $users = DB::table('user')->get();
    //   return json_encode($users);
    //   }
//     public function test1(){
//     	  return phpinfo();
//     }
    // public function test2(){
    // 	  echo Input::POST('id','10086');
    // }
    public function insert(Request $request){
        $input = $request->all();
    	DB::table('user')
    	->insert($input);
        return json_encode(['code'=>0,'msg'=>'success','data'=>$input]);
    }
    // public function update(){
    //  DB::table('user')
    // 	->where('id','1')
    // 	->update(['name' => '小刚']);
    // 	return json_encode($user);
    // }
    // public function select(){
    // 	$user = DB::table('user')
    // 	->get();
    // 	dd($user);
    // }
    // public function delete(){
    //     DB::table('user')
    // 	->where('id','2')
    // 	->delete();
    //     return json_encode($delete);
    // }
}