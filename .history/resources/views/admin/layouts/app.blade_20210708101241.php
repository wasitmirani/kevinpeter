
<!doctype html>
<html lang="en">

{{-- head section --}}
     @include('admin.layouts.partials.head')
<body>


<div class="preloader">
    <img src="{{asset('assets/images/logo.png')}}" alt="logo">
    <div class="preloader-icon"></div>
</div>

      {{-- Sidebar Section --}}

      @include('admin.layouts.partials.sidebar')

<div class="layout-wrapper">
{{--
      Header Menu --}}
    @include('admin.layouts.partials.header')

</div>

    <div class="content ">

  @yield('content')
    </div>

    {{-- Footer Section --}}

@include('admin.layouts.partials.footer')


</body>
</html>
