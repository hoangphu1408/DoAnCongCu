@extends('layout')
@section('content')
<div id="heading-breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h1>Tin tức</h1>
			</div>
			<div class="col-md-5">
				<ul class="breadcrumb">
					<li><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></li>
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

            <div class="col-md-9" id="blog-listing-small">

                <div class="row">
               	@foreach($tintuc as $key => $tintuc)
                    <div class="col-md-4 col-sm-6">
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

                    <ul class="pager">
                        <!-- <li class="previous disabled"><a href="#">&larr; Older</a>
                        </li> -->
                        <li class="next"><a href="#">Trang kế &rarr;</a>
                        </li>
                    </ul>



                    </div>
                    <!-- /.col-md-9 -->

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
                                <form role="search" method="post" action="{{URL::to('/tim-kiem-tin')}}">
                                    {{csrf_field()}}
                                    <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Tìm kiếm tin tức" name="value">
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
        <!-- /#content -->

@endsection
