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
                                Quản trị hãng sản xuất
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
                                            <th>Mã hãng</th>
                                            <th>Tên hãng</th>
                                            <th>Hình</th>
                                            <th>Thứ tự</th>
                                            <th>Ẩn hiện</th>
                                            <th>Tên thể loại không dấu</th>
                                            <th>Ngôn ngữ</th>
                                            <th>Quản lý</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach( $danhsachhang as $key => $dshang)
                                        <tr>
                                            <td>{{$dshang -> Id_hang}}</td>
                                            <td>{{$dshang -> tenhang}}</td>
                                            <td>
                                                <img style="width: 50px; height: 50px" src="{{'public/upload/icon/'.$dshang -> image}}">
                                            </td>
                                            <td>{{$dshang -> thutu}}</td>
                                            <td>
                                                <?php
                                                    if($dshang -> anhien == 1) echo 'Hiện';
                                                    else echo'Ẩn';
                                                ?>
                                            </td>
                                            <td>{{$dshang -> tenhang_khongdau}}</td>
                                            <td>
                                                <?php
                                                    if($dshang -> ngonngu == 'vi') echo 'Tiếng Việt';
                                                    else echo 'Tiếng Anh';
                                                ?>
                                            </td>
                                            <td>
                                                <a href="{{URL::to('/suahang/'.$dshang -> Id_hang)}}" class=" btn bg-blue waves-effect" >Cập nhật</a> &nbsp;
                                                <a href="{{URL::to('/xoahang/'.$dshang -> Id_hang)}}" onClick="return confirm('Chắc chắn chứ')" class=" btn bg-red waves-effect" >Xóa</a>
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
