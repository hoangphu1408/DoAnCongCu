@extends('layout')
@section('content')
<div id="heading-breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h1>Thanh toán 1</h1>
			</div>
			<div class="col-md-5">
				<ul class="breadcrumb">
					<li><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></li>
					<li>Thanh toán 1</li>
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
                            @foreach($user as $key => $user)
                            <form method="post" action="{{URL::to('/thanh-toan-2')}}">
                            	{{csrf_field()}}
                                <ul class="nav nav-pills nav-justified">
                                     <li class="active"><a href="#"><i class="fa fa-map-marker"></i><br>Địa chỉ</a>
                                    </li>
                                    <li class="disabled"><a href="#"><i class="fa fa-truck"></i><br>Phương thức giao hàng</a>
                                    </li>
                                    <li class="disabled"><a href="#"><i class="fa fa-money"></i><br>Phương thức thanh toán</a>
                                    </li>
                                    <li class="disabled"><a href="#"><i class="fa fa-eye"></i><br>Thông tin đơn hàng</a>
                                    </li>
                                </ul>

                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="firstname">Họ tên</label>
                                                <input type="text" class="form-control" id="hoten" name="hoten_nguoinhan" required oninvalid="this.setCustomValidity('Mời bạn nhập họ tên');" oninput="this.setCustomValidity('');" value="{{$user -> hoten}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="lastname">Địa chỉ</label>
                                                <input type="text" class="form-control" id="diachi" name="diachi_nguoinhan" required oninvalid="this.setCustomValidity('Mời bạn nhập địa chỉ');" oninput="this.setCustomValidity('');" value="{{$user -> diachi}}">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="company">Số điện thoại</label>
                                                <input type="text" class="form-control" id="dienthoai" name="sdt_nguoinhan" required oninvalid="this.setCustomValidity('Mời bạn nhập số điện thoại');" oninput="this.setCustomValidity('');" value="{{$user -> dienthoai}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="street">Email</label>
                                                <input type="email" class="form-control" id="email" name="email_nguoinhan" required oninvalid="this.setCustomValidity('Mời bạn nhập email');" oninput="this.setCustomValidity('');" value="{{$user -> email}}">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>

                                <div class="box-footer">
                                    <div class="pull-left">
                                        <a href="{{URL::to('/giohang')}}" class="btn btn-default"><i class="fa fa-chevron-left"></i>Quay lại giỏ hàng</a>
                                    </div>
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-template-main">Tiếp tục thanh toán<i class="fa fa-chevron-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            @endforeach
                        </div>
                        <!-- /.box -->

            </div>
        </div>
    </div>
</div>
@endsection