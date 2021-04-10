@extends('layout')
@section('content')

<div id="heading-breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h1>Giỏ hàng</h1>
			</div>
			<div class="col-md-5">
				<ul class="breadcrumb">
					<li><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></li>
					<li>Giỏ hàng</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div id="content">
	<div class="container">
		
		<div class="col-sm-6 col-sm-offset-3" id="error-page">
            <div class="box">

                <h3>Không có sản phẩm trong giỏ hang</h3>
                <!-- <h4 class="text-muted">Lỗi 404 - Trang không tìm được</h4> -->

                <p class="buttons"><a href="{{URL::to('/')}}" class="btn btn-template-main"><i class="fa fa-home"></i> Về trang chủ</a>
                </p>
                </div>
        </div>
    
	</div>
</div>

@endsection
