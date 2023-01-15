<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
{{--    <link rel="stylesheet" href="{{asset('/')}}website/css/bootstrap.min.css"/>--}}

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('/')}}website/css/font-awesome.min.css"/>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/css/owl.carousel.css"/>
    <link rel="stylesheet" href="{{asset('/')}}website/css/responsive.css"/>
    <link rel="stylesheet" href="{{asset('/')}}website/css/style.css"/>

    <link rel="stylesheet" href="{{asset('/')}}website/css/bootstrap.css"/>
    <link rel="stylesheet" href="{{asset('/')}}website/css/all.css"/>
{{--    <link rel="stylesheet" href="{{asset('/')}}website/css/style.css"/>--}}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<nav class="navbar navbar-expand-md bg-light navbar-light shadow">
    <div class="container">
        <a href="" class="navbar-brand">iCommerce</a>
        <ul class="navbar-nav">
            <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
            <li><a href="{{route('about')}}" class="nav-link">About</a></li>
{{--            <li class="dropdown">--}}
{{--                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product Category</a>--}}
{{--                <ul class="dropdown-menu">--}}
{{--                    <li><a href="" class="dropdown-item">Fashion Item</a></li>--}}
{{--                    <li><a href="" class="dropdown-item">Sports Item</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li><a href="{{route('product.all')}}" class="nav-link">All Products</a></li>--}}
            <li><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
{{--            <li><a href="" class="nav-link">Login/Registration</a></li>--}}
        </ul>
    </div>
</nav>

{{--<div class="mainmenu-area">--}}
{{--    <div class="container">--}}
{{--        <a href="" class="navbar-brand">iCommerce</a>--}}
{{--        <div class="row">--}}
{{--            <div class="navbar-collapse collapse">--}}
{{--                <ul class="nav navbar-nav">--}}
{{--                    <li class="active"><a href="{{route('home')}}">Home</a></li>--}}
{{--                    <li><a href="shop.html">All Product</a></li>--}}
{{--                    <li class="dropdown">--}}
{{--                        <a href="single-product.html" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product Category</a>--}}
{{--                        <ul class="dropdown-menu">--}}
{{--                            <li><a href="" class="dropdown-item">Sports</a></li>--}}
{{--                            <li><a href="" class="dropdown-item">Fashion</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li><a href="{{route('contact')}}">Contact</a></li>--}}
{{--                    <li><a href="#">About Us</a></li>--}}
{{--                    <li><a href="#">Login/Registration</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div> <!-- End mainmenu area -->--}}

@yield('body')

<div class="footer-top-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="footer-about-us">
                    <h2>u<span>Stora</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                    <div class="footer-social">
                        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-menu">
                    <h2 class="footer-wid-title">User Navigation </h2>
                    <ul>
                        <li><a href="#">My account</a></li>
                        <li><a href="#">Order history</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">Vendor contact</a></li>
                        <li><a href="#">Front page</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-menu">
                    <h2 class="footer-wid-title">Categories</h2>
                    <ul>
                        <li><a href="#">Mobile Phone</a></li>
                        <li><a href="#">Home accesseries</a></li>
                        <li><a href="#">LED TV</a></li>
                        <li><a href="#">Computer</a></li>
                        <li><a href="#">Gadets</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-newsletter">
                    <h2 class="footer-wid-title">Newsletter</h2>
                    <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                    <div class="newsletter-form">
                        <form action="#">
                            <input type="email" placeholder="Type your email">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End footer top area -->

<div class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="copyright">
                    <p>&copy; 2015 uCommerce. All Rights Reserved. <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="footer-card-icon">
                    <i class="fa fa-cc-discover"></i>
                    <i class="fa fa-cc-mastercard"></i>
                    <i class="fa fa-cc-paypal"></i>
                    <i class="fa fa-cc-visa"></i>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End footer bottom area -->

<!-- Latest jQuery form server -->
<script src="https://code.jquery.com/jquery.min.js"></script>

<!-- Bootstrap JS form CDN -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- jQuery sticky menu -->
<script src="{{asset('/')}}website/js/owl.carousel.min.js"></script>
<script src="{{asset('/')}}website/js/jquery.sticky.js"></script>

<!-- jQuery easing -->
<script src="{{asset('/')}}website/js/jquery.easing.1.3.min.js"></script>

<!-- Main Script -->
<script src="{{asset('/')}}website/js/main.js"></script>

<!-- Slider -->
<script type="text/javascript" src="{{asset('/')}}website/js/bxslider.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}website/js/script.slider.js"></script>

<script src="{{asset('/')}}website/js/jquery-3.6.1.js"></script>
<script src="{{asset('/')}}website/js/bootstrap.bundle.js"></script>
</body>
</html>
