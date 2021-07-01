
<!doctype html>
<html lang="en">
    @include('admin.layouts.partials.head')
<body>

<!-- preloader -->
<div class="preloader">
    <img src="../../assets/images/logo.svg" alt="logo">
    <div class="preloader-icon"></div>
</div>
<!-- ./ preloader -->

<!-- sidebars -->

<!-- notifications sidebar -->
@include('admin.layouts.partials.sidebar')
<!-- ./  menu -->

<!-- layout-wrapper -->
<div class="layout-wrapper">

    <!-- header -->
    @include('admin.layouts.partials.header')
    <!-- ./ Header mobile buttons -->
</div>
    <!-- ./ header -->

    <!-- content -->
    <div class="content ">

  @yield('content')
    </div>
    <!-- ./ content -->
@include('admin.layouts.partials.footer')
    <!-- content-footer -->

</body>
</html>
