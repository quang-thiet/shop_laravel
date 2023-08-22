@extends('Layout\client\master')

@section('title', 'Home Page')

@section('content')
<!--slider section start-->
<div class="hero-section section position-relative">
    <div class="hero-slider section">

        <!--Hero Item start-->
        <div class="hero-item  bg-image" data-bg="assets/images/hero/hero-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <!--Hero Content start-->
                        <div class="hero-content-2 center">

                            <h2>Creative Design <br> Modern & Exclusive Furniture</h2>
                                <a href="shop.html" class="btn">SHOP NOW</a>

                        </div>
                        <!--Hero Content end-->

                    </div>
                </div>
            </div>
        </div>
        <!--Hero Item end-->

        <!--Hero Item start-->
        <div class="hero-item bg-image" data-bg="assets/images/hero/hero-2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <!--Hero Content start-->
                        <div class="hero-content-2 center">

                            <h2>Creative Design <br> Modern & Exclusive Furniture</h2>
                                <a href="shop.html" class="btn">SHOP NOW</a>

                        </div>
                        <!--Hero Content end-->

                    </div>
                </div>
            </div>
        </div>
        <!--Hero Item end-->

    </div>
</div>
<!--slider section end-->

<!-- Banner section start -->
<div class="banner-section section pt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <!-- Single Banner Start -->
                <div class="single-banner-item mb-30">
                    <div class="banner-image">
                        <a href="shop.html">
                            <img src="assets/images/banner/banner1.jpg" alt="">
                        </a>
                    </div>
                    <div class="banner-content">
                        <h3 class="title">OFFICE <br> FURNITURE</h3>
                            <a href="shop.html">SHOP NOW</a>
                    </div>
                </div>
                <!-- Single Banner End -->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <!-- Single Banner Start -->
                <div class="single-banner-item mb-30">
                    <div class="banner-image">
                        <a href="shop-left-sidebar.html">
                            <img src="assets/images/banner/banner2.jpg" alt="">
                        </a>
                    </div>
                    <div class="banner-content tr-right">
                        <h3 class="title">HOME <br> FURNITURE</h3>
                            <a href="shop.html">SHOP NOW</a>
                    </div>
                </div>
                <!-- Single Banner End -->
            </div>
        </div>
    </div>
</div>
<!-- Banner section End -->

