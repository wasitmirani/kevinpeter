@extends('layouts.master')
@section('content')

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
<section class="zips headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="row bage">
                    <div class="col-lg-4">
                        <h2 class="heading-three">Learn Anything From Anywhere</h2>

                    </div>
                    <div class="col-lg-8">
                        <form action="{{ route('search.course') }}" method="post" >
                            {{ csrf_field() }}
                            <ul class="list-unstyled">
                                <li class="loc"><input type="text" placeholder="Search Courses" name="title"></li>
                                <li><button type="submit" class="btn">Search </button></li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-us headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="heading-two mb5">Welcome to <span>Kevin Peter Jones Music School</span></h2>
            </div>
            <div class="col-lg-10 m-auto">
                <div class="row about-in">
                    <div class="col-lg-7 one">
                        <div class="img-box"><img src="{{asset('frontend/assets/images/about-img.jpg')}}" class="img-fluid" alt=""></div>
                    </div>
                    <div class="col-lg-5 two dis-flex">
                        <h2 class="heading-three">
                        About Kevin Peter<br>
                        Jones Music School
                        </h2>
                        <p class="para-two ">
                            In Kevin Peter Jones Music School  teachers have successfully taught thousands of music lessons by focusing on one basic philosophy: To provide the best music lessons, period. Over the past decade, the number of educational resources available to the aspiring musician has exploded. On the Internet, one can find sheet music "to thousands of songs, exercises, tutorial videos.
                        </p>
                        <a href="#" class="btn btn-business">More About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="study dis-flex headline">
    <div class="container">
        <div class="col-lg-10 m-auto">
            <h2 class="heading-two mb5">Do You Want To Study <span>at Kevin Peter Jones Music School? </span></h2>
            <p class="para-two">A professional instructor will teach your lesson at a preappointed day and time each week. Material from the previous lesson will be briefly reviewed, then new material will be introduced. You'll learn exercises to develop playing technique and music theory knowledge as well as practical skills such as ear training, sight-reading and notation to give you the confidence to explore the style of music you prefer. You'll also learn how to play real songs, and your teacher will be happy to work your favorite music into the curriculum. At the end of the lesson, your instructor will provide you with material to practice before your next lesson.</p>
            <a href="{{route('contact')}}" class="btn btn-business">Get Started</a>
        </div>
    </div>
