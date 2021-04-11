@extends('layout')
@section('content')

<div id="heading-breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h1>Tìm kiếm</h1>
			</div>
			<div class="col-md-5">
				<ul class="breadcrumb">
					<li><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></li>
					<li>Tìm kiếm</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div id="content">
	<div class="container">
	


		<div class="row">
            @foreach($timkiem_tin as $key => $tintuc)
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

	</div>
</div>

@endsection
