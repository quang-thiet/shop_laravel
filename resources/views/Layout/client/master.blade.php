<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.hasthemes.com/nelson-preview/nelson/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Jul 2022 13:02:24 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="/template/client/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/template/client/assets/css/vendor/iconfont.min.css">
    <link rel="stylesheet" href="/template/client/assets/css/vendor/helper.css">
    <link rel="stylesheet" href="/template/client/assets/css/plugins/plugins.css">
    <link rel="stylesheet" href="/template/client/assets/css/style.css">
</head>

<body>

    <div id="main-wrapper">

        @include('Layout.client.header')

        @include('Layout.client.header-mobile')

        @include('Layout.client.mobile-menu')

        <!-- main-search start -->
        <div class="main-search-active">
            <div class="sidebar-search-icon">
                <button class="search-close"><i class="fa fa-times"></i></button>
            </div>
            <div class="sidebar-search-input">
                <form action="#">
                    <div class="form-search">
                        <input id="search" class="input-text" value="" placeholder="" type="search">
                        <button>
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
                <p class="form-description">Hit enter to search or ESC to close</p>
            </div>
        </div>
        <!-- main-search start -->

        @yield('content')
        
        @include('Layout.client.footer')

        <!-- Modal Area Strat -->
        <div class="modal fade quick-view-modal-container" id="quick-view-modal-container" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-xl-12 col-lg-12">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <!-- Product Details Left -->
                                    <div class="product-details-left">
                                        <div class="product-details-images">
                                            <div class="lg-image">
                                                <img src="/template/client/assets/images/product/large-product/l-product-1.jpg" alt="">
                                            </div>
                                            <div class="lg-image">
                                                <img src="/template/client/assets/images/product/large-product/l-product-2.jpg" alt="">
                                            </div>
                                            <div class="lg-image">
                                                <img src="/template/client/assets/images/product/large-product/l-product-3.jpg" alt="">
                                            </div>
                                            <div class="lg-image">
                                                <img src="/template/client/assets/images/product/large-product/l-product-4.jpg" alt="">
                                            </div>
                                            <div class="lg-image">
                                                <img src="/template/client/assets/images/product/large-product/l-product-5.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="product-details-thumbs">
                                            <div class="sm-image"><img src="/template/client/assets/images/product/small-product/s-product-1.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="/template/client/assets/images/product/small-product/s-product-2.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="/template/client/assets/images/product/small-product/s-product-3.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="/template/client/assets/images/product/small-product/s-product-4.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="/template/client/assets/images/product/small-product/s-product-5.jpg" alt="product image thumb"></div>
                                        </div>
                                    </div>
                                    <!--Product Details Left -->
                                </div>
                                <div class="col-lg-8 col-md-6">
                                    <!--Product Details Content Start-->
                                    <div class="product-details-content">
                                        <!--Product Nav Start-->
                                        <div class="product-nav">
                                            <a href="#"><i class="fa fa-angle-left"></i></a>
                                            <a href="#"><i class="fa fa-angle-right"></i></a>
                                        </div>
                                        <!--Product Nav End-->
                                        <h2>Aliquam lobortis est turpis mauris egestas eget</h2>
                                        <div class="single-product-reviews">
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star-o"></i>
                                            <a class="review-link" href="#">(1 customer review)</a>
                                        </div>
                                        <div class="single-product-price">
                                            <span class="price new-price">$66.00</span>
                                            <span class="regular-price">$77.00</span>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                        </div>
                                        <div class="single-product-quantity">
                                            <form class="add-quantity" action="#">
                                                <div class="product-quantity">
                                                    <input value="1" type="number">
                                                </div>
                                                <div class="add-to-link">
                                                    <button class="btn"><i class="ion-bag"></i>add to cart</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="wishlist-compare-btn">
                                            <a href="#" class="wishlist-btn">Add to Wishlist</a>
                                            <a href="#" class="add-compare">Compare</a>
                                        </div>
                                        <div class="product-meta">
                                            <span class="posted-in">
                                            Categories: 
                                            <a href="#">Accessories</a>,
                                            <a href="#">Electronics</a>
                                        </span>
                                        </div>
                                        <div class="single-product-sharing">
                                            <h3>Share this product</h3>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Product Details Content End-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Modal Area End -->
    </div>

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- All jquery file included here -->
     <script src="/template/client/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;v=3.22&amp;key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM"></script>
    <script src="/template/client/assets/js/vendor/popper.min.js"></script>
    <script src="/template/client/assets/js/vendor/bootstrap.min.js"></script>
    <script src="/template/client/assets/js/plugins/plugins.js"></script>
    <script src="/template/client/assets/js/main.js"></script>
    @livewireScripts

</body>


<!-- Mirrored from demo.hasthemes.com/nelson-preview/nelson/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Jul 2022 13:02:52 GMT -->
</html>