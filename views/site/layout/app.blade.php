<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
<meta name="csrf-token" content="{{ csrf_token() }}">	
<head>
<title> TieUae - @yield('title')</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Women's Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
{{ Html::style('site/'.LaravelLocalization::getCurrentLocale().'/css/bootstrap.css') }}
{{ Html::style('site/'.LaravelLocalization::getCurrentLocale().'/css/style.css') }}
{{ Html::style('site/'.LaravelLocalization::getCurrentLocale().'/css/fasthover.css') }}
{{ Html::style('site/'.LaravelLocalization::getCurrentLocale().'/css/jquery.countdown.css') }}
{{ Html::script('site/'.LaravelLocalization::getCurrentLocale().'/js/simpleCart.min.js') }}
{{ Html::script('site/'.LaravelLocalization::getCurrentLocale().'/js/bootstrap-3.1.1.min.js') }}
{{ Html::script('site/'.LaravelLocalization::getCurrentLocale().'/js/jquery.min.js') }}


<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>
<style>
	.xt{
		background-color: #ECECEC;
		border: none;
		padding:10px;	
	}	
    .tbx > tbody > tr > td
	{ padding:0px !important;}
	
</style>	
<div id="app">	
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
			<h1><a href="index.html">Men's Fashion<span>Fashion Lovers</span></a></h1>
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
				<div class="total">

                <cart-count  :cartcount="totalItems" > </cart-count>
			    
				 
				 </div>
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
					<li class="active"><a href="{{ URl('/')}}" class="act">{{ __('site.home') }}</a></li>	
					<!-- Mega Menu -->
					@if(navbar()->count() >= 1)
					 @foreach(navbar() as $navbar)
					 <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $navbar->name }}<b class="caret"></b></a>
						@if($navbar->category->count() >=1)
						<ul class="dropdown-menu multi-column columns-3">
							<div class="row">
								<div class="col-sm-3">
									<ul class="multi-column-dropdown">
									     @foreach($navbar->category as $category)
										  <li><a href='{{ URL("/".$category->slug)}}'>{{ $category->name }}</a></li>
										 @endforeach
									</ul>
								</div>
							</div>
						</ul>
						@endif
					 </li>
					 @endforeach
					@endif
					<li><a href="short-codes.html">Short Codes</a></li>
					<li><a href="mail.html">{{ __('site.contcatus') }}</a></li>
				</ul>
			</div>
		</nav>
	</div>
</div>


<div class="modal fade" id="myModalCart" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content ">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">{{ __('site.cartheader') }}</h4>
        </div>
		<div class="modal-body">
			

		  <cart-detail :cart="cart" :carttotal="cartTotal" :totalitems="totalItems"></cart-detail>
		  

	    </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

@yield('content')

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
</div>
</body>
<script>
        window.trans = <?php
        // copy all translations from /resources/lang/CURRENT_LOCALE/* to global JS variable
        $lang_files = File::files(resource_path() . '/lang/' . App::getLocale());
        $trans = [];
        foreach ($lang_files as $f) {
            $filename = pathinfo($f)['filename'];
            $trans[$filename] = trans($filename);
        }
        echo json_encode($trans);
        ?>;
    </script>
<script src="{{ asset('js/app.js') }}"></script>
</html>