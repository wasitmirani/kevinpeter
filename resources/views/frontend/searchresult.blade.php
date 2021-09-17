@extends('layouts.master')
@section('content')
<section class="teacher headline">
    <div class="container">
        <div class="col-lg-12">
            <h2 class="heading-two mb5">Our Courses <span>Courses Related {{ $search  }}</span></h2>
            <div class="teacher-in">
                <div id="teacher">
                    @if(!empty($courses))
                    @foreach($courses as $course)
                    <div class="item">
                        <div class="box">
                            <div class="img-box"><img src="{{asset('frontend/assets/images/1.jpg')}}" class="img-fluid" alt=""></div>
                            <h2 class="heading-two">{{$course->course_title}}<span>@if(isset($course->category->category)){{$course->category->category}}@endif</span></h2>
                            <p class="para-two">{!! $course->description !!}</p>
                            <div class="row">
                                <div class="col-lg-7">
                                    <ul class="list-unstyled">
                                        <li><img src="{{asset('frontend/assets/images/icon1.png')}}" alt="">3 Months Course</li>
                                        <li><img src="{{asset('frontend/assets/images/icon2.png')}}" alt="">Start From 300$</li>
                                    </ul>
                                </div>
                                <div class="col-lg-5 float-right dis-flex-end">


                                    <a  class="btn btn-business"   @guest href="{{route('login')}}" @else href="{{route('enroll.form',$course->id)}}" @endguest>Enroll Now</a>





                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <h2>No Courses Found</h2>
                    @endif
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

                    <!-- 4th -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection




