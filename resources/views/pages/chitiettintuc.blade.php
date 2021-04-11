@extends('layout')
@section('content')
@foreach ($tintuc as $key => $tintuc)
<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1>Chi Tiết Tin Tức</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb">
                    <li><a href="{{URL::to('/trang-chu')}}">Trang chủ</a>
                    </li>
                    <li>Tin tức</li>
                    
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="content">
            <div class="container">

                <div class="row">

                    <!-- *** LEFT COLUMN ***
			_________________________________________________________ -->

                    <div class="col-md-9" id="blog-post">


                        <p class="text-muted text-uppercase mb-small text-right"><a href="{{URL::to('/hang-san-pham/'.$tintuc -> Id_hang)}}">{{$tintuc -> tenhang}}</a> | {{$tintuc -> ngay}}</p>
                        <p class="lead">{{$tintuc -> tieude}}</p>

                        <div id="post-content">
                            <?php
                                echo $tintuc -> noidung;
                            ?>
                        </div>
                        <!-- /#post-content -->

                       


                        


                    </div>
                    <!-- /#blog-post -->

                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN ***
				_________________________________________________________ -->

                    <div class="col-md-3">

                        <!-- *** MENUS AND WIDGETS ***
 _________________________________________________________ -->
                        

                        <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title">Tìm kiếm</h3>
                            </div>

                            <div class="panel-body">
                                <form role="search">
                                    <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Tìm kiếm tin tức">
                                    <span class="input-group-btn">
                                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>
                                    </span>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title">Danh mục sản phẩm</h3>
                            </div>

                            <div class="panel-body">
                                <ul class="nav nav-pills nav-stacked">
                                    @foreach ($hang as $key => $dshang)
                                    <li><a href="{{URL::to('/hang-san-pham/'.$dshang -> Id_hang)}}">{{$dshang -> tenhang}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="panel sidebar-menu">
                            <div class="panel-heading">
                                <h3 class="panel-title">Tags</h3>
                            </div>

                            <div class="panel-body">
                                <ul class="tag-cloud">
                                    @foreach ($hang as $key => $dshang)
                                    <li><a href="#"><i class="fa fa-tags"></i>{{$dshang -> tenhang}}</a> 
                                    </li>
                                     @endforeach
                                </ul>
                            </div>
                        </div>

                        <!-- *** MENUS AND FILTERS END *** -->

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** RIGHT COLUMN END *** -->


                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
@endforeach
@endsection