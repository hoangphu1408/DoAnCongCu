@extends('layout')
@section('content')


        <section>
            <!-- *** HOMEPAGE CAROUSEL ***
 _________________________________________________________ -->

           <div class="home-carousel">
            <div class="dark-mask"></div>
            <div class="container">
            <div class="homepage owl-carousel">        
            <div class="item">
            <div class="row">
            <div class="col-sm-12">
                <img class="img-responsive" src="{{asset('public/frontend/img/slider/1.jpg')}}">
            </div>
            </div>
            </div>
            <div class="item">
            <div class="row">
            <div class="col-sm-12 text-center">
                <img class="img-responsive" src="{{asset('public/frontend/img/slider/2.jpg')}}">
            </div>          
            </div>
            </div>
            <div class="item">
            <div class="row">           
            <div class="col-sm-12">
                <img class="img-responsive" src="{{asset('public/frontend/img/slider/3.jpg')}}">
            </div>
            </div>
            </div>
            <div class="item">
            <div class="row">
            <div class="col-sm-12">
                <img class="img-responsive" src="{{asset('public/frontend/img/slider/4.jpg')}}">
            </div>          
            </div>
            </div>         
        </div>        
        </div>
        </div>


            <!-- *** HOMEPAGE CAROUSEL END *** -->
        </section>

        <<section class="bar background-white">
            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-desktop"></i>
                                </div>
                                <h3>CAM KẾT</h3>
                                <p>Chất lượng máy chính hãng.<br/>Sản phẩm đúng tiêu chuẩn với chất lượng tốt nhất.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-print"></i>
                                </div>
                                <h3>ĐẢM BẢO</h3>
                                <p>Giá tốt nhất thị trường. <br/> Hoàn tiền nếu có nơi nào giá thấp hơn.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <h3>BẢO HÀNH</h3>
                                <p>Tận tâm, Uy tín, Tiết kiệm. <br/>Một đổi một trong 15 ngày nếu xảy ra lỗi do NSX.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-lightbulb-o"></i>
                                </div>
                                <h3>GIAO HÀNG</h3>
                                <p>Giao hàng trong phạm vi toàn quốc. <br/>Thời gian giao hàng từ 1 đến 4 ngày.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <h3>TRẢ GÓP</h3>
                                <p>Trả góp với lãi suất ưu đãi. <br/>Thủ tục đơn giản, nhanh chóng, thuận tiện.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <h3>HỖ TRỢ KỸ THUẬT</h3>
                                <p>Đội ngũ kỹ thuật chuyên nghiệp, tậm tâm.<br/> Phục vụ khách hàng mọi toàn thời gian 25/24.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 


<section class="bar background-pentagon no-mb">
           <div class="container">
<div class="heading text-center"><h2>SẢN PHẨM MỚI</h2></div>
<div class="row products">
@foreach ($sanpham as $key => $dssp)
<form action="{{URL::to('/luu-giohang')}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="Id_sp" value="{{$dssp -> Id_sp}}">
    <input type="hidden" name="soluong" value="1">
<div class="col-md-3 col-sm-3">
    <div class="product">
        <div class="image">
         <a href="{{URL::to('/chi-tiet/'.$dssp -> Id_sp)}}">
          <img src="{{URL::to('public/upload/'.$dssp -> image)}}" alt="" class="img-responsive image1">
         </a>
        </div>
        <!-- /.image -->
        <div class="text">
       <h3><a href="{{URL::to('/chi-tiet/'.$dssp -> Id_sp)}}">{{$dssp -> tensp}}</a></h3>
       <p class="price">{{number_format($dssp -> gia)}} VND</p>
       <p class="buttons">
       <a href="{{URL::to('/chi-tiet/'.$dssp -> Id_sp)}}" class="btn btn-default">Chi tiết</a>
       <button type="submit" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</button>
       </p>
      </div>
    <!-- /.text -->
    </div>
 <!-- /.product -->
</div>
</form>
@endforeach                    
</div>
</div>
</section>
<section class="bar background-image-fixed-2 no-mb color-white text-center">
            <div class="dark-mask"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="icon icon-lg"><i class="fa fa-file-code-o"></i>
                        </div>
                        <h3 class="text-uppercase">BẠN CÓ MUỐN TRẢI NGHIỆM DÙNG THỬ ĐIỆN THOẠI MỚI?</h3>
                        <p class="lead">Chúng tôi chờ đợi bạn, chào mừng đến với cửa hàng và thử nghiệm các sản phẩm mới nhất hoàn toàn miễn phí trong 7 ngày.</p>
                        <p class="text-center">
                            <a href="#" class="btn btn-template-transparent-black btn-lg">Liên hệ với chúng tôi</a>
                        </p>
                    </div>

                </div>
            </div>
        </section>

      
        <!-- /.bar -->

        <section class="bar background-gray no-mb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading text-center">
                            <h2>Đối tác của chúng tôi</h2>
                        </div>

                        <ul class="owl-carousel customers">
                            <li class="item">
                                <img src="{{asset('public/frontend/img/customer-1.png')}}" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="{{asset('public/frontend/img/customer-2.png')}}" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="{{asset('public/frontend/img/customer-3.png')}}" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="{{asset('public/frontend/img/customer-4.png')}}" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="{{asset('public/frontend/img/customer-5.png')}}" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="{{asset('public/frontend/img/customer-6.png')}}" alt="" class="img-responsive">
                            </li>
                        </ul>
                        <!-- /.owl-carousel -->
                    </div>

                </div>
            </div>
        </section>
        <section class="bar background-white no-mb">
           <div class="container">
    <div class="col-md-12">
        <div class="heading text-center">
            <h2>Thông Tin Từ Cửa Hàng</h2>
        </div>
        <p class="lead">Các tin tức công nghệ, hướng dẫn sử dụng, giới thiệu điện thoại, tin tức khuyến mãi từ hệ thống cửa hàng của chúng tôi sẽ được publish thường xuyên vào đây để thông tin và hỗ trợ quý vi
        </p>
        <div class="row">
            @foreach($tintuc as $key => $tintuc)
            <div class="col-md-3 col-sm-6">
                <div class="box-image-text blog">
                    <div class="top">
                        <div class="image">
                            <img src="{{URL::to('public/upload/tintuc/'.$tintuc -> url_hinh)}}"  alt="" class="img-responsive">
                        </div>
                        <div class="bg"></div>
                        <div class="text">
                            <p class="buttons">
                                <a href="{{URL::to('/chi-tiet-tin/'.$tintuc -> Id_tin)}}" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> Xem tiếp</a>
                             </p>
                        </div>
                    </div>
                    <div class="content">
                    <h4><a href="blog-post.html">{{$tintuc -> tieude}}</a></h4>
                        <p class="intro">{{$tintuc -> tomtat}}</p>
                        <p class="read-more"><a href="{{URL::to('/chi-tiet-tin/'.$tintuc -> Id_tin)}}" class="btn btn-template-main">Xem tiếp</a>
                        </p>
                    </div>
                </div>
                            <!-- /.box-image-text -->
            </div>
            @endforeach
        </div>
                    <!-- /.row -->
                    <!-- *** BLOG HOMEPAGE END *** -->
    </div>
</div>
        </section>

@endsection
