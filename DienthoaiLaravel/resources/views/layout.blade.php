<?php 
    $message = Session::get('message'); 
    if($message) 
        echo '<script> alert("'. $message. '")</script>'; 
        Session::put('message', null);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shop bán điện thoại di động</title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="{{asset('public/frontend/css/style.default.css')}}" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="{{asset('public/frontend/css/custom.css')}}" rel="stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="{{asset('public/frontend/img/favicon.ico')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png" />
    <!-- owl carousel css -->

    <link href="{{asset('public/frontend/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/owl.theme.css')}}" rel="stylesheet">
</head>

<body>

    <div id="all">
        <header>

            <!-- *** TOP ***
_________________________________________________________ -->
    <div id="top">
        <div class="container">
            <div class="row">
                <div class="col-xs-5 contact">
                    <p class="hidden-sm hidden-xs">
                        Liên hệ ngay với chúng tôi theo số 0359193168 hoặc superbao2000@gmail.com
                    </p>
                        <p class="hidden-md hidden-lg"><a href="#" data-animate-hover="pulse"><i class="fa fa-phone"></i></a>  <a href="#" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                        </p>
                </div>
                <div class="col-xs-7">
                    <div class="social">
                        <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                    </div>

                    <?php
                        $Id_user = Session::get('Id_user');
                        if($Id_user) {
                    ?>
                    <div class="login">
                        <a href="{{URL::to('/dang-ky')}}"><i class="fa fa-user"></i> 
                            <span class="hidden-xs text-uppercase">
                                <?php
                                    $hoten = Session::get('hoten');
                                    echo $hoten;
                                ?>
                            </span>
                        </a>
                        <a href="{{URL::to('/dang-xuat')}}"><i class="fa fa-sign-in"></i> 
                            <span class="hidden-xs text-uppercase">
                                Đăng xuất
                            </span>
                        </a>
                    <?php } else { ?>
                    <div class="login">
                        <a href="{{URL::to('/dang-ky')}}"><i class="fa fa-user"></i> 
                            <span class="hidden-xs text-uppercase">
                                Đăng ký
                            </span>
                        </a>
                        <a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i> 
                            <span class="hidden-xs text-uppercase">
                                Đăng nhập
                            </span>
                        </a>
                    </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

            <!-- *** TOP END *** -->

            <!-- *** NAVBAR ***
    _________________________________________________________ -->

    <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

        <div class="navbar navbar-default yamm" role="navigation" id="navbar">

            <div class="container">
                <div class="navbar-header">

                    <a class="navbar-brand home" href="{{URL::to('/trang-chu')}}">
                        <img src="{{asset('public/frontend/img/logo1.png')}}" style="height: 50px;" alt="Logo Shop" class="hidden-xs hidden-sm">
                        <img src="{{asset('public/frontend/img/logo-small.png')}}" alt="Universal logo" class="visible-xs visible-sm"><span class="sr-only">Shop bán điện thoại di động</span>
                    </a>
                    <div class="navbar-buttons">
                        <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-align-justify"></i>
                        </button>
                    </div>
                </div>
                        <!--/.navbar-header -->

                <div class="navbar-collapse collapse" id="navigation">

                    <ul class="nav navbar-nav navbar-right">
                       
                        <li class="active">
                            <a href="{{URL::to('/trang-chu')}}">Trang chủ</b></a>
                        </li>
                        <li class="use-yamm yamm-fw">
                            <a href="{{URL::to('/san-pham')}}">Sản phẩm</a>
                        </li>
                        <li class="use-yamm yamm-fw">
                             <a href="{{URL::to('/tin-tuc')}}">Tin tức</a>
                        </li>
                        <li class="use-yamm yamm-fw">
                             <a href="{{URL::to('/lien-he')}}">Liên hệ</a>
                        </li>
                     
                                <!-- ========== FULL WIDTH MEGAMENU END ================== -->
                        <li>
                            <a href="{{URL::to('/giohang')}}">Giỏ hàng</a>
                        </li>
                    </ul>

                        </div>
                        <!--/.nav-collapse -->



                        <div class=" clearfix" id="search">

                            <form class="navbar-form" role="search" action="{{URL::to('/tim-kiem')}}" method="post">
                                {{csrf_field()}}
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm" name="value">
                                    <span class="input-group-btn">
                                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form>

                        </div>
                        <!--/.nav-collapse -->

                    </div>


                </div>
                <!-- /#navbar -->

            </div>

            <!-- *** NAVBAR END *** -->

        </header>

        <!-- *** LOGIN MODAL ***
_________________________________________________________ -->

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Khách hàng đăng nhập</h4>
                    </div>
                    <div class="modal-body">
                        <form action="{{URL::to('/dang-nhap')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="text" class="form-control" id="email_modal" placeholder="email" name="email" required oninvalid="this.setCustomValidity('Bạn chưa nhập email')" oninput="this.setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password_modal" placeholder="password" name="password" required oninvalid="this.setCustomValidity('Bạn chưa nhập mật khẩu')" oninput="this.setCustomValidity('')">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-template-main"><i class="fa fa-sign-in"></i> Đăng nhập</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Chưa đăng ký?</p>
                        <p class="text-center text-muted"><a href="{{URL::to('/dang-ky')}}"><strong>Đăng ký ngay</strong></a>! Rất dễ dàng để hoàn thành trong 1&nbsp;phút và truy cập ngay để có thể nhận nhiều phần quà ưu đãi!</p>

                    </div>
                </div>
            </div>
        </div>

        <!-- *** LOGIN MODAL END *** -->      

        @yield('content')

       
        <!-- /.bar -->


        <footer id="footer">
        <div class="container">
        <div class="col-md-3 col-sm-3">
            <h4>Về chúng tôi</h4>
            <p>Chuyên kinh doanh điện thoại di động, hàng công nghệ, linh kiện – phụ kiện điện thoại di động, sửa chữa điện thoại di động.</p>
            <hr>
            <h4>Nhận thông tin từ chúng tôi</h4>
            <form>
                <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="fa fa-send"></i></button>
                    </span>

                </div>
                        <!-- /input-group -->
            </form>

             <hr class="hidden-md hidden-lg hidden-sm">

        </div>

         <div class="col-md-6 col-sm-6 text-right">
            
            <div class="photostream">
                @foreach( $hang as $key => $dshang )
                <div>
                    <a href="{{URL::to('/hang-san-pham/'.$dshang -> Id_hang)}}">
                        <img style="width: 70px; height: 70px;" src="{{URL::to('public/upload/icon/'.$dshang -> image)}}" class="img-responsive" alt="{{$dshang -> tenhang}}">
                    </a>
                </div>
                @endforeach
            </div>
                <!-- /.col-md-3 -->
        </div>
                <!-- /.col-md-3 -->
        <div class="col-md-3 col-sm-3 text-right">
            <h4>Liên hệ</h4>
                <p><strong>Shop Điện Thoại Baosieubanh </strong>
                <br>14/70, Bình Đường 4 <br>An Bình, Dĩ An <br>Bình Dương
                <br>Việt Nam <br> <strong>Mời quý khách</strong>
                </p>
                <a href="{{URL::to('/lien-he')}}" class="btn btn-small btn-template-main">Liên hệ</a>
            <hr class="hidden-md hidden-lg hidden-sm">
        </div>
                <!-- /.col-md-3 -->
    
            <!-- /.container -->
    </div>
</footer>
        

        <!-- *** FOOTER END *** -->

    </div>
   

    <!-- #### JAVASCRIPT FILES ### -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="{{asset("public/frontend/js/jquery-1.11.0.min.js")}}"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="{{asset('public/frontend/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('public/frontend/js/waypoints.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.parallax-1.1.3.js')}}"></script>
    <script src="{{asset('public/frontend/js/front.js')}}"></script>

    

    <!-- owl carousel -->
    <script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script>



</body>

</html>