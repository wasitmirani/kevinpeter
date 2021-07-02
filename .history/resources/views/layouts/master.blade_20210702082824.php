<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
	@include('layouts.partials.meta')
		<title>Kevin Peter Jones Music School</title>
	</head>
	<body>
		<!-- Header Begins here -->
@include('layouts.partials.header')
<div class="slider-content">
    <div class="slider-wrapper">
        <div class="slider-container">
            <div class="control-nav">
                <ul>
                    <li class="active"><span class="line"></span><span class="number">1</span></li>
                    <li><span class="line"></span><span class="number">2</span></li>
                    <li><span class="line"></span><span class="number">3</span></li>
                    <li><span class="line"></span><span class="number">4</span></li>
                </ul>
            </div>
            <!-- <div class="lines-wrapper">
            </div> -->
            <div class="image-mask">
                <img class="" src="{{asset('frontend/assets/images/banner.jpg')}}" alt="" />
            </div>

            <div class="slide active red" data-order="1" data-color="#EE4654" data-img="{{asset('frontend/assets/images/banner.jpg')}}">

                <div class="fake-bg red"></div>
                <canvas class="canvas" data-image="{{asset('frontend/assets/images/banner.jpg')}}"></canvas>
                <div class="slide-content ">
                    <div class="image-caption">
                        <span class="line"></span>
                        <span>Spring / Summer 2016</span>

                    </div>
                    <!-- <div class="title-background">
                                                    <span class="mask-wrap">
                                                                                    <span class="mask">Karlie</span>
                                                    </span>
                                                    <span class="mask-wrap">
                                                                                    <span class="mask">Kloss</span>
                                                    </span>
                    </div> -->

                    <div class="title-wrapper">
                        <h1>
                        <span class="mask-wrap">
                            <span class="mask"><strong>Best Place for</strong></span>
                        </span>
                        <span class="mask-wrap">
                            <span class="mask">Music Education</span>
                        </span>
                        </h1>
                        <p>We work with only the best, degreed music instructors in the Washington, DC area, many of whom play for symphonies and orchestras, teach in schools or perform with traditional groups that tour internationally. Background checks are conducted on all teachers.</p>
                        <a href="#" class="gallery btn btn-business">Get Started</a>
                    </div>

                </div>
            </div>

            <div class="slide blue" data-order="2" data-color="#EE4654" data-img="{{asset('frontend/assets/images/banner.jpg')}}">
                <div class="fake-bg blue"></div>
                <canvas class="canvas" data-image="{{asset('frontend/assets/images/banner.jpg')}}"></canvas>
                <div class="slide-content ">

                    <div class="image-caption">
                        <span class="line"></span>
                        <span>Fall / Winter 2016</span>

                    </div>

                    <!-- <div class="title-background">
                                                    <span class="mask-wrap">
                                                                                    <span class="mask">Aline</span>
                                                    </span>
                                                    <span class="mask-wrap">
                                                                                    <span class="mask">Weber</span>
                                                    </span>
                    </div> -->

                    <div class="title-wrapper">
                        <h1>
                        <span class="mask-wrap">
                            <span class="mask"><strong>Best Place for</strong></span>
                        </span>
                        <span class="mask-wrap">
                            <span class="mask">Music Education</span>
                        </span>
                        </h1>
                        <p>We work with only the best, degreed music instructors in the Washington, DC area, many of whom play for symphonies and orchestras, teach in schools or perform with traditional groups that tour internationally. Background checks are conducted on all teachers.</p>
                        <a href="#" class="gallery btn btn-business">Get Started</a>
                    </div>

                </div>
            </div>

            <div class="slide green" data-order="3" data-color="#7ffe8e" data-img="{{asset('frontend/assets/images/banner.jpg')}}">
                <div class="fake-bg green"></div>
                <canvas class="canvas" data-image="{{asset('frontend/assets/images/banner.jpg')}}"></canvas>
                <div class="slide-content ">

                    <div class="image-caption">
                        <span class="line"></span>
                        <span>Spring / Summer 2015</span>

                    </div>

                    <!-- <div class="title-background">
                                                    <span class="mask-wrap">
                                                                                    <span class="mask">Miranda</span>
                                                    </span>
                                                    <span class="mask-wrap">
                                                                                    <span class="mask">Kerr</span>
                                                    </span>
                    </div> -->

                    <div class="title-wrapper">
                        <h1>
                        <span class="mask-wrap">
                            <span class="mask"><strong>Best Place for</strong></span>
                        </span>
                        <span class="mask-wrap">
                            <span class="mask">Music Education</span>
                        </span>
                        </h1>
                        <p>We work with only the best, degreed music instructors in the Washington, DC area, many of whom play for symphonies and orchestras, teach in schools or perform with traditional groups that tour internationally. Background checks are conducted on all teachers.</p>
                        <a href="#" class="gallery btn btn-business">Get Started</a>
                    </div>
                </div>
            </div>

            <div class="slide grey" data-order="4" data-color="#bcbcbc" data-img="{{asset('frontend/assets/images/banner.jpg')}}">
                <div class="fake-bg grey"></div>
                <canvas class="canvas" data-image="{{asset('frontend/assets/images/banner.jpg')}}"></canvas>
                <div class="slide-content ">

                    <div class="image-caption">
                        <span class="line"></span>
                        <span>Fall / Winter 2015</span>

                    </div>

                    <!-- <div class="title-background">
                                                    <span class="mask-wrap">
                                                                                    <span class="mask">Kate</span>
                                                    </span>
                                                    <span class="mask-wrap">
                                                                                    <span class="mask">Moss</span>
                                                    </span>
                    </div> -->

                    <div class="title-wrapper">
                        <h1>
                        <span class="mask-wrap">
                            <span class="mask"><strong>Best Place for</strong></span>
                        </span>
                        <span class="mask-wrap">
                            <span class="mask">Music Education</span>
                        </span>
                        </h1>
                        <p>We work with only the best, degreed music instructors in the Washington, DC area, many of whom play for symphonies and orchestras, teach in schools or perform with traditional groups that tour internationally. Background checks are conducted on all teachers.</p>
                        <a href="#" class="gallery btn btn-business">Get Started</a>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="footer-wrapper">
        <ul>
            <li class="active box" data-id="1">
                <div class="hover-box"></div>
                <div class="box-content">
                    <span>01</span>
                </div>
            </li>
            <li class="box" data-id="2">
                <div class="hover-box"></div>
                <div class="box-content">
                    <span>02</span>
                </div>
            </li>
            <li class="box" data-id="3" >
                <div class="hover-box"></div>
                <div class="box-content">
                    <span>03</span>
                </div>
            </li>
            <li class="box" data-id="4"  >
                <div class="hover-box"></div>
                <div class="box-content">
                    <span>04</span>
                </div>
            </li>
        </ul>
    </div>
</div>
		<!-- Header Begins here -->
		<!-- Banner -->

        @yield('content')


        @include('layouts.partials.footer')
		<!-- Footer Begins here -->
		<!-- Footer Script Begins here -->

        @include('layouts.partials.footer_script')
		<!-- Footer Script Begins here -->
	@yield('scripts')
	</body>
</html>

