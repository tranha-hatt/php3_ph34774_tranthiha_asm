<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/newsedge/newsedge/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jul 2024 08:25:03 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>NewsEdge | Home 1</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layout.partials.css')
</head>

<body>
    
    <div id="preloader"></div>
    <div id="wrapper" class="wrapper">
        <!-- Header Area Start Here -->
        <header>
        @include('layout.partials.header-layout1')
        @yield('content')
            
        </header>
        
        <!-- Category Area End Here -->
        <!-- Footer Area Start Here -->
        <footer>
           @include('layout.partials.footer')
        </footer>
        <!-- Footer Area End Here -->
        <!-- Modal Start-->
      {{-- @include('layout.partials.modal') --}}
        <!-- Offcanvas Menu End -->
    </div>
    <!-- Wrapper End -->
    <!-- jquery-->
   @include('layout.partials.js')
</body>


<!-- Mirrored from www.radiustheme.com/demo/html/newsedge/newsedge/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jul 2024 08:27:14 GMT -->

</html>