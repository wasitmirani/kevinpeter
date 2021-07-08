@extends('layouts.master')
@section('content')

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


                                    <a href="" class="btn btn-business" type="button" data-bs-toggle="modal"  @guest id="loginNow"  data-bs-target="#loginModal"  @else id="enrollNow" data-bs-target="#enrollModal" @endguest>Start now</a>





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
<section class="contact headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13004082.928417291!2d-104.65713107818928!3d37.27557827818067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2s!4v1621967520369!5m2!1sen!2s" width="100%" height="660" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="col-lg-6 dis-flex">
                <h2 class="heading-two mb5">Contact Us <span>Contact Information</span></h2>
                <div class="content">
                <h2 class="heading-two mb5">Our Location <span>44 Lorem Ave. West Dummy, IL 80155</span></h2>
                <h2 class="heading-two mb5"> phone number<span> +1 8049 432</span></h2>
                <h2 class="heading-two mb5"> email address<span> loremipsum@dummy.com</span></h2>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Teacher -->

@endsection


