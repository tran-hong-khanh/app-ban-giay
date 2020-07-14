@extends('homepage.layouts.template')
@section('content')

<div class="header-navigate clearfix mb15">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5">
				<ol class="breadcrumb breadcrumb-arrow" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
					<li><a href="/" itemprop="url" target="_self">Trang chủ</a></li>
					
					<li><i class="fa fa-angle-right"></i></li>
					<li class="active"><span itemprop="title">Giới thiệu</span></li>
					
				</ol>
			</div>
		</div>
	</div>
</div>
<section id="product" class="clearfix">
	<div class="container">
		<div class="row">
			<div  class="col-lg-6 col-md-6">
					<div id='carousel-custom' class='carousel slide' data-ride='carousel'>
    <div class='carousel-outer'>
        <!-- me art lab slider -->
        <div class='carousel-inner '>
            <div class='item active'>
                <img src='http://images.asos-media.com/inv/media/8/2/3/3/5313328/print/image1xxl.jpg' alt=''id="zoom_05"  data-zoom-image="http://images.asos-media.com/inv/media/8/2/3/3/5313328/print/image1xxl.jpg"/>
            </div>
            <div class='item'  id="zoom_05">
                <img src='http://images.asos-media.com/inv/media/8/2/3/3/5313328/image2xxl.jpg' alt='' data-zoom-image="http://images.asos-media.com/inv/media/8/2/3/3/5313328/image2xxl.jpg" />
            </div>
            <div class='item'>
                <img src='http://images.asos-media.com/inv/media/8/2/3/3/5313328/image3xxl.jpg' alt='' data-zoom-image="http://images.asos-media.com/inv/media/8/2/3/3/5313328/image3xxl.jpg" />
            </div>
                
            <div class='item'>
                <img src='http://images.asos-media.com/inv/media/3/6/7/0/4850763/multi/image1xxl.jpg' alt='' data-zoom-image="http://images.asos-media.com/inv/media/3/6/7/0/4850763/multi/image1xxl.jpg" id="zoom_05"/>
            </div>
            <div class='item'>
                <img src='http://images.asos-media.com/inv/media/5/2/1/3/4603125/gold/image1xxl.jpg' alt='' data-zoom-image="http://images.asos-media.com/inv/media/5/2/1/3/4603125/gold/image1xxl.jpg" id="zoom_05"/>
            </div>
            <div class='item'>
                <img src='http://images.asos-media.com/inv/media/5/3/6/8/4948635/mink/image1xxl.jpg' alt='' data-zoom-image="http://images.asos-media.com/inv/media/5/3/6/8/4948635/mink/image1xxl.jpg" id="zoom_05"/>
            </div>
            <div class='item'>
                <img src='http://images.asos-media.com/inv/media/1/3/0/8/5268031/image2xxl.jpgg' alt='' data-zoom-image="http://images.asos-media.com/inv/media/1/3/0/8/5268031/image2xxl.jpg" id="zoom_05"/>
            </div>
            <script>
  $("#zoom_05").elevateZoom({ zoomType    : "inner", cursor: "crosshair" });
</script>
        </div>
            
        <!-- sag sol -->
        <a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
            <span class='glyphicon glyphicon-chevron-left'></span>
        </a>
        <a class='right carousel-control' href='#carousel-custom' data-slide='next'>
            <span class='glyphicon glyphicon-chevron-right'></span>
        </a>
    </div>
    
    <!-- thumb -->
    <ol class='carousel-indicators mCustomScrollbar meartlab'>
        <li data-target='#carousel-custom' data-slide-to='0' class='active'><img src='http://images.asos-media.com/inv/media/8/2/3/3/5313328/print/image1xxl.jpg' alt='' /></li>
        <li data-target='#carousel-custom' data-slide-to='1'><img src='http://images.asos-media.com/inv/media/8/2/3/3/5313328/image2xxl.jpg' alt='' /></li>
        <li data-target='#carousel-custom' data-slide-to='2'><img src='http://images.asos-media.com/inv/media/8/2/3/3/5313328/image3xxl.jpg' alt='' /></li>
        <li data-target='#carousel-custom' data-slide-to='3'><img src='http://images.asos-media.com/inv/media/3/6/7/0/4850763/multi/image1xxl.jpg' alt='' /></li>
        <li data-target='#carousel-custom' data-slide-to='4'><img src='http://images.asos-media.com/inv/media/5/2/1/3/4603125/gold/image1xxl.jpg' alt='' /></li>
        <li data-target='#carousel-custom' data-slide-to='5'><img src='http://images.asos-media.com/inv/media/5/3/6/8/4948635/mink/image1xxl.jpg' alt='' /></li>
        <li data-target='#carousel-custom' data-slide-to='6'><img src='http://images.asos-media.com/inv/media/1/3/0/8/5268031/image2xxl.jpg' alt='' /></li>

    </ol>
