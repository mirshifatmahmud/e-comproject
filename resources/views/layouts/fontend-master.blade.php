<!DOCTYPE html>
<html lang="en">
	
<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>Fontend</title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/main.css">
	    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/blue.css">
	    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/owl.carousel.css">
		<link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/owl.transitions.css">
		<link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/animate.min.css">
		<link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/rateit.css">
		<link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/bootstrap-select.min.css">

		
        <!-- toastr JS css file -->
        <link rel="stylesheet" href="{{ asset('backend/lib/toastr/toastr.css') }}">
		
		<!-- Icons/Glyphs -->
		<link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/font-awesome.css">

        <!-- Fonts --> 
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


	</head>
    <body class="cnt-home">
		<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">

	<!-- ============================================== TOP MENU ============================================== -->
<div class="top-bar animate-dropdown">
	<div class="container">
		<div class="header-top-inner">
			<div class="cnt-account">
				<ul class="list-unstyled">
					<li><a href="#"><i class="icon fa fa-user"></i>My Account</a></li>
					<li><a href="#"><i class="icon fa fa-heart"></i>Wishlist</a></li>
					<li><a href="#"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
					<li><a href="#"><i class="icon fa fa-check"></i>Checkout</a></li>
					<li>
                        @auth
                        <a href="{{route('user.dashboard')}}"><i class="icon fa fa-lock"></i>Profile ({{ Auth::user()->name }})</a>
                        @else
                        <a href="{{route('login')}}"><i class="icon fa fa-lock"></i>Login/Register</a>
                        @endauth
                    </li>
				</ul>
			</div><!-- /.cnt-account -->

			<div class="cnt-block">
				<ul class="list-unstyled list-inline">
					<li class="dropdown dropdown-small">
						<a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">USD </span><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">USD</a></li>
							<li><a href="#">INR</a></li>
							<li><a href="#">GBP</a></li>
						</ul>
					</li>

					<li class="dropdown dropdown-small">
						<a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">English </span><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">English</a></li>
							<li><a href="#">French</a></li>
							<li><a href="#">German</a></li>
						</ul>
					</li>
				</ul><!-- /.list-unstyled -->
			</div><!-- /.cnt-cart -->
			<div class="clearfix"></div>
		</div><!-- /.header-top-inner -->
	</div><!-- /.container -->
</div><!-- /.header-top -->
<!-- ============================================== TOP MENU : END ============================================== -->
	<div class="main-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
					<!-- ============================================================= LOGO ============================================================= -->
<div class="logo">
	<a href="{{url('/')}}">
		
		<img src="{{asset('fontend')}}/assets/images/logo.png" alt="">

	</a>
</div><!-- /.logo -->
<!-- ============================================================= LOGO : END ============================================================= -->				</div><!-- /.logo-holder -->

				<div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
					<!-- /.contact-row -->
<!-- ============================================================= SEARCH AREA ============================================================= -->
<div class="search-area">
    <form>
        <div class="control-group">

            <ul class="categories-filter animate-dropdown">
                <li class="dropdown">

                    <a class="dropdown-toggle"  data-toggle="dropdown" href="category.html">Categories <b class="caret"></b></a>

                    <ul class="dropdown-menu" role="menu" >
                        <li class="menu-header">Computer</li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Clothing</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Electronics</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Shoes</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Watches</a></li>

                    </ul>
                </li>
            </ul>

            <input class="search-field" placeholder="Search here..." />

            <a class="search-button" href="#" ></a>    

        </div>
    </form>
</div><!-- /.search-area -->
<!-- ============================================================= SEARCH AREA : END ============================================================= -->				</div><!-- /.top-search-holder -->

				<div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
					<!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

	<div class="dropdown dropdown-cart">
		<a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
			<div class="items-cart-inner">
            <div class="basket">
					<i class="glyphicon glyphicon-shopping-cart"></i>
				</div>
				<div class="basket-item-count"><span class="count">2</span></div>
				<div class="total-price-basket">
					<span class="lbl">cart -</span>
					<span class="total-price">
						<span class="sign">$</span><span class="value">600.00</span>
					</span>
				</div>
				
			
		    </div>
		</a>
		<ul class="dropdown-menu">
			<li>
				<div class="cart-item product-summary">
					<div class="row">
						<div class="col-xs-4">
							<div class="image">
								<a href="detail.html"><img src="{{asset('fontend')}}/assets/images/cart.jpg" alt=""></a>
							</div>
						</div>
						<div class="col-xs-7">
							
							<h3 class="name"><a href="index8a95.html?page-detail">Simple Product</a></h3>
							<div class="price">$600.00</div>
						</div>
						<div class="col-xs-1 action">
							<a href="#"><i class="fa fa-trash"></i></a>
						</div>
					</div>
				</div><!-- /.cart-item -->
				<div class="clearfix"></div>
			<hr>
		
			<div class="clearfix cart-total">
				<div class="pull-right">
					
						<span class="text">Sub Total :</span><span class='price'>$600.00</span>
						
				</div>
				<div class="clearfix"></div>
					
				<a href="checkout.html" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>	
			</div><!-- /.cart-total-->
					
				
		</li>
		</ul><!-- /.dropdown-menu-->
	</div><!-- /.dropdown-cart -->

