<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from keenitsolutions.com/products/html/soccer/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Mar 2024 13:17:35 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Blog | Soccer</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="apple-touch-icon" href="apple-touch-icon.html">
		<!-- Place favicon.ico in the root directory -->
		<link rel="shortcut icon" type="image/x-icon" href="images/fav.png">
		<!-- bootstrap v3.3.6 css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- font-awesome css -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- animate css -->
		<link rel="stylesheet" href="css/animate.css">
		<!-- Main Menu css -->
		<link rel="stylesheet" href="css/rsmenu-main.css">
		<!-- rsmenu transitions css -->
		<link rel="stylesheet" href="css/rsmenu-transitions.css">
		<!-- hover-min css -->
		<link rel="stylesheet" href="css/hover-min.css">
		  <!-- magnific-popup css -->
		<link rel="stylesheet" href="css/magnific-popup.css">
		<!-- owl.carousel css -->
		<link rel="stylesheet" href="css/owl.carousel.css">
		<!-- Slick css -->
		<link rel="stylesheet" href="css/slick.css">
		<!-- Slick Theme css -->
		<link rel="stylesheet" href="css/slick-theme.css">
		<!-- style css -->
		<link rel="stylesheet" href="css/style.css">
		<!-- responsive css -->
		<link rel="stylesheet" href="css/responsive.css">
		<!-- modernizr js -->
		<script src="js/modernizr-2.8.3.min.js"></script>
	</head>
	<body class="home-two">
		<!--Preloader start here-->

		<!--Preloader area end here-->

		<!--Header area start here-->
        @include('App.header')
		<!--Header area end here-->


        <!-- Breadcrumbs Section Start -->
		<div class="rs-breadcrumbs sec-color">
            <img src="images/breadcrumbs/blog.jpg" alt="Breadcrubs" />
            <div class="breadcrumbs-inner">
    			<div class="container">
    				<div class="row">
    					<div class="col-md-12 text-center">
    						<h1 class="page-title">News</h1>
    						<ul>
    							<li>
    								<a class="active" href="index.html">Home</a>
    							</li>
    							<li>News</li>
    						</ul>
    					</div>
    				</div>
    			</div>
            </div>
		</div>
		<!-- Breadcrumbs Section End -->

        <!-- Home Blog Start Here -->
        <div id="rs-blog" class="rs-blog sec-spacer">
            <div class="container">
                <div class="row">
                    @foreach( $foots as $foot)
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="single-blog-slide">
                                <div class="images">
                                    <a href="#"><img src="{{ asset('storage/'.$foot->image) }}" alt="Blog Image"></a>
                                </div>
                                <div class="blog-details">
                                    <span class="date"><i class="fa fa-calendar-check-o"></i> {{ $foot->created_at }}</span>
                                    <h3><a href="#">{{ $foot->title }}</a></h3>
                                    <p>{{ $foot->description}}</p>
                                    <div class="read-more">
                                        <a href="#">{{ $foot->author }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Home Blog End Here -->

		<!-- Client Logo Section Start Here-->

        <!-- Client Logo Section End Here-->

		<!-- Footer Start -->
        @include('App.footer')
        <!-- Footer End -->

        <!-- Search Modal Start Here -->
        <!-- Search Modal End Here -->

		<!-- Start scrollUp  -->

		<!-- End scrollUp  -->

		<!-- all js here -->
		<!-- jquery latest version -->
		<script src="js/jquery.min.js"></script>
		<!-- Menu js -->
		<script src="js/rsmenu-main.js"></script>
		 <!-- jquery-ui js -->
		<script src="js/jquery-ui.min.js"></script>
		<!-- bootstrap js -->
		<script src="js/bootstrap.min.js"></script>
		<!-- meanmenu js -->
		<script src="js/jquery.meanmenu.js"></script>
		<!-- wow js -->
		<script src="js/wow.min.js"></script>
		<!-- Slick js -->
		<script src="js/slick.min.js"></script>
		<!-- masonry js -->
		<script src="js/masonry.js"></script>
		<!-- magnific-popup js -->
		<!-- owl.carousel js -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- magnific-popup js -->
		<script src="js/jquery.magnific-popup.js"></script>
		<!-- jquery.counterup js -->
		<script src="js/jquery.counterup.min.js"></script>
		<script src="js/waypoints.min.js"></script>
		<!-- main js -->
		<script src="js/main.js"></script>
	</body>

<!-- Mirrored from keenitsolutions.com/products/html/soccer/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Mar 2024 13:18:54 GMT -->
</html>
