@extends('layout')
@section('content')
@foreach ($chitietsp as $key => $chitiet)
<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1>Chi Tiết Sản Phẩm</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb">
                    <li><a href="{{URL::to('/trang-chu')}}">Trang chủ</a>
                    </li>
                    <li>Sản Phẩm</li>
                    <li>{{$chitiet -> tensp}}</li>
                </ul>
            </div>
        </div>
    </div>
</div>

        <div id="content">
            <div class="container">

    <div class="row">
        <div class="col-md-9">

            <p class="lead"><b>{{$chitiet -> tensp}}</b></p>
            <p class="goToDescription">
                <a href="#details" class="scroll-to text-uppercase">Cuộn để xem chi tiết</a>
            </p>

            <div class="row" id="productMain">
                <div class="col-sm-6">
                    <div id="mainImage">
                        <img src="{{URL::to('public/upload/'.$chitiet -> image)}}" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="box">
                        <form action="{{URL::to('/luu-giohang')}}" method="post">
                            {{csrf_field()}}
                            <p class="price">{{number_format($chitiet -> gia)}} VND</p>
                            <input type="hidden" name="Id_sp" value="{{$chitiet -> Id_sp}}">
                            <input type="hidden" name="soluong" value="1">
                            <p class="text-center">
                                <button type="submit" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</button>
                                <button type="submit" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i>
                                </button>
                            </p>

                        </form>
                    </div>

                    <div class="row" id="thumbs">
                        @foreach ($hinh as $key => $h)
                            <div class="col-xs-3">
                                <a href="{{URL::to($h -> url_hinh)}}" class="thumb">
                                    <img src="{{URL::to($h -> url_hinh)}}" class="img-responsive">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-sm-3">
            <div class="panel panel-default sidebar-menu">
                <div class="panel-heading">
                    <h3 class="panel-title">Danh mục sản phẩm</h3>
                </div>
                <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked category-menu">
                        @foreach( $hang as $key => $dshang )
                        <li>
                            <a href="{{URL::to('/hang-san-pham/'.$dshang -> Id_hang)}}">
                                {{ $dshang -> tenhang }}
                            </a>
                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>
            <div class="panel panel-default sidebar-menu">
            </div>
            </div>
        <div class="row">
        <div class="col-md-9">
            <div class="box" id="details">
                <h4>Mô tả</h4>
                <div id="gioithieu">
                    <?php echo $chitiet -> Mota; ?>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box" id="details">
                <h4>Thông số kỹ thuật</h4>
                <div id="gioithieu">
                    <table class="table">
                        @foreach ($thongso as $key => $ts)
                        <tbody>
                            <tr>
                                <td>Màn hình</td>
                                <td>{{$ts -> manhinh}}</td>
                            </tr>
                            <tr>
                                <td>Hệ điều hành</td>
                                <td>{{$ts -> hedieuhanh}}</td>
                            </tr>
                            <tr>
                                <td>CPU</td>
                                <td>{{$ts -> cpu}}</td>
                            </tr>
                            <tr>
                                <td>Ram</td>
                                <td>{{$ts -> ram}}</td>
                            </tr>
                            <tr>
                                <td>Bộ nhớ trong</td>
                                <td>{{$ts -> bonhotrong}}</td>
                            </tr>
                            <tr>
                                <td>Thẻ nhớ</td>
                                <td>{{$ts -> thenho}}</td>
                            </tr>
                            <tr>
                                <td>Thẻ sim</td>
                                <td>{{$ts -> thesim}}</td></tr>
                            <tr>
                                <td>Pin</td>
                                <td>{{$ts -> pin}}</td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                    <div class="box text-uppercase">
                        <h3>Sản phẩm liên quan</h3>
                    </div>
            </div>
            @foreach($sanpham as $key => $sanpham)
            <div class="col-md-3 col-sm-6">
                    <div class="product">
                        <div class="image">
                            <a href="{{URL::to('/chi-tiet/'.$sanpham -> Id_sp)}}">
                                <img src="{{URL::to('public/upload/'.$sanpham -> image)}}" alt="" class="img-responsive image1">
                            </a>
                        </div>
                        <div class="text">
                            <h3>{{$sanpham -> tensp}}</h3>
                            <p class="price">{{number_format($sanpham -> gia)}} VND</p>
                        </div>
                    </div>
                                <!-- /.product -->
            </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="box text-uppercase">
                    <h3>Tin tức liên quan</h3>
                </div>
            </div>
            @foreach($tin as $key => $tintuc)
            <div class="col-md-3 col-sm-6">
                        <div class="box-image-text blog">
                            <div class="top">
                                <div class="image">
                                    <img src="{{URL::to('public/upload/tintuc/'.$tintuc -> url_hinh)}}" alt="" class="img-responsive">
                                </div>
                                <div class="bg"></div>
                                <div class="text">
                                    <p class="buttons">
                                        <a href="{{URL::to('/chi-tiet-tin/'.$tintuc -> Id_tin)}}" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> Tiếp tục xem</a>
                                    </p>
                                </div>
                            </div>
                            <div class="content">
                                        <h4><a href="{{URL::to('/chi-tiet-tin/'.$tintuc -> Id_tin)}}">{{$tintuc -> tieude}}</a></h4>
                                       
                                        <p class="intro">{{$tintuc -> tomtat}}</p>
                                        <p class="read-more"><a href="{{URL::to('/chi-tiet-tin/'.$tintuc -> Id_tin)}}" class="btn btn-template-main">Tiếp tục xem</a>
                                        </p>
                            </div>
                        </div>
                                <!-- /.box-image-text -->
                    </div>
            @endforeach
        </div>
    </div> 

</div>


</div>
@endforeach
</div>

@endsection