<!--Product section start-->
<div class="product-section section pt-70 pt-lg-50 pt-md-40 pt-sm-30 pt-xs-20 pb-55 pb-lg-35 pb-md-25 pb-sm-15 pb-xs-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title text-center mb-15">
                    <h2>Popular Furniture</h2>
                </div>
                <div class="product-tab mb-50 mb-sm-30 mb-xs-20">
                    <ul class="nav">
                        <li><a class="active show" data-toggle="tab" href="#home">HOME</a></li>
                        <li><a data-toggle="tab" href="#office">OFFICE</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div id="home" class="tab-pane fade active show">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <div class="product-label">
                                    <span>-20%</span>
                                </div>
                                <a href="single-product.html">
                                    <img src="assets/images/product/product-1.jpg" class="img-fluid" alt="">
                                    <img src="assets/images/product/product-2.jpg" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="single-product.html">Stylish Design Chair</a></h3>
                                <p class="product-price"><span class="discounted-price">$190.00</span> <span class="main-price discounted">$230.00</span></p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <div class="product-label">
                                    <span>-20%</span>
                                </div>
                                <a href="single-product.html">
                                    <img src="assets/images/product/product-2.jpg" class="img-fluid" alt="">
                                    <img src="assets/images/product/product-3.jpg" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="single-product.html">Miro Dining Table</a></h3>
                                <p class="product-price"><span class="discounted-price">$113.00</span> <span class="main-price discounted">$180.00</span></p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <div class="product-label">
                                    <span>-20%</span>
                                </div>
                                <a href="single-product.html">
                                    <img src="assets/images/product/product-4.jpg" class="img-fluid" alt="">
                                    <img src="assets/images/product/product-1.jpg" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="single-product.html">Janus Table Lamp</a></h3>
                                <p class="product-price"><span class="discounted-price">$86.00</span> <span class="main-price discounted">$150.00</span></p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <a href="single-product.html">
                                    <img src="assets/images/product/product-3.jpg" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="single-product.html">Discus Floor and Table</a></h3>
                                <p class="product-price"><span class="discounted-price">$290.00</span> <span class="main-price discounted">$330.00</span></p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <div class="product-label">
                                    <span class="sale">Sale</span>
                                </div>
                                <a href="single-product.html">
                                    <img src="assets/images/product/product-5.jpg" class="img-fluid" alt="">
                                    <img src="assets/images/product/product-2.jpg" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="single-product.html">Sled Mini Sideboard</a></h3>
                                <p class="product-price"><span class="discounted-price">$90.00</span></p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <div class="product-label">
                                    <span class="sale">New</span>
                                </div>
                                <a href="single-product.html">
                                    <img src="assets/images/product/product-6.jpg" class="img-fluid" alt="">
                                    <img src="assets/images/product/product-4.jpg" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="single-product.html">Mega 2 Seater Sofa</a></h3>
                                <p class="product-price"><span class="discounted-price">$390.00</span> <span class="main-price discounted">$470.00</span></p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <div class="product-label">
                                    <span>-20%</span>
                                </div>
                                <a href="single-product.html">
                                    <img src="assets/images/product/product-7.jpg" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="single-product.html">Sentei Pruning Shears</a></h3>
                                <p class="product-price"><span class="discounted-price">$65.00</span> </p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <div class="product-label">
                                    <span>-29%</span>
                                </div>
                                <a href="single-product.html">
                                    <img src="assets/images/product/product-8.jpg" class="img-fluid" alt="">
                                    <img src="assets/images/product/product-2.jpg" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="single-product.html">Affordances Side Table</a></h3>
                                <p class="product-price"><span class="discounted-price">$170.00</span> <span class="main-price discounted">$280.00</span></p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>
                </div>
            </div>
            <div id="office" class="tab-pane">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <a href="single-product.html">
                                    <img src="assets/images/product/product-9.jpg" class="img-fluid" alt="">
                                    <img src="assets/images/product/product-10.jpg" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="single-product.html">Normal Dining chair</a></h3>
                                <p class="product-price"><span class="discounted-price">$130.00</span> </p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <div class="product-label">
                                    <span class="sale">Sale</span>
                                </div>
                                <a href="single-product.html">
                                    <img src="assets/images/product/product-11.jpg" class="img-fluid" alt="">
                                    <img src="assets/images/product/product-12.jpg" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="single-product.html">Tripod lampshade</a></h3>
                                <p class="product-price"><span class="discounted-price">$210.00</span> <span class="main-price discounted">$240.00</span></p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <a href="single-product.html">
                                    <img src="assets/images/product/product-10.jpg" class="img-fluid" alt="">
                                    <img src="assets/images/product/product-13.jpg" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="single-product.html">Hot Design Table</a></h3>
                                <p class="product-price"><span class="discounted-price">$250.00</span> <span class="main-price discounted">$280.00</span></p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <a href="single-product.html">
                                    <img src="assets/images/product/product-14.jpg" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="single-product.html">Outdoor Lock Chair</a></h3>
                                <p class="product-price"><span class="discounted-price">$180.00</span></p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <div class="product-label">
                                    <span class="sale">New</span>
                                </div>
                                <a href="single-product.html">
                                    <img src="assets/images/product/product-14.jpg" class="img-fluid" alt="">
                                    <img src="assets/images/product/product-13.jpg" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="single-product.html">Classic Chair</a></h3>
                                <p class="product-price"><span class="discounted-price">$60.00</span> </p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <a href="single-product.html">
                                    <img src="assets/images/product/product-15.jpg" class="img-fluid" alt="">
                                    <img src="assets/images/product/product-16.jpg" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="single-product.html">Classic Chair Wodden</a></h3>
                                <p class="product-price"><span class="discounted-price">$183.00</span> <span class="main-price discounted">$200.00</span></p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <a href="single-product.html">
                                    <img src="assets/images/product/product-10.jpg" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="single-product.html">Classic Table Wodden</a></h3>
                                <p class="product-price"><span class="discounted-price">$290.00</span></p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <a href="single-product.html">
                                    <img src="assets/images/product/product-16.jpg" class="img-fluid" alt="">
                                    <img src="assets/images/product/product-2.jpg" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="single-product.html">Miniature Almari</a></h3>
                                <p class="product-price"><span class="discounted-price">$230.00</span> <span class="main-price discounted">$250.00</span></p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
<!--Product section end-->


<!-- Banner section start -->
<div class="banner-section section pb-40 pb-sm-30 pb-xs-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Single Banner Start -->
                <div class="single-banner-item pt-100 pt-md-80 pt-sm-70 pt-xs-50 pb-120 pb-md-100 pb-sm-90 pb-xs-50 mb-30 bg-image" data-bg="assets/images/banner/banner3.jpg">
                    <div class="sp-banner-content">
                        <span class="normat-text">DISCOUNTED UP TO 50%</span>
                        <h2 class="title">Zigzag King Chair</h2>
                        <span class="normat-text">LIMITED TIME OFEER</span>
                        <div class="countdown-area">
                            <div class="product-countdown" data-countdown="2019/06/01"></div>
                        </div>
                        <a href="shop.html">SHOP NOW</a>
                    </div>
                </div>
                <!-- Single Banner End -->
            </div>
        </div>
    </div>
