@extends('Layout.client.main')
@section('content')

@if (session()->has('success'))
<div class="alert alert-success">{{ session()->get('success') }}</div>
@endif
@if (session()->has('error'))
<div class="alert alert-danger">{{ session()->get('error') }}</div>
@endif
  <!-- Page Banner Section Start -->
  <div class="page-banner-section section bg-image" data-bg="assets/images/bg/breadcrumb.png">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page-banner text-left">
                    <h2>Single Product</h2>
                    <ul class="page-breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>Single Product</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Page Banner Section End -->
@yield('product')
       <!-- Single Product Section Start -->
       <div class="single-product-section section pt-60 pt-lg-40 pt-md-30 pt-sm-20 pt-xs-25 pb-100 pb-lg-80 pb-md-70 pb-sm-30 pb-xs-20">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="shop-area">
                        <div class="row">
                            <div class="col-md-6 pr-35 pr-lg-15 pr-md-15 pr-sm-15 pr-xs-15">
                                <!-- Product Details Left -->
                                <div class="product-details-left">
                                    <div class="product-details-images">
                                        <div class="lg-image">
                                            <img src="{{asset('image/products/'.$product->image )}}" alt="">
                                            <a href="{{asset('image/products/'.$product->image )}}" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                        </div>
                                       
                                    </div>
                                   
                                </div>
                                <!--Product Details Left -->
                            </div>
                            <div class="col-md-6">
                                <!--Product Details Content Start-->
                                <div class="product-details-content">
                                    <!--Product Nav Start-->
                                    <div class="product-nav">
                                        <a href="#"><i class="fa fa-angle-left"></i></a>
                                        <a href="#"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                    <!--Product Nav End-->
                                    <h2>{{$product->name}}</h2>
                                    <div class="single-product-reviews">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star-o"></i>
                                        <a class="review-link" href="#">(1 customer review)</a>
                                    </div>
                                    <div class="single-product-price">
                                        <span class="price new-price">${{$product->price}}</span>
                                        <span class="regular-price">${{$product->discount}}</span>
                                        <div class="product-quantity">
                                            <span><h3>số lượng :{{$product->quantity}}</h3></span>
                                        </div>
     
                                    </div>
                                    <div class="product-description">
                                        <p>{{$product->description}}</p>
                                    </div>
                                    <div class="product-countdown-two" data-countdown2="2020/06/01"></div>
                                    <div class="single-product-quantity">
                                        <form class="add-quantity" action="{{route('add.cart',['id'=>$product->id])}}">
                                            <div class="product-quantity">
                                                <input value="1" name="quantity" type="number" min="1" max="{{$product->quantity}}" >
                                            </div>
                                          
                                            <div class="add-to-link">
                                                <button class="btn add_to_cart"><i class="fa fa-shopping-bag"></i>add to cart</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="wishlist-compare-btn">
                                        <a href="#" class="wishlist-btn">Add to Wishlist</a>
                                        <a href="#" class="add-compare">Oder</a>
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
    <!-- Single Product Section End -->

<!--Product Description Review Section Start-->
<div class="product-description-review-section section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-review-tab section">
                    <!--Review And Description Tab Menu Start-->
                    <ul class="nav dec-and-review-menu">
                        <li>
                            <a class="active" data-toggle="tab" href="#description">Description</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#reviews">Reviews (1)</a>
                        </li>
                    </ul>
                    <!--Review And Description Tab Menu End-->
                    <!--Review And Description Tab Content Start-->
                    <div class="tab-content product-review-content-tab" id="myTabContent-4">
                        <div class="tab-pane fade active show" id="description">
                            <div class="single-product-description">
                               <p>{{$product->detail}}</p>
                        </div>
                        <div class="tab-pane fade" id="reviews">
                            <div class="review-page-comment">
                                <h2>1 review for Sit voluptatem</h2>
                                <ul>
                                    <li>
                                        <div class="product-comment">
                                            <img src="assets/images/icons/author.png" alt="">
                                            <div class="product-comment-content">
                                                <div class="product-reviews">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <p class="meta">
                                                    <strong>admin</strong> - <span>November 22, 2018</span>
                                                    <div class="description">
                                                        <p>Good Product</p>
                                                    </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="review-form-wrapper">
                                    <div class="review-form">
                                        <span class="comment-reply-title">Add a review </span>
                                        <form action="#">
                                            <p class="comment-notes">
                                                <span id="email-notes">Your email address will not be published.</span>
                                                Required fields are marked
                                                <span class="required">*</span>
                                            </p>
                                            <div class="comment-form-rating">
                                                <label>Your rating</label>
                                                <div class="rating">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                            <div class="input-element">
                                                <div class="comment-form-comment">
                                                    <label>Comment</label>
                                                    <textarea name="message" cols="40" rows="8"></textarea>
                                                </div>
                                                <div class="review-comment-form-author">
                                                    <label>Name </label>
                                                    <input required="required" type="text">
                                                </div>
                                                <div class="review-comment-form-email">
                                                    <label>Email </label>
                                                    <input required="required" type="text">
                                                </div>
                                                <div class="comment-submit">
                                                    <button type="submit" class="form-button">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Review And Description Tab Content End-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--Product Description Review Section Start-->

<!--Product section start-->
<div class="product-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-60 pb-lg-40 pb-md-30 pb-sm-20 pb-xs-15">
    <div class="container">

        <div class="row">
            <div class="col">
                <div class="section-title text-center mb-50 mb-xs-20">
                    <h2>Related Products</h2>
                </div>
            </div>
        </div>
        <div class="row product-slider">
            <div class="col">
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
                                <li><a href="{{route('list.cart.user')}}"><i class="fa fa-cart-plus"></i></a></li>
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

            <div class="col">
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
                        <div class="product-countdown-two" data-countdown2="2020/06/01"></div>
                    </div>
                </div>
                <!--  Single Grid product End -->
            </div>

            <div class="col">
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

            <div class="col">
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

            <div class="col">
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

            <div class="col">
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

            <div class="col">
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

            <div class="col">
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

            <div class="col">
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

            <div class="col">
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

            <div class="col">
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

            <div class="col">
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

            <div class="col">
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
        </div>

    </div>
</div>
<script>




$(documnet).ready(function(){

 $(.)

})

</script>
@endsection

