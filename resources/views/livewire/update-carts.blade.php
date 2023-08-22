<div class="col-12">
    @if (session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger">{{ session()->get('error') }}</div>
    @endif
    <!-- Cart Table -->
    <div class="cart-table table-responsive mb-30 update_cart" data-url="{{ route('update.cart') }}">

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
            <tbody>
                @if (!empty($carts))
                    @foreach ($carts as $item)
            
                        <tr>
                            <td class="pro-thumbnail"><a href="#"><img
                                        src="{{ asset('/image/products/' . $item['image']) }}" alt="Product"></a>
                            </td>
                            <td class="pro-title"><a href="#">{{ $item['name'] }}</a></td>
                            <td class="pro-price"><span id="{{ $item['id'] }}_price">${{ $item['price'] }}</span>
                            </td>
                            <td class="pro-quantity">
                                <div class="pro-qty update_price">
                                    <button class="dec qtybtn" wire:click = "decrement({{ $item['product_id'] }},{{ $item['quantity'] }})" >-</button >
                                    <input data-id="{{ $item['id'] }} " type="number" value="{{ $item['quantity'] }}"
                                        min="1"
                                        wire:change.lazy="update_cart({{ $item['id'] }}, event.target.value)">
                                    <button class="inc qtybtn" wire:click ="increment({{ $item['product_id'] }},{{ $item['quantity'] }})">+</button>
                                </div>
                            </td>
                            <td class="pro-subtotal"><span>${{ $item['total'] }}</span></td>
                            <td class="pro-remove">
                                <a href="#" wire:click = "delete({{ $item['product_id']}})"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    @endforeach
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
                        <p>Sub Total <span>${{ $total['sub_total'] }}</span></p>
                        @foreach ($surcharge as $item)
                            <p>{{ $item->name }} <span>${{ $item->value }}</span></p>
                        @endforeach
                        <h2>Grand Total <span>${{ $total['grand_total'] }}</span></h2>
                    </div>
                    <div class="cart-summary-button">
                        <button class="btn check_out" data-url="{{ route('check.out') }}"
                            wire:click="redirect_checkout">Checkout</button>
                        <button class="btn update_carts" data-url="{{ route('list.cart.user') }}" id="34">Update
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
