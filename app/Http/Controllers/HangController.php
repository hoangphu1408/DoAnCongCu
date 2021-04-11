<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class HangController extends Controller
{
    public function themhang() {
    	return view('admin.themhang');
    }

    public function danhsachhang() {
    	$danhsachhang = DB::table('hang') -> get();
    	$control_danhsachhang  = view('admin.danhsachhang') -> with('danhsachhang', $danhsachhang);
    	return view('admin_layout') -> with('admin.danhsachhang', $control_danhsachhang);
    }

    public function luuhang(Request $request) {
    	$data = array();
    	$data['tenhang'] = $request -> tenhang;
    	$data['tenhang_khongdau'] = $request -> tenhang_khongdau;
    	if($request -> hasFile('image')) {
    		$image = $request -> image;
    		$image -> move('public/upload/icon', $image -> getClientOriginalName());
    		$data['image'] = $image -> getClientOriginalName();
    	} else $data['image'] = '';
    	$data['thutu'] = $request -> thutu;
    	$data['anhien'] = $request -> anhien;
    	$data['ngonngu'] = $request -> ngonngu;
        print_r($data);
    	DB::table('hang') -> insert($data);
    	Session::put('message','Thêm thành công');
    	return Redirect::to('/danhsachhang');
    }

    public function suahang($Id_hang) {
    	$suahang = DB::table('hang') -> where('Id_hang', $Id_hang) -> get();
    	$control_suahang  = view('admin.suahang') -> with('suahang', $suahang);
    	return view('admin_layout') -> with('admin.suahang', $control_suahang);
    }

    public function capnhathang(Request $request, $Id_hang) {
    	$data = array();
    	$data['tenhang'] = $request -> tenhang;
    	$data['tenhang_khongdau'] = $request -> tenhang_khongdau;
    	if($request -> hasFile('image')) {
            $image = $request -> image;
            $image -> move('public/upload/icon', $image -> getClientOriginalName());
            $data['image'] = $image -> getClientOriginalName();
        } 
    	$data['thutu'] = $request -> thutu;
    	$data['anhien'] = $request -> anhien;
    	$data['ngonngu'] = $request -> ngonngu;

    	DB::table('hang') -> where('Id_hang', $Id_hang) -> update($data);
    	Session::put('message','Cập nhật thành công');
    	return Redirect::to('danhsachhang');
    }

    public function xoahang($Id_hang) {
    	$suahang = DB::table('hang') -> where('Id_hang', $Id_hang) -> delete();
    	Session::put('message','Xoá thành công');
    	return Redirect::to('danhsachhang');
    }

    //End code backend

    public function sanphamtrongloai ($Id_hang) {
        $hang = DB::table('hang') -> where('anhien','1') -> orderby('thutu','desc') -> get();
        $sanpham = DB::table ('hang') 
                    -> join ('sanpham', 'hang.Id_hang', '=', 'sanpham.Id_hang')
                    -> where ('sanpham.Id_hang', $Id_hang)
                    -> where ('sanpham.anhien', '1') 
                    -> orderby ('Id_sp', 'desc') 
                    -> get();
        $ten_hang = DB::table ('hang') -> where ('hang.Id_hang', $Id_hang) ->limit(1) -> get();
        return view('pages.sanphamtrongloai') -> with('hang', $hang) -> with('sanpham', $sanpham) -> with('ten_hang', $ten_hang) ;
    }
}

