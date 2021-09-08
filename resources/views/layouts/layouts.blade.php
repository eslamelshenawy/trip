<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body>
    <!-- start header -->
    @include('includes.header')
    <!-- end header -->

    <!-- Content Section -->
    @yield('content')
    <!-- end of Content Section -->

    <!-- start footer -->
    @include('includes.footer')
    <!-- end footer -->

    <!-- start footer -->
    @include('includes.foot')
    <!-- end footer -->


    @yield('js')


</body>

</html>