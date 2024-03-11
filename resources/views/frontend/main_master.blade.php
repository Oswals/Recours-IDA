<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('frontend.body.header')

</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->


        <!-- preloader --- navbar --- mobile_menu -->

        @include('frontend.body.navbar')

        <!-- End preloader --- navbar --- mobile_menu -->


        <!-- Page Content -->

        @yield('content')

        <!-- End Page Content -->


        <!-- Footer and Script -->


        @include('frontend.body.footer')


        <!-- End footer and Script -->

</body>
</html>
