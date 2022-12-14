<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
<head>
<title>Women's Fashion a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Women's Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); }
</script>
  {{ Html::style('site/'.LaravelLocalization::getCurrentLocale().'/css/bootstrap.css') }}
  {{ Html::style('site/'.LaravelLocalization::getCurrentLocale().'/css/style.css') }}
  {{ Html::style('site/'.LaravelLocalization::getCurrentLocale().'/css/fasthover.css') }}
  {{ Html::script('site/'.LaravelLocalization::getCurrentLocale().'/js/jquery.min.js') }}
  {{ Html::style('site/'.LaravelLocalization::getCurrentLocale().'/css/jquery.countdown.css') }}
  {{ Html::script('site/'.LaravelLocalization::getCurrentLocale().'/js/simpleCart.min.js') }}
  {{ Html::script('site/'.LaravelLocalization::getCurrentLocale().'/js/bootstrap-3.1.1.min.js') }}


<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //end-smooth-scrolling -->
</head>
	
<body>
<?php
if(LaravelLocalization::getCurrentLocale() == 'ar'){
  $x = 'left';
  $y = 'right';
}else{
  $x = 'right';
  $y = 'left';	
}
?>


	<div class="header">
		<div class="container">
			<div class="w3l_login">
				<a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
			</div>
			<div class="w3l_logo">
				<h1><a href="index.html">Women's Fashion<span>For Fashion Lovers</span></a></h1>
			</div>
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="#" method="post">
						<input type="text" name="Search" placeholder="Search...">
						<input type="submit" value="Send">
					</form>
				</div>
			</div>
			<div class="cart box_1">
				<a href="checkout.html">
					<div class="total">
					<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
					{{ HTML::image('site/images/bag.png','') }}
				</a>
				<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
				<div class="clearfix"> </div>
			</div>	
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.html" class="act">Home</a></li>	
						<!-- Mega Menu -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Clothing</h6>
											<li><a href="dresses.html">Dresses<span>New</span></a></li>
											<li><a href="sweaters.html">Sweaters</a></li>
											<li><a href="skirts.html">Shorts & Skirts</a></li>
											<li><a href="jeans.html">Jeans</a></li>
											<li><a href="shirts.html">Shirts & Tops<span>New</span></a></li>
										</ul>
									</div>
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Ethnic Wear</h6>
											<li><a href="salwars.html">Salwars</a></li>
											<li><a href="sarees.html">Sarees<span>New</span></a></li>
											<li><a href="products.html"><i>Summer Store</i></a></li>
										</ul>
									</div>
									<div class="col-sm-2">
										<ul class="multi-column-dropdown">
											<h6>Foot Wear</h6>
											<li><a href="sandals.html">Flats</a></li>
											<li><a href="sandals.html">Sandals</a></li>
											<li><a href="sandals.html">Boots</a></li>
											<li><a href="sandals.html">Heels</a></li>
										</ul>
									</div>
									<div class="col-sm-4">
										<div class="w3ls_products_pos">
											<h4>50%<i>Off/-</i></h4>
											{{ HTML::image('site/images/1.jpg','',array('class'=>'img-responsive')) }}
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>
						<li><a href="about.html">About Us</a></li>
						<li><a href="short-codes.html">Short Codes</a></li>
						<li><a href="mail.html">Mail Us</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
<!-- //header -->
<!-- banner -->
	<div class="banner" id="home1">
		<div class="container">
			<h3>fashions fade, <span>style is eternal</span></h3>
		</div>
	</div>
<!-- //banner -->

<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-5 wthree_banner_bottom_{{$y}}">
				<div class="video-img">
					<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
						<span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
					</a>
				</div>
				<!-- pop-up-box --> 

