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
                        <h2>Checkout</h2>
                        <ul class="page-breadcrumb">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('check.out')}}"></a>Checkout</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->
    <!--Checkout section start-->
    <div class="checkout-section section pt-90 pt-lg-70 pt-md-60 pt-sm-50 pt-xs-40  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Checkout Form Start-->
                    <form action="{{route('process.check.out')}}" class="checkout-form" method="POST" >
                        @csrf
                        <div class="row row-40">

                            <div class="col-lg-7">

                                <!-- Billing Address -->
                                <div id="billing-form" class="mb-10">
                                    <h4 class="checkout-title">Billing Address</h4>
                                    @if (session()->has('error'))
                                    <div class="alert alert-danger text-center">{{ session()->get('error') }}</div>
                                    @endif

                                    <div class="row">

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>First Name*</label>
                                            <input type="text" 
                                            name="first_name"
                                            value="{{$user->first_name}}"
                                            placeholder="First Name">
                                        </div>
                                        @error('first_name')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Last Name*</label>
                                            <input type="text"
                                            name = "last_name" 
                                            value="{{$user->last_name}}"
                                            placeholder="Last Name">
                                            @error('last_name')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Email Address*</label>
                                            <input type="email" 
                                            name="email"
                                            value="{{$user->email}}" placeholder="Email Address">
                                            @error('email')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Phone no*</label>
                                            <input type="text" 
                                            name="number_phone"
                                            value="{{$user->number_phone}}" placeholder="Phone number">
                                            @error('number_phone')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                        </div>

                                        <div class="col-12 mb-20">
                                            <label>Address*</label>
                                            <input type="text" 
                                            name="address"
                                            value="{{$user->address}}"
                                            placeholder="Address">
                                            @error('address')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                            <input type="text"
                                            name="note" 
                                            placeholder="Note">
                                        </div>

                                    </div>

                                </div>

                                <!-- Shipping Address -->
                                <div id="shipping-form">
                                    <h4 class="checkout-title">Shipping Address</h4>

                                    <div class="row">

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>First Name*</label>
                                            <input type="text" placeholder="First Name">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Last Name*</label>
                                            <input type="text" placeholder="Last Name">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Email Address*</label>
                                            <input type="email" placeholder="Email Address">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Phone no*</label>
                                            <input type="text" placeholder="Phone number">
                                        </div>

                                        <div class="col-12 mb-20">
                                            <label>Company Name</label>
                                            <input type="text" placeholder="Company Name">
                                        </div>

                                        <div class="col-12 mb-20">
                                            <label>Address*</label>
                                            <input type="text" placeholder="Address line 1">
                                            <input type="text" placeholder="Address line 2">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Country*</label>
                                            <select class="nice-select">
                                                <option>Bangladesh</option>
                                                <option>China</option>
                                                <option>country</option>
                                                <option>India</option>
                                                <option>Japan</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Town/City*</label>
                                            <input type="text" placeholder="Town/City">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>State*</label>
                                            <input type="text" placeholder="State">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Zip Code*</label>
                                            <input type="text" placeholder="Zip Code">
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-5">
                                <div class="row">

                                    <!-- Cart Total -->
                                    <div class="col-12 mb-60">

                                        <h4 class="checkout-title">Cart Total</h4>

                                        <div class="checkout-cart-total">
                                            
                                            @foreach ($carts as $item)
                                            <h4>Product <span>Total</span></h4>

                                            <ul>
                                    
                                                <li>{{$item['name']}} X {{$item['quantity']}} <span>${{$item['price']}}</span></li>
                                              
                                                @endforeach
                                            </ul>

                                            <p>Sub Total <span>${{$total['sub_total']}}</span></p>
                                            @foreach ($surcharge as $item)
                                            <p>{{$item->name}} <span>${{$item->value}}</span></p>  
                                            @endforeach
                                            <h4>Grand Total <span>${{$total['grand_total'] }}</span></h4>
                                           

                                        </div>

                                    </div>

                                                                          </div>

                                        <button class="place-order btn btn-lg btn-round" type="submit">Place order</button>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Checkout section end-->
   
@endsection