<?php
	JS::add('heightServices', '
            if(window.innerWidth >= 768){
                setEqualHeight($(".j-service-height"));
            }
		');

	JS::add('slick', "
                $(document).ready(function(){
                    $('.j-reviews').slick({
                        autoplay: true, 
                        autoplaySpeed: 7000,
                        prevArrow: '<img class=\'slick-prev slick-arrow\' src=\'/images/reviews/arrow-left.png\'>',
                        nextArrow: '<img class=\'slick-next slick-arrow\' src=\'/images/reviews/arrow-right.png\'>',
                        responsive: [
                            {
                              breakpoint: 768,
                              settings: {
                                    arrows: false,
                              }
                            }
                      ]
                    });
                });
            ");

	JS::add('slick_comps', "
                $(document).ready(function(){
                    $('.j-comps').slick({
                        autoplay: true, 
                        autoplaySpeed: 7000,
                        slidesToShow: 5,
                        slidesToScroll: 2,
                        arrows: false 
                    });
                });
            ");
?>

<!-- START REVOLUTION SLIDER 4.6.3 fullscreen mode -->
<section class="b-shadow clearfix">
	<div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullscreen-container b-slider" style="background-color:#E9E9E9;padding:0px;">
		<div id="rev_slider_1_1" class="rev_slider fullscreenbanner" style="display:none;">
			<ul>	<!-- SLIDE  1-->
				<li data-transition="slideleft" data-slotamount="7" data-masterspeed="300" data-thumb="/images/slider/slide2.jpg"  data-saveperformance="off"  data-title="Slide">
					<!-- MAIN IMAGE -->
					<img src="/images/slider/slide2.jpg"  alt="slide2"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

					<!-- LAYER NR. 1 -->
					<div class="tp-caption medium_light_white sfl tp-resizeme  title"
						data-x="160"
						data-y="78" 
						data-speed="300"
						data-start="550"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						data-endspeed="300"
						style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
							<h1 class="b-title">life is either a daring adventure</h1>
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption medium_light_white sfr tp-resizeme"
						data-x="0"
						data-y="center" data-voffset="7"
						data-speed="300"
						data-start="850"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						data-endspeed="300"
						style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">
							<h3 class="b-subtitle">
								Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
								</br> 
								Duis sed odio sit amet nibh vulputate cursusa sit amen ipsum velit
							</h3>
					</div>

					<!-- LAYER NR. 3 -->
					<div class="tp-caption small_light_white sfb tp-resizeme b-btn-div-top"
						data-x="290"
						data-y="center" data-voffset="78"
						data-speed="300"
						data-start="1150"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						data-end="8650"
						data-endspeed="300"
						style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">
							<a href='#' class='btn b-btn-join'>Join Now</a>
					</div>

					<!-- LAYER NR. 4 -->
					<div class="tp-caption small_light_white sfb tp-resizeme b-btn-div-top"
						data-x="520"
						data-y="center" data-voffset="78"
						data-speed="300"
						data-start="1450"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						data-end="8600"
						data-endspeed="300"
						style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">
							<a href='#' class='btn btn-border btn-large b-btn-learn'>Learn More</a>
					</div>
				</li>
				
				<!-- SLIDE  2-->
				<li data-transition="slideleft" data-slotamount="7" data-masterspeed="300" data-thumb="/images/slider/slide1.jpg"  data-saveperformance="off"  data-title="Slide">
					<!-- MAIN IMAGE -->
					<img src="/images/slider/slide1.jpg"  alt="slide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

					<!-- LAYER NR. 1 -->
					<div class="tp-caption medium_light_white sfl tp-resizeme  title"
						data-x="120"
						data-y="78" 
						data-speed="300"
						data-start="550"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						data-endspeed="300"
						style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
							<h1 class="b-title">Let's make a better website together</h1>
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption medium_light_white sfr tp-resizeme"
						data-x="0"
						data-y="center" data-voffset="7"
						data-speed="300"
						data-start="850"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						data-endspeed="300"
						style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">
							<h3 class="b-subtitle">
								Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
								</br> 
								Duis sed odio sit amet nibh vulputate cursusa sit amen ipsum velit
							</h3>
					</div>

					<!-- LAYER NR. 3 -->
					<div class="tp-caption small_light_white sfb tp-resizeme b-btn-div-top"
						data-x="280"
						data-y="center" data-voffset="78"
						data-speed="300"
						data-start="1150"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						data-end="8650"
						data-endspeed="300"
						style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">
							<a href='#' class='btn b-btn-join'>Join Now</a>
					</div>

					<!-- LAYER NR. 4 -->
					<div class="tp-caption small_light_white sfb tp-resizeme b-btn-div-top"
						data-x="520"
						data-y="center" data-voffset="78"
						data-speed="300"
						data-start="1450"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						data-end="8600"
						data-endspeed="300"
						style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">
							<a href='#' class='btn btn-border btn-large b-btn-learn'>Learn More</a>
					</div>
				</li>
				
				<!-- SLIDE  3-->
				<li data-transition="slideleft" data-slotamount="7" data-masterspeed="300" data-thumb="/images/slider/slide3.jpg"  data-saveperformance="off"  data-title="Slide">
					<!-- MAIN IMAGE -->
					<img src="/images/slider/slide3.jpg"  alt="slide3"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

					<!-- LAYER NR. 1 -->
					<div class="tp-caption medium_light_white sfl tp-resizeme  title"
						data-x="232"
						data-y="81" 
						data-speed="300"
						data-start="550"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						data-endspeed="300"
						style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
							<h1 class="b-title">what are you waiting for</h1>
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption medium_light_white sfr tp-resizeme"
						data-x="10"
						data-y="center" data-voffset="7"
						data-speed="300"
						data-start="850"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						data-endspeed="300"
						style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">
							<h3 class="b-subtitle">
								Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
								</br> 
								Duis sed odio sit amet nibh vulputate cursusa sit amen ipsum velit
							</h3>
					</div>

					<!-- LAYER NR. 3 -->
					<div class="tp-caption small_light_white sfb tp-resizeme b-btn-div-top"
						data-x="300"
						data-y="center" data-voffset="78"
						data-speed="300"
						data-start="1150"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						data-end="8650"
						data-endspeed="300"
						style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">
							<a href='#' class='btn b-btn-join'>Join Now</a>
					</div>

					<!-- LAYER NR. 4 -->
					<div class="tp-caption small_light_white sfb tp-resizeme b-btn-div-top"
						data-x="520"
						data-y="center" data-voffset="78"
						data-speed="300"
						data-start="1450"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						data-end="8600"
						data-endspeed="300"
						style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">
							<a href='#' class='btn btn-border btn-large b-btn-learn'>Learn More</a>
					</div>
				</li>
			</ul>
			
			<div class="tp-bannertimer"></div>	
		</div>
	</div>
</section>
<!-- END REVOLUTION SLIDER -->

<div class="clearfix"></div>

<div class="container b-container-index  g-main-content">
	<!-- START BLOCK SERVICES -->
	<section class="b-services">
		<section class="container content-width">
			<div class="row">
				<div class="col-md-4 b-big-section j-service-height">
					<div class="b-main-item">
						<img src="/images/logo.png" alt="WebAnex">
						<h3>Our Services</h3>
					</div>
				</div>
				<div class="col-md-4 j-service-height">
					<div class="b-service-item-color1 l-center">
						<i class="bc-tools-2 icon-4x"></i>
						<h3>Web Development</h3>
						<p>
							Proin iaculis purus consequat sem cure digni ssim Donec porttitora 
							entum suscipit aenean rhoncus posuere odio
						</p>
					</div>

					<div class="b-service-item-color2 l-center">
						<i class="bc-browser icon-4x"></i>
						<h3>Beutiful Designs</h3>
						<p>
							Proin iaculis purus consequat sem cure digni ssim Donec 
							porttitora entum suscipit aenean rhoncus posuere odio
						</p>
					</div>
				</div>
				<div class="col-md-4 j-service-height">
					<div class="b-service-item-color2 l-center">
						<i class="bc-briefcase icon-4x"></i>
						<h3>Web Development</h3>
						<p>
							Proin iaculis purus consequat sem cure digni ssim Donec porttitora 
							entum suscipit aenean rhoncus posuere odio
						</p>
					</div>

					<div class="b-service-item-color1 l-center">
						<i class="bc-presentation icon-4x"></i>
						<h3>Marketing tools</h3>
						<p>
							Proin iaculis purus consequat sem cure digni ssim Donec 
							porttitora entum suscipit aenean rhoncus posuere odio
						</p>
					</div>
				</div>
			</div>
		</section>
	</section>
	<!-- END BLOCK SERVICES -->

	<div class="clearfix"></div>

	<!-- START BLOCK ABOUT -->
	<section class="b-about">
		<section class="container content-width">
			<div class="row b-about_bg">
				<div class="col-md-7">
					<img src="/images/about/vision.png" alt="">
				</div>

				<div class="col-md-5">
					<article>
						 <h3 class="l-title_h3">Our Vision</h3>
						 <p>
						  Nulla sagittis convallis arcu. Sed sed nunc. Curabitur consequat. Quisque metus enim, venenatis fermentum, mollis in, porta et, nibh. Duis vulputate elit in elit. Default model text, and a search for ‘lorem ipsum’ will uncover.
						 </p>
						 <a href='#' class='btn l-button'>Learn More</a>
					</article>
				</div>
			</div>
		</section>
	</section>
	<!-- END BLOCK ABOUT -->

	<div class="clearfix"></div>

	<!-- START BLOCK TABS -->
	<section class="b-tabs">
		<section class="container content-width">
			<div class="row b-bg_tabs">
				<header class="l-center">
					<hgroup>
						<h2 class="l-title">life is either a daring adventure or nothing</h2>
						<h3 class="l-subtitle">Proin iaculis purus consequat sem cure digni</h3>
					</hgroup>
				</header>

				<div class="clearfix"></div>

				<div class="b-tabs-content">
					
					<div id="txmod" class="txtabs-wrap 0">
						<ul class="txtabs-nav top clearfix">
							<li class="first active">
								<a data-toggle="tab" data-target="#txmod-0">
									<i class="bc-lightbulb"></i>
									<span>Innovation</span>
								</a>
							</li>
							
							<li class="">
								<a data-toggle="tab" data-target="#txmod-1">
									<i class=" bc-strategy"></i>
									<span>Strategy</span>
								</a>
							</li>
							
							<li class="last">
								<a data-toggle="tab" data-target="#txmod-2">
									<i class=" bc-tools"></i>
									<span>Design</span>
								</a>
							</li>
						</ul>
						
						<div class="txtabs-content">
							<div class="txtabs-pane active in fade-slide" id="txmod-0">
								<div class="txtabs-pane-in clearfix">
									<div class="col-md-6">
										<img src="/images/tabs/img1.jpg" alt="" />
									</div>

									<div class="col-md-6">
										<h3 class="l-title_h3">beautiful designs</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
											incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
										</p>
										<br>
										<a href='#' class='btn l-button'>Learn More</a>
									</div>
								</div>
							</div>

							<div class="txtabs-pane fade-slide" id="txmod-1">
								<div class="txtabs-pane-in clearfix">
									<div class="col-md-6">
										<img src="/images/tabs/img2.jpg" alt="" />
									</div>

									<div class="col-md-6">
										<h3 class="l-title_h3">Design</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
											incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
										</p>
										<br>
										<a href='#' class='btn l-button'>Learn More</a>
									</div>
								</div>
							</div>

							<div class="txtabs-pane fade-slide" id="txmod-2">
								<div class="txtabs-pane-in clearfix">
									<div class="col-md-6">
										<img src="/images/tabs/img3.jpg" alt="" />
									</div>

									<div class="col-md-6">
										<h3 class="l-title_h3">Strategy</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
											incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
										</p>
										<br>
										<a href='#' class='btn l-button'>Learn More</a>
									</div>
								</div>
							</div>

							<div class="txtabs-pane fade-slide" id="txmod-3">
								<div class="txtabs-pane-in block clearfix"></div>
							</div>

							<div class="txtabs-pane fade-slide" id="txmod-4">
								<div class="txtabs-pane-in block clearfix"></div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</section>
	</section>
	<!-- END BLOCK TABS -->

	<div class="clearfix"></div>

	<!-- START BLOCK WORK -->
	<section class="b-work">
		<section class="container content-width">
			<div class="b-bg-work row">
				<header class="l-center">
					<h2 class="l-title">Our Works</h2>
					<h3 class="l-subtitle">Proin iaculis purus consequat sem cure digni ssim posuere odio</h3>
				</header>

				<div class="clearfix"></div>

				<div class="tx-gallery clearfix">
					<div class="tx-gallery-header l-center">
						<ul class="tx-gallery-filters">
							<li data-filter="*" class="active">All</li>
							<li data-filter=".bootstrap">Bootstrap</li>
							<li data-filter=".wordpres">WordPres</li>
							<li data-filter=".joomla">Joomla</li>
						</ul>
					</div>

					<ul class="tx-gallery-container tx-gallery-columns-4">
						<li class="bootstrap">
							<div class="tx-gallery-item">
								<div class="tx-gallery-item-in">
									<div class="tx-gallery-image">
										<a href="/images/portfolio/img3.jpg">
											<img src="/images/work/img3.jpg" alt="LESS based">
										</a>
										
										<span class="tx-gallery-image-overlay"></span>
										
										<div class="overlay-contents l-center">
											<a class="tx-gallery-image-preview" href="/images/portfolio/img3.jpg"><span class="icon-search"></span></a>
											<h2 class="tx-gallery-title">LESS based</a></h2>
											<div class="tx-gallery-intro">Lorem Ipsum is simply dummy text of the printing and&#8230;</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						
						<li class="bootstrap">
							<div class="tx-gallery-item">
								<div class="tx-gallery-item-in">
									<div class="tx-gallery-image">
										<a href="/images/portfolio/img2.jpg">
											<img src="/images/work/img2.jpg" alt="Cross Browser">
										</a>
										
										<span class="tx-gallery-image-overlay"></span>
										
										<div class="overlay-contents l-center">
											<a class="tx-gallery-image-preview" href="/images/portfolio/img2.jpg"><span class="icon-search"></span></a>
											<h2 class="tx-gallery-title">Cross Browser</a></h2>
											<div class="tx-gallery-intro">Lorem Ipsum is simply dummy text of the printing and&#8230;</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						
						<li class="wordpres">
							<div class="tx-gallery-item">
								<div class="tx-gallery-item-in">
									<div class="tx-gallery-image">
										<a href="/images/portfolio/img8.jpg">
											<img src="/images/work/img8.jpg" alt="Business Pages">
										</a>

										<span class="tx-gallery-image-overlay"></span>
										
										<div class="overlay-contents l-center">
											<a class="tx-gallery-image-preview" href="/images/portfolio/img8.jpg"><span class="icon-search"></span></a>
											<h2 class="tx-gallery-title">Business Pages</a></h2>
											<div class="tx-gallery-intro"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam&#8230;</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						
						<li class="wordpres">
							<div class="tx-gallery-item">
								<div class="tx-gallery-item-in">
									<div class="tx-gallery-image">
										<a href="/images/portfolio/img4.jpg">
											<img src="/images/work/img4.jpg" alt="Lazy Loader">
										</a>
										
										<span class="tx-gallery-image-overlay"></span>
										
										<div class="overlay-contents l-center">
											<a class="tx-gallery-image-preview" href="/images/portfolio/img4.jpg"><span class="icon-search"></span></a>
											<h2 class="tx-gallery-title">Lazy Loader</a></h2>
											<div class="tx-gallery-intro">Lorem Ipsum is simply dummy text of the printing and&#8230;</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						
						<li class="wordpres">
							<div class="tx-gallery-item">
								<div class="tx-gallery-item-in">
									<div class="tx-gallery-image">
										<a href="/images/portfolio/img1.jpg">
											<img src="/images/work/img1.jpg" alt="HTML5 and CSS3">
										</a>
										
										<span class="tx-gallery-image-overlay"></span>
										
										<div class="overlay-contents l-center">
											<a class="tx-gallery-image-preview" href="/images/portfolio/img1.jpg"><span class="icon-search"></span></a>
											<h2 class="tx-gallery-title">HTML5 and CSS3</a></h2>
											<div class="tx-gallery-intro">Lorem Ipsum is simply dummy text of the printing and&#8230;</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						
						<li class="joomla">
							<div class="tx-gallery-item">
								<div class="tx-gallery-item-in">
									<div class="tx-gallery-image">
										<a href="/images/portfolio/img6.jpg">
											<img src="/images/work/img6.jpg" alt="Offcanvas Menu">
										</a>
										
										<span class="tx-gallery-image-overlay"></span>
										
										<div class="overlay-contents l-center">
											<a class="tx-gallery-image-preview" href="/images/portfolio/img6.jpg"><span class="icon-search"></span></a>
											<h2 class="tx-gallery-title">Offcanvas Menu</a></h2>
											<div class="tx-gallery-intro">Lorem Ipsum is simply dummy text of the printing and&#8230;</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						
						<li class="joomla">
							<div class="tx-gallery-item">
								<div class="tx-gallery-item-in">
									<div class="tx-gallery-image">
										<a href="/images/portfolio/img5.jpg">
											<img src="/images/work/img5.jpg" alt="Easy Customization">
										</a>
										
										<span class="tx-gallery-image-overlay"></span>
										
										<div class="overlay-contents l-center">
											<a class="tx-gallery-image-preview" href="/images/portfolio/img5.jpg"><span class="icon-search"></span></a>
											<h2 class="tx-gallery-title">Easy Customization</a></h2>
											<div class="tx-gallery-intro">Lorem Ipsum is simply dummy text of the printing and&#8230;</div>
										</div>

									</div>
								</div>
							</div>
						</li>
						
						<li class="joomla">
							<div class="tx-gallery-item">
								<div class="tx-gallery-item-in">
									<div class="tx-gallery-image">
										<a href="/images/portfolio/img7.jpg">
											<img src="/images/work/img7.jpg" alt="Fluid Layout">
										</a>
										
										<span class="tx-gallery-image-overlay"></span>
										
										<div class="overlay-contents l-center">
											<a class="tx-gallery-image-preview" href="/images/portfolio/img7.jpg"><span class="icon-search"></span></a>
											<h2 class="tx-gallery-title">Fluid Layout</a></h2>
											<div class="tx-gallery-intro">Lorem Ipsum is simply dummy text of the printing and&#8230;</div>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section>
	</section>
	<!-- END BLOCK WORK -->

	<div class="clearfix"></div>

	<!-- START BLOCK ORDER -->
	<section class="b-order">
		<section class="container content-width">
			<div class="row b-order_bg">
				<div class="col-md-9">
					<h2 class="l-title">what are you waiting for ?</h2>
					<h4 class="l-title">Proin iaculis purus consequat sem cure digni</h4>
				</div>

				<div class="col-md-3">
					<a href="#" class="btn btn-border btn-large">Contact Now</a>
				</div>
			</div>
		</section>
	</section>
	<!-- END BLOCK ORDER -->

	<div class="clearfix"></div>

	<!-- START BLOCK BLOG -->
	<section class="b-blog">
		<section class="container content-width">
			<div class="b-bg-blog row">
				<header class="l-center">
					<h2 class="l-title">Our cozy blog</h2>
					<h3 class="l-subtitle">Proin iaculis purus consequat sem cure digni ssim posuere odio</h3>
				</header>
				
				<div class="clearfix"></div>

				<div class="col-md-6 col-xs-6">
					<a href="#">
						<img src="/images/blog/blog1.jpg" alt="">
					</a>

					<div class="b-blog-header">
						<a href="">
							<i class="bc-pricetags"></i>
							product
						</a>
						<a href="">
							<i class="bc-pricetags"></i>
							feature
						</a>
					</div>

					<div class="b-blog-content">
						<header>
							<a href="#">Creative Business Section</a>
						</header>

						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, 
							vulputate eu pharetra nec, mattis ac neque. Duis vulputate…
						</p>
						<a href="#" class="l-button">Learn More</a>

					</div>
				</div>

				<div class="col-md-6 col-xs-6">
					<img src="/images/blog/blog2.jpg" alt="">

					<div class="b-blog-header">
						<a href="">
							<i class="bc-pricetags"></i>
							new
						</a>
						<a href="">
							<i class="bc-pricetags"></i>
							awesomeness
						</a>
					</div>

					<div class="b-blog-content">
						<header>
							<a href="#">Far far away, behind the word mountains</a>
						</header>

						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
							Lorem Ipsum has been the industry's standard dummy… 
						</p>
						<a href="#" class="l-button">Learn More</a>

					</div>
				</div>
			</div>
		</section>
	</section>
	<!-- END BLOCK BLOG -->

	<div class="clearfix"></div>


	<!-- START BLOCK CONTACT -->
	<section class="b-contact">
		<section class="container content-width">
			<div class="row b-bg-contact">
				<div class="col-md-6">
					<div class="b-contact-social">
						<h3 class="l-title_h3">Social Media</h3>

						<ul>
							<li><a href="https://twitter.com/Web_Annex"><i class="bc-twitter"></i></a></li>
							<li><a href="https://www.facebook.com/Web-Annex-309982299345646"><i class="bc-facebook"></i></a></li>
							<li><a href="#"><i class="bc-googleplus"></i></a></li>
							<li><a href="#"><i class="bc-linkedin"></i></a></li>
							<li><a href="#"><i class="bc-rss"></i></a></li>
						</ul> 

						<div class="clearfix"></div>
					</div>
				
					<div class="clearfix"></div>

					<div class="b-contact-address">
						<h3 class="l-title_h3">Адресс</h3>

						<p>
							<i class="bc-map-pin"></i>
							234, 16, ул. Каменногорская, г. Минск
						</p>
						<p>
							<i class="bc-phone"></i>
							 +375 25 679 18 65
						</p>
						<p>
							<i class="bc-envelope"></i>
							webannexteam@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="b-contact-form pull-right">
						<form action="#">
							<input type="text" placeholder="TYPE YOUR NAME" name="name">
							<input type="email" placeholder="TYPE YOUR EMAIL" name="email">
							<textarea placeholder="YOUR MESSAGE" rows="5" name="body"></textarea>
							<button class="btn btn-primary l-button" type="submit">SEND FEEDBACK</button>
						</form>
					</div>
				</div>
			</div>
		</section>
	</section>
	<!-- END BLOCK CONTACT -->
</div>