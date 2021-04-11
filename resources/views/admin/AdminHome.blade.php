@extends('admin_layout')
@section('content')
<style type="text/css">
	a {
		text-decoration: none;
	}
</style>
<div class="container-fluid">
    <div class="block-header">
        <h2>Chào mừng đến trang quản trị</h2>
    </div>
    <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        
                        <div class="content">
                            <div class="text">Hãng</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $hang?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                       
                        <div class="content">
                            <div class="text">Sản phẩm</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $sanpham?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                       
                        <div class="content">
                            <div class="text">Đơn hàng</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $donhang?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <a href="#">
                        <div class="content">
                            <div class="text">Tin tức</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $tintuc?>" data-speed="1000" data-fresh-interval="20">
                            </div>
                        </div>
                    	</a>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection