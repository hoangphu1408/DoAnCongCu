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
                    <li><a href="{{URL::to('/trang-chu')}}">Trang chủ</a>
                    </li>
                    <li>Giỏ hàng</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p class="text-muted lead">Giỏ hàng hiện có sản phẩm</p>
        </div>
        <div class="col-md-9 clearfix" id="basket">
            <div class="box">
                <form method="post" action="{{URL::to('/capnhat-giohang')}}">
                	{{csrf_field()}}
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
                                        <input type="number" value="{{$value -> qty}}" class="form-control" name="soluong[]" min="0"
                                        style=""> 
                                        <input type="hidden" value="{{$value -> rowId}}" name="rowId_sp[]">
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
                                    <td><a href="{{URL::to('/xoa-giohang/'.$value -> rowId)}}"><i class="fa fa-trash-o"></i></a>
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
                            <a href="{{URL::to('/')}}" class="btn btn-default"><i class="fa fa-chevron-left"></i> Tiếp tục mua hàng</a>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-default"><i class="fa fa-refresh"></i> Cập nhật giỏ hàng</button>
                            <a class="btn btn-template-main" href="{{URL::to('/thanh-toan-1')}}">Thanh toán <i class="fa fa-chevron-right"></i></a>
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