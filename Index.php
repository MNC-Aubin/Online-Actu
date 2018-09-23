<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Online News</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
   
    
    <!-- All CSS Files -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Icon Font -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
    <!-- Plugins css file -->
    <link rel="stylesheet" href="css/plugins.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.8.3.min.js"></script>


     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    
</head>

<body>

<!-- Body main wrapper start -->
<div class="wrapper">
	
<!-- START HEADER SECTION -->
<header class="header-section section sticker">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- logo -->
                <div class="header-logo float-left">
                    <a href="index.html"><img src="img/logo.png" alt="main logo"></a>
                </div>
                <!-- header-search & total-cart -->
                <div class="float-right">
                    <div class="header-option-btns float-right">
                        <!-- header-search -->
                        <div class="header-search float-left">
                            <button class="search-toggle" data-toggle="dropdown"><i class="fa fa-search" aria-hidden="true"></i></button>
                            <div class="dropdown-menu header-search-form">
                                <form action="search.php">
                                    <input type="text" placeholder="Search">
                                    <button><i class="fa fa-long-arrow-right"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- header Account -->
                        <div class="header-account float-left">
                            <?php if(isset($_SESSION['email']))
                            {
                                echo ('
                                <ul>
                                    <li><a href="#" data-toggle="dropdown"><i class="fa fa-cog" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">My Account</a></li>
                                            <li><a href="logout.php">Log out</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                ');
                            } else {

                                echo ('
                                <ul>
                                    <li><a href="#" data-toggle="dropdown"><i class="fa fa-user-times" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="login.php">Log in</a></li>
                                            <li><a href="register.php">Register</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                ');
                            }
                            ?>
                        </div>
                    </div>
                    <nav class="main-menu menu-right float-right">
                        <ul>
                            <li class="active"><a href="index.html">Home</a>
                            </li>
                            <li><a href="Product.html">My Articles</a>
                            </li>
                            <li><a href="#">Categories</a>
                                <ul class="sub-menu">
                                    <li><a href="cart.html">cart</a></li>
                                     <li><a href="checkoutpage.html">Checkout</a></li>
                                    <li><a href="Loginpage.php">login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                </ul>
                            </li>
                            <li><a target="_blank" href="https://www.ekiosque.cm">Ekiosque</a>
                            </li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="mobile-menu"></div>
            </div>
        </div>
    </div>
</header>
<!-- END HEADER SECTION -->
	
<!-- PRODUCT SECTION START -->
<div class="product-section section pt-120 pb-120">
    <div class="container">
       
        <div class="row">
            <!-- Isotop Product Filter -->
            <div class="isotope-product-filter col-xs-8">
                <button class="active" data-filter="*">all</button>
                <button data-filter=".chair">chair</button>
                <button data-filter=".ptable">table</button>
                <button data-filter=".home-decor">home decor</button>
                <button data-filter=".lighting">lighting</button>
            </div>
        </div>
        
        <div class="isotope-grid row">
            <!-- Product Item Start -->
            <div class="isotope-item chair home-decor col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-50">
                <div class="product-item text-center">
                    <!-- Product Image -->
                    <div class="product-img">
                        <!-- Image -->
                        <a class="image" href="product-details.html"><img src="img/product/10.jpg" alt=""/></a>
                        <!-- Favourite Button -->
                        <a class="wishlist" href="#" title="Favourite"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        <!-- Action Button -->
                        <div class="action-btn fix">
                            <a href="#" data-toggle="modal"  data-target="#quickViewModal" title="Quick View"><i class="fa fa-eye" aria-hidden="true"></i>Quick view</a>
                        </div>
                    </div>
                    <!-- Portfolio Info -->
                    <div class="product-info text-left">
                        <!-- Title -->
                        <h5 class="title"><a href="product-details.html">Title</a></h5>
                        <!-- Price Ratting -->
                        <div class="price-ratting fix">
                            <span class="price float-left"><span class="new">Description</span></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Item End -->
            <!-- Product Item Start -->
            <div class="isotope-item ptable col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-50">
                <div class="product-item text-center">
                    <!-- Product Image -->
                    <div class="product-img">
                        <!-- Image -->
                        <a class="image" href="product-details.html"><img src="img/product/11.jpg" alt=""/></a>
                        <!-- Wishlist Button -->
                        <a class="wishlist" href="#" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        <!-- Action Button -->
                        <div class="action-btn fix">
                            <a href="#" data-toggle="modal"  data-target="#quickViewModal" title="Quick View"><i class="fa fa-eye" aria-hidden="true"></i>Quick view</a>
                            <a href="#" title="Add to Cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</a>
                        </div>
                    </div>
                    <!-- Portfolio Info -->
                    <div class="product-info text-left">
                        <!-- Title -->
                        <h5 class="title"><a href="product-details.html">rose gold watch</a></h5>
                        <!-- Price Ratting -->
                        <div class="price-ratting fix">
                            <span class="price float-left"><span class="new">Rs137.00</span><span class="old">€115.00</span></span>
                            <span class="ratting float-right">
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Item End -->
            <!-- Product Item Start -->
            <div class="isotope-item lighting col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-50">
                <div class="product-item text-center">
                    <!-- Product Image -->
                    <div class="product-img">
                        <!-- Image -->
                        <a class="image" href="product-details.html"><img src="img/product/12.jpg" alt=""/></a>
                        <!-- Wishlist Button -->
                        <a class="wishlist" href="#" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        <!-- Action Button -->
                        <div class="action-btn fix">
                            <a href="#" data-toggle="modal"  data-target="#quickViewModal" title="Quick View"><i class="fa fa-eye" aria-hidden="true"></i>Quick view</a>
                            <a href="#" title="Add to Cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</a>
                        </div>
                    </div>
                    <!-- Portfolio Info -->
                    <div class="product-info text-left">
                        <!-- Title -->
                        <h5 class="title"><a href="product-details.html">aquarium logo</a></h5>
                        <!-- Price Ratting -->
                        <div class="price-ratting fix">
                            <span class="price float-left"><span class="new">Rs245.00</span></span>
                            <span class="ratting float-right">
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Item End -->
            <!-- Product Item Start -->
            <div class="isotope-item ptable home-decor col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-50">
                <div class="product-item text-center">
                    <!-- Product Image -->
                    <div class="product-img">
                        <!-- Image -->
                        <a class="image" href="product-details.html"><img src="img/product/13.jpg" alt=""/></a>
                        <!-- Wishlist Button -->
                        <a class="wishlist" href="#" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        <!-- Action Button -->
                        <div class="action-btn fix">
                            <a href="#" data-toggle="modal"  data-target="#quickViewModal" title="Quick View"><i class="fa fa-eye" aria-hidden="true"></i>Quick view</a>
                            <a href="#" title="Add to Cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</a>
                        </div>
                    </div>
                    <!-- Portfolio Info -->
                    <div class="product-info text-left">
                        <!-- Title -->
                        <h5 class="title"><a href="product-details.html">bottle opener</a></h5>
                        <!-- Price Ratting -->
                        <div class="price-ratting fix">
                            <span class="price float-left"><span class="new">Rs185.00</span><span class="old">€125..00</span></span>
                            <span class="ratting float-right">
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Item End -->
            <!-- Product Item Start -->
            <div class="isotope-item chair lighting col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-50">
                <div class="product-item text-center">
                    <!-- Product Image -->
                    <div class="product-img">
                        <!-- Image -->
                        <a class="image" href="product-details.html"><img src="img/product/14.jpg" alt=""/></a>
                        <!-- Wishlist Button -->
                        <a class="wishlist" href="#" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        <!-- Action Button -->
                        <div class="action-btn fix">
                            <a href="#" data-toggle="modal"  data-target="#quickViewModal" title="Quick View"><i class="fa fa-eye" aria-hidden="true"></i>Quick view</a>
                            <a href="#" title="Add to Cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i>>add to cart</a>
                        </div>
                    </div>
                    <!-- Portfolio Info -->
                    <div class="product-info text-left">
                        <!-- Title -->
                        <h5 class="title"><a href="product-details.html">field notes</a></h5>
                        <!-- Price Ratting -->
                        <div class="price-ratting fix">
                            <span class="price float-left"><span class="new">Rs245.00</span></span>
                            <span class="ratting float-right">
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Item End -->
            <!-- Product Item Start -->
            <div class="isotope-item chair col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-50">
                <div class="product-item text-center">
                    <!-- Product Image -->
                    <div class="product-img">
                        <!-- Image -->
                        <a class="image" href="product-details.html"><img src="img/product/15.jpg" alt=""/></a>
                        <!-- Wishlist Button -->
                        <a class="wishlist" href="#" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        <!-- Action Button -->
                        <div class="action-btn fix">
                            <a href="#" data-toggle="modal"  data-target="#quickViewModal" title="Quick View"><i class="fa fa-eye" aria-hidden="true"></i>Quick view</a>
                            <a href="#" title="Add to Cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</a>
                        </div>
                    </div>
                    <!-- Portfolio Info -->
                    <div class="product-info text-left">
                        <!-- Title -->
                        <h5 class="title"><a href="product-details.html">beige</a></h5>
                        <!-- Price Ratting -->
                        <div class="price-ratting fix">
                            <span class="price float-left"><span class="new">Rs137.00</span><span class="old">€115.00</span></span>
                            <span class="ratting float-right">
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Item End -->
            <!-- Product Item Start -->
            <div class="isotope-item ptable col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-50">
                <div class="product-item text-center">
                    <!-- Product Image -->
                    <div class="product-img">
                        <!-- Image -->
                        <a class="image" href="product-details.html"><img src="img/product/16.jpg" alt=""/></a>
                        <!-- Wishlist Button -->
                        <a class="wishlist" href="#" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        <!-- Action Button -->
                        <div class="action-btn fix">
                            <a href="#" data-toggle="modal"  data-target="#quickViewModal" title="Quick View"><i class="fa fa-eye" aria-hidden="true"></i>Quick view</a>
                            <a href="#" title="Add to Cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</a>
                        </div>
                    </div>
                    <!-- Portfolio Info -->
                    <div class="product-info text-left">
                        <!-- Title -->
                        <h5 class="title"><a href="product-details.html">Slip-on shoe</a></h5>
                        <!-- Price Ratting -->
                        <div class="price-ratting fix">
                            <span class="price float-left"><span class="new">Rs169.00</span></span>
                            <span class="ratting float-right">
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Item End -->
            <!-- Product Item Start -->
            <div class="isotope-item home-decor lighting col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-50">
                <div class="product-item text-center">
                    <!-- Product Image -->
                    <div class="product-img">
                        <!-- Image -->
                        <a class="image" href="product-details.html"><img src="img/product/17.jpg" alt=""/></a>
                        <!-- Wishlist Button -->
                        <a class="wishlist" href="#" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        <!-- Action Button -->
                        <div class="action-btn fix">
                            <a href="#" data-toggle="modal"  data-target="#quickViewModal" title="Quick View"><i class="fa fa-eye" aria-hidden="true"></i>Quick view</a>
                            <a href="#" title="Add to Cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</a>
                        </div>
                    </div>
                    <!-- Portfolio Info -->
                    <div class="product-info text-left">
                        <!-- Title -->
                        <h5 class="title"><a href="product-details.html">audio equipment</a></h5>
                        <!-- Price Ratting -->
                        <div class="price-ratting fix">
                            <span class="price float-left"><span class="new">Rs185.00</span><span class="old">€125..00</span></span>
                            <span class="ratting float-right">
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Item End -->
        </div>
         
        <div class="row">
            <div class="text-center col-xs-12 mt-30">
                <a href="#" class="btn load-more-product">load more</a>
            </div>
        </div>
    </div>
</div>
<!-- PRODUCT SECTION END -->

<!-- BANNER-SECTION START -->
<div class="banner-section section pb-90">
    <div class="container">
        <div class="row">
            <!-- Banner Item Start -->
            <div class="col-sm-4 col-xs-12 mb-30">
                <div class="single-banner">
                    <a href="#"><img src="img/banner/1.jpg" alt=""></a>
                </div>
            </div>
            <!-- Banner Item End -->
            <!-- Banner Item Start -->
            <div class="col-sm-4 col-xs-12 mb-30">
                <div class="single-banner">
                    <a href="#"><img src="img/banner/2.jpg" alt=""></a>
                </div>
            </div>
            <!-- Banner Item End -->
            <!-- Banner Item Start -->
            <div class="col-sm-4 col-xs-12 mb-30">
                <div class="single-banner">
                    <a href="#"><img src="img/banner/3.jpg" alt=""></a>
                </div>
            </div>
            <!-- Banner Item End -->
        </div>
    </div>
</div> 
<!-- BANNER-SECTION END -->
    
<!-- NEWSLETTER SECTION START -->
<div class="sunscribe-section section pb-120">
    <div class="container">
        <div class="row">
            <!-- Subscribe Title -->
            <div class="sunscribe-title text-center col-xs-12 mb-50">
                <h4>SUBSCRIBE TO NEWSLETTER</h4>
                <p>There are many variations of passages of Lor available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
                <!-- Subscribe Form -->
				<form  id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="section-sunscribe-form validate" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll">
                        <label for="mce-EMAIL" class="hidden">Subscribe to our mailing list</label>
                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email Address" required>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- NEWSLETTER SECTION END --> 

<!-- QUICK VIEW MODAL START-->
<div id="quickViewModal" class="modal fade" >
    <div class="container">
        <div class="modal-content row">
            <div class="modal-body">
                <button class="close" data-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                <!-- QuickView Product Images -->
                <div class="col-md-5 col-sm-6 col-xs-12 mb-40">	
                    <!-- Tab panes -->
                    <div class="tab-content mb-10">
                        <div class="pro-large-img tab-pane active" id="pro-large-img-1">
                            <img src="img/product/10.jpg" alt="" />
                        </div>
                        <div class="pro-large-img tab-pane" id="pro-large-img-2">
                            <img src="img/product/11.jpg" alt="" />
                        </div>
                        <div class="pro-large-img tab-pane" id="pro-large-img-3">
                            <img src="img/product/12.jpg" alt="" />
                        </div>
                        <div class="pro-large-img tab-pane" id="pro-large-img-4">
                            <img src="img/product/13.jpg" alt="" />					
                        </div>
                        <div class="pro-large-img tab-pane" id="pro-large-img-5">
                            <img src="img/product/14.jpg" alt="" />
                        </div>
                    </div>
                    <!-- QuickView Product Thumbnail Slider -->
                    <div class="pro-thumb-img-slider">
                        <div><a href="#pro-large-img-1" data-toggle="tab"><img src="img/product/10.jpg" alt="" /></a></div>
                        <div><a href="#pro-large-img-2" data-toggle="tab"><img src="img/product/11.jpg" alt="" /></a></div>
                        <div><a href="#pro-large-img-3" data-toggle="tab"><img src="img/product/12.jpg" alt="" /></a></div>
                        <div><a href="#pro-large-img-4" data-toggle="tab"><img src="img/product/13.jpg" alt="" /></a></div>
                        <div><a href="#pro-large-img-5" data-toggle="tab"><img src="img/product/14.jpg" alt="" /></a></div>
                    </div>
                </div>
                <!-- QuickView Product Details -->
                <div class="col-md-7 col-sm-6 col-xs-12 mb-40">
                    <div class="product-details section">
                        <!-- Title -->
                        <h1 class="title">Title</h1>
                        <!-- Price Ratting -->
                        <div class="price-ratting section">
                            <!-- Price -->
                            <span class="price float-left"><span class="new">€ 120.00</span></span>
                        </div>
                        <!-- Short Description -->
                        <div class="short-desc section">
                            <h5 class="pd-sub-title">Description</h5>
                            <p>Body of article</p>
                        </div>

                        <!-- Usefull Link -->
                        <ul class="usefull-link section">
                            <li><a href="#"><i class="pe-7s-like"></i> Favourite</a></li>
                        </ul>
                        <!-- Share -->
                        <div class="share-icons section">
                            <span>share :</span>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- QUICK VIEW MODAL END-->
    
<!-- FOOTER TOP SECTION START -->
<div class="footer-top-section footer-top-dark section pt-100 pb-60">
	<div class="container">
		<div class="row">
           
            <!-- Footer Widget -->
			<div class="footer-widget footer-widget-dark col-md-4 col-sm-6 col-xs-12 mb-40">
				<h5 class="widget-title">ABOUT THE STORE</h5>
				<p>There are many variations of passages of Lor available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                <div class="footer-social fix">
                    <a href="#"><i class="fa fa-2x fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-2x fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-2x fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-2x fa-pinterest"></i></a>
                </div>
			</div>
			
			<!-- Footer Widget -->
			<div class="footer-widget footer-widget-dark col-md-3 col-sm-6 col-xs-12 mb-40">
				<h5 class="widget-title">CUSTOMER SERVICE</h5>
				<ul>
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">Returns & Refunds</a></li>
					<li><a href="#">Terms & Conditions</a></li>
					<li><a href="#">online store</a></li>
					<li><a href="#">Conditions</a></li>
				</ul>
			</div>
			
			<!-- Footer Widget -->
			<div class="footer-widget footer-widget-dark col-md-2 col-sm-6 col-xs-12 mb-40">
				<h5 class="widget-title">PROFILE</h5>
				<ul>
					<li><a href="#">my Account</a></li>
					<li><a href="#">Checkout</a></li>
					<li><a href="#">help</a></li>
					<li><a href="#">support</a></li>
					<li><a href="#">wishlist</a></li>
				</ul>
			</div>
			
			<!-- Footer Widget -->
			<div class="footer-widget footer-widget-dark col-md-3 col-sm-6 col-xs-12 mb-40">
				<h5 class="widget-title">instagram</h5>
				<ul class="instagram-feed">
				    <li><a href="#"><img src="img/instagram/1.jpg" alt=""></a></li>
				    <li><a href="#"><img src="img/instagram/2.jpg" alt=""></a></li>
				    <li><a href="#"><img src="img/instagram/3.jpg" alt=""></a></li>
				    <li><a href="#"><img src="img/instagram/4.jpg" alt=""></a></li>
				    <li><a href="#"><img src="img/instagram/5.jpg" alt=""></a></li>
				    <li><a href="#"><img src="img/instagram/6.jpg" alt=""></a></li>
				</ul>
			</div>
			
		</div>
	</div>
</div>
<!-- FOOTER TOP SECTION END -->  

<!-- FOOTER BOTTOM SECTION START -->
<div class="footer-bottom-section footer-bottom-dark section">
	<div class="container">
		<div class="row">
            <!-- Copyright -->
			<div class="copyright text-left col-sm-6 col-xs-12">
				<p>Powered by <a href="https://hastech.company/">Gammer Studio&copy;</a></p>
			</div>
			<!-- Payment Method -->
			<div class="footer-menu text-right col-sm-6 col-xs-12">
				<a href="#">Help & Support</a>
			</div>
		</div>
	</div>
</div>
<!-- FOOTER BOTTOM SECTION END -->  
   

</div>
<!-- Body main wrapper end -->


<!-- Placed JS at the end of the document so the pages load faster -->

<!-- jQuery latest version -->
<script src="js/jquery-3.1.1.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugins js -->
<script src="js/plugins.js"></script>
<!-- Ajax Mail js -->
<script src="js/ajax-mail.js"></script>
<!-- Main js -->
<script src="js/main.js"></script>
<script src="js/wow.js" ></script>
<script src="js/wow.min.js" ></script>


</body>

</html>