<!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->				</div><!-- /.top-cart-row -->
			</div><!-- /.row -->

		</div><!-- /.container -->

	</div><!-- /.main-header -->

	<!-- ============================================== NAVBAR ============================================== -->
<div class="header-nav animate-dropdown">
    <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="nav-bg-class">
                <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
	<div class="nav-outer">
		<ul class="nav navbar-nav">
			<li class="active dropdown yamm-fw">
				<a href="home.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Home</a>
				
			</li>
			<li class="dropdown yamm mega-menu">
				<a href="home.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Clothing</a>
                <ul class="dropdown-menu container">
					<li>
               						<div class="yamm-content ">
            <div class="row">
                
                   <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                        <h2 class="title">Men</h2>
                        <ul class="links">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Shoes </a></li>
                            <li><a href="#">Jackets</a></li>
                            <li><a href="#">Sunglasses</a></li>
                            <li><a href="#">Sport Wear</a></li>
                             <li><a href="#">Blazers</a></li>
                              <li><a href="#">Shirts</a></li>
                          
                        </ul>
                    </div><!-- /.col -->

                    <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                        <h2 class="title">Women</h2>
                        <ul class="links">
                            <li><a href="#">Handbags</a></li>
                            <li><a href="#">Jwellery</a></li>
                            <li><a href="#">Swimwear </a></li>                   
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Flats</a></li>
                             <li><a href="#">Shoes</a></li>
                              <li><a href="#">Winter Wear</a></li>
                       
                        </ul>
                    </div><!-- /.col -->

                    <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                        <h2 class="title">Boys</h2>
                        <ul class="links">
                            <li><a href="#">Toys & Games</a></li>
                            <li><a href="#">Jeans</a></li>
                            <li><a href="#">Shirts</a></li>
                            <li><a href="#">Shoes</a></li>
                             <li><a href="#">School Bags</a></li>
                              <li><a href="#">Lunch Box</a></li> 
                               <li><a href="#">Footwear</a></li>
                                                                   
                        </ul>
                    </div><!-- /.col -->

                    <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                        <h2 class="title">Girls</h2>
                        <ul class="links">
                            <li><a href="#">Sandals </a></li> 
                            <li><a href="#">Shorts</a></li>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Jwellery</a></li>
                            <li><a href="#">Bags</a></li>
                             <li><a href="#">Night Dress</a></li>
                              <li><a href="#">Swim Wear</a></li>
                          
                                   
                        </ul>
                    </div><!-- /.col -->

                    
       <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image">
                                    <img class="img-responsive" src="{{asset('fontend')}}/assets/images/banners/top-menu-banner.jpg" alt="">
                              
                            
      
   
       
 
</div><!-- /.yamm-content -->					
</div>
</div>

