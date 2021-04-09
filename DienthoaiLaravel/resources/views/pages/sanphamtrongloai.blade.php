@extends('layout')
@section('content')

<div id="heading-breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h1>Sản phẩm</h1>
			</div>
			<div class="col-md-5">
				<ul class="breadcrumb">
					<li><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></li>
					<li>Sản Phẩm</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div id="content">
	<div class="container">
		<div class="heading">
		@foreach ($ten_hang as $key => $ten)
			<h2>{{$ten -> tenhang}}</h2> 
			@endforeach   
			<div class="row products">
				@foreach ($sanpham as $key => $dssp)
				<form action="{{URL::to('/luu-giohang')}}" method="post">
				    {{csrf_field()}}
				    <input type="hidden" name="Id_sp" value="{{$dssp -> Id_sp}}">
				    <input type="hidden" name="soluong" value="1">
					<div class="col-md-3 col-sm-3">
						<div class="product">
							<div class="image">
								<a href="{{URL::to('/chi-tiet/'.$dssp -> Id_sp)}}">
									<img src="{{URL::to('public/upload/'.$dssp -> image)}}" alt="" class="img-responsive image1">
								</a>
							</div>
						<div class="text">
						<h3><a href="{{URL::to('/chi-tiet/'.$dssp -> Id_sp)}}">{{$dssp -> tensp}}</a></h3>
							<p class="price">{{number_format($dssp -> gia)}} VND</p>
							<p class="buttons">
								<a href="{{URL::to('/chi-tiet/'.$dssp -> Id_sp)}}" class="btn btn-default">Chi tiết</a>
								<button type="submit" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</button>
							</p>
						</div>
					</div>
					</div>
				</form>
				@endforeach
			</div>  
			<div class="pages">
				<div class="slideInLeft animated">
					<ul class="pagination">
						<li>
							<a href="#">1</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
