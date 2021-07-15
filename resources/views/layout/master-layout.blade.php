<!doctype html>
<html class="no-js" lang="en">
@include('layout.head')

<body>
<!-- Start Left menu area -->
@include('layout.left-sidebar')
<!-- End Left menu area -->
<!-- Start Welcome area -->

<div class="all-content-wrapper">
    @include('layout.header')

    @yield('content')

    @include('layout.footer')
</div>
@include('layout.scripts')
</body>

</html>
