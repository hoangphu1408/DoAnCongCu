@extends('admin_layout')
@section('content')
	 <div class="row clearfix">
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 center-block" style="float:none">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Cập nhật hãng
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
                            @foreach($suahang as $key => $sua_hang)
                            <form class="form-horizontal" method="POST" action="{{URL::to('/capnhathang/'.$sua_hang -> Id_hang)}}" enctype="multipart/form-data">
                            	{{csrf_field() }}
                                <div class="row clearfix">
                                    <div class="col-sm-3 form-control-label">
                                        <label for="TenTL">Tên hãng</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="tenhang" name="tenhang" class="form-control" placeholder="Nhập tên hãng" maxlength="20" minlength="3" required value="{{$sua_hang -> tenhang}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-3 form-control-label">
                                        <label for="TenTL_KhongDau">Tên hãng không dấu</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="tenhang_khongdau" class="form-control" placeholder="Tên hãng không dấu" name="tenhang_khongdau" value="{{$sua_hang -> tenhang_khongdau}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-sm-3 form-control-label">
                                        <label for="TenTL_KhongDau">Hình</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" id="image" class="form" name="image" value="{{$sua_hang -> image}}">
                                                <img style="width: 100px; margin-top: 10px;" src="{{URl::to('public/upload/icon/'.$sua_hang -> image)}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-sm-3 form-control-label">
                                        <label for="TenTL_KhongDau">Thứ tự</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="ThuTu" class="form-control" placeholder="Thứ tự" name="thutu" value="{{$sua_hang -> thutu}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
									<div class="col-sm-3 form-control-label">
										<label>Ẩn hiện</label>
									</div>
									<div class="col-sm-9">
										<div class="form-group">
										 <div class="form-line abc">
										   <input type="radio" id="AH1" name="anhien" <?=($sua_hang -> anhien == 1)?' checked':''?> value="1"> 
									   <label for="AH1">Hiện</label>
										   <input type="radio" id="AH0" name="anhien" <?=($sua_hang -> anhien == 0)?' checked':''?> value="0">
										   <label for="AH0">Ẩn</label>
										</div>
										</div>
									</div>
								</div>


                                <div class="row clearfix">
									<div class="col-sm-3 form-control-label">
									   <label>Ngôn ngữ</label>
									</div>
									<div class="col-sm-9">
									   <div class="form-group">
										  <div class="form-line abc">
								  		    <input type="radio" id="vi" name="ngonngu" <?=($sua_hang -> ngonngu == 'vi')?' checked':''?> value="vi"> 
										    <label for="vi">Tiếng Việt</label>
										    <input type="radio" id="en" name="ngonngu" <?=($sua_hang -> ngonngu == 'en')?' checked':''?> value="en">
										    <label for="en">English</label>
										  </div>
									   </div>
									</div>
								</div>


                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button name="them" type="submit" class="btn btn-primary m-t-15 waves-effect">Cập nhật hãng</button>
                                    </div>
                                </div>
                            </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

@endsection
