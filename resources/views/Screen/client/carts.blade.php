@extends('Layout.client.main')
@section('content')
    <!--Cart section start-->
    <div class="cart-section section pt-90 pt-lg-70 pt-md-60 pt-sm-50 pt-xs-45  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
        <div class="container">
            <div class="row">
              
                <div class="col-12">
                    <!-- Cart Table -->
                    <div class="cart-table table-responsive mb-30 update_cart" data-url="{{route('update.cart')}}">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="pro-thumbnail">Image</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-quantity">Quantity</th>
                                    <th class="pro-subtotal">Total</th>
                                    <th class="pro-remove">Remove</th>
                                </tr>
                            </thead>
                            @php
                                $carts = session()->get('carts');
                                $total_all = 0;
                            @endphp
                            <tbody>
                                @if (!empty($carts))
                                    {
                                    @foreach ($carts as $item)
                                    @php
                                        $total_all += $item['total'];
                                    @endphp
                                        <tr>
                                            <td class="pro-thumbnail"><a href="#"><img
                                                        src="{{ asset('/image/products/' . $item['image']) }}"
                                                        alt="Product"></a></td>
                                            <td class="pro-title"><a href="#">{{ $item['name'] }}</a></td>
                                            <td class="pro-price"><span id="{{$item['id']}}_price">${{ $item['price'] }}</span></td>
                                            <td class="pro-quantity">
                                                <div class="pro-qty update_price"><input data-id="{{ $item['id'] }}"
                                                        type="number" value="{{ $item['quantity'] }}" min="1"></div>
                                            </td>
                                            <td class="pro-subtotal"><span>${{ $item['total'] }}</span></td>
                                            <td class="pro-remove">
                                                <a href="#"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                    }
                                @endif

                            </tbody>
                        </table>
                    </div>

                    @if (!empty($carts))
                        <div class="row">

                            <div class="col-lg-6 col-12 mb-5">
                                <div class="discount-coupon">
                                    <h4>Discount Coupon Code</h4>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-6 col-12 mb-25">
                                                <input type="text" placeholder="Coupon Code">
                                            </div>
                                            <div class="col-md-6 col-12 mb-25">
                                                <button class="btn">Apply Code</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Cart Summary -->
                            <div class="col-lg-6 col-12 mb-30 d-flex">
                                <div class="cart-summary">
                                    <div class="cart-summary-wrap">
                                        <h4>Cart Summary</h4>
                                        <p>Sub Total <span>${{$total_all}}</span></p>
                                        <p>Shipping Cost <span>$2</span></p>
                                        <h2>Grand Total <span>${{$total_all +2 }}</span></h2>
                                    </div>
                                    <div class="cart-summary-button">
                                        <button class="btn check_out"  
                                        data-url="{{route('check.out')}}">Checkout</button>
                                        <button class="btn update_carts" data-url="{{route('update.cart')}}"
                                            id="34">Update
                                            Cart</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @else
                        <span>
                            <h2 class="text-danger">giỏ hàng đang trống </h2>
                        </span>
                    @endif

                </div>

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!--Cart section end-->
    <script>
        function update(event) {

            event.preventDefault();
            let urlUpdate_cart = $('.update_cart').data('url');
            let id = $(this).data('id');
            let quantity = $(this).val();

            $.ajax({
                type: "GET",
                url: urlUpdate_cart,
                data: {
                    id: id,
                    quantity: quantity,
                },
                statusCode: {
                    204: function(data) {
                      
                    },

                }

            })
        }
        function check_out(){
    
            let urlCheckOut = $(this).data('url');
            alert(urlCheckOut);
            window.location.href = urlCheckOut ;
        }

        function update_all(event) {
            event.preventDefault();
            let url_update = $(this).data('url');
            let type_update = 200 ;
            $.ajax({
                type: "GET",
                url: url_update,
               data:{
                abc:type_update
               },
               statusCode: {
                200: function(data){
                    alert('update thanh cong !!');
                    $('#main-wrapper').html(data.cart_component);
                }
               }
               
            })
        }
        $(document).ready(function() {
            $(function() {

                $("#34").on('click', update_all);

            })

            $(function() {

                $("input").change(update);

            })

            $(function(){
                $('.check_out').on('click',check_out)
            })




        })
    </script>
@endsection
