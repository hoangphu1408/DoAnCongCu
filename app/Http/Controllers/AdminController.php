<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function kiemtralogin() {
        $Id_admin = Session::get('Id_admin');
        if($Id_admin) {
            return Redirect::to('/admin/trang-chu');
        } else {
            return Redirect::to('/admin') -> send();
        }
    }
    public function login() {
        // $this -> kiemtralogin();
    	return view('login_admin');
    }

    public function index() {
        // $this -> kiemtralogin();
        $sanpham = DB::table('sanpham') -> count();
        $hang = DB::table('hang') -> count();
        $donhang = DB::table('donhang') -> count();
        $tintuc = DB::table('tintuc') -> count();
    	return view('admin.AdminHome') -> with('sanpham', $sanpham) 
                                        -> with('hang', $hang) 
                                        -> with('donhang', $donhang) 
                                        -> with('tintuc', $tintuc);
    }

    public function dangnhap(Request $request) {
        $this -> kiemtralogin();
    	$username = $request -> username;
    	$password = $request -> password;

    	$result = DB::table('admin') -> where('username', $username) -> where('password', $password) -> first();
    	if($result) {
    		Session::put('hoten', $result -> hoten);
    		Session::put('username', $result -> username);
    		Session::put('Id_admin', $result -> Id_admin);
    		Session::put('email', $result -> email);
    		return Redirect::to('/admin/trang-chu');
    	} else {
    		Session::put('message','Tên đăng nhập hoặc mật khẩu sai');
    		return Redirect::to('/admin');
    	}
    }

    public function dangxuat() {
        /*$this -> kiemtralogin();*/
    	Session::put('hoten', null);
    	Session::put('Id_admin', null);
    	Session::put('email', null);
    	Session::put('username', null);
    	return Redirect::to('/admin');
    }
}