<!-- //countdown -->
<!-- cart -->

 
						{{ Html::style('site/'.LaravelLocalization::getCurrentLocale().'/css/popuo-box.css') }}
						{{ Html::script('site/'.LaravelLocalization::getCurrentLocale().'/js/jquery.magnific-popup.js') }}  
					<!--//pop-up-box -->
					<div id="small-dialog" class="mfp-hide">
						<iframe src="https://player.vimeo.com/video/23259282?title=0&byline=0&portrait=0"></iframe>
					</div>
					<script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
					</script>
			</div>
			<div class="col-md-7 wthree_banner_bottom_{{$x}}">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home">T-shirts</a></li>
						<li role="presentation"><a href="#skirts" role="tab" id="skirts-tab" data-toggle="tab" aria-controls="skirts">Skirts</a></li>
						<li role="presentation"><a href="#watches" role="tab" id="watches-tab" data-toggle="tab" aria-controls="watches">Watches</a></li>
						<li role="presentation"><a href="#sandals" role="tab" id="sandals-tab" data-toggle="tab" aria-controls="sandals">Sandals</a></li>
						<li role="presentation"><a href="#jewellery" role="tab" id="jewellery-tab" data-toggle="tab" aria-controls="jewellery">Jewellery</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_{{$y}}">
									<div class="hs-wrapper">
										{{ HTML::image('site/images/13.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/11.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/12.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/11.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/12.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/13.jpg','',array('class'=>'img-responsive')) }}
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">T-Shirt</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$320</span> <i class="item_price">$250</i></p>
										<p><a class="item_add" href="#">Add to cart</a></p>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_{{$y}}">
									<div class="hs-wrapper">
										{{ HTML::image('site/images/13.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/11.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/12.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/11.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/12.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/13.jpg','',array('class'=>'img-responsive')) }}
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">T-Shirt</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$320</span> <i class="item_price">$250</i></p>
										<p><a class="item_add" href="#">Add to cart</a></p>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_{{$y}}">
									<div class="hs-wrapper">
										{{ HTML::image('site/images/13.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/11.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/12.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/11.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/12.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/13.jpg','',array('class'=>'img-responsive')) }}
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">T-Shirt</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$320</span> <i class="item_price">$250</i></p>
										<p><a class="item_add" href="#">Add to cart</a></p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="skirts" aria-labelledby="skirts-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_{{$y}}">
									<div class="hs-wrapper">
										{{ HTML::image('site/images/13.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/11.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/12.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/11.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/12.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/13.jpg','',array('class'=>'img-responsive')) }}
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Skirt</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$320</span> <i class="item_price">$250</i></p>
										<p><a class="item_add" href="#">Add to cart</a></p>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_{{$y}}">
									<div class="hs-wrapper">
										{{ HTML::image('site/images/13.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/11.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/12.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/11.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/12.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/13.jpg','',array('class'=>'img-responsive')) }}
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Skirt</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$320</span> <i class="item_price">$250</i></p>
										<p><a class="item_add" href="#">Add to cart</a></p>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_{{$y}}">
									<div class="hs-wrapper">
										{{ HTML::image('site/images/13.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/11.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/12.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/11.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/12.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/13.jpg','',array('class'=>'img-responsive')) }}
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Skirt</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$320</span> <i class="item_price">$250</i></p>
										<p><a class="item_add" href="#">Add to cart</a></p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="watches" aria-labelledby="watches-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_{{$y}}">
									<div class="hs-wrapper">
										{{ HTML::image('site/images/13.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/11.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/12.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/11.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/12.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/13.jpg','',array('class'=>'img-responsive')) }}
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Watch</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$320</span> <i class="item_price">$250</i></p>
										<p><a class="item_add" href="#">Add to cart</a></p>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_{{$y}}">
									<div class="hs-wrapper">
										{{ HTML::image('site/images/13.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/11.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/12.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/11.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/12.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/13.jpg','',array('class'=>'img-responsive')) }}
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Watch</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$320</span> <i class="item_price">$250</i></p>
										<p><a class="item_add" href="#">Add to cart</a></p>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_{{$y}}">
									<div class="hs-wrapper">
									    {{ HTML::image('site/images/13.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/11.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/12.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/11.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/12.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/13.jpg','',array('class'=>'img-responsive')) }}
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Watch</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$320</span> <i class="item_price">$250</i></p>
										<p><a class="item_add" href="#">Add to cart</a></p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="sandals" aria-labelledby="sandals-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_{{$y}}">
									<div class="hs-wrapper">
										{{ HTML::image('site/images/14.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/15.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/16.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/14.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/15.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/16.jpg','',array('class'=>'img-responsive')) }}
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Sandal</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$320</span> <i class="item_price">$250</i></p>
										<p><a class="item_add" href="#">Add to cart</a></p>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_{{$y}}">
									<div class="hs-wrapper">
										{{ HTML::image('site/images/14.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/15.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/16.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/11.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/12.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/13.jpg','',array('class'=>'img-responsive')) }}
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Sandal</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$320</span> <i class="item_price">$250</i></p>
										<p><a class="item_add" href="#">Add to cart</a></p>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_{{$y}}">
									<div class="hs-wrapper">
										{{ HTML::image('site/images/13.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/11.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/12.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/11.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/12.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/13.jpg','',array('class'=>'img-responsive')) }}
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Sandal</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$320</span> <i class="item_price">$250</i></p>
										<p><a class="item_add" href="#">Add to cart</a></p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="jewellery" aria-labelledby="jewellery-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_{{$y}}">
									<div class="hs-wrapper">
										{{ HTML::image('site/images/17.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/18.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/19.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/11.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/12.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/13.jpg','',array('class'=>'img-responsive')) }}
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Jewellery</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$320</span> <i class="item_price">$250</i></p>
										<p><a class="item_add" href="#">Add to cart</a></p>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_{{$y}}">
									<div class="hs-wrapper">
										{{ HTML::image('site/images/13.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/11.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/12.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/11.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/12.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/13.jpg','',array('class'=>'img-responsive')) }}
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Jewellery</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$320</span> <i class="item_price">$250</i></p>
										<p><a class="item_add" href="#">Add to cart</a></p>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_{{$y}}">
									<div class="hs-wrapper">
										{{ HTML::image('site/images/13.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/11.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/12.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/11.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/12.jpg','',array('class'=>'img-responsive')) }}
									    {{ HTML::image('site/images/13.jpg','',array('class'=>'img-responsive')) }}
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Jewellery</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$320</span> <i class="item_price">$250</i></p>
										<p><a class="item_add" href="#">Add to cart</a></p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
					<!--modal-video-->
				<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_{{$y}}">
									 {{ HTML::image('site/images/20.jpg','',array('class'=>'img-responsive')) }}
									</div>
									<div class="col-md-7 modal_body_{{$x}}">
										<h4>a good look women's shirt</h4>
										<p>Ut enim ad minim veniam, quis nostrud 
											exercitation ullamco laboris nisi ut aliquip ex ea 
											commodo consequat.Duis aute irure dolor in 
											reprehenderit in voluptate velit esse cillum dolore 
											eu fugiat nulla pariatur. Excepteur sint occaecat 
											cupidatat non proident, sunt in culpa qui officia 
											deserunt mollit anim id est laborum.</p>
										<div class="rating">
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star-.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star-.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star-.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="modal_body_{{$x}}_cart simpleCart_shelfItem">
											<p><span>$320</span> <i class="item_price">$250</i></p>
											<p><a class="item_add" href="#">Add to cart</a></p>
										</div>
										<h5>Color</h5>
										<div class="color-quality">
											<ul>
												<li><a href="#"><span></span>Red</a></li>
												<li><a href="#" class="brown"><span></span>Yellow</a></li>
												<li><a href="#" class="purple"><span></span>Purple</a></li>
												<li><a href="#" class="gray"><span></span>Violet</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
				<div class="modal video-modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_{{$y}}">
										{{ HTML::image('site/images/36.jpg','',array('class'=>'img-responsive')) }}
									</div>
									<div class="col-md-7 modal_body_{{$x}}">
										<h4>a good look black women's jeans</h4>
										<p>Ut enim ad minim veniam, quis nostrud 
											exercitation ullamco laboris nisi ut aliquip ex ea 
											commodo consequat.Duis aute irure dolor in 
											reprehenderit in voluptate velit esse cillum dolore 
											eu fugiat nulla pariatur. Excepteur sint occaecat 
											cupidatat non proident, sunt in culpa qui officia 
											deserunt mollit anim id est laborum.</p>
										<div class="rating">
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star-.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star-.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star-.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star-.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="modal_body_{{$x}}_cart simpleCart_shelfItem">
											<p><span>$320</span> <i class="item_price">$250</i></p>
											<p><a class="item_add" href="#">Add to cart</a></p>
										</div>
										<h5>Color</h5>
										<div class="color-quality">
											<ul>
												<li><a href="#"><span></span>Red</a></li>
												<li><a href="#" class="brown"><span></span>Yellow</a></li>
												<li><a href="#" class="purple"><span></span>Purple</a></li>
												<li><a href="#" class="gray"><span></span>Violet</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
				<div class="modal video-modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_{{$y}}">
										{{ HTML::image('site/images/23.jpg','',array('class'=>'img-responsive')) }}
									</div>
									<div class="col-md-7 modal_body_{{$x}}">
										<h4>a good look women's Watch</h4>
										<p>Ut enim ad minim veniam, quis nostrud 
											exercitation ullamco laboris nisi ut aliquip ex ea 
											commodo consequat.Duis aute irure dolor in 
											reprehenderit in voluptate velit esse cillum dolore 
											eu fugiat nulla pariatur. Excepteur sint occaecat 
											cupidatat non proident, sunt in culpa qui officia 
											deserunt mollit anim id est laborum.</p>
										<div class="rating">
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star-.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star-.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star-.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star-.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="modal_body_{{$x}}_cart simpleCart_shelfItem">
											<p><span>$320</span> <i class="item_price">$250</i></p>
											<p><a class="item_add" href="#">Add to cart</a></p>
										</div>
										<h5>Color</h5>
										<div class="color-quality">
											<ul>
												<li><a href="#"><span></span>Red</a></li>
												<li><a href="#" class="brown"><span></span>Yellow</a></li>
												<li><a href="#" class="purple"><span></span>Purple</a></li>
												<li><a href="#" class="gray"><span></span>Violet</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
				<div class="modal video-modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModal3">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_{{$y}}">
									{{ HTML::image('site/images/24.jpg','',array('class'=>'img-responsive')) }}
									</div>
									<div class="col-md-7 modal_body_{{$x}}">
										<h4>a good look women's Sandal</h4>
										<p>Ut enim ad minim veniam, quis nostrud 
											exercitation ullamco laboris nisi ut aliquip ex ea 
											commodo consequat.Duis aute irure dolor in 
											reprehenderit in voluptate velit esse cillum dolore 
											eu fugiat nulla pariatur. Excepteur sint occaecat 
											cupidatat non proident, sunt in culpa qui officia 
											deserunt mollit anim id est laborum.</p>
										<div class="rating">
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star-.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star-.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star-.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="modal_body_{{$x}}_cart simpleCart_shelfItem">
											<p><span>$320</span> <i class="item_price">$250</i></p>
											<p><a class="item_add" href="#">Add to cart</a></p>
										</div>
										<h5>Color</h5>
										<div class="color-quality">
											<ul>
												<li><a href="#"><span></span>Red</a></li>
												<li><a href="#" class="brown"><span></span>Yellow</a></li>
												<li><a href="#" class="purple"><span></span>Purple</a></li>
												<li><a href="#" class="gray"><span></span>Violet</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
				<div class="modal video-modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModal4">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_{{$y}}">
										{{ HTML::image('site/images/22.jpg','',array('class'=>'img-responsive')) }}
									</div>
									<div class="col-md-7 modal_body_{{$x}}">
										<h4>a good look women's Necklace</h4>
										<p>Ut enim ad minim veniam, quis nostrud 
											exercitation ullamco laboris nisi ut aliquip ex ea 
											commodo consequat.Duis aute irure dolor in 
											reprehenderit in voluptate velit esse cillum dolore 
											eu fugiat nulla pariatur. Excepteur sint occaecat 
											cupidatat non proident, sunt in culpa qui officia 
											deserunt mollit anim id est laborum.</p>
										<div class="rating">
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star-.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star-.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star-.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="modal_body_{{$x}}_cart simpleCart_shelfItem">
											<p><span>$320</span> <i class="item_price">$250</i></p>
											<p><a class="item_add" href="#">Add to cart</a></p>
										</div>
										<h5>Color</h5>
										<div class="color-quality">
											<ul>
												<li><a href="#"><span></span>Red</a></li>
												<li><a href="#" class="brown"><span></span>Yellow</a></li>
												<li><a href="#" class="purple"><span></span>Purple</a></li>
												<li><a href="#" class="gray"><span></span>Violet</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
				<div class="modal video-modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModal5">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_{{$y}}">
									 {{ HTML::image('site/images/35.jpg','',array('class'=>'img-responsive')) }}
									</div>
									<div class="col-md-7 modal_body_{{$x}}">
										<h4>a good look women's Jacket</h4>
										<p>Ut enim ad minim veniam, quis nostrud 
											exercitation ullamco laboris nisi ut aliquip ex ea 
											commodo consequat.Duis aute irure dolor in 
											reprehenderit in voluptate velit esse cillum dolore 
											eu fugiat nulla pariatur. Excepteur sint occaecat 
											cupidatat non proident, sunt in culpa qui officia 
											deserunt mollit anim id est laborum.</p>
										<div class="rating">
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star-.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star-.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star-.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="modal_body_{{$x}}_cart simpleCart_shelfItem">
											<p><span>$320</span> <i class="item_price">$250</i></p>
											<p><a class="item_add" href="#">Add to cart</a></p>
										</div>
										<h5>Color</h5>
										<div class="color-quality">
											<ul>
												<li><a href="#"><span></span>Red</a></li>
												<li><a href="#" class="brown"><span></span>Yellow</a></li>
												<li><a href="#" class="purple"><span></span>Purple</a></li>
												<li><a href="#" class="gray"><span></span>Violet</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
				<div class="modal video-modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModal6">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_{{$y}}">
									 {{ HTML::image('site/images/39.jpg','',array('class'=>'img-responsive')) }}
									</div>
									<div class="col-md-7 modal_body_{{$x}}">
										<h4>a good look women's Long Skirt</h4>
										<p>Ut enim ad minim veniam, quis nostrud 
											exercitation ullamco laboris nisi ut aliquip ex ea 
											commodo consequat.Duis aute irure dolor in 
											reprehenderit in voluptate velit esse cillum dolore 
											eu fugiat nulla pariatur. Excepteur sint occaecat 
											cupidatat non proident, sunt in culpa qui officia 
											deserunt mollit anim id est laborum.</p>
										<div class="rating">
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star-.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star-.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star-.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="rating-{{$y}}">
												{{ HTML::image('site/images/star.png','',array('class'=>'img-responsive')) }}
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="modal_body_{{$x}}_cart simpleCart_shelfItem">
											<p><span>$320</span> <i class="item_price">$250</i></p>
											<p><a class="item_add" href="#">Add to cart</a></p>
										</div>
										<h5>Color</h5>
										<div class="color-quality">
											<ul>
												<li><a href="#"><span></span>Red</a></li>
												<li><a href="#" class="brown"><span></span>Yellow</a></li>
												<li><a href="#" class="purple"><span></span>Purple</a></li>
												<li><a href="#" class="gray"><span></span>Violet</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //banner-bottom -->

