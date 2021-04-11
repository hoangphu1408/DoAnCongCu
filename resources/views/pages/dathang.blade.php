@extends('layout')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 clearfix">
			
			<div class="heading">
				<h2>Thanh toán thành công</h2>
			</div>
			<p class="lead">
				Đơn hàng đã được ghi nhận chúng tôi sẽ giao hàng trong thời gian sớm nhất.<br/>
				Mọi thắc mắc trong quá trình sử dụng, mời liên hệ ngay với chúng tôi.<br/>
				<br/><br/><a class="btn btn-primary btn-lg" href="{{URL::to('/')}}">Trang chủ</a>
				<!-- <a class="btn btn-primary btn-lg" href="{{URL::to('/huy-don-hang')}}">Hủy đơn hàng</a> -->
			</p>	
			
		</div>
	</div>
</div>
@endsection