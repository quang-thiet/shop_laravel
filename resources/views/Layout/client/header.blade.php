<!--Header section start-->
<header class="header header-transparent header-sticky  d-lg-block d-none">
    <div class="header-deafult-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-2 col-md-4 col-12">
                    <!--Logo Area Start-->
                    <div class="logo-area">
                        <a href="index.html"><img src="assets/images/logo.png" alt=""></a>
                    </div>
                    <!--Logo Area End-->
                </div>
                <div class="col-xl-6 col-lg-6 col-md-4 d-none d-lg-block col-12">
                    <!--Header Menu Area Start-->
                    <div class="header-menu-area text-center">
                        <nav class="main-menu">
                            <ul>
                                <li><a href="index.html">Home</a>
                                    <ul class="sub-menu">
                                       @foreach ($categories as $item)
                                           
                                            <li><a href="index.html">Home One</a></li>
                                            
                                       @endforeach
                                    </ul>
                                </li>
                                <li><a href="shop.html">Shop</a>
                                    <ul class="mega-menu four-column left-0">
                                        <li><a href="#" class="item-link">Pages</a>
                                            <ul>
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="compare.html">Compare</a></li>
                                                <li><a href="cart.html">Shopping Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="login-register.html">Login Register</a></li>
                                                <li><a href="faq.html">Frequently Questions</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#" class="item-link">Shop Layout</a>
                                            <ul>
                                                <li><a href="shop.html">Shop</a></li>
                                                <li><a href="shop-three-column.html">Shop Three Column</a></li>
                                                <li><a href="shop-four-column.html">Shop Four Column</a></li>
                                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                <li><a href="shop-list-nosidebar.html">Shop List No Sidebar</a></li>
                                                <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a>
                                                </li>
                                                <li><a href="shop-list-right-sidebar.html">Shop List Right
                                                        Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#" class="item-link">Product Details</a>
                                            <ul>
                                                <li><a href="single-product.html">Single Product</a></li>
                                                <li><a href="single-product-variable.html">Variable Product</a></li>
                                                <li><a href="single-product-affiliate.html">Affiliate Product</a>
                                                </li>
                                                <li><a href="single-product-group.html">Group Product</a></li>
                                                <li><a href="single-product-tabstyle-2.html">Product Left Tab</a>
                                                </li>
                                                <li><a href="single-product-tabstyle-3.html">Product Right Tab</a>
                                                </li>
                                                <li><a href="single-product-gallery-left.html">Product Gallery
                                                        Left</a></li>
                                                <li><a href="single-product-gallery-right.html">Product Gallery
                                                        Right</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#" class="item-link">Product Details</a>
                                            <ul>
                                                <li><a href="single-product-sticky-left.html">Product Sticky
                                                        Left</a></li>
                                                <li><a href="single-product-sticky-right.html">Product Sticky
                                                        Right</a></li>
                                                <li><a href="single-product-slider-box.html">Product Box Slider</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="shop.html">New Arrivals</a></li>
                                <li><a href="blog.html">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">Blog Three Column</a></li>
                                        <li><a href="blog-two-column.html">Blog Two Column</a></li>
                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                        <li><a href="blog-details-gallery.html">Blog Details Gallery</a></li>
                                        <li><a href="blog-details-audio.html">Blog Details Audio</a></li>
                                        <li><a href="blog-details-video.html">Blog Details Video</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--Header Menu Area End-->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-5 col-12">
                    <!--Header Search And Mini Cart Area Start-->
                    <div class="header-search-cart-area">
                        <ul>
                            <li><a class="header-search-toggle" href="#"><i class="flaticon-magnifying-glass"></i></a></li>
                            <li class="currency-menu"><a href="#"><i class="flaticon-user"></i></a>
                                <!--Crunccy dropdown-->
                                <ul class="currency-dropdown">
                                    <!--Language Currency Start-->
                                    <li><a href="#">language</a>
                                        <ul>
                                            <li class="active"><a href="#"><img src="assets/images/icons/en-gb.png" alt="">English</a></li>
                                            <li><a href="#"><img src="assets/images/icons/de-de.png" alt="">French</a></li>
                                        </ul>
                                    </li>
                                    <!--Language Currency End-->
                                    <!--USD Currency Start-->
                                    <li><a href="#">Currency</a>
                                        <ul>
                                            <li><a href="#"> € Euro</a></li>
                                            <li><a href="#"> $ US Dollar</a></li>
                                        </ul>
                                    </li>
                                    <!--USD Currency End-->
                                    <!--Account Currency Start-->
                                    <li><a href="my-account.html">My account</a>
                                        <ul>
                                            <li><a href="login-register.html">Login</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="my-account.html">My account</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                        </ul>
                                    </li>
                                    <!--Account Currency End-->
                                </ul>
                                <!--Crunccy dropdown-->
                            </li>
                            <li class="mini-cart"><a href="#"><i class="flaticon-shopping-cart"></i> <span class="mini-cart-total">$300.00(2)</span></a>
                                <!--Mini Cart Dropdown Start-->
                                @if (empty($cats))
                                <div class="header-cart">
                                    @foreach ($carts as $item)
                                    <ul class="cart-items">
                                        <li class="single-cart-item">
                                            <div class="cart-img">
                                                <a href="cart.html"><img src="{{asset(URL_PRODUCT.$item['image'])}}" alt=""></a>
                                            </div>
                                            <div class="cart-content">
                                                <h5 class="product-name"><a href="single-product.html">{{$item['name']}}</a></h5>
                                                <span class="product-quantity">{{$item['quantity']}} ×</span>
                                                <span class="product-price">${{$item['price']}}</span>
                                            </div>
                                            <div class="cart-item-remove">
                                                <a title="Remove" href="{{route('delete.cart',['id'=>$item['id']])}}"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </li>
                                    </ul>  
                                    @endforeach
                                    
                                    <div class="cart-total">
                                        @php
                                           $total = total_cart($carts , $surcharge );
                                        @endphp
                                        <h5>Subtotal :<span class="float-right">{{$total['sub_total']}}</span></h5>

                                        @foreach ($surcharge as $item)
                                        <h5>{{$item->name}} :<span class="float-right">{{$item->value}}</span></h5>
                                        @endforeach

                                        <h5>Total : <span class="float-right">${{$total['grand_total']}}</span></h5>
                                    </div>
                                    <div class="cart-btn">
                                        <a href="{{route('list.cart.user')}}">View Cart</a>
                                        @auth
                                        <a href="{{route('check.out')}}">checkout</a>
                                        @endauth
                                    </div>
                                </div>
                                @endif
                                <!--Mini Cart Dropdown End-->
                            </li>
                        </ul>
                    </div>
                    <!--Header Search And Mini Cart Area End-->
                </div>
            </div>
        </div>
    </div>
</header>
<!--Header section end-->