<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{
    public function index() {
    	$hang = DB::table('hang') -> where('anhien','1') -> orderby('thutu','desc') -> get();
    	$sanpham = DB::table ('sanpham') -> where('anhien', '1') -> orderby ('Id_sp', 'desc') -> limit(12) -> get();
        $tintuc = DB::table('tintuc') -> where('anhien', '1') -> orderby('Id_tin', 'desc') -> limit(8) -> get();
    	return view('pages.home') -> with('hang', $hang) -> with('sanpham', $sanpham) -> with('tintuc', $tintuc);
    }

    public function tim_kiem(Request $request) {
        $hang = DB::table('hang') -> where('anhien','1') -> orderby('thutu','desc') -> get();
    	$value = $request -> value;
        if($value == '') return view('pages.404') -> with('hang', $hang);
    	$timkiem_sanpham = DB::table ('sanpham') 
    						-> where ('anhien', '1') 
    						-> where ('tensp', 'like', '%'.$value.'%')
    						-> orderby ('Id_sp', 'desc') -> get();
    	$count = $timkiem_sanpham -> count();
        if($count == 0) return view('pages.404') -> with('hang', $hang);
        else return view('pages.timkiem') -> with('hang', $hang) -> with('timkiem_sanpham', $timkiem_sanpham);
    }

    public function tim_kiem_tin(Request $request) {
        $hang = DB::table('hang') -> where('anhien','1') -> orderby('thutu','desc') -> get();
        $value = $request -> value;
        if($value == '') return view('pages.404') -> with('hang', $hang);
        $timkiem_tin = DB::table ('tintuc') 
                            -> where ('anhien', '1') 
                            -> where ('tieude', 'like', '%'.$value.'%')
                            -> orderby ('Id_tin', 'desc') -> get();
        $hang = DB::table('hang') -> where('anhien','1') -> orderby('thutu','desc') -> get();
        $count = $timkiem_tin -> count();
        if($count == 0) return view('pages.404') -> with('hang', $hang);
        else
        return view('pages.timkiemtin') -> with('hang', $hang) -> with('timkiem_tin', $timkiem_tin);
    }

    public function lien_he(){
        $hang = DB::table('hang') -> where('anhien','1') -> orderby('thutu','desc') -> get();
        return view('pages.lienhe') -> with('hang', $hang);
    }
}
