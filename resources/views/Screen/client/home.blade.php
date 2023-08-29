@extends('Layout\client\master')

@section('title', 'Home Page')

@section('content')

    <!--slider section start-->
    <div class="hero-section section position-relative">
        <div class="hero-slider section">

            <!--Hero Item start-->
            <div class="hero-item  bg-image" data-bg="template/client/assets/images/hero/hero-1.jpg">
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
            <div class="hero-item bg-image" data-bg="template/client/assets/images/hero/hero-2.jpg">
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
                                <img src="template/client/assets/images/banner/banner1.jpg" alt="">
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
                                <img src="template/client/assets/images/banner/banner2.jpg" alt="">
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

                        @foreach ($products as $item)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!--  Single Grid product Start -->
                            <div class="single-grid-product mb-40">
                                <div class="product-image">
                                    <div class="product-label">
                                        <span>-20%</span>
                                    </div>
                                    <a href="{{route('single.product',['slug'=>$item->slug,'id'=>$item->id])}}">
                                        <img src="{{asset(URL_PRODUCT.$item->image)}}" class="img-fluid"
                                            alt="">
                                    </a>

                                    <div class="product-action">
                                        <ul>
                                            <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                            <li><a href="#quick-view-modal-container_{{$item->id}}" data-toggle="modal"
                                                    title="Quick View"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{route('wishlist.store',['slug'=>$item->slug,'id'=>$item->id])}}"><i class="fa fa-heart-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"> <a href="single-product.html">{{$item->name}}</a></h3>
                                    <p class="product-price"><span class="discounted-price">${{$item->discount}}</span> <span
                                            class="main-price discounted">${{$item->price}}</span></p>
                                </div>
                            </div>
                            <!--  Single Grid product End -->
                        </div>
                        @endforeach
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
                    <div class="single-banner-item pt-100 pt-md-80 pt-sm-70 pt-xs-50 pb-120 pb-md-100 pb-sm-90 pb-xs-50 mb-30 bg-image"
                        data-bg="template/client/assets/images/banner/banner3.jpg">
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
                            <img src="template/client/assets/images/icons/feature-1.png" class="img-fluid"
                                alt="">
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
                            <img src="template/client/assets/images/icons/feature-2.png" class="img-fluid"
                                alt="">
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
                            <img src="template/client/assets/images/icons/feature-3.png" class="img-fluid"
                                alt="">
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
                        <div class="blog-media"><a href="blog-details.html" class="image"><img
                                    src="template/client/assets/images/blog/blog-1.jpg" alt=""></a></div>
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
                        <div class="blog-media"><a href="blog-details.html" class="image"><img
                                    src="template/client/assets/images/blog/blog-2.jpg" alt=""></a></div>
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
                        <div class="blog-media"><a href="blog-details.html" class="image"><img
                                    src="template/client/assets/images/blog/blog-3.jpg" alt=""></a></div>
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
                                                        <img src="template/client/assets/images/testimonial/testimonial-2.png"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="testimonial testimonial-style-2 gutter-item">
                                                        <div class="testimonial-inner">
                                                            <div class="testimonial-author">
                                                                <div class="author-thumb">
                                                                    <img src="template/client/assets/images/author/author-1.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="author-info">
                                                                    <h4>Zeniyea Henderson</h4>
                                                                    <span>CTO & CO Founder, Axels</span>
                                                                </div>
                                                            </div>
                                                            <div class="testimonial-description">
                                                                <blockquote class="testimonials-text">
                                                                    <p>“I am very much happy to buy product from nelson, the
                                                                        provide the best quality of product. Product quality
                                                                        is very satisfactory. Also the creative design of
                                                                        their Furniture make me happy.”</p>
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
                                                        <img src="template/client/assets/images/testimonial/testimonial-1.png"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="testimonial testimonial-style-2 gutter-item">
                                                        <div class="testimonial-inner">
                                                            <div class="testimonial-author">
                                                                <div class="author-thumb">
                                                                    <img src="template/client/assets/images/author/author-1.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="author-info">
                                                                    <h4>Zeniyea Henderson</h4>
                                                                    <span>CTO & CO Founder, Axels</span>
                                                                </div>
                                                            </div>
                                                            <div class="testimonial-description">
                                                                <blockquote class="testimonials-text">
                                                                    <p>“I am very much happy to buy product from nelson, the
                                                                        provide the best quality of product. Product quality
                                                                        is very satisfactory. Also the creative design of
                                                                        their Furniture make me happy.”</p>
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
                                <img src="template/client/assets/images/brands/brand-1.png" alt="">
                            </div>
                        </div>
                        <!-- Single Brand End -->
                    </div>
                    <div class="col">
                        <!-- Single Brand Start -->
                        <div class="single-brand">
                            <div class="brand-image">
                                <img src="template/client/assets/images/brands/brand-2.png" alt="">
                            </div>
                        </div>
                        <!-- Single Brand End -->
                    </div>
                    <div class="col">
                        <!-- Single Brand Start -->
                        <div class="single-brand">
                            <div class="brand-image">
                                <img src="template/client/assets/images/brands/brand-3.png" alt="">
                            </div>
                        </div>
                        <!-- Single Brand End -->
                    </div>
                    <div class="col">
                        <!-- Single Brand Start -->
                        <div class="single-brand">
                            <div class="brand-image">
                                <img src="template/client/assets/images/brands/brand-4.png" alt="">
                            </div>
                        </div>
                        <!-- Single Brand End -->
                    </div>
                    <div class="col">
                        <!-- Single Brand Start -->
                        <div class="single-brand">
                            <div class="brand-image">
                                <img src="template/client/assets/images/brands/brand-5.png" alt="">
                            </div>
                        </div>
                        <!-- Single Brand End -->
                    </div>
                    <div class="col">
                        <!-- Single Brand Start -->
                        <div class="single-brand">
                            <div class="brand-image">
                                <img src="template/client/assets/images/brands/brand-1.png" alt="">
                            </div>
                        </div>
                        <!-- Single Brand End -->
                    </div>
                    <div class="col">
                        <!-- Single Brand Start -->
                        <div class="single-brand">
                            <div class="brand-image">
                                <img src="template/client/assets/images/brands/brand-2.png" alt="">
                            </div>
                        </div>
                        <!-- Single Brand End -->
                    </div>
                    <div class="col">
                        <!-- Single Brand Start -->
                        <div class="single-brand">
                            <div class="brand-image">
                                <img src="template/client/assets/images/brands/brand-3.png" alt="">
                            </div>
                        </div>
                        <!-- Single Brand End -->
                    </div>
                    <div class="col">
                        <!-- Single Brand Start -->
                        <div class="single-brand">
                            <div class="brand-image">
                                <img src="template/client/assets/images/brands/brand-4.png" alt="">
                            </div>
                        </div>
                        <!-- Single Brand End -->
                    </div>
                    <div class="col">
                        <!-- Single Brand Start -->
                        <div class="single-brand">
                            <div class="brand-image">
                                <img src="template/client/assets/images/brands/brand-5.png" alt="">
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
    <div
        class="newsletter-section section bg-gray-two pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-95 pb-lg-75 pb-md-65 pb-sm-60 pb-xs-50">
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
    @foreach ($products as $item)
       <!-- Modal Area Strat -->
       <div class="modal fade quick-view-modal-container" id="quick-view-modal-container_{{$item->id}}" tabindex="-1" role="dialog" aria-hidden="true">
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
                                            <img src="{{asset(URL_PRODUCT.$item->image)}}" alt="product image">
                                        </div>
                                   
                                    </div>
                                    <div class="product-details-thumbs">
                                        <div class="sm-image"><img src="{{asset(URL_PRODUCT.$item->image)}}" alt="product image thumb"></div>
                                        
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
                                    <h2>A lobortis est turpis mauris egestas eget</h2>
                                    <div class="single-product-reviews">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star-o"></i>
                                        <a class="review-link" href="#">(1 customer review)</a>
                                    </div>
                                    <div class="single-product-price">
                                        <span class="price new-price">${{$item->discount}}</span>
                                        <span class="regular-price">${{$item->price}}</span>
                                    </div>
                                    <div class="product-description">
                                        <p>{{$item->detail}}</p>
                                    </div>
                                    <div class="single-product-quantity">
                                        <form class="add-quantity" action="{{route('add.cart',['id'=>$item->id])}}">
                                            
                                            <div class="product-quantity">
                                                <input value="1" type="number" name="quantity" min="1">
                                            </div>
                                            <div class="add-to-link">
                                                <button class="btn"><i class="ion-bag"></i>add to cart</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="wishlist-compare-btn">
                                        <a href="{{route('wishlist.store',['slug'=>$item->slug,'id'=>$item->id])}}" class="wishlist-btn">Add to Wishlist</a>
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
    @endforeach
@endsection
