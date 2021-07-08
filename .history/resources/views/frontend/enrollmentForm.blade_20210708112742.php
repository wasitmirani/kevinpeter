@extends('layouts.master')
@section('content')

<section class="main-register">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="img-box">
                    <img src="/assets/images/form-sdie-img.jpg" class="img-fluid" alt="">

                </div>
            </div>
            <div class="col-lg-5 dis-flex">
                <form id="enrollForm">
                    <div class="row">
                        <div class="col-12">
                            <label for="first-name">
                            Stuent Name</label>
                            <input type="text" class="form-control" placeholder="First Name" value="{{Auth::user()->name}}">

                        </div>
                        <div class="col-12">
                            <label for="first-name">
                            Course Title</label>
                            <input type="email" class="form-control" placeholder="Email Address" value="{{$course->course_title}}">

                        </div>
                        <div class="col-12">
                            <label for="first-name">
                            Teacher Name</label>
                            <input type="tel" class="form-control" placeholder="Phone Number" value="{{$course->teacher->name}}">

                        </div>
                        <div class="col-12">
                            <label for="first-name">
                        Course Price</label>
                            <input type="password" class="form-control" placeholder="Password" value="{{$course->price}}">

                        </div>
                        <div class="col-12">
                            <label for="password"
                                class="Control-label Control-label--password"
                                >Course Category
                            </label>

                            <input type="text"  class="form-control" placeholder="Password" value="{{$course->category->category}}">

                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-business w-100">Enroll</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section

@endsection