</li>
				</ul>
				
			</li>

			<li class="dropdown mega-menu">
				<a href="category.html"  data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Electronics
				   <span class="menu-label hot-menu hidden-xs">hot</span>
				</a>
                <ul class="dropdown-menu container">
					<li>
						<div class="yamm-content">
    <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                <h2 class="title">Laptops</h2>
                <ul class="links">
                   <li><a href="#">Gaming</a></li>
                   <li><a href="#">Laptop Skins</a></li>
                    <li><a href="#">Apple</a></li>
                    <li><a href="#">Dell</a></li>
                    <li><a href="#">Lenovo</a></li>
                    <li><a href="#">Microsoft</a></li>
                    <li><a href="#">Asus</a></li>
                     <li><a href="#">Adapters</a></li>
                     <li><a href="#">Batteries</a></li>
                     <li><a href="#">Cooling Pads</a></li>
                </ul>
            </div><!-- /.col -->

            <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                <h2 class="title">Desktops</h2>
                <ul class="links">
                    <li><a href="#">Routers & Modems</a></li>
                    <li><a href="#">CPUs, Processors</a></li>
                    <li><a href="#">PC Gaming Store</a></li>
                    <li><a href="#">Graphics Cards</a></li>
                    <li><a href="#">Components</a></li>
                    <li><a href="#">Webcam</a></li>
                    <li><a href="#">Memory (RAM)</a></li>
                    <li><a href="#">Motherboards</a></li>
                    <li><a href="#">Keyboards</a></li>
                    <li><a href="#">Headphones</a></li>
                </ul>
            </div><!-- /.col -->

            <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                <h2 class="title">Cameras</h2>
                <ul class="links">
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Binoculars</a></li>
                    <li><a href="#">Telescopes</a></li>
                    <li><a href="#">Camcorders</a></li>
                    <li><a href="#">Digital</a></li>
                     <li><a href="#">Film Cameras</a></li>
                     <li><a href="#">Flashes</a></li>
                     <li><a href="#">Lenses</a></li>
                     <li><a href="#">Surveillance</a></li>
                      <li><a href="#">Tripods</a></li>
                     
                </ul>
            </div><!-- /.col -->
            <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                <h2 class="title">Mobile Phones</h2>
                <ul class="links">
                    <li><a href="#">Apple</a></li>
                    <li><a href="#">Samsung</a></li>
                    <li><a href="#">Lenovo</a></li>
                    <li><a href="#">Motorola</a></li>
                    <li><a href="#">LeEco</a></li>
                    <li><a href="#">Asus</a></li>
                    <li><a href="#">Acer</a></li>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Headphones</a></li>
                     <li><a href="#">Memory Cards</a></li>
                </ul>
            </div>
            
             <div class="col-xs-12 col-sm-12 col-md-4 col-menu custom-banner">
             <a href="#"><img alt="" src="{{asset('fontend')}}/assets/images/banners/banner-side.png"></a>
             </div>
    </div><!-- /.row -->
</div><!-- /.yamm-content -->					</li>
				</ul>
			</li>
			<li class="dropdown hidden-sm">
				
				<a href="category.html">Health & Beauty
				    <span class="menu-label new-menu hidden-xs">new</span>
				</a>
			</li>

			<li class="dropdown hidden-sm">
				<a href="category.html">Watches</a>
			</li>

			<li class="dropdown">
				<a href="contact.html">Jewellery</a>
			</li>
            
            <li class="dropdown">
				<a href="contact.html">Shoes</a>
			</li>
            <li class="dropdown">
				<a href="contact.html">Kids & Girls</a>
			</li>
			
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Pages</a>
				<ul class="dropdown-menu pages">
					<li>
						<div class="yamm-content">
							<div class="row">
								
									<div class="col-xs-12 col-menu">
	                                  <ul class="links">
		                                  	<li><a href="home.html">Home</a></li>
											<li><a href="category.html">Category</a></li>
											<li><a href="detail.html">Detail</a></li>
											<li><a href="shopping-cart.html">Shopping Cart Summary</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
											<li><a href="blog.html">Blog</a></li>
											<li><a href="blog-details.html">Blog Detail</a></li>
											<li><a href="contact.html">Contact</a></li>
                                            <li><a href="sign-in.html">Sign In</a></li>
											<li><a href="my-wishlist.html">Wishlist</a></li>
											<li><a href="terms-conditions.html">Terms and Condition</a></li>
											<li><a href="track-orders.html">Track Orders</a></li>
											<li><a href="product-comparison.html">Product-Comparison</a></li>
		                                  	<li><a href="faq.html">FAQ</a></li>
											<li><a href="404.html">404</a></li>
											
	                                  </ul>
									</div>
									
									
								
							</div>
						</div>
					</li>
                    
                   
					
				</ul>
			</li>
             <li class="dropdown  navbar-right special-menu">
				<a href="#">Todays offer</a>
			</li>
					
			
		</ul><!-- /.navbar-nav -->
		<div class="clearfix"></div>				
	</div><!-- /.nav-outer -->
</div><!-- /.navbar-collapse -->


            </div><!-- /.nav-bg-class -->
        </div><!-- /.navbar-default -->
    </div><!-- /.container-class -->

</div><!-- /.header-nav -->
<!-- ============================================== NAVBAR : END ============================================== -->

</header>

<!-- ============================================== HEADER : END ============================================== -->
@yield('content')
<!-- ============================================== BRANDS CAROUSEL ============================================== -->
@include('fontend.inc.brand')
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
	</div><!-- /.container -->
</div><!-- /#top-banner-and-menu -->




