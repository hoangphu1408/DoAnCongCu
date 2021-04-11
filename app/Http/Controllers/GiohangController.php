<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Cart;
session_start();


class GiohangController extends Controller
{	
	public function luugiohang (Request $request) {
		
		$Id_sp = $request -> Id_sp;
		$soluong = $request -> soluong;
		$data_sp = DB::table('sanpham') -> where('Id_sp', $Id_sp) -> first();

		$data['id'] = $data_sp -> Id_sp;
		$data['qty'] = $soluong;
		$data['name'] = $data_sp -> tensp;
		$data['price'] = $data_sp -> gia;
		$data['weight'] = 1;
		$data['options']['image'] = $data_sp -> image;
		Cart::add($data);
		return Redirect() -> back();
	}

	public function giohang() {
		$hang = DB::table('hang') -> where('anhien','1') -> orderby('thutu','desc') -> get();
		if(Cart::count() == 0)
			return view('pages.empty') ->with('hang', $hang);
		else 
			return view('pages.giohang') -> with('hang', $hang);
	}

	public function xoagiohang($rowId) {
		Cart::update($rowId, 0);
		return Redirect::to('/giohang');
	}

	public function capnhatgiohang(Request $request) {
		foreach( $request -> rowId_sp as $i => $rowId ) {
			if( isset($request -> soluong[$i]) && $request -> soluong[$i] >= 0 )
				Cart::update($rowId, $request -> soluong[$i]);

		}
		return Redirect::to('/giohang');
	}
}