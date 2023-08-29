@extends('Layout\client\master')

@section('title', 'Home Page')

@section('content')
 <!-- Page Banner Section Start -->
 <div class="page-banner-section section bg-image" data-bg="assets/images/bg/breadcrumb.png">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page-banner text-left">
                    <h2>Wishlist</h2>
                    <ul class="page-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Wishlist</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Page Banner Section End -->
@if (!empty($products))

<!--Wishlist section start-->
<div class="wishlist-section section pt-90 pt-lg-70 pt-md-60 pt-sm-50 pt-xs-45  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <!-- Cart Table -->
                <div class="cart-table table-responsive mb-30">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="pro-thumbnail">Image</th>
                                <th class="pro-title">Product</th>
                                <th class="pro-price">Price</th>
                                <th class="pro-stock">Stock Status</th>
                                <th class="pro-addtocart">Add to cart</th>
                                <th class="pro-remove">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $item)
                            <tr>
                                <td class="pro-thumbnail"><a href="{{route('single.product',['slug'=>$item->slug ,'id'=>$item->id])}}"><img src="{{asset(URL_PRODUCT.$item->image)}}" alt="Product"></a></td>

                                <td class="pro-title"><a href="{{asset(URL_PRODUCT.$item->image)}}">{{$item->name}}</a></td>

                                <td class="pro-price"><span>${{$item->discount ?? $item->price}}</span></td>

                                <td class="pro-stock"><span class="in-stock">{{ ($item->quantity > 0) ? "in stock" : "out stock" }}</span></td>
                                
                                <td class="pro-addtocart"><button        class="btn" id="add-to-card">Add to cart</button></td>
                                
                                <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
<!--Wishlist section end-->
@else
<span  class="text-danger">Danh sách trống</span>
    
@endif
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>

    function add-add_to_cart(){
        alert("ádasd")
    }
    
    $(document).ready(function(){
        
        $(#add-to-card).on('click',add_to_cart);
        
    });
    
</script>
@endsection