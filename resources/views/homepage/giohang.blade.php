@extends('homepage.layouts.template')
@section('content')

<div class="header-navigate clearfix mb15">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5">
				<ol class="breadcrumb breadcrumb-arrow" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
					<li><a href="/" itemprop="url" target="_self">Trang chủ</a></li>
					
					<li><i class="fa fa-angle-right"></i></li>
					<li class="active"><span itemprop="title">Gio hang</span></li>
					
				</ol>
			</div>
		</div>
	</div>
</div>
<section id="cart">
	<div class="container">
		<div class="row" id="cart">
			<div class="col-xs-12">
				<h1 class="title-head-cart">Giỏ hàng của bạn</h1>
			</div>
			<div class="col-xs-12">
				
				<form action="/cart" method="post" id="cartform">
					<h4 class="cart-number">
						Bạn đang có <span style="color: #58b3f0">1 sản phẩm</span> trong giỏ hàng.
					</h4>
					<div class="clearfix overflow-cart mb15">
						<table id="table-cart">
							<tbody><tr class="hidden-xs">
								<th class="text-left" colspan="2">Sản phẩm</th>
								<th>Đơn giá</th>
								<th>Số lượng</th>
								<th>Thành tiền</th>
								<th></th>
							</tr>
							
							<tr>
								<td class="image">
									<a href="">
										<img src="{{ asset('home/assets/images/tranglunarglide7runningshoe1.jpg')}}" alt="Nike LunarGlide 7">
									</a>
								</td>
								<td class="infor">
									<a href="/nike-lunarglide-7?variantid=12206648">
										<div><h3 class="product-title">Nike LunarGlide 7</h3></div>
										
										<div class="variant-title">Trắng / 39</div>
										
										<div class="price visible-xs">2.718.000₫</div>
									</a>
								</td>
								<td class="price hidden-xs">2.718.000₫</td>
								<td class="qty">
									<input type="number" class="form-control" size="4" name="Lines" min="1" id="updates_3696010" value="1" onfocus="this.select();">
								</td>
								<td class="price hidden-xs">2.718.000₫</td>
								<td class="remove">
									<a href="/cart/change?line=1&amp;quantity=0" class="cart">
										<svg class="svg-next-icon svg-next-icon-size-24">
											<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#track_cart"></use>
										</svg>
										Xóa
									</a>
								</td>
							</tr>
							
						</tbody></table>
					</div>
					<div class="row">
						<div class="col-sm-12 col-xs-12">
							<div class="text-right total-cart-money">
								Thành tiền: <span>2.718.000₫</span>
							</div>
							<div class="text-right">
								<a class="continue-shopping" title="Mua tiếp" href="//rossy-store.bizwebvietnam.net">Tiếp tục mua hàng</a>
								<button class="update-cart" name="submit">Cập nhật giỏ hàng</button>
								<a href="javascript:void(0);" onclick="Nobita.UpdateCartNoteToCheckout('cartform')" id="checkout" name="checkout" class="btn-checkout">Thanh toán</a>
							</div>
						</div>
					</div>
				</form>
				
			</div>
		</div>
	</div>
</section>







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
