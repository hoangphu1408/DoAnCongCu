<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//frontend
Route::get('/', 'HomeController@index');

Route::get('/trang-chu', 'HomeController@index');
Route::post('/tim-kiem', 'HomeController@tim_kiem');
Route::post('/tim-kiem-tin', 'HomeController@tim_kiem_tin');
Route::get('/lien-he', 'HomeController@lien_he');

//danh sách sản phẩm của hãng
Route::get('/hang-san-pham/{Id_hang}', 'HangController@sanphamtrongloai');
Route::get('/chi-tiet/{Id_sp}', 'SanphamController@chitietsp');
Route::get('/san-pham', 'SanphamController@san_pham');

//user
Route::post('/dang-nhap', 'UserController@dang_nhap');
Route::get('/dang-xuat', 'UserController@dang_xuat');
Route::get('/dang-ky', 'UserController@dang_ky');
Route::post('/dang-ky-tc', 'UserController@dang_ky_tc');

//tin tức frontend
Route::get('/tin-tuc', 'TintucController@tin_tuc');
Route::get('/chi-tiet-tin/{Id_tin}', 'TintucController@chi_tiet_tin');

//----------------------backend---------------------------//
Route::get('/admin', 'AdminController@login');
Route::get('/admin/trang-chu', 'AdminController@index');
Route::post('/dangnhap', 'AdminController@dangnhap');
Route::get('/dangxuat', 'AdminController@dangxuat');

//hãng
Route::get('/themhang', 'HangController@themhang');
Route::get('/suahang/{Id_hang}', 'HangController@suahang');
Route::get('/xoahang/{Id_hang}', 'HangController@xoahang');
Route::get('/danhsachhang', 'HangController@danhsachhang');

Route::post('/luuhang', 'HangController@luuhang');
Route::post('/capnhathang/{Id_hang}', 'HangController@capnhathang');

//sản phẩm

Route::get('/danhsachsp', 'SanphamController@danhsachsp');
Route::get('/themsp', 'SanphamController@themsp');
Route::get('/suasp/{Id_sp}', 'SanphamController@suasp');
Route::get('/xoasp/{Id_sp}', 'SanphamController@xoasp');


Route::post('/luusp', 'SanphamController@luusp');
Route::post('/capnhatsp/{Id_sp}', 'SanphamController@capnhatsp');

//thông số sản phẩm

Route::get('/view-them-thong-so', 'SanphamController@view_them_thong_so');
Route::post('/them-thong-so', 'SanphamController@them_thong_so');
Route::get('/view-sua-thong-so/{Id_sp}', 'SanphamController@view_sua_thong_so');
Route::post('/sua-thong-so/{Id_thongso}', 'SanphamController@sua_thong_so');

//giỏ hàng

Route::post('/luu-giohang', 'GiohangController@luugiohang');
Route::get('/giohang', 'GiohangController@giohang');
Route::get('/xoa-giohang/{rowId}', 'GiohangController@xoagiohang');
Route::post('/capnhat-giohang', 'GiohangController@capnhatgiohang');

//kiểm tra

Route::get('/login-check', 'CheckController@login_check');
Route::get('/thanh-toan-1', 'CheckController@thanh_toan_1');
Route::post('/thanh-toan-2', 'CheckController@thanh_toan_2'); Route::get('/thanh-toan-2', 'CheckController@thanh_toan_2');
Route::post('/thanh-toan-3', 'CheckController@thanh_toan_3'); Route::get('/thanh-toan-3', 'CheckController@thanh_toan_3');
Route::post('/thanh-toan-4', 'CheckController@thanh_toan_4');
Route::post('/dat-hang', 'CheckController@dat_hang');

//đơn hàng

Route::get('/huy-don-hang', 'DonhangController@huy_don_hang');
Route::get('/danh-sach-don-hang', 'DonhangController@danh_sach_don_hang');
Route::get('/chi-tiet-don-hang/{Id_donhang}', 'DonhangController@chi_tiet_don_hang');

//tin tức 

Route::get('/them-tin-tuc', 'TintucController@them_tin_tuc');
Route::post('/luu-tin-tuc', 'TintucController@luu_tin_tuc');
Route::get('/danh-sach-tin-tuc', 'TintucController@danh_sach_tin_tuc');
Route::get('/sua-tin-tuc/{Id_tin}', 'TintucController@sua_tin_tuc');
Route::post('/cap-nhat-tin-tuc/{Id_tin}', 'TintucController@cap_nhat_tin_tuc');
Route::post('/xoa-tin-tuc', 'TintucController@xoa_tin_tuc');

//thanh toán
Route::post('/create', 'VnPayController@create');
Route::get('/thanh-cong', 'CheckController@thanh_cong');