</div>			
					
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 pd5 information-product">
				<div class="product-title">
					<h1>{{$product->name}}</h1>
				</div>
				<div class="clearfix product-sku-date">
					<span class="pull-left product-sku" id="pro_sku">Mã sản phẩm: 859553-001-1</span>
				</div>
				<div class="product-price" id="price-preview"><span>{{number_format($product->price, 0, ',', ',')}}VNĐ</span></div>
				
							
				<form id="add-item-form" action="{{route('updateCart')}}" method="post" class="variants clearfix variant-style">
					{{csrf_field()}}	
					<!-- <div class="select clearfix">
						
						
						<div class="selector-wrapper opt1">
							<label>Màu sắc</label>
							<ul class="data-opt1 clearfix style-variant-template">

							<li class=" xam xam xam xam"><label><input type="radio" value="Xám" name="option1"><span>Xám</span></label></li><li class=" do-nau do-nau do-nau"><label><input type="radio" value="Đỏ Nâu" name="option1"><span>Đỏ Nâu</span></label></li></ul>
						</div>
						
						
						<div class="selector-wrapper opt2">
							<label>Kích thước</label>
							<ul class="data-opt2 clearfix style-variant-template">

							<li class=" xam" style="display: list-item;"><label><input type="radio" value="40" name="option2"><span>40</span></label></li><li class=" xam do-nau" style="display: list-item;"><label><input type="radio" value="41" name="option2"><span>41</span></label></li><li class=" xam do-nau" style="display: list-item;"><label><input type="radio" value="42" name="option2"><span>42</span></label></li><li class=" xam do-nau" style="display: list-item;"><label><input type="radio" value="43" name="option2"><span>43</span></label></li></ul>
						</div>
						
										
						<style>
							.selector-wrapper:not(.opt1):not(.opt1-quickview):not(.opt2):not(.opt2-quickview):not(.opt3):not(.opt3-quickview) {
								display: none;
							}
						</style>
						
						<div class="selector-wrapper">
							<label for="product-select-option-0">Màu sắc</label>
							<span class="custom-dropdown custom-dropdown-white">
								<select class="single-option-selector custom-dropdown-select custom-dropdown-white-select" data-option="option1" id="product-select-option-0">
									<option value="Xám">Xám</option>
									<option value="Đỏ Nâu">Đỏ Nâu</option>
								</select>
							</span>
						</div>
						<div class="selector-wrapper">
							<label for="product-select-option-1">Kích thước</label>
							<span class="custom-dropdown custom-dropdown-white">
								<select class="single-option-selector custom-dropdown-select custom-dropdown-white-select" data-option="option2" id="product-select-option-1">
									<option value="40">40</option>
									<option value="41">41</option>
									<option value="42">42</option>
									<option value="43">43</option>
								</select>
							</span>
						</div>
						<select id="product-select" name="id" style="display:none">
							
							<option value="12206677">Xám / 40 - 4.290.000₫</option>
							
							<option value="12206678">Xám / 41 - 4.290.000₫</option>
							
							<option value="12206679">Xám / 42 - 4.290.000₫</option>
							
							<option value="12206680">Xám / 43 - 4.290.000₫</option>
							
							<option value="12206681">Đỏ Nâu / 40 - 4.290.000₫</option>
							
							<option value="12206682">Đỏ Nâu / 41 - 4.290.000₫</option>
							
							<option value="12206683">Đỏ Nâu / 42 - 4.290.000₫</option>
							
							<option value="12206684">Đỏ Nâu / 43 - 4.290.000₫</option>
						
						</select>
					</div> -->
					@foreach ($items as $item)
						<input type="hidden" name="items[]" value="{{$item}}"/>
					@endforeach
					<div class="select-wrapper clearfix price-contact">
						<label>Số lượng</label>
						<div class="input-group">
							<!-- <input type="button" value="-" onclick="Nobita.minusQuantity()" class="qty-btn">
							<input type="text" id="quantity" name="quantity" value="1" min="1" class="quantity-selector">
							<input type="button" value="+" onclick="Nobita.plusQuantity()" class="qty-btn"> -->
							<input type="number" class="form-control" size="4" name="Lines" min="1" id="updates_3696010" value="1" onfocus="this.select();">
						</div>
					</div>
					<div class="clearfix price-contact">
						<button type="submit" class="btn-style-add add-to-cart">
							<span class="icon_cart_btn"></span>
							<span>Thêm vào giỏ</span>
						</button>
						<button type="submit" class="btn-style-buynow addnow">
							<span class="icon_cart_btn"></span>
							<span>Mua ngay</span>
						</button>
					</div>
				</form>			
				
				
			</div>
			<div class="col-lg-2 col-xs-12 pd-none-box-service mb15">
				<div class="box-service-product">
					<div class="header-box-service-product text-center">
						<div class="title">Sẽ có tại nhà bạn</div>
						<div class="content">từ 1-7 ngày làm việc</div>
					</div>
					<div class="content-box-service-product row">
						
						<div class="col-lg-12 col-sm-3 col-xs-12">
							<div class="border-service-product">
								<div class="flexbox-grid-default">
									<div class="flexbox-auto-45px flexbox-align-self-center">
										<img src="{{ asset('home/assets/images/icon-service-1.png')}}">
									</div>
									<div class="flexbox-content des-service-product">
										<div class="title">Giao hàng miễn phí</div>
										<div class="content">Sản phẩm trên 300,000đ</div>
									</div>
								</div>
							</div>
						</div>
						
						
						<div class="col-lg-12 col-sm-3 col-xs-12">
							<div class="border-service-product">
								<div class="flexbox-grid-default">
									<div class="flexbox-auto-45px flexbox-align-self-center">
										<img src="{{ asset('home/assets/images/icon-service-2.png')}}">
									</div>
									<div class="flexbox-content des-service-product">
										<div class="title">Đổi trả miễn phí</div>
										<div class="content">Đổi trả miễn phí 30 ngày</div>
									</div>
								</div>
							</div>
						</div>
						
						
						<div class="col-lg-12 col-sm-3 col-xs-12">
							<div class="border-service-product">
								<div class="flexbox-grid-default">
									<div class="flexbox-auto-45px flexbox-align-self-center">
										<img src="{{ asset('home/assets/images/icon-service-3.png')}}">
									</div>
									<div class="flexbox-content des-service-product">
										<div class="title">Thanh toán</div>
										<div class="content">Thanh toán khi nhận hàng</div>
									</div>
								</div>
							</div>
						</div>
						
						
						<div class="col-lg-12 col-sm-3 col-xs-12">
							<div class="border-service-product">
								<div class="flexbox-grid-default">
									<div class="flexbox-auto-45px flexbox-align-self-center">
										<img src="{{ asset('home/assets/images/icon-service-4.png')}}">
									</div>
									<div class="flexbox-content des-service-product">
										<div class="title">Hỗ trợ online</div>
										<div class="content">093.855.9501</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 col-xs-12 pd5">
				<div class="product-comment">
					<!-- Nav tabs -->
					<ul class="product-tablist nav nav-tabs" id="tab-product-template"><li class="dropdown pull-right tabdrop hide"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-bars"></i> <b class="caret"></b></a><ul class="dropdown-menu"></ul></li>
						<li class="active">
							<a data-toggle="tab" data-spy="scroll" href="#description">
								<span>Mô tả sản phẩm</span>
								
							</a>
						</li>
						
						
						
					</ul>
					<div id="description">										
						<div class="container-fluid product-description-wrapper">
							
	
