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
                    <h2>Chi tiết đơn hàng</h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                                   <!--  <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul> -->
                        </li>
                    </ul>
                </div>
                <div class="body">
                            
                  
                    <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Mã đơn hàng</th>
                                            <th>Mã sản phẩm</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Số lượng</th>
                                            <th>Giá</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach( $chitiet_donhang as $key => $dsct)
                                        <tr>
                                            <td>{{$dsct -> Id_donhang}}</td>
                                            <td>{{$dsct -> Id_sp}}</td>
                                            
                                            <td>{{$dsct -> tensp}}</td>
                                            <td>{{$dsct -> soluong}}</td>
                                            <td>{{$dsct -> gia}}</td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-offset-11 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                            <a class="btn btn-primary m-t-15 waves-effect" href="{{URL::to('/danh-sach-don-hang')}}">Quay lại</a>
                        </div>
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
