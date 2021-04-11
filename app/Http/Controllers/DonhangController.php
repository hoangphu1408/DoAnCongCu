<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Cart;
session_start();


class DonhangController extends controller
{	
	public function huy_don_hang() {
		$data = Session::get('data["donhang"]');
		Session::put('$data', null); 
		Cart::destroy();
		
		return Redirect::to('/trang-chu');
	}

	public function danh_sach_don_hang() {
		$danhsach_donhang = DB::table('donhang') -> get();
    	$control_danhsach_donhang  = view('admin.danhsachdonhang') -> with('danhsach_donhang', $danhsach_donhang);
    	return view('admin_layout') -> with('admin.danhsachdonhang', $control_danhsach_donhang);
	}

	public function chi_tiet_don_hang($Id_donhang) {
		$chitiet_donhang = DB::table('donhangchitiet') 
							-> join('donhang', 'donhangchitiet.Id_donhang', '=', 'donhang.Id_donhang')
							-> where('donhang.Id_donhang', $Id_donhang) -> get();
		return view('admin.chitietdonhang') -> with('chitiet_donhang', $chitiet_donhang);
	}

}