&nbsp;</p>
<p>Ba lô thời trang Juno cao cấp BL005 là phụ kiện không thể thiếu trong tủ đồ của mọi cô gái yêu thích sự năng động và hiện đại. Được thiết kế với kiểu dáng cá tính, độc đáo nhưng không kém phần nữ tính, duyên dáng chiếc ba lô này sẽ thu hút bạn ngay từ ánh nhìn đầu tiên.<br>
&nbsp;</p>
<p><img src="{{ asset('home/assets/images/dsc01609.jpg')}}"></p>
<p><br>
Kiểu dáng trẻ trung, độc đáo và cá tính kết hợp cùng với chất liệu da tổng hợp chống thấm nước cao cấp, bền đẹp và dễ dàng lau chùi khi lấm bẩn nên nó luôn là món đồ được nhiều cô gái lựa chọn và yêu thích.<br>
&nbsp;</p>
<p><img src="{{ asset('home/assets/images/dsc01609.jpg')}}"></p>
<p><br>
BL005 thiết kế với nhiều khóa kéo nhỏ làm điểm nhấn và sự phối màu hài hòa độc đáo giúp chiếc balo không chỉ năng động mà còn xinh xắn đáng yêu và rất thời trang.</p>
<p><br>
<br>
Mặt sau thiết kế với chất liệu da mềm mại, ngăn khóa kéo nhỏ tiện dụng và dây đeo lưng êm ái có thể điều chỉnh phù hợp với từng dáng người.</p>
<p><br>
Bên trong ba lô cao cấp BL005 được thiết kế gồm ngăn lớn và ngăn kéo khóa nhỏ các cô gái thoải mái đựng sách vở, vật dụng và đồ dùng cá nhân như ví, tiền, đồ trang điểm v.v..<br>
&nbsp;</p>

