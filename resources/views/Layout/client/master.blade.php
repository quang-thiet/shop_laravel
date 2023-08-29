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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="jquery-3.6.4.min.js"></script>
    
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
                <form action="" method = "GET">
                    <div class="form-search">
                        <input id="search" class="input-text" value="" placeholder="" type="search" name="search">
                        <button>
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
                <p class="form-description">Hit enter to search or ESC to close</p>
            </div>
        </div>
        <!-- main-search start -->
        @if (session()->has('success'))
       <div class="alert alert-success">{{ session()->get('success') }}</div>
       @endif
       @if (session()->has('error'))
       <div class="alert alert-danger">{{ session()->get('error') }}</div>
       @endif

        @yield('content')
        
        @include('Layout.client.footer')

       
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