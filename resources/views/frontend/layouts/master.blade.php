<html lang="en">
<head>
    <!-- Contain all css and header information -->
    @include('frontend.layouts.head')
    @yield('extra_css')

</head>
<body>
    <!-- Contain all information -->
    <div class="theme-layout" id="scrollup">

        <!-- Contain all top header information -->
        @include('frontend.layouts.header')

        <!-- Contain main content information -->
        @yield('main_content')

        <!-- Contain all footer information -->
        @include('frontend.layouts.footer')
        @yield('extra_js')
    </div><!-- end theme-layout -->
    

    @include('frontend.layouts._partial.popup')

</body>
</html>