<p><strong>THÔNG TIN PHỐI ĐỒ</strong><br>
&nbsp;</p>
<p>Ba lô thời trang cao cấp BL005 với kiểu dáng thanh lịch, xinh xắn bạn có thể dễ dàng mix cùng nhiều trang phục khác nhau trong tủ đồ của mình. Đây là phụ kiện không bao giờ làm bạn phải hối hận khi “dinh” chúng về nhà.<br>
&nbsp;</p>

<p><em>Đặc biệt mẫu ba lô này phù hợp với mọi phong cách của mọi cô gái từ cô nàng yêu thích sự nhẹ nhàng, xinh xắn đến cô gái yêu sự năng động, cá tính và trẻ trung hay những cô nàng công sở thanh lịch</em><br>
&nbsp;</p>

<p><em>Dịu dàng nữ tính và thu hút hơn khi kết hợp balo cùng với <strong><a href="http://juno.vn/collections/giay-bup-be" rel="noopener noreferrer" target="_blank" title="gi&amp;agrave;y b&amp;uacute;p b&amp;ecirc;">giày búp bê</a></strong>&nbsp;đính nơ xinh xắn để đi học hay dạo phố cùng bạn bè</em><br>
&nbsp;</p>

<p>&nbsp;</p>

<p><em>Khéo léo phối màu hài hòa giữ Balo cùng với màu sắc trang phục bạn sẽ có vẻ ngoài thanh lịch, thời trang và cuốn hút hơn</em><br>
&nbsp;</p>

<p><br>

