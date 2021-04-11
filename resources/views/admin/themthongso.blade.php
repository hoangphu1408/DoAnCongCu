@extends('admin_layout')
@section('content')
	 <div class="row clearfix">
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 center-block" style="float:none">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Thêm thông số 
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
                            <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                                
                            </form>
                            <form class="form-horizontal" method="POST" action="{{URL::to('/them-thong-so')}}" enctype="multipart/form-data">
                            	{{csrf_field() }}
                                <div class="row clearfix">
                                    <div class="col-sm-3 form-control-label">
                                        <label for="TenTL">Màn hình</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="tensp" name="manhinh" class="form-control" placeholder="Nhập màn hình" minlength="3" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-3 form-control-label">
                                        <label for="TenTL_KhongDau">Hệ điều hành</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="tensp_khongdau" class="form-control" placeholder="Hệ điều hành" name="hedieuhanh">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                               

                                <div class="row clearfix">
                                    <div class="col-sm-3 form-control-label">
                                        <label for="TenTL_KhongDau">CPU</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="ThuTu" class="form-control" placeholder="CPU" name="cpu">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="row clearfix">
                                    <div class="col-sm-3 form-control-label">
                                        <label for="gia">Ram</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="gia" class="form-control" placeholder="Ram" name="ram">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row clearfix">
                                    <div class="col-sm-3 form-control-label">
                                        <label for="gia">Bộ nhớ trong</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="gia" class="form-control" placeholder="Bộ nhớ trong" name="bonhotrong">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                 <div class="row clearfix">
                                    <div class="col-sm-3 form-control-label">
                                        <label for="gia">Thẻ nhớ</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="gia" class="form-control" placeholder="Thẻ nhớ" name="thenho">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                 <div class="row clearfix">
                                    <div class="col-sm-3 form-control-label">
                                        <label for="gia">Thẻ sim</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="gia" class="form-control" placeholder="Thẻ sim" name="thesim">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                 <div class="row clearfix">
                                    <div class="col-sm-3 form-control-label">
                                        <label for="gia">Pin</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="gia" class="form-control" placeholder="Pin" name="pin">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button name="them" type="submit" class="btn btn-primary m-t-15 waves-effect">Thêm thông số sản phẩm</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<script>
    CKEDITOR.replace( 'editor1', {
        filebrowserBrowseUrl: '{{ asset('public/backend/js/ckfinder/ckfinder.html') }}',
        filebrowserImageBrowseUrl: '{{ asset('public/backend/js/ckfinder/ckfinder.html?type=Images') }}',
        filebrowserFlashBrowseUrl: '{{ asset('public/backend/js/ckfinder/ckfinder.html?type=Flash') }}',
        filebrowserUploadUrl: '{{ asset('public/backend/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('public/backend/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
        filebrowserFlashUploadUrl: '{{ asset('public/backend/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
    } );
</script>
<script src="{{asset('public/backend/js/ckfinder')}}"></script>
@endsection