</section>
<section class="teacher headline">
    <div class="container">
        <div class="col-lg-12">
            <h2 class="heading-two mb5">Our Courses <span>choose our most popular Courses</span></h2>
            <div class="teacher-in">
                <div id="teacher">
                    @foreach($courses as $course)
                    <div class="item">
                        <div class="box">
                            <div class="img-box"><img src="{{asset('admin/courses/images/'.$course->image)}}" class="img-fluid" alt=""></div>
                            <h2 class="heading-two"><a href="{{ route('student.course.detail',$course->id) }}">{{ $course->course_title}}</a><span>@if(isset($course->category->category)){{$course->category->category}}@endif</span></h2>
                            <p class="para-two">{!! $course->description !!}</p>
                            <div class="row">
                                <div class="col-lg-7">
                                    <ul class="list-unstyled">
                                        {{-- <li><img src="{{asset('frontend/assets/images/icon1.png')}}" alt="">3 Months Course</li>--}}
                                        <li><img src="{{asset('frontend/assets/images/icon2.png')}}" alt=""> {{ $course->price }}$</li>
                                    </ul>
                                </div>
                                <div class="col-lg-5 float-right dis-flex-end">


                                    <a  class="btn btn-business"   @guest href="{{route('login')}}" @else href="{{route('enroll.form',$course->id)}}" @endguest>Enroll Now</a>





                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- 2nd -->
                    {{-- <div class="item">
                        <div class="box">
                            <div class="img-box"><img src="{{asset('frontend/assets/images/2.jpg')}}" class="img-fluid" alt=""></div>
                            <h2 class="heading-two">JOHN DOE <span>Guitar Teacher</span></h2>
                            <p class="para-two">John Doe was born and raised in Olney, MD, and was surrounded by musicians from an early age.</p>
                            <div class="row">
                                <div class="col-lg-7">
                                    <ul class="list-unstyled">
                                        <li><img src="{{asset('frontend/assets/images/icon1.png')}}" alt="">3 Months Course</li>
                                        <li><img src="{{asset('frontend/assets/images/icon2.png')}}" alt="">Start From 300$</li>
                                    </ul>
                                </div>
                                <div class="col-lg-5 float-right dis-flex-end">
                                    <a href="#" class="btn btn-business">start now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 2nd -->
                    <!-- 3rd -->
                    <div class="item">
                        <div class="box">
                            <div class="img-box"><img src="{{asset('frontend/assets/images/3.jpg')}}" class="img-fluid" alt=""></div>
                            <h2 class="heading-two">JOHN DOE <span>Guitar Teacher</span></h2>
                            <p class="para-two">John Doe was born and raised in Olney, MD, and was surrounded by musicians from an early age.</p>
                            <div class="row">
                                <div class="col-lg-7">
                                    <ul class="list-unstyled">
                                        <li><img src="{{asset('frontend/assets/images/icon1.png')}}" alt="">3 Months Course</li>
                                        <li><img src="{{asset('frontend/assets/images/icon2.png')}}" alt="">Start From 300$</li>
                                    </ul>
                                </div>
                                <div class="col-lg-5 float-right dis-flex-end">
                                    <a href="#" class="btn btn-business">start now</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- 3rd -->
                    <!-- 4th -->
                    {{-- <div class="item">
                        <div class="box">
                            <div class="img-box"><img src="{{asset('frontend/assets/images/1.jpg')}}" class="img-fluid" alt=""></div>
                            <h2 class="heading-two">JOHN DOE <span>Guitar Teacher</span></h2>
                            <p class="para-two">John Doe was born and raised in Olney, MD, and was surrounded by musicians from an early age.</p>
                            <div class="row">
                                <div class="col-lg-7">
                                    <ul class="list-unstyled">
                                        <li><img src="{{asset('frontend/assets/images/icon1.png')}}" alt="">3 Months Course</li>
                                        <li><img src="{{asset('frontend/assets/images/icon2.png')}}" alt="">Start From 300$</li>
                                    </ul>
                                </div>
                                <div class="col-lg-5 float-right dis-flex-end">
                                    <a href="#" class="btn btn-business">start now</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- 4th -->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="awards dis-flex headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="box">
                    <div class="shape">{{$totalStudent}}</div>
                    <!-- <h3><span>231</span></h3> -->
                    <h2>Students</h2>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="box">
                    <div class="shape">{{$totalTeacher}}</div>
                    <h2>Teachers</h2>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="box">
                    <div class="shape">90</div>
                    <h2>Awards</h2>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="box">
                    <div class="shape">{{$totalCourses}}</div>
                    <h2>Courses</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="classes headline">
    <div class="container">
        <div class="col-lg-12">
            <h2 class="heading-two mb5">Our Classes<span>choose our Musical Instruments</span></h2>
            <div class="classes-in">
                <div id="classes">
                    <div class="item">
                        <div class="box">
                            <div class="img-box"><img src="{{asset('frontend/assets/images/icon-1.png')}}" class="img-fluid" alt=""></div>
                            <h2 class="heading-two">Piano</h2>
                            <p class="para-two">John Doe was born and raised in Olney, MD, and was surrounded by musicians from an early age.</p>
                        </div>
                    </div>
                    <!-- 2nd -->
                    <div class="item">
                        <div class="box">
                            <div class="img-box"><img src="{{asset('frontend/assets/images/icon-2.png')}}" class="img-fluid" alt=""></div>
                            <h2 class="heading-two">Guitar</h2>
                            <p class="para-two">John Doe was born and raised in Olney, MD, and was surrounded by musicians from an early age.</p>
                        </div>
                    </div>
                    <!-- 2nd -->
                    <!-- 3rd -->
                    <div class="item">
                        <div class="box">
                            <div class="img-box"><img src="{{asset('frontend/assets/images/icon-3.png')}}" class="img-fluid" alt=""></div>
                            <h2 class="heading-two">Voice</h2>
                            <p class="para-two">John Doe was born and raised in Olney, MD, and was surrounded by musicians from an early age.</p>
                        </div>
                    </div>
                    <!-- 3rd -->
                    <!-- 4th -->
                    <div class="item">
                        <div class="box">
                            <div class="img-box"><img src="{{asset('frontend/assets/images/icon-4.png')}}" class="img-fluid" alt=""></div>
                            <h2 class="heading-two">Saxophone</h2>
                            <p class="para-two">John Doe was born and raised in Olney, MD, and was surrounded by musicians from an early age.</p>
                        </div>
                    </div>
                    <!-- 4th -->
                    <!-- 5th -->
                    <div class="item">
                        <div class="box">
                            <div class="img-box"><img src="{{asset('frontend/assets/images/icon-2.png')}}" class="img-fluid" alt=""></div>
                            <h2 class="heading-two">Guitar</h2>
                            <p class="para-two">John Doe was born and raised in Olney, MD, and was surrounded by musicians from an early age.</p>
                        </div>
                    </div>
                    <!-- 5th -->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="client headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <h2 class="heading-two mb5">Testimonial <span>What our Student Say</span></h2>
                <div id="client">
                    <div class="item">
                        <div class="box">
                            <p class="para-two">I just wanted to say I'm glad you are here and doing such a wonderful thing Isaiah is absolutely the most precious person anyone could have as a music teacher and mentor in general. What a fabulous example of a human being and great music teacher he truly is! Thank you so much and please tell Isaiah thank you also.</p>
                            <div class="img-box"><img src="{{asset('frontend/assets/images/client.jpg')}}" class="img-fluid" alt=""></div>
                            <h3>Angela <span>Piano Student</span></h3>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <p class="para-two">I just wanted to say I'm glad you are here and doing such a wonderful thing Isaiah is absolutely the most precious person anyone could have as a music teacher and mentor in general. What a fabulous example of a human being and great music teacher he truly is! Thank you so much and please tell Isaiah thank you also.</p>
                            <div class="img-box"><img src="{{asset('frontend/assets/images/client.jpg')}}" class="img-fluid" alt=""></div>
                            <h3>Angela <span>Piano Student</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Teacher -->

@endsection


