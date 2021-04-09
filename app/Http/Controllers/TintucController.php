<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class TintucController extends Controller
{
    public function kiemtralogin() {
        $Id_admin = Session::get('Id_admin');
        if(!$Id_admin) {
            return Redirect::to('/admin/trang-chu');
        } else {
            return Redirect::to('/admin') -> send();
        }
    }
    public function them_tin_tuc() {
    	$hang = DB::table('hang') -> orderby( 'Id_hang', 'desc') -> get();
        return view('admin.themtintuc') -> with('hang', $hang);
    }

    public function luu_tin_tuc(Request $request) {
        $data = array();
        $data['tieude'] = $request -> tieude;
        $data['tieude_khongdau'] = $request -> tieude_khongdau;
        
        if($request -> hasFile('image')) {
            $image = $request -> image;
            $image -> move('public/upload/tintuc', $image -> getClientOriginalName());
            $data['url_hinh'] = $image -> getClientOriginalName();
        } else $data['url_hinh'] = '';
        $data['tomtat'] = $request -> tomtat;
        $data['ngay'] = NOW();
        $data['noidung'] = $request -> noidung;
        $data['anhien'] = $request -> anhien;
        $data['Id_hang'] = $request -> Id_hang;
        $data['ngonngu'] = $request -> ngonngu;
        $data['tags'] = $request -> tags;
       
        DB::table('tintuc') -> insert($data);
        Session::put('message','Thêm thành công');
        return Redirect::to('/danh-sach-tin-tuc');
    }

    public function danh_sach_tin_tuc(){
        $tintuc = DB::table('tintuc')
                    -> join('hang', 'hang.Id_hang', '=', 'tintuc.Id_hang') 
                    -> orderby('Id_tin', 'desc') -> get();
        return view('admin.danhsachtintuc') -> with('tintuc', $tintuc);
    }

    public function sua_tin_tuc($Id_tin) {
        $suatin = DB::table('tintuc') -> where('Id_tin', $Id_tin) -> get();
        $hang =  DB::table('hang') -> orderby( 'Id_hang', 'desc') -> get();
        return view('admin.suatintuc') -> with('suatin', $suatin) -> with('hang', $hang);
    }

    public function cap_nhat_tin_tuc(Request $request, $Id_tin) {
        $data = array();
        $data['tieude'] = $request -> tieude;
        $data['tieude_khongdau'] = $request -> tieude_khongdau;
        if($request -> hasFile('image')) {
            $image = $request -> image;
            $image -> move('public/upload/tintuc', $image -> getClientOriginalName());
            $data['url_hinh'] = $image -> getClientOriginalName();
        }
        $data['tomtat'] = $request -> tomtat;
        $data['ngay'] = $request -> ngay;
        $data['noidung'] = $request -> noidung;
        $data['anhien'] = $request -> anhien;
        $data['Id_hang'] = $request -> Id_hang;
        $data['ngonngu'] = $request -> ngonngu;
        $data['tags'] = $request -> tags;
       
        DB::table('tintuc') -> where('Id_tin', $Id_tin) -> update($data);
        Session::put('message','Cập nhật thành công');
        return Redirect::to('/danh-sach-tin-tuc');
    }

    public function xoa_tin_tuc($Id_tin) {
        $suahang = DB::table('tintuc') -> where('Id_tin', $Id_tin) -> delete();
        Session::put('message','Xoá thành công');
        return Redirect::to('/danh-sach-tin-tuc');
    }

    public function tin_tuc(){
        $tintuc = DB::table('tintuc')
                    -> join('hang', 'hang.Id_hang', '=', 'tintuc.Id_hang') 
                    -> where('tintuc.anhien', '1')
                    -> orderby('Id_tin', 'desc') -> get();
        $hang =  DB::table('hang') -> where('anhien', '1') -> orderby( 'Id_hang', 'desc') -> get();         
        return view('pages.tintuc') -> with('tintuc', $tintuc) -> with('hang', $hang);
    }

    public function chi_tiet_tin($Id_tin) {
        $tintuc = DB::table('tintuc')
                    -> join('hang', 'hang.Id_hang', '=', 'tintuc.Id_hang') 
                    -> where('tintuc.anhien', '1')
                    -> where('Id_tin', $Id_tin)
                    -> orderby('Id_tin', 'desc') -> get();
        $hang =  DB::table('hang') -> where('anhien', '1') -> orderby( 'Id_hang', 'desc') -> get();         
        return view('pages.chitiettintuc') -> with('tintuc', $tintuc) -> with('hang', $hang);
    }
}
