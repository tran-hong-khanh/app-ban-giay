@extends('homepage.layouts.template')
@section('content')
<div class="header-navigate clearfix mb15">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5">
				<ol class="breadcrumb breadcrumb-arrow" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
					<li><a href="/" itemprop="url" target="_self">Trang chủ</a></li>
					
					<li><i class="fa fa-angle-right"></i></li>
					<li class="active"><span itemprop="title">Liên hệ</span></li>
					
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="layout-page clearfix">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 pd5">
				<h1>
					Liên hệ
				</h1>
				<div class="clearfix page-description">
					
					<p id="map_canvas" class="text-center">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14897.026940199394!2d105.776206!3d21.022411!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaaea7bcf3861003f!2zTmjDom4gbOG7sWMgQUJD!5e0!3m2!1svi!2s!4v1504944869925" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</p>
					
				</div>
				<div class="row">
					<div class="col-md-6 col-xs-12">
						<div class="page-left-contact clearfix">	
							<div class="page-left-title">
								<i class="fa fa-envelope"></i><span>Để lại lời nhắn cho chúng tôi</span>
							</div>
							<form accept-charset="UTF-8" action="/contact" id="contact" method="post">
<input name="FormType" type="hidden" value="contact">
<input name="utf8" type="hidden" value="true">
							
							<div class="contact-form page-form-contact">
								<div class="row">
									<div class="col-sm-6 col-xs-12">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-user"></i></span>
												<input type="text" name="contact[name]" class="form-control" autocapitalize="off" required="" placeholder="Họ và tên">
											</div>
											<p class="error-contact">Không được để trống.</p>
										</div>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
												<input type="text" name="contact[email]" class="form-control" autocapitalize="off" maxlength="50" required="" pattern="^[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$" placeholder="Email">
											</div>
											<p class="error-contact">Email không hợp lệ.</p>
										</div>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-phone"></i></span>
												<input type="text" name="contact[phone]" class="form-control" autocapitalize="off" required="" pattern="^\d{8,11}$" maxlength="15" placeholder="Số điện thoại">
											</div>
											<p class="error-contact">Điện thoại không hợp lệ,</p>
										</div>
									</div>
									<div class="col-sm-6 col-xs-12">
										<div class="input-group">
											<textarea name="contact[body]" required="" placeholder="Viết lời nhắn"></textarea>
										</div>
										<p class="error-contact">Không được để trống.</p>
									</div>
									<div class="col-xs-12 text-center">
										<button class="btn-send-contact">Gửi lời nhắn</button>
									</div>
								</div>
							</div>
							</form>
						</div>
					</div>
					<div class="col-md-6 col-xs-12">
						<div class="page-right-contact clearfix">	
							<div class="page-right-title">
								<span>Giải pháp bán hàng toàn diện từ website đến cửa hàng</span>
							</div>	
							<div class="phone">
								<i class="fa fa-building" aria-hidden="true"></i> <span>Rossy Store</span>
							</div>
							<div class="phone">
								<i class="fa fa-phone" aria-hidden="true"></i>
								<a href="tel:0938559501">0938559501</a>
							</div>
							<div class="address">
								<i class="fa fa-map-marker" aria-hidden="true"></i> <span>1A87 ấp 1 xã Phạm Văn Hai, Bình Chánh, TPHCM</span>
							</div>				
							<div class="address">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<a href="mailto:nobita.nguyen0902@gmail.com">nobita.nguyen0902@gmail.com</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade form-contact" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="exampleModalLongTitle">Thông báo</h4>
				</div>
				<div class="modal-body">
					<p class="text-center">Cảm ơn bạn đã góp ý cho chúng tôi.</p>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" aria-label="Close">Đóng</button>
				</div>
			</div>
		</div>
	</div>
</div>
<br><br>






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
