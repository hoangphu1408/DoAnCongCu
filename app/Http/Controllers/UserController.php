<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class UserController extends Controller
{
	public function dang_nhap (Request $request) {
        /*$this -> kiemtralogin();*/
    	$email = $request -> email;
    	$password = md5($request -> password);
        
    	$result = DB::table('user') -> where('email', $email) -> where('password', $password) -> first();
    	if($result) {
    		Session::put('hoten', $result -> hoten);
    		Session::put('email', $result -> email);
    		Session::put('Id_user', $result -> Id_user);
            // Session::put('Id_user1', $result -> Id_user);
    		Session::put('dienthoai', $result -> dienthoai);
    		Session::put('diachi', $result -> diachi);
    		return Redirect::to('/trang-chu');
    	} else {
    		Session::put('message','Email hoặc mật khẩu sai');
    		return Redirect() -> back();
    	}
    }

    public function dang_xuat() {
        /*$this -> kiemtralogin();*/
    	Session::put('hoten', null);
    	Session::put('Id_user', null); //Session::put('Id_user1', null);
    	Session::put('email', null);
    	Session::put('dienthoai', null);
    	Session::put('diachi', null);
    	return Redirect::to('/trang-chu');
    }

    public function dang_ky() {
        $hang = DB::table('hang') -> where('anhien','1') -> get();
        return view ('pages.dangky') -> with('hang', $hang);
    }

    public function dang_ky_tc(Request $request) {
        $data = array();
        $data['hoten'] = $request -> hoten;
        $data['email'] = $request -> email;

        $count = DB::table('user') -> where('email', $data['email']) -> count();
        if($count > 0){
            Session::put('message','Email đã tồn tại');
            return Redirect::to('/dang-ky');
        }

        $data['password'] = md5($request -> password);
        $repass = md5($request -> repass);
        if($repass != $data['password']){
            Session::put('message','Mật khẩu nhập lại không chính xác');
            return Redirect::to('/dang-ky');
        }
        $data['dienthoai'] = $request -> dienthoai;
        $data['diachi'] = $request -> diachi;

        $Id_user = DB::table('user') -> insertGetId($data);

        Session::put('Id_user', $Id_user);  //Session::put('Id_user1', $Id_user);
        Session::put('hoten', $request -> hoten);
        Session::put('email', $request -> email);
        Session::put('dienthoai', $request -> dienthoai);
        Session::put('diachi', $request -> diachi);
        Session::put('message','Đăng ký thành công');

       return Redirect::to('/trang-chu');
    }
}