</div>
<!-- Banner section End -->




<!--Features section start-->
<div class="features-section section pt-30 pt-lg-15 pt-md-0 pt-sm-0 pt-xs-15">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6">
                <!-- Single Feature Start -->
                <div class="single-feature mb-30">
                    <div class="feature-image">
                        <img src="assets/images/icons/feature-1.png" class="img-fluid" alt="">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">Free home delivery</h4>
                        <p class="short-desc">Provide free home delivery for the all product over $100 </p>
                    </div>
                </div>
                <!-- Single Feature End -->
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Single Feature Start -->
                <div class="single-feature mb-30">
                    <div class="feature-image">
                        <img src="assets/images/icons/feature-2.png" class="img-fluid" alt="">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">Quality Products</h4>
                        <p class="short-desc">We ensure the product quality that is our main goal </p>
                    </div>
                </div>
                <!-- Single Feature End -->
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Single Feature Start -->
                <div class="single-feature mb-30">
                    <div class="feature-image">
                        <img src="assets/images/icons/feature-3.png" class="img-fluid" alt="">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">3 Days Return</h4>
                        <p class="short-desc">Provide free home delivery for the all product over $100 </p>
                    </div>
                </div>
                <!-- Single Feature End -->
            </div>

        </div>
    </div>
</div>
<!--Features section end-->



<!--Blog section start-->
<div class="blog-section section pt-65 pt-lg-45 pt-md-35 pt-sm-20 pt-xs-15 pb-65 pb-lg-45 pb-md-35 pb-sm-25 pb-xs-15">
    <div class="container">

        <div class="row mb-50 mb-xs-20">
            <div class="col">
                <div class="section-title text-center">
                    <h2>Latest Post From Blog</h2>
                    <span>OUR BLOG POST</span>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="blog col-lg-4 col-md-6">
                <div class="blog-inner mb-30">
                    <div class="blog-media"><a href="blog-details.html" class="image"><img src="assets/images/blog/blog-1.jpg" alt=""></a></div>
                    <div class="content">
                        <ul class="meta">
                            <li>08 April, 2019</li>
                            <li><a href="#">25 Likes</a></li>
                            <li><a href="#">28 Views</a></li>
                        </ul>
                        <h3 class="title"><a href="blog-details.html">Latest Fashion Trend for Women
                                new trens, new fashion</a></h3>
                        <a class="read-more" href="blog-details.html">Read more</a>
                    </div>
                </div>
            </div>

            <div class="blog col-lg-4 col-md-6">
                <div class="blog-inner mb-30">
                    <div class="blog-media"><a href="blog-details.html" class="image"><img src="assets/images/blog/blog-2.jpg" alt=""></a></div>
                    <div class="content">
                        <ul class="meta">
                            <li>06 April, 2019</li>
                            <li><a href="#">42 Likes</a></li>
                            <li><a href="#">18 Views</a></li>
                        </ul>
                        <h3 class="title"><a href="blog-details.html">Latest Fashion Trend for Women
                                new trens, new fashion</a></h3>
                        <a class="read-more" href="blog-details.html">Read more</a>
                    </div>
                </div>
            </div>

            <div class="blog col-lg-4 col-md-6">
                <div class="blog-inner mb-30">
                    <div class="blog-media"><a href="blog-details.html" class="image"><img src="assets/images/blog/blog-3.jpg" alt=""></a></div>
                    <div class="content">
                        <ul class="meta">
                            <li>02 April, 2019</li>
                            <li><a href="#">20 Likes</a></li>
                            <li><a href="#">78 Views</a></li>
                        </ul>
                        <h3 class="title"><a href="blog-details.html">Latest Fashion Trend for Women
                                new trens, new fashion</a></h3>
                        <a class="read-more" href="blog-details.html">Read more</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<!--Blog section end-->


