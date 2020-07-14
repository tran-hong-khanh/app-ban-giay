@extends('homepage.layouts.template')
@section('content')

<div class="header-navigate clearfix mb15">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5">
				<ol class="breadcrumb breadcrumb-arrow" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
					<li><a href="/" itemprop="url" target="_self">Trang chủ</a></li>
					
					<li><i class="fa fa-angle-right"></i></li>
					<li class="active"><span itemprop="title">Tin tuc</span></li>
					
				</ol>
			</div>
		</div>
	</div>
</div>
<div id="blog" class="clearfix">
	<div class="container">
		<div class="row">
			
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">	
				<div class="group-blog mb15">
					<div class="title-block">
						<h1 class="title-group">Tin tức</h1>
					</div>
				</div>		
				<div class="">
					<ul class="blog-list-articles mb15 clearfix" id="list-articles">
						<li class="wrapper-article mb15">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 blog-item-image">
									<a href="{{route('chitiettintuc')}}"><img src="{{ asset('home/assets/images/yaq3rp7binnritgbubsl-grande.jpg')}}" alt="Air Jordan 3 True Blue được bán sớm hơn thông qua ứng dụng SNKRS và Nike"></a>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 blog-item-title">
									<a href="{{route('chitiettintuc')}}" title="Air Jordan 3 True Blue được bán sớm hơn thông qua ứng dụng SNKRS và Nike">
										<h3 class="article-title">Air Jordan 3 True Blue được bán sớm hơn thông qua ứng dụng SNKRS và Nike</h3>
									</a>
									<p class="blog-item-created"><i class="fa fa-calendar" aria-hidden="true"></i> 24/07/2017 - Nguyễn Văn Thành</p>
									<div class="blog-item-content"> Nike vẫn giữ nguyên ngày phát hành của phiên bản Air Jordan 3 “True Blue” vào ngày Black Friday 25/11 sắp tới và không có bất kì thông tin gì về việc thay đổi hay trì hoãn thời điểm...</div>
								</div>
							</div>
						</li>
						
						
						
						
						
						<li class="wrapper-article mb15">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 blog-item-image">
									<a href="{{route('chitiettintuc')}}"><img src="{{ asset('home/assets/images/nike-flyknit-racer-midnight-1-e1479554458945-grande.jpg')}}" alt="Nike Flyknit Racer Triple Black"></a>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 blog-item-title">
									<a href="{{route('chitiettintuc')}}" title="Nike Flyknit Racer Triple Black">
										<h3 class="article-title">Nike Flyknit Racer Triple Black</h3>
									</a>
									<p class="blog-item-created"><i class="fa fa-calendar" aria-hidden="true"></i> 24/07/2017 - Nguyễn Văn Thành</p>
									<div class="blog-item-content"> Cuối cùng thì Nike Sportwear cũng đã phát hành phối màu “all black” của mẫu giày Nike Flyknit Racer với mức giá bán lẻ $150. Mặc dù cũng đã hơi trễ khi phát hành nhưng Nike đang cố gắng...</div>
								</div>
							</div>
						</li>
						
						
						
						
						
						<li class="wrapper-article mb15">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 blog-item-image">
									<a href="{{route('chitiettintuc')}}"><img src="{{ asset('home/assets/images/nike-flyknit-racer-midnight-1-e1479554458945-grande.jpg')}}" alt="Nike Flyknit Racer Triple Black"></a>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 blog-item-title">
									<a href="{{route('chitiettintuc')}}" title="Nike Flyknit Racer Triple Black">
										<h3 class="article-title">Nike Flyknit Racer Triple Black</h3>
									</a>
									<p class="blog-item-created"><i class="fa fa-calendar" aria-hidden="true"></i> 24/07/2017 - Nguyễn Văn Thành</p>
									<div class="blog-item-content"> Cuối cùng thì Nike Sportwear cũng đã phát hành phối màu “all black” của mẫu giày Nike Flyknit Racer với mức giá bán lẻ $150. Mặc dù cũng đã hơi trễ khi phát hành nhưng Nike đang cố gắng...</div>
								</div>
							</div>
						</li>
						
						
						
						
						
						<li class="wrapper-article mb15">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 blog-item-image">
									<a href="{{route('chitiettintuc')}}"><img src="{{ asset('home/assets/images/nike-flyknit-racer-midnight-1-e1479554458945-grande.jpg')}}" alt="Nike Flyknit Racer Triple Black"></a>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 blog-item-title">
									<a href="{{route('chitiettintuc')}}" title="Nike Flyknit Racer Triple Black">
										<h3 class="article-title">Nike Flyknit Racer Triple Black</h3>
									</a>
									<p class="blog-item-created"><i class="fa fa-calendar" aria-hidden="true"></i> 24/07/2017 - Nguyễn Văn Thành</p>
									<div class="blog-item-content"> Cuối cùng thì Nike Sportwear cũng đã phát hành phối màu “all black” của mẫu giày Nike Flyknit Racer với mức giá bán lẻ $150. Mặc dù cũng đã hơi trễ khi phát hành nhưng Nike đang cố gắng...</div>
								</div>
							</div>
						</li>
						
						
						
						
						
						<li class="wrapper-article mb15">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 blog-item-image">
									<a href="{{route('chitiettintuc')}}"><img src="{{ asset('home/assets/images/nike-flyknit-racer-midnight-1-e1479554458945-grande.jpg')}}" alt="Nike Flyknit Racer Triple Black"></a>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 blog-item-title">
									<a href="{{route('chitiettintuc')}}" title="Nike Flyknit Racer Triple Black">
										<h3 class="article-title">Nike Flyknit Racer Triple Black</h3>
									</a>
									<p class="blog-item-created"><i class="fa fa-calendar" aria-hidden="true"></i> 24/07/2017 - Nguyễn Văn Thành</p>
									<div class="blog-item-content"> Cuối cùng thì Nike Sportwear cũng đã phát hành phối màu “all black” của mẫu giày Nike Flyknit Racer với mức giá bán lẻ $150. Mặc dù cũng đã hơi trễ khi phát hành nhưng Nike đang cố gắng...</div>
								</div>
							</div>
						</li>
						
						
						
						
						
						<li class="wrapper-article mb15">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 blog-item-image">
									<a href="{{route('chitiettintuc')}}"><img src="{{ asset('home/assets/images/nike-flyknit-racer-midnight-1-e1479554458945-grande.jpg')}}" alt="Nike Flyknit Racer Triple Black"></a>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 blog-item-title">
									<a href="{{route('chitiettintuc')}}" title="Nike Flyknit Racer Triple Black">
										<h3 class="article-title">Nike Flyknit Racer Triple Black</h3>
									</a>
									<p class="blog-item-created"><i class="fa fa-calendar" aria-hidden="true"></i> 24/07/2017 - Nguyễn Văn Thành</p>
									<div class="blog-item-content"> Cuối cùng thì Nike Sportwear cũng đã phát hành phối màu “all black” của mẫu giày Nike Flyknit Racer với mức giá bán lẻ $150. Mặc dù cũng đã hơi trễ khi phát hành nhưng Nike đang cố gắng...</div>
								</div>
							</div>
						</li>
										
					</ul>
					<div class="pagination-default clearfix">
						
					</div>
				</div>				
			</div>
			
			<!--thêm if news_recent_show and -->
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pd5">
	
	
	<div class="blog-sidebar mb15">
		<div class="wrapper-article-list">
			<div class="title-group-related">
				
				<h2 class="title-group">Bài viết mới nhất</h2>
				
			</div>
		</div>
		<ul class="list-article-new">
			<li>
				<div class="flexbox-grid-default">
					<div class="flexbox-auto-100px">
						<a href="{{route('chitiettintuc')}}" title="Air Jordan 3 True Blue được bán sớm hơn thông qua ứng dụng SNKRS và Nike">
							<img src="{{ asset('home/assets/images/yaq3rp7binnritgbubsl-grande.jpg')}}" alt="Air Jordan 3 True Blue được bán sớm hơn thông qua ứng dụng SNKRS và Nike">
						</a>
					</div>
					<div class="flexbox-content pd-l-10">
						<a href="{{route('chitiettintuc')}}" title="Air Jordan 3 True Blue được bán sớm hơn thông qua ứng dụng SNKRS và Nike">
							<h3 class="article-title">Air Jordan 3 True Blue được bán sớm hơn thông qua ứng dụng SNKRS và Nike</h3>
						</a>						
						<p class="article-item-created">
							Ngày:24/07/2017 lúc 17:20PM
						</p>	
					</div>
				</div>
			</li>
			<li>
				<div class="flexbox-grid-default">
					<div class="flexbox-auto-100px">
						<a href="{{route('chitiettintuc')}}" title="Air Jordan 3 True Blue được bán sớm hơn thông qua ứng dụng SNKRS và Nike">
							<img src="{{ asset('home/assets/images/yaq3rp7binnritgbubsl-grande.jpg')}}" alt="Air Jordan 3 True Blue được bán sớm hơn thông qua ứng dụng SNKRS và Nike">
						</a>
					</div>
					<div class="flexbox-content pd-l-10">
						<a href="{{route('chitiettintuc')}}" title="Air Jordan 3 True Blue được bán sớm hơn thông qua ứng dụng SNKRS và Nike">
							<h3 class="article-title">Air Jordan 3 True Blue được bán sớm hơn thông qua ứng dụng SNKRS và Nike</h3>
						</a>						
						<p class="article-item-created">
							Ngày:24/07/2017 lúc 17:20PM
						</p>	
					</div>
				</div>
			</li>
			<li>
				<div class="flexbox-grid-default">
					<div class="flexbox-auto-100px">
						<a href="{{route('chitiettintuc')}}" title="Air Jordan 3 True Blue được bán sớm hơn thông qua ứng dụng SNKRS và Nike">
							<img src="{{ asset('home/assets/images/yaq3rp7binnritgbubsl-grande.jpg')}}" alt="Air Jordan 3 True Blue được bán sớm hơn thông qua ứng dụng SNKRS và Nike">
						</a>
					</div>
					<div class="flexbox-content pd-l-10">
						<a href="{{route('chitiettintuc')}}" title="Air Jordan 3 True Blue được bán sớm hơn thông qua ứng dụng SNKRS và Nike">
							<h3 class="article-title">Air Jordan 3 True Blue được bán sớm hơn thông qua ứng dụng SNKRS và Nike</h3>
						</a>						
						<p class="article-item-created">
							Ngày:24/07/2017 lúc 17:20PM
						</p>	
					</div>
				</div>
			</li>
			<li>
				<div class="flexbox-grid-default">
					<div class="flexbox-auto-100px">
						<a href="{{route('chitiettintuc')}}" title="Air Jordan 3 True Blue được bán sớm hơn thông qua ứng dụng SNKRS và Nike">
							<img src="{{ asset('home/assets/images/yaq3rp7binnritgbubsl-grande.jpg')}}" alt="Air Jordan 3 True Blue được bán sớm hơn thông qua ứng dụng SNKRS và Nike">
						</a>
					</div>
					<div class="flexbox-content pd-l-10">
						<a href="{{route('chitiettintuc')}}" title="Air Jordan 3 True Blue được bán sớm hơn thông qua ứng dụng SNKRS và Nike">
							<h3 class="article-title">Air Jordan 3 True Blue được bán sớm hơn thông qua ứng dụng SNKRS và Nike</h3>
						</a>						
						<p class="article-item-created">
							Ngày:24/07/2017 lúc 17:20PM
						</p>	
					</div>
				</div>
			</li>
			<li>
				<div class="flexbox-grid-default">
					<div class="flexbox-auto-100px">
						<a href="{{route('chitiettintuc')}}" title="Air Jordan 3 True Blue được bán sớm hơn thông qua ứng dụng SNKRS và Nike">
							<img src="{{ asset('home/assets/images/yaq3rp7binnritgbubsl-grande.jpg')}}" alt="Air Jordan 3 True Blue được bán sớm hơn thông qua ứng dụng SNKRS và Nike">
						</a>
					</div>
					<div class="flexbox-content pd-l-10">
						<a href="{{route('chitiettintuc')}}" title="Air Jordan 3 True Blue được bán sớm hơn thông qua ứng dụng SNKRS và Nike">
							<h3 class="article-title">Air Jordan 3 True Blue được bán sớm hơn thông qua ứng dụng SNKRS và Nike</h3>
						</a>						
						<p class="article-item-created">
							Ngày:24/07/2017 lúc 17:20PM
						</p>	
					</div>
				</div>
			</li>
			
		</ul>			
	</div>
	
	<div class="mb15">
		
		<div class="box-banner-index text-center mb15">
			<a href="{{route('chitiettintuc')}}">
				<picture>
					<img src="{{ asset('home/assets/images/banner_product_1.jpg')}}" alt="Banner 1" title="Banner 1">
				</picture>
			</a>
		</div>
		
		
		<div class="box-banner-index text-center mb15">
			<a href="{{route('chitiettintuc')}}">
				<picture>
					<img src="{{ asset('home/assets/images/banner_product_2.jpg')}}" alt="Banner 2" title="Banner 2">
				</picture>
			</a>
		</div>
		
		
		<div class="box-banner-index text-center mb15">
			<a href="{{route('chitiettintuc')}}">
				<picture>
					<img src="{{ asset('home/assets/images/banner_product_3.jpg')}}" alt="Banner 3" title="Banner 3">
				</picture>
			</a>
		</div>
		
	</div>
</div>
		</div>
	</div>
</div>







<div class="modal fade product_view" id="product_view">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title">Giày thể thao Nike LunarTempo 2</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product_img">
                        <img src="{{ asset('home/assets/images/dotrainspeed4trainingshoe1.jpg')}}" class="img-responsive">
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
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <h3 class="cost"><span class="glyphicon glyphicon-usd"></span> 75.00 <small class="pre-cost"><span class="glyphicon glyphicon-usd"></span> 60.00</small></h3>
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
                            <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span> Thêm vào giỏ</button>
                         
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