<!-- banner-bottom1 -->
	<div class="banner-bottom1">
		<div class="agileinfo_banner_bottom1_grids">
			<div class="col-md-12 agileinfo_banner_bottom1_grid_{{$x}}">
				<h4>hot deal</h4>
				<div class="timer_wrap">
					<div id="counter"> </div>
				</div>
				{{ Html::script('site/'.LaravelLocalization::getCurrentLocale().'/js/jquery.countdown.js') }} 
				{{ Html::script('site/'.LaravelLocalization::getCurrentLocale().'/js/script.js') }} 
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //banner-bottom1 -->

<!-- special-deals -->
	<div class="special-deals">
		<div class="container">
			<h2>Special Deals</h2>
			<div class="w3agile_special_deals_grids">
				<div class="col-md-7 w3agile_special_deals_grid_{{$y}}">
					<div class="w3agile_special_deals_grid_{{$y}}_grid">
					   {{ HTML::image('site/images/26.jpg','',array('class'=>'img-responsive')) }}
						<div class="w3agile_special_deals_grid_{{$y}}_grid_pos1">
							<h5>30%<span>Off/-</span></h5>
						</div>
						<div class="w3agile_special_deals_grid_{{$y}}_grid_pos">
							<h4>We Offer <span>Best Products</span></h4>
						</div>
					</div>
					<div class="wmuSlider example1">
						<div class="wmuSliderWrapper">
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_{{$y}}_grid1">
										{{ HTML::image('site/images/1.jpg','',array('class'=>'img-responsive')) }}
										<p>Quis autem vel eum iure reprehenderit qui in ea voluptate 
											velit esse quam nihil molestiae consequatur, vel illum qui dolorem 
											eum fugiat quo voluptas nulla pariatur</p>
										<h4>Laura</h4>
									</div>
								</div>
							</article>
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_{{$y}}_grid1">
										{{ HTML::image('site/images/2.jpg','',array('class'=>'img-responsive')) }}
										<p>Quis autem vel eum iure reprehenderit qui in ea voluptate 
											velit esse quam nihil molestiae consequatur, vel illum qui dolorem 
											eum fugiat quo voluptas nulla pariatur</p>
										<h4>Michael</h4>
									</div>
								</div>
							</article>
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_{{$y}}_grid1">
										{{ HTML::image('site/images/3.jpg','',array('class'=>'img-responsive')) }}
										<p>Quis autem vel eum iure reprehenderit qui in ea voluptate 
											velit esse quam nihil molestiae consequatur, vel illum qui dolorem 
											eum fugiat quo voluptas nulla pariatur</p>
										<h4>Rosy</h4>
									</div>
								</div>
							</article>
						</div>
					</div>
						{{ Html::script('site/'.LaravelLocalization::getCurrentLocale().'/js/jquery.wmuSlider.js') }} 
						<script>
							$('.example1').wmuSlider();         
						</script> 
				</div>
				<div class="col-md-5 w3agile_special_deals_grid_{{$x}}">		
					{{ HTML::image('site/images/25.jpg','',array('class'=>'img-responsive')) }}
					<div class="w3agile_special_deals_grid_{{$x}}_pos">
						<h4>Women's <span>Special</span></h4>
						<h5>save up <span>to</span> 30%</h5>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //special-deals -->
