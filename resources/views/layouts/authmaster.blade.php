<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="{{ asset('authasset/bootstrap-4/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
        <link href="{{ asset('authasset/css/style.css') }}" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="{{ asset('authasset/css/responsive.css') }}" rel="stylesheet">
        <link href="{{ asset('authasset/slick-slider/slick/slick-theme.css') }}" rel="stylesheet">
        <link href="{{ asset('authasset/slick-slider/slick/slick.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('authasset/css/fancybox.css') }}">
        <link rel="stylesheet" href="https://unpkg.com/aos@3.0.0-beta.6/dist/aos.css">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
		<title>Kevin Peter Jones Music School</title>
	</head>
    <body class="bg-blue">

        <!--Register Form-->

        <section class="main-register">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="img-box">
                            <img src="{{ asset('authasset/images/form-sdie-img.jpg') }}" class="img-fluid" alt="">
                            <div class="overlay">
                                <h3>Welcome To</h3>
                                <h2>Kevin Peter Jones <strong>Music school</strong> </h2>
                                <p>Grursus mal suada faci lisis Lorem ipsum dolarorit more ametion consectetur elit. Vesti at bulum nec odio aea the dumm ipsumm ipsum that dolocons rsus mal suada and fadolorit to the dummy consectetur elit the Lorem Ipsum genera.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 dis-flex">
                     @yield('content')
                    </div>
                </div>
            </div>
        </section>

        <!--Register Form-->

        <div class="preloader"></div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script>
        <script src="{{ asset('authassets/js/custom.js') }}"></script>
        <script src="{{ asset('authasset/js/bootstrap.bundle.min.js') }}"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" ></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js" ></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.js" ></script> -->
        <!-- <script src="{{ asset('authasset/js/fancybox.js') }}"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
        <script src="{{ asset('authasset/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('authasset/js/slick.min.js') }}"></script>
        <script src="https://unpkg.com/aos@3.0.0-beta.6/dist/aos.js"></script>
        <script src="{{asset('js/app.js')}}"></script>
        <script>
        AOS.init();
        </script>
        @yield('scripts')
    </body>
</html>
