@extends('layout')
@section('content')

<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1>Liên hệ</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb">
                    <li><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></li>
                    <li>Liên hệ</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="content">
    <div class="container" id="contact">

        <section>

                    <div class="row">
                        <div class="col-md-12">
                            <section>
                                <div class="heading">
                                    <h2>Chúng tôi ở đây để giúp bạn</h2>
                                </div>

                                <p class="lead">Bạn tò mò về 1 điều gì đó? Bạn có một số vấn đề với sản phẩm của chúng tôi? Hãy liên hệ với chúng tôi để có thể được tư vấn và giải quyết sơm nhất có thể.</p>
                                <p>Hãy cảm thấy thoải mái khi liên hệ với chúng tôi, trung tâm chăm sóc khách hàng của chúng tôi luôn hoạt động 24/7.</p>
                            </section>
                        </div>
                    </div>

                </section>

                <section>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <h3>Địa chỉ</h3>
                                <p>14/70, Bình Đường 4
                                    <br>NAn Bình, Dĩ An
                                    <br>Bình Dương, <strong>Việt Nam</strong>
                                </p>
                            </div>
                            <!-- /.box-simple -->
                        </div>


                        <div class="col-md-4">

                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <h3>Điện thoại</h3>
                                <!-- <p class="text-muted">This number is toll free if calling from Great Britain otherwise we advise you to use the electronic form of communication.</p> -->
                                <p><strong>ĐT: 0359193168</strong>
                                </p>
                            </div>
                            <!-- /.box-simple -->

                        </div>

                        <div class="col-md-4">

                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <h3>Email</h3>
                              <!--   <p class="text-muted">Please feel free to write an email to us or to use our electronic ticketing system.</p> -->
                                <ul class="list-style-none">
                                    <li>Gmail: <strong><a href="mailto:">superbao2000@gmail.com</a></strong>
                                    </li>
                                    <!-- <li><strong><a href="#">Ticketio</a></strong> - our ticketing support platform</li> -->
                                </ul>
                            </div>
                            <!-- /.box-simple -->
                        </div>
                    </div>

                </section>

                <section>

                    <div class="row text-center">

                        <div class="col-md-12">
                            <div class="heading">
                                <h2>Mẫu liên hệ</h2>
                            </div>
                        </div>

                        <div class="col-md-8 col-md-offset-2">
                            <form method="" action="">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">Họ và tên</label>
                                            <input type="text" class="form-control" id="firstname">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lastname">Điện thoại</label>
                                            <input type="text" class="form-control" id="lastname">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="subject">Đề tài</label>
                                            <input type="text" class="form-control" id="subject">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="message">Nội dung</label>
                                            <textarea id="message" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-template-main"><i class="fa fa-envelope-o"></i> Gửi tin</button>

                                    </div>
                                </div>
                                <!-- /.row -->
                            </form>



                        </div>
                    </div>
                    <!-- /.row -->

                </section>


    </div>
            <!-- /#contact.container -->
</div>
        <!-- /#content -->

<div id="map">

</div>
@endsection