<!-- new-products -->
	<div class="new-products">
		<div class="container">
			<h3>New Products</h3>
			<div class="agileinfo_new_products_grids">
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_{{$y}} agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
						{{ HTML::image('site/images/27.jpg','',array('class'=>'img-responsive')) }}
						{{ HTML::image('site/images/28.jpg','',array('class'=>'img-responsive')) }}
						{{ HTML::image('site/images/29.jpg','',array('class'=>'img-responsive')) }}
						{{ HTML::image('site/images/30.jpg','',array('class'=>'img-responsive')) }}
						{{ HTML::image('site/images/27.jpg','',array('class'=>'img-responsive')) }}
						{{ HTML::image('site/images/28.jpg','',array('class'=>'img-responsive')) }}
						{{ HTML::image('site/images/29.jpg','',array('class'=>'img-responsive')) }}
						{{ HTML::image('site/images/30.jpg','',array('class'=>'img-responsive')) }}
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="single.html">Skirts</a></h5>
						<div class="simpleCart_shelfItem">
							<p><span>$320</span> <i class="item_price">$250</i></p>
							<p><a class="item_add" href="#">Add to cart</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_{{$y}} agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
						{{ HTML::image('site/images/31.jpg','',array('class'=>'img-responsive')) }}
						{{ HTML::image('site/images/32.jpg','',array('class'=>'img-responsive')) }}
						{{ HTML::image('site/images/33.jpg','',array('class'=>'img-responsive')) }}
						{{ HTML::image('site/images/34.jpg','',array('class'=>'img-responsive')) }}
						{{ HTML::image('site/images/31.jpg','',array('class'=>'img-responsive')) }}
						{{ HTML::image('site/images/32.jpg','',array('class'=>'img-responsive')) }}
						{{ HTML::image('site/images/33.jpg','',array('class'=>'img-responsive')) }}
						{{ HTML::image('site/images/34.jpg','',array('class'=>'img-responsive')) }}
							
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal5"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="single.html">Jackets</a></h5>
						<div class="simpleCart_shelfItem">
							<p><span>$320</span> <i class="item_price">$250</i></p>
							<p><a class="item_add" href="#">Add to cart</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_{{$y}} agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
						{{ HTML::image('site/images/37.jpg','',array('class'=>'img-responsive')) }}
						{{ HTML::image('site/images/30.jpg','',array('class'=>'img-responsive')) }}
						{{ HTML::image('site/images/36.jpg','',array('class'=>'img-responsive')) }}
						{{ HTML::image('site/images/38.jpg','',array('class'=>'img-responsive')) }}
						{{ HTML::image('site/images/31.jpg','',array('class'=>'img-responsive')) }}
						{{ HTML::image('site/images/32.jpg','',array('class'=>'img-responsive')) }}
						{{ HTML::image('site/images/33.jpg','',array('class'=>'img-responsive')) }}
						{{ HTML::image('site/images/34.jpg','',array('class'=>'img-responsive')) }}
							
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="single.html">Dresses</a></h5>
						<div class="simpleCart_shelfItem">
							<p><span>$320</span> <i class="item_price">$250</i></p>
							<p><a class="item_add" href="#">Add to cart</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_{{$y}} agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
					    {{ HTML::image('site/images/40.jpg','',array('class'=>'img-responsive')) }}
						{{ HTML::image('site/images/41.jpg','',array('class'=>'img-responsive')) }}
						{{ HTML::image('site/images/42.jpg','',array('class'=>'img-responsive')) }}
						{{ HTML::image('site/images/43.jpg','',array('class'=>'img-responsive')) }}
						{{ HTML::image('site/images/40.jpg','',array('class'=>'img-responsive')) }}
						{{ HTML::image('site/images/41.jpg','',array('class'=>'img-responsive')) }}
						{{ HTML::image('site/images/42.jpg','',array('class'=>'img-responsive')) }}
						{{ HTML::image('site/images/43.jpg','',array('class'=>'img-responsive')) }}
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="single.html">Jeans</a></h5>
						<div class="simpleCart_shelfItem">
							<p><span>$320</span> <i class="item_price">$250</i></p>
							<p><a class="item_add" href="#">Add to cart</a></p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //new-products -->