<!-- Testimonial Area Start -->
<div class="testimonial-section section pb-80 pb-lg-60 pb-md-50 pb-sm-40 pb-xs-40">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="testimonial-wrap bg-gray-two pt-45 pb-30">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="testimonial-wrapper section-space--inner">
                                <div class="testimonial-slider-content">
                                    <div class="item">
                                        <div class="row align-items-center">
                                            <div class="col-md-5">
                                                <div class="testimonial-image">
                                                    <img src="assets/images/testimonial/testimonial-2.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="testimonial testimonial-style-2 gutter-item">
                                                    <div class="testimonial-inner">
                                                        <div class="testimonial-author">
                                                            <div class="author-thumb">
                                                                <img src="assets/images/author/author-1.png" alt="">
                                                            </div>
                                                            <div class="author-info">
                                                                <h4>Zeniyea Henderson</h4>
                                                                <span>CTO & CO Founder, Axels</span>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-description">
                                                            <blockquote class="testimonials-text">
                                                                <p>“I am very much happy to buy product from nelson, the provide the best quality of product. Product quality is very satisfactory. Also the creative design of their Furniture make me happy.”</p>
                                                            </blockquote>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row align-items-center">
                                            <div class="col-md-5">
                                                <div class="testimonial-image">
                                                    <img src="assets/images/testimonial/testimonial-1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="testimonial testimonial-style-2 gutter-item">
                                                    <div class="testimonial-inner">
                                                        <div class="testimonial-author">
                                                            <div class="author-thumb">
                                                                <img src="assets/images/author/author-1.png" alt="">
                                                            </div>
                                                            <div class="author-info">
                                                                <h4>Zeniyea Henderson</h4>
                                                                <span>CTO & CO Founder, Axels</span>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-description">
                                                            <blockquote class="testimonials-text">
                                                                <p>“I am very much happy to buy product from nelson, the provide the best quality of product. Product quality is very satisfactory. Also the creative design of their Furniture make me happy.”</p>
                                                            </blockquote>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Area End -->



<!--Brand section start-->
<div class="brand-section section pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
    <div class="container">
        <div class="row">
            <div class="brand-slider section">
                <div class="col">
                    <!-- Single Brand Start -->
                    <div class="single-brand">
                        <div class="brand-image">
                            <img src="assets/images/brands/brand-1.png" alt="">
                        </div>
                    </div>
                    <!-- Single Brand End -->
                </div>
                <div class="col">
                    <!-- Single Brand Start -->
                    <div class="single-brand">
                        <div class="brand-image">
                            <img src="assets/images/brands/brand-2.png" alt="">
                        </div>
                    </div>
                    <!-- Single Brand End -->
                </div>
                <div class="col">
                    <!-- Single Brand Start -->
                    <div class="single-brand">
                        <div class="brand-image">
                            <img src="assets/images/brands/brand-3.png" alt="">
                        </div>
                    </div>
                    <!-- Single Brand End -->
                </div>
                <div class="col">
                    <!-- Single Brand Start -->
                    <div class="single-brand">
                        <div class="brand-image">
                            <img src="assets/images/brands/brand-4.png" alt="">
                        </div>
                    </div>
                    <!-- Single Brand End -->
                </div>
                <div class="col">
                    <!-- Single Brand Start -->
                    <div class="single-brand">
                        <div class="brand-image">
                            <img src="assets/images/brands/brand-5.png" alt="">
                        </div>
                    </div>
                    <!-- Single Brand End -->
                </div>
                <div class="col">
                    <!-- Single Brand Start -->
                    <div class="single-brand">
                        <div class="brand-image">
                            <img src="assets/images/brands/brand-1.png" alt="">
                        </div>
                    </div>
                    <!-- Single Brand End -->
                </div>
                <div class="col">
                    <!-- Single Brand Start -->
                    <div class="single-brand">
                        <div class="brand-image">
                            <img src="assets/images/brands/brand-2.png" alt="">
                        </div>
                    </div>
                    <!-- Single Brand End -->
                </div>
                <div class="col">
                    <!-- Single Brand Start -->
                    <div class="single-brand">
                        <div class="brand-image">
                            <img src="assets/images/brands/brand-3.png" alt="">
                        </div>
                    </div>
                    <!-- Single Brand End -->
                </div>
                <div class="col">
                    <!-- Single Brand Start -->
                    <div class="single-brand">
                        <div class="brand-image">
                            <img src="assets/images/brands/brand-4.png" alt="">
                        </div>
                    </div>
                    <!-- Single Brand End -->
                </div>
                <div class="col">
                    <!-- Single Brand Start -->
                    <div class="single-brand">
                        <div class="brand-image">
                            <img src="assets/images/brands/brand-5.png" alt="">
                        </div>
                    </div>
                    <!-- Single Brand End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--Brand section end-->

<!-- Newsletter Section Start -->
<div class="newsletter-section section bg-gray-two pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-95 pb-lg-75 pb-md-65 pb-sm-60 pb-xs-50">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="newsletter-content">
                    <h2>Subscribe Our Newsletter</h2>
                    <p>Subscribe Today for free and save 10% on your first purchase.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="newsletter-wrap">
                    <div class="newsletter-form">
                        <form id="mc-form" class="mc-form">
                            <input type="email" placeholder="Enter Your Email Address Here..." required>
                            <button type="submit" value="submit">SUBSCRIBE!</button>
                        </form>

                    </div>
                    <!-- mailchimp-alerts Start -->
                    <div class="mailchimp-alerts">
                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                    </div>
                    <!-- mailchimp-alerts end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter Section End -->
@endsection