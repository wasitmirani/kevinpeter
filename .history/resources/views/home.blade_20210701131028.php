@extends('layouts.master')
@section('content')
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
                <img class="" src="/assets/images/banner.jpg" alt="" />
            </div>

            <div class="slide active red" data-order="1" data-color="#EE4654" data-img="/assets/images/banner.jpg">

                <div class="fake-bg red"></div>
                <canvas class="canvas" data-image="/assets/images/banner.jpg"></canvas>
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

            <div class="slide blue" data-order="2" data-color="#EE4654" data-img="/assets/images/banner.jpg">
                <div class="fake-bg blue"></div>
                <canvas class="canvas" data-image="/assets/images/banner.jpg"></canvas>
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

            <div class="slide green" data-order="3" data-color="#7ffe8e" data-img="/assets/images/banner.jpg">
                <div class="fake-bg green"></div>
                <canvas class="canvas" data-image="/assets/images/banner.jpg"></canvas>
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

            <div class="slide grey" data-order="4" data-color="#bcbcbc" data-img="/assets/images/banner.jpg">
                <div class="fake-bg grey"></div>
                <canvas class="canvas" data-image="/assets/images/banner.jpg"></canvas>
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
<section class="zips headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="row bage">
                    <div class="col-lg-4">
                        <h2 class="heading-three">We'll help you book
                        your ideal teacher!</h2>

                    </div>
                    <div class="col-lg-8">
                        <form action="">
                            <ul class="list-unstyled">
                                <li class="loc"><input type="text" placeholder="Zip Code"></li>
                                <li><a href="#" class="btn">GET STARTED</a></li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