<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Top Brands</h3>
			<div class="sliderfig">
				<ul id="flexiselDemo1">			
					<li>
						{{ HTML::image('site/images/4.png','',array('class'=>'img-responsive')) }}
					</li>
					<li>
					    {{ HTML::image('site/images/5.png','',array('class'=>'img-responsive')) }}
					</li>
					<li>
						{{ HTML::image('site/images/6.png','',array('class'=>'img-responsive')) }} 
					</li>
					<li>
						{{ HTML::image('site/images/7.png','',array('class'=>'img-responsive')) }}
					</li>
					<li>
						{{ HTML::image('site/images/5.png','',array('class'=>'img-responsive')) }}
					</li>
				</ul>
			</div>
					<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 4,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
					{{ Html::script('site/'.LaravelLocalization::getCurrentLocale().'/js/jquery.flexisel.js') }} 
		</div>
	</div>
<!-- //top-brands -->
<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_{{$y}}">
				<h3>Newsletter</h3>
				<p>Excepteur sint occaecat cupidatat non proident, sunt.</p>
			</div>
			<div class="col-md-6 w3agile_newsletter_{{$x}}">
				<form action="#" method="post">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="" />
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contact</h3>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Information</h3>
					<ul class=""> 
						<li><a href="about.html">About Us</a></li>
						<li><a href="mail.html">Contact Us</a></li>
						<li><a href="short-codes.html">Short Codes</a></li>
						<li><a href="faq.html">FAQ's</a></li>
						<li><a href="products.html">Special Products</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Category</h3>
					<ul class=""> 
						<li><a href="dresses.html">Dresses</a></li>
						<li><a href="sweaters.html">Sweaters</a></li>
						<li><a href="shirts.html">Shirts</a></li>
						<li><a href="sarees.html">Sarees</a></li>
						<li><a href="skirts.html">Shorts & Skirts</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Profile</h3>
					<ul class=""> 
						<li><a href="products.html">Summer Store</a></li>
						<li><a href="checkout.html">My Cart</a></li>
					</ul>
					<h4>Follow Us</h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href="#" class="facebook"> </a></li>
							<li><a href="#" class="twitter"> </a></li>
							<li><a href="#" class="google"> </a></li>
							<li><a href="#" class="pinterest"> </a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-copy">
			<div class="footer-copy1">
				<div class="footer-copy-pos">
					<a href="#home1" class="scroll">
					{{ HTML::image('site/images/arrow.png','',array('class'=>'img-responsive')) }}
					</a>
				</div>

			</div>
			<div class="container">
				<p>&copy; 2016 Women's Fashion. All lefts reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
</body>
</html>