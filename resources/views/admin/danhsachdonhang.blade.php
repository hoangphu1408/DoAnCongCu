@extends('admin_layout')
@section('content')

<?php 
    $message = Session::get('message'); 
    if($message) 
        echo '<script> alert("'. $message. '")</script>'; 
        Session::put('message', null);
?>

 <div class="container-fluid">
            
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Danh sách đơn hàng
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Mã đơn hàng</th>
                                            <th>Họ tên</th>
                                            <th>Email</th>
                                            <th>Sdt</th>
                                            <th>Tổng tiền</th>
                                            <th>Tình trạng</th>
                                            <th>Thanh toán</th>
                                            <th>Thời gian đặt</th>
                                            <th>Phương thức thanh toán</th>
                                            <th>Phương thức giao hàng</th>
                                            <th>Quản lý</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach( $danhsach_donhang as $key => $dsdh)
                                        <tr>
                                            <td>{{$dsdh -> Id_donhang}}</td>
                                            <td>{{$dsdh -> hoten_nguoinhan}}</td>
                                            
                                            <td>{{$dsdh -> email_nguoinhan}}</td>
                                            <td>{{$dsdh -> sdt_nguoinhan}}</td>
                                            <td>{{$dsdh -> tongtien}}</td>
                                            <td>
                                                <?php
                                                    if($dsdh -> tinhtrang == 1) echo 'Đang chờ xử lý';
                                                    else echo 'Đã giao hàng';
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                    if($dsdh -> thanhtoan == 1) echo 'Chưa thanh toán';
                                                    else echo 'Đã thanh toán';
                                                ?>
                                            </td>
                                            <td>{{$dsdh -> thoigiandathang}}</td>
                                            <td>
                                                <?php
                                                    if($dsdh -> pttt == 'quethe') echo 'Quẹt thẻ';
                                                    else echo 'Chuyển khoản';
                                                ?>
                                            </td>
                                             <td>
                                                <?php
                                                    if($dsdh -> ptgh == 'giaohang') echo 'Giao hàng';
                                                    else echo 'Lấy tại shop';
                                                ?>
                                            </td>
                                            <td>
                                                <a href="{{URL::to('/chi-tiet-don-hang/'.$dsdh -> Id_donhang)}}" class=" btn bg-blue waves-effect" >Chi tiết</a> &nbsp;
                                               
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- JQuery DataTable Css -->
<link href="{{asset('public/backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
<!-- JQuery DataTable Css -->
<link href="{{asset('public/backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
<!-- Jquery DataTable Plugin Js -->
<script src="{{asset('public/backend/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
<script src="{{asset('public/backend/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('public/backend/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
<script src="{{asset('public/backend/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>
<!-- Custom Js -->
<script src="{{asset('public/backend/js/pages/tables/jquery-datatable.js')}}"></script>


@endsection
