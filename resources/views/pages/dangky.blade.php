@extends('layout')
@section('content')
<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1>Đăng ký</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb">
                    <li><a href="{{URL::to('/trang-chu')}}">Trang chủ</a>
                    </li>
                    <li>Đăng ký</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
<div class="row">
<div class="col-md-8">
	<!-- <?php  {?>
		<div class="alert alert-danger">  </div>
	<?php }?> -->
	<form action="{{URL::to('/dang-ky-tc')}}" method="post" >
		{{csrf_field() }}
		<div class="form-group row">
			<div class="col-md-3"> <label for="email">Email</label> </div>
			<div class="col-md-9"> 
				<input type="email" class="form-control" name="email" id="email" required oninvalid="this.setCustomValidity('Bạn nhập email không đúng')" oninput="this.setCustomValidity('')" value="<?php if (isset ($_POST['email'])) echo $_POST['email']; ?>">	
			</div>
		</div>
		<div class="form-group row">
			<div class="col-md-3"> <label for="password">Mật khẩu</label> </div>
			<div class="col-md-9"> 
				<input type="password" class="form-control" name="password" id="password" pattern=".{3,30}" required oninvalid="this.setCustomValidity('Mật khẩu từ 6 đến 30 ký tự nhé')" oninput="this.setCustomValidity('')" value="<?php if (isset ($_POST['password'])) echo $_POST['password']; ?>">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-md-3"><label for="repass">Nhập lại mật khẩu</label> </div>
			<div class="col-md-9"> 
				<input type="password" class="form-control" name='repass' id='repass' pattern=".{3,30}" required oninvalid="this.setCustomValidity('Mật khẩu từ 6 đến 30 ký tự nhé')" oninput="this.setCustomValidity('')" value="<?php if (isset ($_POST['repass'])) echo $_POST['repass']; ?>">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-md-3"> <label for="hoten">Họ tên</label> </div>
			<div class="col-md-9"> 
				<input class="form-control" name="hoten" id="hoten" required oninvalid="this.setCustomValidity('Nhập họ tên vô bạn ơi')" oninput="this.setCustomValidity('')" value="<?php if (isset($_POST['hoten'])) echo $_POST['hoten']; ?>" >
			</div>
		</div>
		<div class="form-group row">
			<div class="col-md-3"> <label for="diachi">Địa chỉ</label> </div>
			<div class="col-md-9"> 
				<input class="form-control" name="diachi" id="diachi" required oninvalid="this.setCustomValidity('Bạn ơi, địa chỉ sao không nhập vào')" oninput="this.setCustomValidity('')" value="<?php if (isset($_POST['diachi'])) echo $_POST['diachi']; ?>" >  
			</div>
		</div>
		<div class="form-group row">
			<div class="col-md-3"> <label for="dienthoai">Điện thoại</label> </div>
			<div class="col-md-9"> 
				<input type="tel" class="form-control" name="dienthoai" id="dienthoai" pattern="\d{10,10}" required oninvalid="this.setCustomValidity('Nhập số di động 10 ký tự nhé')" oninput="this.setCustomValidity('')" value="<?php if (isset($_POST['dienthoai'])) echo $_POST['dienthoai']; ?>" > 
			</div>
		</div>
		<div class="form-group row text-center">
			<button type="submit" class="btn btn-template-main">
				<i class="fa fa-sign-in"></i> ĐĂNG KÝ
			</button>
		</div>
	</form>
</div>
</div>
</div>
@endsection