<!-- ============================================================= FOOTER ============================================================= -->
<footer id="footer" class="footer color-bg">


    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Contact Us</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
        <ul class="toggle-footer" style="">
            <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                            <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <p>ThemesGround, 789 Main rd, Anytown, CA 12345 USA</p>
                </div>
            </li>

              <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <p>+(888) 123-4567<br>+(888) 456-7890</p>
                </div>
            </li>

              <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <span><a href="#">flipmart@themesground.com</a></span>
                </div>
            </li>
              
            </ul>
    </div><!-- /.module-body -->
                </div><!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Customer Service</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                            <li class="first"><a href="#" title="Contact us">My Account</a></li>
                <li><a href="#" title="About us">Order History</a></li>
                <li><a href="#" title="faq">FAQ</a></li>
                <li><a href="#" title="Popular Searches">Specials</a></li>
                <li class="last"><a href="#" title="Where is my order?">Help Center</a></li>
                        </ul>
                    </div><!-- /.module-body -->
                </div><!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Corporation</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                          <li class="first"><a title="Your Account" href="#">About us</a></li>
                <li><a title="Information" href="#">Customer Service</a></li>
                <li><a title="Addresses" href="#">Company</a></li>
                <li><a title="Addresses" href="#">Investor Relations</a></li>
                <li class="last"><a title="Orders History" href="#">Advanced Search</a></li>
                        </ul>
                    </div><!-- /.module-body -->
                </div><!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Why Choose Us</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                            <li class="first"><a href="#" title="About us">Shopping Guide</a></li>
                <li><a href="#" title="Blog">Blog</a></li>
                <li><a href="#" title="Company">Company</a></li>
                <li><a href="#" title="Investor Relations">Investor Relations</a></li>
                <li class=" last"><a href="contact-us.html" title="Suppliers">Contact Us</a></li>
                        </ul>
                    </div><!-- /.module-body -->
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-bar">
        <div class="container">
            <div class="col-xs-12 col-sm-6 no-padding social">
                <ul class="link">
                  <li class="fb pull-left"><a target="_blank" rel="nofollow" href="#" title="Facebook"></a></li>
                  <li class="tw pull-left"><a target="_blank" rel="nofollow" href="#" title="Twitter"></a></li>
                  <li class="googleplus pull-left"><a target="_blank" rel="nofollow" href="#" title="GooglePlus"></a></li>
                  <li class="rss pull-left"><a target="_blank" rel="nofollow" href="#" title="RSS"></a></li>
                  <li class="pintrest pull-left"><a target="_blank" rel="nofollow" href="#" title="PInterest"></a></li>
                  <li class="linkedin pull-left"><a target="_blank" rel="nofollow" href="#" title="Linkedin"></a></li>
                  <li class="youtube pull-left"><a target="_blank" rel="nofollow" href="#" title="Youtube"></a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 no-padding">
                <div class="clearfix payment-methods">
                    <ul>
                        <li><img src="{{asset('fontend')}}/assets/images/payments/1.png" alt=""></li>
                        <li><img src="{{asset('fontend')}}/assets/images/payments/2.png" alt=""></li>
                        <li><img src="{{asset('fontend')}}/assets/images/payments/3.png" alt=""></li>
                        <li><img src="{{asset('fontend')}}/assets/images/payments/4.png" alt=""></li>
                        <li><img src="{{asset('fontend')}}/assets/images/payments/5.png" alt=""></li>
                    </ul>
                </div><!-- /.payment-methods -->
            </div>
        </div>
    </div>
</footer>
<!-- ============================================================= FOOTER : END============================================================= -->


	<!-- For demo purposes – can be removed on production -->
	
	
	<!-- For demo purposes – can be removed on production : End -->

	<!-- JavaScripts placed at the end of the document so the pages load faster -->
	<script src="{{ asset('fontend') }}/assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="{{ asset('fontend') }}/assets/js/bootstrap.min.js"></script>
	
	<script src="{{ asset('fontend') }}/assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="{{ asset('fontend') }}/assets/js/owl.carousel.min.js"></script>
	
	<script src="{{ asset('fontend') }}/assets/js/echo.min.js"></script>
	<script src="{{ asset('fontend') }}/assets/js/jquery.easing-1.3.min.js"></script>
	<script src="{{ asset('fontend') }}/assets/js/bootstrap-slider.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="{{ asset('fontend') }}/assets/js/lightbox.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/js/wow.min.js"></script>
	<script src="{{ asset('fontend') }}/assets/js/scripts.js"></script>

    <script src="{{ asset('backend/lib/toastr/toastr.min.js') }}"></script>

    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        
        @if (session('success'))
            toastr.success("{{ session('success') }}");
        @endif
    
        @if (session('error'))
            toastr.error("{{ session('error') }}");
        @endif
    
        @if (session('warning'))
            toastr.warning("{{ session('warning') }}");
        @endif
    
        @if (session('info'))
            toastr.info("{{ session('info') }}");
        @endif
    </script>    

</body>

</html>