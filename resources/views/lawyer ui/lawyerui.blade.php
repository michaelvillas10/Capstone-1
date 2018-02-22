<!DOCTYPE html>
<html>
<html lang="en-US">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>Public Attorney's Office</title>
        <meta name="description" content="" />
        <meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

        <!-- mobile settings -->
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

        <!-- WEB FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css" />

        <!-- CORE CSS -->
        <link rel="stylesheet" href="{{ URL::asset('plugins/bootstrap/css/bootstrap.min.css') }}" />
        <!-- THEME CSS -->
        <link href="{{ asset('css/essentials.css') }}" rel="stylesheet">
        <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
          
        <link href="{{ asset('css/color_scheme/green.css') }}" rel="stylesheet" id="color_scheme">
        <link rel="stylesheet" type="text/css" href="{{asset('css/layout-datatables.css')}}">
         <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.datetimepicker.css')}}">
         <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-datetimepicker.css')}}">
    </head>

<body class="smoothscroll enable-animation menu-vertical">

		<!-- wrapper -->
		<div id="wrapper">

			<!-- SIDE MENU -->
			<div id="mainMenu" class="sidebar-vertical sidebar-dark">

				<div class="sidebar-nav">
					<div class="navbar navbar-default" role="navigation">


						<!-- OPTIONS -->
						<ul class="top-links list-inline text-center block">
							<li><a class="dropdown-toggle no-text-underline" href="#"><i class="et-basket"></i> INBOX (0)</a></li>
							<li>
								<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><i class="fa fa-cog"></i></a>
								<ul class="dropdown-langs dropdown-menu">
									<li>
										<a href="#">
											<i class="fa fa-user"></i> 
											MY ACCOUNT
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-gear"></i> 
											MY SETTINGS
										</a>
									</li>
									<li>
										<a href="#">
											<i class="glyphicon glyphicon-off"></i> 
											LOGOUT
										</a>
									</li>
								</ul>
							</li>
						</ul>
						<!-- /OPTIONS -->


						<a href="index.html" class="logo text-center nomargin-bottom">
							<!--<img src="assets/images/logo_light.png" alt="">-->
						</a>

						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>

						<div class="navbar-collapse sidebar-navbar-collapse collapse" aria-expanded="false">

							<!-- INLINE SEARCH -->
							<div class="inline-search clearfix margin-bottom-40 margin-top-30 margin-left-15 margin-right-15">
								<form action="" method="get" class="widget_search">
									<input type="search" placeholder="Search..." id="s" name="s" class="serch-input">
									<button type="submit">
										<i class="fa fa-search"></i>
									</button>
								</form>
							</div>
							<!-- /INLINE SEARCH -->

							<!-- MENU -->
							<ul class="nav navbar-nav">
								<li>
									<a href="index.html">
										Dashboard
									</a>
								</li>
								<li>
									<a href="index.html">
										Cases
									</a>
								</li>
								<li>
									<a href="index.html">
										Schedule
									</a>
								</li>
							</ul>
							<!-- /MENU -->

						</div><!--/.nav-collapse -->

					</div>
				</div>
				<!-- /Social Icons -->


				<!-- Paragraph -->
				<p class="text-center hidden-xs">
					office@yourdomain.com <br />
					(+800) 123 456 78
				</p>
				<!-- /Paragraph -->

			</div>
			<!-- /SIDE MENU -->



			<!-- 
				SLIDER

				Classes:
					.fullheight = full height slider
			-->
			<section id="slider" class="fullheight">

				<!--
					SWIPPER SLIDER PARAMS
					
					data-effect="slide|fade|coverflow"
					data-autoplay="2500|false" 						(remove to disable autoplay)
				-->
				<div class="swiper-container" data-effect="slide" data-autoplay="false">
					<div class="swiper-wrapper">

						<!-- SLIDE 1 -->
						<div class="swiper-slide" style="background-image: url('assets/images/demo/shop/home/slide_3.jpg');">
							<div class="overlay dark-1"><!-- dark overlay [1 to 9 opacity] --></div>
							
							<div class="display-table">
								<div class="display-table-cell vertical-align-middle">
									<div class="container">

										<div class="slider-featured-text absolute bottom-center text-right">
											<h1 class="text-white wow fadeInUp" data-wow-delay="0.4s">
												<em>Women</em> 
												<em class="weight-300 text-white">Dresses</em>
											</h1>
											<h2 class="weight-300 text-white wow fadeInUp" data-wow-delay="0.8s">up to 70% in the new collection</h2>
											<a class="btn btn-primary btn-lg wow fadeInUp" data-wow-delay="1s" href="#">Shop Now &raquo;</a>
										</div>
							
									</div>
								</div>
							</div>
							
						</div>
						<!-- /SLIDE 1 -->


						<!-- SLIDE 2 -->
						<div class="swiper-slide" style="background-image: url('assets/images/demo/shop/home/slide_4.jpg');">
							<div class="overlay dark-6"><!-- dark overlay [1 to 9 opacity] --></div>
							
							<div class="display-table">
								<div class="display-table-cell vertical-align-middle">
									<div class="container">

										<div class="slider-featured-text absolute bottom-left text-right">
											<h1 class="text-white wow fadeInUp" data-wow-delay="0.4s">
												<em>Mobile</em> 
												<em class="weight-300 text-white">Phones</em>
											</h1>
											<h2 class="weight-300 text-white wow fadeInUp" data-wow-delay="0.8s">up to 30% off</h2>
											<a class="btn btn-primary btn-lg wow fadeInUp" data-wow-delay="1s" href="#">Shop Now &raquo;</a>
										</div>
							
									</div>
								</div>
							</div>
							
						</div>
						<!-- /SLIDE 2 -->

						<!-- SLIDE 3 -->
						<div class="swiper-slide" style="background-image: url('assets/images/demo/shop/home/slide_5.jpg');">
							<div class="overlay dark-1"><!-- dark overlay [1 to 9 opacity] --></div>
							
							<div class="display-table">
								<div class="display-table-cell vertical-align-middle">
									<div class="container">

										<div class="slider-featured-text absolute bottom-center text-right">
											<h1 class="text-white wow fadeInUp" data-wow-delay="0.4s">
												<em>Women</em> 
												<em class="weight-300 text-white">Accessories</em>
											</h1>
											<h2 class="weight-300 text-white wow fadeInUp" data-wow-delay="0.8s">up to 50% in the new collection</h2>
											<a class="btn btn-primary btn-lg wow fadeInUp" data-wow-delay="1s" href="#">Shop Now &raquo;</a>
										</div>
							
									</div>
								</div>
							</div>
							
						</div>
						<!-- /SLIDE 3 -->

					</div>

					<!-- Swiper Pagination -->
					<div class="swiper-pagination"></div>

					<!-- Swiper Arrows -->
					<div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
					<div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
				</div>
					
			</section>
			<!-- /SLIDER -->


		</div>
		<!-- /wrapper -->


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->


		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
		<script type="text/javascript" src="assets/plugins/jquery/jquery-2.2.3.min.js"></script>

		<script type="text/javascript" src="assets/js/scripts.js"></script>
		
		<!-- STYLESWITCHER - REMOVE -->
		<script async type="text/javascript" src="assets/plugins/styleswitcher/styleswitcher.js"></script>

		<!-- SWIPER SLIDER -->
		<script type="text/javascript" src="assets/plugins/slider.swiper/dist/js/swiper.min.js"></script>
		<script type="text/javascript" src="assets/js/view/demo.swiper_slider.js"></script>
	</body>
</html>