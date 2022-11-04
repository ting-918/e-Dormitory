<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Session;
class StudentController extends Controller
{
    /**
     * 显示给定用户的个人资料。
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index(Request $request){
        // dd($request->session()->get('user', 'default'));
        $user = $request->session()->get('user', 'default')[0];
        $dormitory = DB::table('dormitory')->where("dormitoryid","=",$user->dormitoryid)->first();
        return view("student_homepage")->with(["user"=>$user,"dormitory"=>$dormitory]);
    }
}
