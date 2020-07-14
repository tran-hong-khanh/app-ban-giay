@extends('homepage.layouts.template')
@section('content')
<div class="header-navigate clearfix mb15">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5">
				<ol class="breadcrumb breadcrumb-arrow" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
					<li><a href="/" itemprop="url" target="_self">Trang chủ</a></li>
					
					<li><i class="fa fa-angle-right"></i></li>
					<li class="active"><span itemprop="title">sanpham</span></li>
					
				</ol>
			</div>
		</div>
	</div>
</div>

<section id="collection" class="clearfix">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="wrap-filter clearfix mb15">

						<div class="group-collection" aria-expanded="true">
							<div class="title-block dropdown-filter">

								<h3 class="title-group">Danh mục nhóm</h3>

								<i class="fa fa-minus flexbox-grid-default flexbox-justifyContent-center flexbox-alignItems-center"
									aria-hidden="true"></i>
							</div>
							<div class="filter-box">
								<ul id="menusidebarleft" class="menu-collection clearfix mb15">
									<li class="">
										<a href="{{route('products')}}" title="Trang chủ">Trang chủ</a>
									</li>
									<li class="">
										<a href="{{route('gioithieu')}} title="Giới thiệu">Giới thiệu</a>
									</li>
									<li class="active submenu-parent" aria-expanded="false">
										<a href="{{route('products')}}" title="Giày nam">Giày nam</a>
									</li>
									<li class="">
										<a href="{{route('products')}}" title="Giày nữ">Giày nữ</a>
									</li>
									<li class="">
										<a href="{{route('tintuc')}}" title="Tin tức">Tin tức</a>
									</li>
									<li class="">
										<a href="{{route('lienhe')}}" title="Liên hệ">Liên hệ</a>
									</li>
								</ul>
							</div>
						</div>


						<div class="group-collection" aria-expanded="true">
							<div class="title-block dropdown-filter">

								<h3 class="title-group">Thương hiệu</h3>

								<i class="fa fa-minus flexbox-grid-default flexbox-justifyContent-center flexbox-alignItems-center"
									aria-hidden="true"></i>
							</div>
							<div class="filter-box" id="filter-vendor">
								<ul>
									<li>
										<label data-filter="nike" class="nike">
											<input type="checkbox" value="(Nike)">
											<span>Nike</span>
										</label>
									</li>
								</ul>
							</div>
						</div>


						<div class="group-collection" aria-expanded="true" style="height:200px;">
							<div class="title-block dropdown-filter">
								<h3 class="title-group">Giá</h3>
								<i class="fa fa-minus flexbox-grid-default flexbox-justifyContent-center flexbox-alignItems-center"
									aria-hidden="true"></i>
							</div>
							<div class="filter-box" id="filter-price">
								<ul>
									<li>
										<label>
											<input type="radio" name="price-filter" data-price="0:500000"
												value="(price_min:(<=500000))">
											<span>Nhỏ hơn 500.000₫</span>
										</label>
									</li>
									<li>
										<label>
											<input type="radio" name="price-filter" data-price="500000:2000000"
												value="(price_min:((>=500000)AND(<2000000)))">
											<span>Từ 500.000₫ - 2.000.000₫</span>
										</label>
									</li>
									<li>
										<label>
											<input type="radio" name="price-filter" data-price="2000000:3000000"
												value="(price_min:((>=2000000)AND(<3000000)))">
											<span>Từ 2.000.000₫ - 3.000.000₫</span>
										</label>
									</li>
									<li>
										<label>
											<input type="radio" name="price-filter" data-price="3000000:4000000"
												value="(price_min:((>=3000000)AND(<4000000)))">
											<span>Từ 3.000.000₫ - 4.000.000₫</span>
										</label>
									</li>
									<li>
										<label>
											<input type="radio" name="price-filter" data-price="4000000:max"
												value="(price_min:(>=4000000))">
											<span>Lớn hơn 4.000.000₫</span>
										</label>
									</li>
								</ul>
							</div>
						</div>


						<div class="group-collection" aria-expanded="true">
							<div class="title-block dropdown-filter">
								<h3 class="title-group">Màu sắc</h3>
								<i class="fa fa-minus flexbox-grid-default flexbox-justifyContent-center flexbox-alignItems-center"
									aria-hidden="true"></i>
							</div>
							<div class="filter-box" id="filter-color">
								<ul class="clearfix">
									<li>
										<label style="background:#ffffff" class="first-color">
											<input type="checkbox" value="(Trắng)">
										</label>
									</li>
									<li>
										<label style="background:#000000">
											<input type="checkbox" value="(Đen)">
										</label>
									</li>
									<li>
										<label style="background:#f44336">
											<input type="checkbox" value="(Đỏ)">
										</label>
									</li>
									<li>
										<label style="background:#f06292">
											<input type="checkbox" value="(Hồng)">
										</label>
									</li>
									<li>
										<label style="background:#9c27b0">
											<input type="checkbox" value="(Tím)">
										</label>
									</li>
									<li>
										<label style="background:#2196f3">
											<input type="checkbox" value="(Xanh)">
										</label>
									</li>
									<li>
										<label style="background:#3f51b5">
											<input type="checkbox" value="(Xanh Dương)">
										</label>
									</li>
									<li>
										<label style="background:#4caf50">
											<input type="checkbox" value="(Xanh Lá)">
										</label>
									</li>
									<li>
										<label style="background:#ffb74d">
											<input type="checkbox" value="(Cam)">
										</label>
									</li>
									<li>
										<label style="background:#cfd8dc">
											<input type="checkbox" value="(Xám)">
										</label>
									</li>
									<li>
										<label style="background:#8d6e63">
											<input type="checkbox" value="(Nâu)">
										</label>
									</li>
									<li>
										<label style="background:#ffee58">
											<input type="checkbox" value="(Vàng)">
										</label>
									</li>
								</ul>
							</div>
						</div>


						<div class="group-collection" aria-expanded="true">
							<div class="title-block dropdown-filter">
								<h3 class="title-group">Kích thước</h3>
								<i class="fa fa-minus flexbox-grid-default flexbox-justifyContent-center flexbox-alignItems-center"
									aria-hidden="true"></i>
							</div>
							<div class="filter-box" id="filter-size">
								<ul class="filter-size clearfix">
									<li>
										<label data-filter="35" class="35">
											<input type="checkbox" value="(35)">
											<span>35</span>
										</label>
									</li>
									<li>
										<label data-filter="36" class="36">
											<input type="checkbox" value="(36)">
											<span>36</span>
										</label>
									</li>
									<li>
										<label data-filter="37" class="37">
											<input type="checkbox" value="(37)">
											<span>37</span>
										</label>
									</li>

									<li>
										<label data-filter="38" class="38">
											<input type="checkbox" value="(38)">
											<span>38</span>
										</label>
									</li>

									<li>
										<label data-filter="39" class="39">
											<input type="checkbox" value="(39)">
											<span>39</span>
										</label>
									</li>

									<li>
										<label data-filter="40" class="40">
											<input type="checkbox" value="(40)">
											<span>40</span>
										</label>
									</li>

									<li>
										<label data-filter="41" class="41">
											<input type="checkbox" value="(41)">
											<span>41</span>
										</label>
									</li>

									<li>
										<label data-filter="42" class="42">
											<input type="checkbox" value="(42)">
											<span>42</span>
										</label>
									</li>

									<li>
										<label data-filter="43" class="43">
											<input type="checkbox" value="(43)">
											<span>43</span>
										</label>
									</li>

									<li>
										<label data-filter="44" class="44">
											<input type="checkbox" value="(44)">
											<span>44</span>
										</label>
									</li>

									<li>
										<label data-filter="45" class="45">
											<input type="checkbox" value="(45)">
											<span>45</span>
										</label>
									</li>

									<li>
										<label data-filter="46" class="46">
											<input type="checkbox" value="(46)">
											<span>46</span>
										</label>
									</li>

									<li>
										<label data-filter="47" class="47">
											<input type="checkbox" value="(47)">
											<span>47</span>
										</label>
									</li>

									<li>
										<label data-filter="48" class="48">
											<input type="checkbox" value="(48)">
											<span>48</span>
										</label>
									</li>

								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<div class="row">
						<div class="col-xs-12 pd5">
							<div class="group-collection">
								<div class="title-block">

									<h1 class="title-group">Giày nam</h1>


									<div class="browse-tags pull-right hidden-xs">
										<span class="mr5">Sắp xếp theo:</span>
										<span class="custom-dropdown custom-dropdown--white">
											<select
												class="sort-by custom-dropdown__select custom-dropdown__select--white">
												<option value="manual">Sản phẩm nổi bật</option>
												<option value="price-asc">Giá: Tăng dần</option>
												<option value="price-desc">Giá: Giảm dần</option>
												<option value="alpha-asc">Tên: A-Z</option>
												<option value="alpha-desc">Tên: Z-A</option>
												<option value="created-asc">Cũ nhất</option>
												<option value="created-desc">Mới nhất</option>
												<option value="best-selling">Bán chạy nhất</option>
											</select>
										</span>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    @if($products)
                    @foreach($products as $index => $product)
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 product-wrapper product-resize mb30">
							<div class="product-information">
								<div class="product-detail clearfix">
									<div class="product-image image-resize">
										<a href="{{route('chitietsanpham', ['id' => $product->id, 'name' => $product->name])}}" title={{$product->name}}>

											<picture>
												<img src="{{$product->image_link}}"
													alt="{{$product->name}}">
											</picture>

										</a>
										<div class="box-position-quickview">
											<div class="wrap-btn-quickview">
												<a href="{{route('chitietsanpham', ['id' => $product->id, 'name' => $product->name])}}" class="quickview"
													data-handle="{{route('chitietsanpham', ['id' => $product->id, 'name' => $product->name])}}" title="Xem nhanh">Xem
													nhanh</a>
											</div>
										</div>
									</div>
									<div class="product-info">
										<a href="{{route('chitietsanpham', ['id' => $product->id, 'name' => $product->name])}}" title="Nike Sock Dart SE Premium">
											<h3 class="product-title">{{$product->name}}</h3>
										</a>
										<p class="product-box-price clearfix flexbox-grid-default">
											<span class="price-new flexbox-content text-left">{{number_format($product->price, 0, ',', ',')}}VNĐ</span>
										</p>
									</div>
								</div>
							</div>
						</div>
                    @endforeach
					{{ $products->links() }}
                    @endif
						<div class="icon-loading clear-ajax" style="display: none;">
							<div class="uil-ring-css">
								<div></div>
							</div>
						</div>
						<div class="pagination-default clearfix clear-ajax col-xs-12">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('page-script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!--app script-->
    <script src="./assets/scripts/main.js"></script>
    <script src="assets/scripts/owl.carousel.min.js"></script>
@endsection