<p><em>Hình ảnh cô gái đeo Balo luôn gợi lên vẻ đẹp trẻ trung, năng động, hiện đại mà vẫn rất diụ dàng và cuốn hút</em></p>
<p><br>
<br>
<strong><strong>ĐẶC ĐIỂM NỔI BẬT</strong></strong><br>
&nbsp;</p>
<p>- Ba lô thời trang Juno cao cấp BL005 là phụ kiện không thể thiếu đối với các bạn trẻ năng động, cá tính.<br>
&nbsp;</p>
<p>- Chất liệu da tổng chống thấm nước cao cấp, bề đẹp với thời gian.<br>
&nbsp;</p>
<p>- Điểm nhấn của ba lô chính là phần phối màu độc đáo đem đến nét nổi bật cho người mang.<br>
&nbsp;</p>
<p>- Dây đeo lưng êm ái, có thể điều chỉnh cho phù hợp với từng người.<br>
&nbsp;</p>
<p>- Ba lô Juno là người bạn đồng hành đáng tin cậy mỗi khi bạn xuống phố, đi làm, đi chơi...</p>
<p><strong>HƯỚNG DẪN BẢO QUẢN</strong><br>
<br>
<em>- Cách bảo quản</em><br>
<br>
Với sản phẩm ba lô của Juno bạn có thể dễ dàng bảo quản ở môi trường bình thường. Tuy nhiên, bạn nên tránh để sản phẩm ở nơi có nhiệt độ và độ ẩm cao, hoặc tiếp xúc với ánh nắng mặt trời. Trong trường hợp không sử dụng sản phẩm trong thời gian dài, nên lau khô sản phẩm, nhồi bên trong một lớp giấy báo và cất giữ trong hộp đi kèm.&nbsp;<br>
<br>
<em>- Vệ sinh Ba lô</em><br>
<br>
Sản phẩm của Juno được sản xuất bởi chất lượng cao, có độ bền và khả năng chống bám bụi cao. Tuy nhiên, trong quá trình sử dụng, nếu bị bám bẩn bạn hãy sử dụng vải mềm ẩm nhẹ nhàng lau sạch bụi bẩn. Đối với những vết bẩn khó lau chùi bạn hãy sử dụng chất tẩy rửa chuyên dụng cho giày và túi, hoặc xà phòng pha loãng và dùng khăn thấm vào dung dịch, sau đó nhẹ nhàng loại bỏ vết bẩn.&nbsp;<br>
<br>
<em>- Cách làm mới Ba lô</em><br>
<br>
Qua thời gian sử dụng, Balo của bạn đã bị xuống màu, bạn có thể sử dụng vải mềm để lau chùi hoặc xi không màu để đánh bóng để Balo trở lại như mới.</p>
							
						</div>
					</div>
					
						
						
				</div>
			</div>
			<div class="col-lg-4 col-xs-12 pd5">
				
<div id="product-related" class="mb10">
	<div class="wrapper-product-related">
		<div class="title-group-related">
			
			<h2 class="title-group">
				Sản phẩm liên quan
			</h2>
			
		</div>
		
		<ul class="list-product-related">
			@if($related_products)
				@foreach($related_products as $index => $product)
					@if($index > 5)
						@break
					@endif
					<li>
						<div class="flexbox-grid-default">
							<div class="flexbox-auto-100px">
								<a href="{{route('chitietsanpham', ['id' => $product->id, 'name' => $product->name])}}">
									<img src="{{ asset('home/assets/images/dotrainspeed4trainingshoe1.jpg')}}" alt="Nike Train Speed 4">
								</a>
							</div>
							<div class="flexbox-content pd-l-10">
								<a href="{{route('chitietsanpham', ['id' => $product->id, 'name' => $product->name])}}">
									<h3 class="product-title">{{$product->name}}</h3>
									<p class="product-box-price-related clearfix flexbox-grid-default">
										
										<span class="price-new-related flexbox-content text-left">{{$product->price}}₫</span>
										
										
									</p>
								</a>
							</div>
						</div>
					</li>	
				@endforeach
			@endif
		</ul>
	</div>
</div>
	
<div class="mb15">
	
	<div class="box-banner-index text-center mb15">
		<a href="/">
			<picture>
				<img src="{{ asset('home/assets/images/banner_product_1.jpg')}}" alt="Banner 1" title="Banner 1">
			</picture>
		</a>
	</div>
	
	
	<div class="box-banner-index text-center mb15">
		<a href="/">
			<picture>
				<img src="{{ asset('home/assets/images/banner_product_2.jpg')}}" alt="Banner 2" title="Banner 2">
			</picture>
		</a>
	</div>
	
	
	<div class="box-banner-index text-center mb15">
		<a href="/">
			<picture>
				<img src="{{ asset('home/assets/images/banner_product_3.jpg')}}" alt="Banner 3" title="Banner 3">
			</picture>
		</a>
	</div>
	
</div>
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