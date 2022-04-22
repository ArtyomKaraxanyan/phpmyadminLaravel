<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {

        $sql = "SELECT EXISTS(SELECT 1, `password` FROM mysql.user WHERE user = '".$request->name."'AND password= PASSWORD('$request->password'))";
        $data = DB::select($sql);
        $user_name=$request->name;
        $password=$request->password;
        $resultArray = json_decode(json_encode($data), true);
        $exist = array_values($resultArray[0])[0];

        if($exist){

            $grands=DB::select("SHOW GRANTS FOR '$user_name'@'localhost'");
            session()->put('user_name',$user_name);
            session()->put('password',$password);
            session()->put('grands',$grands);
            return   redirect('/');

        }else{

            return redirect('/login');

        }

    }public function logout()
    {
//      $this->middleware('logout');
    }


}
