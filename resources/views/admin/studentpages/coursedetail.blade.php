@extends('layouts.master')
@section('content')


<section class="about-us headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="heading-two mb5">{{ $course->course_title }} <span>Instructor: {{ $course->teachers->name }}</span></h2>
            </div>
            <div class="col-lg-10 m-auto">
                <div class="row about-in">
                    <div class="col-lg-7 one">
                        <div class="img-box"><img src="{{asset('admin/courses/images/'.$course->image)}}" class="img-fluid" alt=""></div>
                    </div>
                    <div class="col-lg-5 two dis-flex">
                        <h2 class="heading-three">
                        Category<br>
                       {{ $course->category }}
                        </h2>
                        <p class="para-two ">
                           {!! $course->description !!}
                        </p>
                        <a href="" class="btn btn-business" @guest href="{{route('login')}}" @else href="{{route('enroll.form',$course->id)}}" @endguest>Enroll Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
