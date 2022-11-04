<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Redirect;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /**
     * 显示给定用户的个人资料。
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show(){
        return view("login");
    }

    public function login(Request $request){
        $choice = $request->input("choice");
        $id = $request->input("id");
        $pwd = $request->input("pwd");
        if($choice == "stu"){
            $user = DB::table('student')
                ->where('studentid', '=', $id)
                ->where('pwd', '=', $pwd)
                ->get();
            session(["user"=>$user]);
            if (!$user->isEmpty())return redirect()->route("student");
            else return redirect()->back();
        }
        else if($choice == "man") return route("login");
        else return redirect()->back();

    }
}
