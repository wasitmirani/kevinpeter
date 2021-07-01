
<!doctype html>
<html lang="en">
    @include('admin.layouts.partials.head')
<body>


<div class="preloader">

    <div class="preloader-icon"></div>
</div>

@include('admin.layouts.partials.sidebar')

<div class="layout-wrapper">


    @include('admin.layouts.partials.header')

</div>

    <div class="content ">

  @yield('content')
    </div>

@include('admin.layouts.partials.footer')


</body>
</html>
