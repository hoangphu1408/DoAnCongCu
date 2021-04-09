<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class SanphamController extends Controller
{
    public function themsp() {
    	$Id_hang = 	DB::table('hang') -> orderby( 'Id_hang', 'desc') -> get();
    	return view('admin.themsp') -> with('Id_hang', $Id_hang);
    }

    public function danhsachsp() {
    	$danhsachsp = DB::table('hang') -> join('sanpham','sanpham.Id_hang','=','hang.Id_hang') -> get();
    	$control_danhsachsp  = view('admin.danhsachsp') -> with('danhsachsp', $danhsachsp);
    	return view('admin_layout') -> with('admin.danhsachsp', $control_danhsachsp);
    }

    public function luusp(Request $request) {
    	$data = array();
    	$data['tensp'] = $request -> tensp;
    	$data['tensp_khongdau'] = $request -> tensp_khongdau;
    	$data['thutu'] = $request -> thutu;
    	$data['anhien'] = $request -> anhien;
    	$data['ngonngu'] = $request -> ngonngu;
    	$data['gia'] = $request -> gia;
    	$data['Id_hang'] = $request -> Id_hang;
        $data['Mota'] = $request -> Mota;

        if($request -> hasFile('image')) {
            $allowedfileExtension=['jpg','png', 'jpeg'];
            $image = $request -> file('image');
            $flag = true;
            foreach ($image as $images) {
                $duoi = $images -> getClientOriginalExtension();
                $check = in_array($duoi, $allowedfileExtension);
                
                $data['image'] = $images -> getClientOriginalName();
                // $images -> move('public/upload', $images -> getClientOriginalName());
                if(!$check) {
                    $flag = false; 
                    Session::put('message','lôi file thành công');
                    return Redirect::to('/themsp');
                }
            }
            if ($flag) {
            // $image -> move('public/upload', $image -> getClientOriginalName());
            
                $Id_sp = DB::table('sanpham') -> insertGetId($data);
                Session::put('Id_sp', $Id_sp); $Id_sp = Session::get('Id_sp');
                foreach ($request -> image as $images) {
                    $filename = $images -> move('public/upload/', $images->getClientOriginalName());
                    // $filename = $images -> storeAs('public/upload/', $images->getClientOriginalName()); 
                    $data_hinh = array();
                    $data_hinh['Id_sp'] = $Id_sp;
                    $data_hinh['url_hinh'] = $filename;
                    
                    DB::table('hinh') -> insert($data_hinh);
                }
            }
        }
    	return Redirect::to('/view-them-thong-so');
    }

    public function view_them_thong_so () {

        return view('admin.themthongso');
    }

    public function view_sua_thong_so ($Id_sp) {
        $thongso = DB::table('thongso') -> where('Id_sp', $Id_sp) -> get();
        return view('admin.suathongso') -> with('thongso', $thongso);
    }

    public function sua_thong_so(Request $request, $Id_thongso) {
        $data = array();
        
        $data['manhinh'] = $request -> manhinh;
        $data['hedieuhanh'] = $request -> hedieuhanh;
        $data['cpu'] = $request -> cpu;
        $data['ram'] = $request -> ram;
        $data['bonhotrong'] = $request -> bonhotrong;
        $data['thenho'] = $request -> thenho;
        $data['thesim'] = $request -> thesim;
        $data['pin'] = $request -> pin;

        DB::table('thongso') -> where('Id_thongso', $Id_thongso) -> update($data);
        Session::put('message','Cập nhật thành công');
        return Redirect::to('danhsachsp');
    }

    public function them_thong_so (Request $request) {
      
        $data = array();
        $data['Id_sp'] = Session::get('Id_sp');
        $data['manhinh'] = $request -> manhinh;
        $data['hedieuhanh'] = $request -> hedieuhanh;
        $data['cpu'] = $request -> cpu;
        $data['ram'] = $request -> ram;
        $data['bonhotrong'] = $request -> bonhotrong;
        $data['thenho'] = $request -> thenho;
        $data['thesim'] = $request -> thesim;
        $data['pin'] = $request -> pin;

        DB::table('thongso') -> insert($data);
        Session::put('message','Thêm thành công');
        return Redirect::to('danhsachsp');
    }

    public function suasp($Id_sp) {
    	$Id_hang = 	DB::table('hang') -> orderby( 'Id_hang', 'desc') -> get();
    	$suasp = DB::table('sanpham') -> where('Id_sp', $Id_sp) -> get();
    	$control_suasp  = view('admin.suasp') -> with('suasp', $suasp) -> with('Id_hang', $Id_hang);
    	return view('admin_layout') -> with('admin.suasp', $control_suasp);
    }

    public function capnhatsp(Request $request, $Id_sp) {
    	$data = array();
    	$data['tensp'] = $request -> tensp;
    	$data['tensp_khongdau'] = $request -> tensp_khongdau;
    	$data['thutu'] = $request -> thutu;
    	$data['anhien'] = $request -> anhien;
    	$data['ngonngu'] = $request -> ngonngu;
    	$data['gia'] = $request -> gia;
        $data['Mota'] = $request -> Mota;
    	$data['Id_hang'] = $request -> Id_hang;
    	if($request -> hasFile('image')) {
            $image = $request -> image;
            $image -> move('public/upload/', $image -> getClientOriginalName());
            $data['image'] = $image -> getClientOriginalName();
        } 
    	

    	DB::table('sanpham') -> where('Id_sp', $Id_sp) -> update($data);
    	
    	return Redirect::to('/view-sua-thong-so/'.$Id_sp);
    }

    public function xoasp($Id_sp) {
        $xoahinh = DB::table('hinh') -> where('Id_sp', $Id_sp) -> delete();
        $thongso = DB::table('thongso') -> where('Id_sp', $Id_sp) -> delete();
    	$xoasp = DB::table('sanpham') -> where('Id_sp', $Id_sp) -> delete();
        Session::put('message','Xoá thành công');
        return Redirect::to('/danhsachsp');
    }

    //end code frontend sp

    public function chitietsp ($Id_sp) {
        $hang = DB::table('hang') -> where('anhien','1') -> get();
        $Id_hang = DB::table('sanpham') -> join('hang', 'sanpham.Id_hang', '=', 'hang.Id_hang') 
                                        -> select('sanpham.Id_hang')
                                        -> where('sanpham.Id_sp', $Id_sp) -> pluck('Id_hang');
                                        
        $chitietsp = DB::table('hang') 
                    -> join('sanpham', 'sanpham.Id_hang', '=', 'hang.Id_hang') 
                    -> where('sanpham.Id_sp', $Id_sp) -> where ('sanpham.anhien', '1')
                    -> get();
        
        $thongso = DB::table('thongso') -> where('Id_sp', $Id_sp) ->get();
        $hinh = DB::table('hinh') -> where('Id_sp', $Id_sp) -> limit(4) -> get();

        $sanpham = DB::table('sanpham') -> where('Id_hang', $Id_hang) -> limit(3) -> get();
        $tin = DB::table('tintuc') -> where('Id_hang', $Id_hang) -> limit(3) -> get();

        return view ('pages.chitietsp') -> with('hang', $hang) 
                                        -> with('chitietsp', $chitietsp) 
                                        -> with('thongso', $thongso)
                                        -> with('hinh', $hinh)
                                        -> with('sanpham', $sanpham)
                                        -> with('tin', $tin);
    }

    public function san_pham () {
 
        $hang = DB::table('hang') -> where('anhien','1') -> get();
        $sanpham = DB::table ('sanpham') -> where ('anhien', '1') -> orderby ('Id_sp', 'desc') -> limit(8) -> get();

        return view ('pages.sanpham') -> with('hang', $hang) -> with('sanpham', $sanpham);
    }

}
