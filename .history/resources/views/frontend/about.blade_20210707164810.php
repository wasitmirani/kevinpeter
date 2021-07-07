@extends('layouts.master')
@section('content')
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
            <h2 class="heading-two mb5">Our Teachers <span>choose our most talented teachers</span></h2>
            <div class="teacher-in">
                <div id="teacher">
                    @foreach($teachers as $teacher)
                    <div class="item">
                        <div class="box">
                            <div class="img-box"><img src="{{asset('frontend/assets/images/1.jpg')}}" class="img-fluid" alt=""></div>
                            <h2 class="heading-two">{{$teacher->name}}<span>@if(isset($teacher->category->category)){{$teacher->category->category}}@endif</span></h2>
                            <p class="para-two">John Doe was born and raised in Olney, MD, and was surrounded by musicians from an early age.</p>
                            <div class="row">
                                <div class="col-lg-7">
                                    <ul class="list-unstyled">
                                        <li><img src="{{asset('frontend/assets/images/icon1.png')}}" alt="">3 Months Course</li>
                                        <li><img src="{{asset('frontend/assets/images/icon2.png')}}" alt="">Start From 300$</li>
                                    </ul>
                                </div>
                                <div class="col-lg-5 float-right dis-flex-end">
                                    <a href="{{route('contact')}}" class="btn btn-business">start now</a>
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
                    <div class="item">
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
                    </div>
                    <!-- 4th -->
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
