@extends('homepage.layouts.template')
@section('content')
<div class="header-navigate clearfix mb15">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5">
					<ol class="breadcrumb breadcrumb-arrow" itemscope=""
						itemtype="http://data-vocabulary.org/Breadcrumb">
						<li><a href="/" itemprop="url" target="_self">Trang chủ</a></li>

						<li><i class="fa fa-angle-right"></i></li>
						<li><a href="/account" itemprop="url" target="_self"><span itemprop="title">Tài khoản</span></a>
						</li>
						<li><i class="fa fa-angle-right"></i></li>
						<li class="active"><span itemprop="title">Đăng kí ADMIN</span></li>

					</ol>
				</div>
			</div>
		</div>
	</div>
	<section class="layout-account">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<div id="register" class="userbox">
						<h1>Đăng ký</h1>
						<form accept-charset="UTF-8" action="/khach-hang/register" id="customer_register" method="post">
						{{csrf_field()}}
							<input name="FormType" type="hidden" value="customer_register">
							<input name="utf8" type="hidden" value="true">

							<div id="name" class="input-group input-account mb15">
								<label class="input-group-addon"><i class="icon-userico"></i></label>
								<input required="" type="text" name="name" placeholder="user name" id="name"
									class="form-control" size="30">
							</div>
							<!-- <div id="first_name" class="input-group input-account mb15">
								<label class="input-group-addon"><i class="icon-userico"></i></label>
								<input required="" type="text" name="firstname" placeholder="Tên" id="firstname"
									class="form-control" size="30">
							</div> -->

							<div id="email" class="input-group input-account mb15">
								<label class="input-group-addon"><i class="icon-login icon-envelope"></i></label>
								<input required="" type="email" placeholder="Email" name="email" id="email"
									class="form-control" size="30">
							</div>

							<div id="password" class="input-group input-account mb15">
								<label class="input-group-addon"><i class="icon-login icon-shield"></i></label>
								<input required="" type="password" placeholder="Mật khẩu" name="password" id="password"
									class="form-control" size="30">
							</div>

							<div class="action_bottom mb15">
								<input class="btn" type="submit" value="Đăng ký">
							</div>
							<div class="req_pass">
								<a class="come-back" href="{{route('account')}}">Quay về</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="modal fade product_view" id="product_view">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<a href="#" data-dismiss="modal" class="class pull-right"><span
							class="glyphicon glyphicon-remove"></span></a>
					<h3 class="modal-title">Giày thể thao Nike LunarTempo 2</h3>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6 product_img">
							<img src="assets/images/dotrainspeed4trainingshoe1.jpg" class="img-responsive">
						</div>
						<div class="col-md-6 product_content">
							<h4>Mã số: <span>51526</span></h4>
							<div class="rating">
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								(10 reviews)
							</div>
							<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
								unknown printer took a galley of type and scrambled it to make a type specimen
								book.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							<h3 class="cost"><span class="glyphicon glyphicon-usd"></span> 75.00 <small
									class="pre-cost"><span class="glyphicon glyphicon-usd"></span> 60.00</small></h3>
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-12">
									<select class="form-control" name="select">
										<option value="" selected="">Màu sắc</option>
										<option value="black">Trắng</option>
										<option value="white">Đen</option>
										<option value="gold">Hồng</option>
										<option value="rose gold">Khác</option>
									</select>
								</div>
								<!-- end col -->
								<div class="col-md-6 col-sm-6 col-xs-12">
									<select class="form-control" name="select">
										<option value="">Kích thước</option>
										<option value="">36</option>
										<option value="">37</option>
										<option value="">38</option>
										<option value="">39</option>
									</select>
								</div>

								<!-- end col -->
							</div>
							<div class="space-ten"></div>
							<div class="btn-ground">
								<button type="button" class="btn btn-primary"><span
										class="glyphicon glyphicon-shopping-cart"></span> Thêm vào giỏ</button>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('page-script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!--app script-->
    <script src="./assets/scripts/main.js"></script>
    <script src="assets/scripts/owl.carousel.min.js"></script>
@endsection
