@extends('Layout.client.main')
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger">{{ session()->get('error') }}</div>
    @endif

    <!--Cart section start-->
    <div class="cart-section section pt-90 pt-lg-70 pt-md-60 pt-sm-50 pt-xs-45  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
        <div class="container">
            <div class="row">
                @livewire('update-carts')

            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!--Cart section end-->
    {{-- <script>
        function update(event) {

            event.preventDefault();
            let urlUpdate_cart = $('.btn update_cart').data('url');
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
            alert("update carts !!")
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

                $(".update_carts").on('click', update_all);

            })

            $(function() {

                $("input").change(update);

            })

            $(function(){
                $('.check_out').on('click',check_out)
            })




        })
    </script> --}}
@endsection
