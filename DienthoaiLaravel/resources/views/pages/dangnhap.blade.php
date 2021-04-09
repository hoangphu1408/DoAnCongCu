@extends('layout')
@section('content')
<div id="heading-breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h1>Đăng nhập</h1>
			</div>
			<div class="col-md-5">
				<ul class="breadcrumb">
					<li><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></li>
					<li>Đăng nhập</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div id="content">
	<div class="container">
		<div class="col-md-6">
            <div class="box">
                            <h2 class="text-uppercase">Đăng nhập</h2>

                            <p class="lead">Đăng nhập để có thể thanh toán ngay!</p>
                            <p class="text-muted"><a href="{{URL::to('/dang-ky')}}"><strong>Đăng ký ngay</strong></a>! Rất dễ dàng để hoàn thành trong 1&nbsp;phút và truy cập ngay để có thể nhận nhiều phần quà ưu đãi hơn!</p>

                            <hr>

                            <form action="{{URL::to('/dang-nhap')}}" method="post">
                            	{{csrf_field()}}
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                                </div>
                            </form>
            </div>
        </div>
    </div>
</div>
@endsection
