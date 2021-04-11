<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Cart;
session_start();


class CheckController extends controller
{
	public function login_check() {
		
		$hang = DB::table('hang') -> where('anhien','1') -> get();
		return view ('pages.dangnhap') -> with('hang', $hang);
	}

	public function kiemtralogin() {
        $Id_user = Session::get('Id_user');
        if($Id_user) {
            return Redirect::to('/thanh-toan-1');
        } else {
            return Redirect::to('/login-check') -> send();
        }
    }

	public function thanh_toan_1() {
		$this -> kiemtralogin();
		$hang = DB::table('hang') -> where('anhien','1') -> get();
		$Id_user = Session::get('Id_user');
		$user = DB::table('user') -> where('Id_user', $Id_user) -> get();
		return view ('pages.thanhtoan1') -> with('hang', $hang) -> with('user', $user);
	}

	public function thanh_toan_2(Request $request) {
		$this -> kiemtralogin();
		$data_donhang = array();
		$data_donhang['hoten_nguoinhan'] = $request -> hoten_nguoinhan;
		$data_donhang['email_nguoinhan'] = $request -> email_nguoinhan;
		$data_donhang['diachi_nguoinhan'] = $request -> diachi_nguoinhan;
		$data_donhang['sdt_nguoinhan'] = $request -> sdt_nguoinhan;

		Session::put('data_donhang', $data_donhang);
		print_r($data_donhang);
		$hang = DB::table('hang') -> where('anhien','1') -> get();
		return view ('pages.thanhtoan2') -> with('hang', $hang);
	}

	public function thanh_toan_3(Request $request) {
		$this -> kiemtralogin();
		$data_donhang = Session::get('data_donhang');
		$data_donhang['ptgh'] = $request -> ptgh;
		Session::put('data_donhang', $data_donhang); print_r($data_donhang);
		$hang = DB::table('hang') -> where('anhien','1') -> get();
		return view ('pages.thanhtoan3') -> with('hang', $hang);
	}

	public function thanh_toan_4(Request $request) {
		$this -> kiemtralogin();
		$data_donhang = Session::get('data_donhang');
		$data_donhang['pttt'] = $request -> pttt;

		Session::put('data_donhang', $data_donhang);

		$hang = DB::table('hang') -> where('anhien','1') -> get();
		return view ('pages.thanhtoan4') -> with('hang', $hang);
	}

	public function dat_hang(Request $request) {
		$this -> kiemtralogin();
		$data_donhang = Session::get('data_donhang');
		
		
		$hang = DB::table('hang') -> where('anhien','1') -> get();
		$data_donhang['Id_user'] = Session::get('Id_user');
		$data_donhang['thoigiandathang'] = now();
		$data_donhang['tinhtrang'] = 1;
		$data_donhang['thanhtoan'] = 1;
		$data_donhang['tongtien'] = Cart::subtotal();
		
		$Id_donhang = DB::table('donhang') -> insertGetId($data_donhang);
			$content = Cart::content();
			foreach ($content as $value) {
					
				$data_chitiet['Id_donhang'] = $Id_donhang;
				$data_chitiet['Id_sp'] = $value -> id;
				$data_chitiet['tensp'] = $value -> name;
				$data_chitiet['soluong'] = $value -> qty;
				$data_chitiet['gia'] = $value -> price;
			}
		DB::table('donhangchitiet') -> insert($data_chitiet);

		if ($data_donhang['pttt'] == 'chuyenkhoan') {
			session(['cost_id' => $request->id]);
	        session(['url_prev' => url()->previous()]);
	        $vnp_TmnCode = "4BNM9AGC"; //Mã website tại VNPAY 
	        $vnp_HashSecret = "MDDVCYYHAUKRZJJJQLQZWJJQKOEUEBMW"; //Chuỗi bí mật
	        $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
	        $vnp_Returnurl = "http://localhost/DienthoaiLaravel/thanh-cong";
	        $vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
	        $vnp_OrderInfo = "Thanh toán hóa đơn phí dich vụ";
	        $vnp_OrderType = 'billpayment';
	        $vnp_Amount = str_replace(',', '', Cart::subtotal()) * 100;
	        $vnp_Locale = 'vn';
	        $vnp_IpAddr = request()->ip();

	        $inputData = array(
	            "vnp_Version" => "2.0.0",
	            "vnp_TmnCode" => $vnp_TmnCode,
	            "vnp_Amount" => $vnp_Amount,
	            "vnp_Command" => "pay",
	            "vnp_CreateDate" => date('YmdHis'),
	            "vnp_CurrCode" => "VND",
	            "vnp_IpAddr" => $vnp_IpAddr,
	            "vnp_Locale" => $vnp_Locale,
	            "vnp_OrderInfo" => $vnp_OrderInfo,
	            "vnp_OrderType" => $vnp_OrderType,
	            "vnp_ReturnUrl" => $vnp_Returnurl,
	            "vnp_TxnRef" => $vnp_TxnRef,
	        );

	        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
	            $inputData['vnp_BankCode'] = $vnp_BankCode;
	        }
	        ksort($inputData);
	        $query = "";
	        $i = 0;
	        $hashdata = "";
	        foreach ($inputData as $key => $value) {
	            if ($i == 1) {
	                $hashdata .= '&' . $key . "=" . $value;
	            } else {
	                $hashdata .= $key . "=" . $value;
	                $i = 1;
	            }
	            $query .= urlencode($key) . "=" . urlencode($value) . '&';
	        }

	        $vnp_Url = $vnp_Url . "?" . $query;
	        if (isset($vnp_HashSecret)) {
	           // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
	            $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
	            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
	        }
	        return redirect($vnp_Url);
	        
		}
		elseif ($data_donhang['pttt'] == 'tienmat') {
			return Redirect::to('/thanh-cong');
		}
	}

	public function thanh_cong() {
		Cart::destroy();
		$hang = DB::table('hang') -> where('anhien','1') -> get();
		return view('pages.dathang') ->with('hang', $hang);
	}
}