@extends('admin_layout')
@section('content')



<div class="row clearfix">
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" style="margin:auto; float:none">
                    <div class="card">
                        <div class="header">
                            <h2>Thêm tin</h2>
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
                            <form id="form_validation" method="POST" action="{{URL::to('/luu-tin-tuc')}}">
                            	{{csrf_field()}}
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tieude" required minlength="10"  placeholder="Tiêu đề tin"> 
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tieude_khongdau" placeholder="Tiêu đề không dấu">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="tomtat" cols="30" rows="5" class="form-control no-resize" placeholder="Tóm tắt" ></textarea>
                                    </div>
                                </div>
                                
                                <div class="form-group form-float"> 
                                    <div class="form-line">
                                    <input type="file" name="image" id="urlHinh" class="form-control"  placeholder="Địa chỉ hình của tin" required>
                                    </div> 
                                </div>

                                <div class="row cleafix">
                                    <div class="col-md-6">
                                       <div class="form-group form-float">
                                       <input type="radio" name="anhien" id="AH0" value="0">
                                       <label for="AH0">Ẩn</label>
                                       <input type="radio" name="anhien" id="AH1" value="1" checked>
                                       <label for="AH1" class="m-l-20">Hiện</label>
                                       </div>
                                    </div>
                                   
                                    <div class="col-md-6">
                                       <div class="form-group form-float">
                                          <input type="radio" name="ngonngu" id="vi" value="vi" checked>
                                          <label for="vi">Tiếng Việt</label>
                                          <input type="radio" name="lang" id="en" value="en" >
                                          <label for="en" class="m-l-20">English</label>
                                       </div>
                                    </div>
                                </div>
                                <div class="row cleafix">
                                    <div class="col-md-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <input class="form-control" name="tags" placeholder="Tags">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-float">
                                        <div class="form-line">
                                        <input type="text" class="datepicker form-control" name="ngay" placeholder="Xin chọn ngày">
                                        </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                       <textarea id="editor1" name="noidung" cols="30" rows="10" class="form-control" required placeholder="Nội dung tin"></textarea>
                                    </div>
                                </div>
                                <div class="row cleafix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> <div class="form-line">

                                    <select class="form-control show-tick" name="Id_hang" id="idTL">
                                        <option value="0">-- Chọn Thể loại --</option>
                                       	@foreach($hang as $key => $hang)
                                        <option value="{{$hang -> Id_hang }}">{{$hang -> tenhang}}</option>
                                        @endforeach	
                                    </select>
                                    </div>
                                </div>
                            	</div>
                              

                                <button class="btn btn-primary waves-effect" type="submit" name="them">Thêm tin</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<style type="text/css">
    .form-group {margin-bottom:15px;}
    .form-group .form-line {border-bottom:none}
    .form-group .form-control {padding:3px; border:1px solid #999;}
    .form-group .form-line.abc {padding-top:5px;}
    .form-group .form-control{ background: #337ab7; border-radius: 6px; color:yellow; font-size:14px;letter-spacing:1px}
    .form-group .form-control::placeholder {color:white}
    #form_validation .col-md-4  {margin-bottom:0px;}
</style>


<script src="{{asset('public/backend/plugins/ckeditor/ckeditor.js')}}"></script> <!--Có thể chèn trực tiếp từ net-->


<script>
    CKEDITOR.replace( 'editor1', { 
        filebrowserBrowseUrl: '{{ asset('public/backend/js/ckfinder/ckfinder.html') }}',
        filebrowserImageBrowseUrl: '{{ asset('public/backend/js/ckfinder/ckfinder.html?type=Images') }}',
        filebrowserFlashBrowseUrl: '{{ asset('public/backend/js/ckfinder/ckfinder.html?type=Flash') }}',
        filebrowserUploadUrl: '{{ asset('public/backend/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('public/backend/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
        filebrowserFlashUploadUrl: '{{ asset('public/backend/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
    } ); CKEDITOR.config.height = 300;   
</script>
<script src="{{asset('public/backend/js/ckfinder')}}"></script>

<link href="{{asset('public/backend/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />
<script src="{{asset('public/backend/plugins/autosize/autosize.js')}}"></script>
<script src="{{asset('public/backend/plugins/momentjs/moment.js')}}"></script>
<script src="{{asset('public/backend/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
<script>
$(document).ready(function(e) {   
    $('.datepicker').bootstrapMaterialDatePicker({
        format: 'DD/MM/YYYY', 
        weekStart: 1, time: false
    }); 
});
</script>
<script src="{{asset('public/backend/js/ckfinder')}}"></script>


@endsection
