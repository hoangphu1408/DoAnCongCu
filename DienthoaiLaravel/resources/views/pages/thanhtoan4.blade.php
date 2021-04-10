@extends('layout')
@section('content')
<div id="heading-breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h1>Thanh toán 4</h1>
			</div>
			<div class="col-md-5">
				<ul class="breadcrumb">
					<li><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></li>
					<li>Thanh toán 4</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="container">
    <div class="row">
        
        <div class="col-md-9 clearfix" id="basket">
            <div class="box">
            	
                <form method="post" action="{{URL::to('/dat-hang')}}">
                	{{csrf_field()}}
                	<ul class="nav nav-pills nav-justified">
                        <li class="disabled"><a href="#"><i class="fa fa-map-marker"></i><br>Địa chỉ</a></li>
                        <li class="disabled"><a href="#"><i class="fa fa-truck"></i><br>Phương thức giao hàng</a></li>
						<li class="disabled"><a href="#"><i class="fa fa-money"></i><br>Phương thức thanh toán</a></li>
                        <li class="active"><a href="#"><i class="fa fa-eye"></i><br>Thông tin đơn hàng</a></li>
                    </ul>
                	
                    <div class="table-responsive">
                    	<?php $content = Cart::content(); ?>
                        <table class="table">
                            <thead>
                                <tr>
                                	<th>Hình</th>
                                    <th>Tên SP</th>
                                    <th>Số lượng</th>
                                    <th>Giá</th>
                                    <th>Giảm</th>
                                    <th colspan="2">Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($content as $value)
                                <tr>
                                    <td>
                                        <a href="#">
                                        	<img style="width: 65px;" src="{{URL::to('public/upload/'.$value -> options -> image)}}">
                                        </a>
                                    </td>
                                    <td><a href="#">{{$value -> name}}</a>
                                    </td>
                                    <td>
                                        {{$value -> qty}}
                                    </td>
                                    <td>{{number_format($value -> price)}} VND</td>
                                    <td>0.00</td>
                                    <td>
                                    	<?php
                                    		$tong = $value -> price * $value -> qty;
                                    		echo number_format($tong); 
                                    	?> 
                                    	VND
                                    </td>
                                    
                                    </td>
                                </tr>
                               @endforeach	
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="5">Tổng tiền</th>
                                    <th colspan="2">{{Cart::subtotal()}} VND</th>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                                <!-- /.table-responsive -->

                    <div class="box-footer">
                        <div class="pull-left">
                            <a href="{{URL::to('/thanh-toan-3')}}" class="btn btn-default"><i class="fa fa-chevron-left"></i> Trở lại bước 3</a>
                        </div>
                        <div class="pull-right">
                        	<a href="{{URL::to('/huy-don-hang')}}" class="btn btn-default" onClick="return confirm('Bạn có muốn hủy đơn hàng')"><!-- <i class="fa bi-x"></i> -->X &nbsp; Hủy đơn hàng</a>
                            <button class="btn btn-template-main"><i class="fa fa-chevron-right"></i> Đặt hàng</button>
                   
                        </div>
                    </div>

                </form>
            </div>
                        <!-- /.box -->

                        

                    </div>
                    <!-- /.col-md-9 -->

                    <div class="col-md-3">
                        <div class="box" id="order-summary">
                            <div class="box-header">
                                <h3>Đơn hàng</h3>
                            </div>
                            <p class="text-muted">Thông tin đơn hàng hiện tại của bạn.</p>

                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Tiền mua hàng</td>
                                            <th>{{Cart::subtotal()}} VND</th>
                                        </tr>
                                       
                                        <tr class="total">
                                            <td>Tổng tiền </td>
                                            <th>{{Cart::subtotal()}} VND</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
					</span>
                                </div>
                                <!-- /input-group -->
                            </form>
                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                </div>

            </div>
@endsection