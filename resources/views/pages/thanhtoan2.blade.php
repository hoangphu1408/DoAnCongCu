@extends('layout')
@section('content')
<div id="heading-breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h1>Thanh toán 2</h1>
			</div>
			<div class="col-md-5">
				<ul class="breadcrumb">
					<li><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></li>
					<li>Thanh toán 2</li>
				</ul>
			</div>
		</div>
	</div>
</div>
	<div id="content">
            <div class="container">

                <div class="row">

                    <div class="col-md-12 clearfix" id="checkout">

                        <div class="box">
                            <form method="post" action="{{URL::to('/thanh-toan-3')}}">
                                {{csrf_field()}}
                                <ul class="nav nav-pills nav-justified">
                                    <li class="disabled"><a href="#"><i class="fa fa-map-marker"></i><br>Địa chỉ</a>
                                    </li>
                                    <li class="active"><a href="#"><i class="fa fa-truck"></i><br>Phương thức giao hàng</a>
                                    </li>
                                    <li class="disabled"><a href="#"><i class="fa fa-money"></i><br>Phương thức thanh toán</a>
                                    </li>
                                    <li class="disabled"><a href="#"><i class="fa fa-eye"></i><br>Thông tin đơn hàng</a>
                                    </li>
                                </ul>

                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="box shipping-method">

                                                <h4>Giao hàng tận nơi</h4>

                                                <p>Miễn phí giao hàng.</p>

                                                <div class="box-footer text-center">

                                                    <input type="radio" name="ptgh" value="giaohang" checked>
                                                    Giao hàng tận nơi.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="box shipping-method">

                                                <h4>Lấy hàng tại cửa hàng</h4>

                                                <p>Nhận thêm phần quà.</p>

                                                <div class="box-footer text-center">

                                                    <input type="radio" name="ptgh" value="laytaishop">
                                                    Lấy tại cửa hàng
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->

                                </div>
                                <!-- /.content -->

                                <div class="box-footer">
                                    <div class="pull-left">
                                       <a href="{{URL::to('/thanh-toan-1')}}" class="btn btn-default"><i class="fa fa-chevron-left"></i>Quay lại bước 1</a>
                                    </div>
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-template-main">Tiếp tục thanh toán<i class="fa fa-chevron-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.box -->

            </div>
        </div>
    </div>
</div>
@endsection