@extends('site.layout.app')

@section('content')

<?php
if(LaravelLocalization::getCurrentLocale() == 'ar'){
  $x = 'left';
  $y = 'right';
}else{
  $x = 'right';
  $y = 'left';	
}
?>
<div class="banner" id="home1">
	<div class="container">
		<h3>fashions fade, <span>style is eternal</span></h3>
	</div>
</div>

<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-5 wthree_banner_bottom_{{$y}}">
				<div class="video-img">
					<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
						<span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
					</a>
				</div>

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
                        
                        <!--Start Catogry class="active"-->
                        @if($catogries)
                        @foreach($catogries as $catogry)
						<li role="presentation"><a href="#{{ $catogry->id }}" role="tab" id="{{$catogry->id}}-tab" data-toggle="tab" aria-controls="{{$catogry->id}}">{{ $catogry->name }}</a></li>
						@endforeach
						@endif
						<!--End catogry-->

					</ul>
					<div id="myTabContent" class="tab-content">
                        
                        @if($catogries)
                        @foreach($catogries as $catogry)
                        <!--start Tab class='active in'--> 
						<div role="tabpanel" class="tab-pane fade" id="{{ $catogry->id}}" aria-labelledby="{{$catogry->id}}-tab">
							<div class="agile_ecommerce_tabs">
                                 
                                @if($catogry->products)
                                @foreach($catogry->products as $product)  
							    <!--Start Prodect-->
								<div class="col-md-4 agile_ecommerce_tab_{{$y}}">
									<div class="hs-wrapper">
									    @if($product->images)
									      @foreach($product->images as $image) 
										    {{ HTML::image('site/images/products/'.$image->image,'',array('class'=>'img-responsive')) }}
										  @endforeach
										@endif
									   
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">{{ $product->name }}</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>{{ $product->sale_price }}</span> <i class="item_price">{{ $product->purchase_price }}</i></p>
										<p><a class="item_add" href="#">Add to cart</a></p>
									</div>
								</div>
								<!--End Prodect-->
								@endforeach
                                @endif
								<div class="clearfix"> </div>
							</div>
						</div>	
					    <!--End Tab-->
					    @endforeach
						@endif

	
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
@endsection