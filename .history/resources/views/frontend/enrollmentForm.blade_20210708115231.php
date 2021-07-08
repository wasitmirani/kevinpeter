@extends('layouts.master')
@section('content')

<section class="main-register">
    <div class="container">
        <div class="row">

            <div class="col-lg-5 dis-flex">
                <form id="enrollForm" action="{{route('enroll.now')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <label for="first-name">
                            Stuent Name</label>
                            <input type="text" class="form-control" name="name" placeholder="First Name" value="{{Auth::user()->name}}">

                        </div>
                        <div class="col-12">
                            <label for="first-name">
                            Course Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Email Address" value="{{$course->course_title}}">

                        </div>
                        <div class="col-12">
                            <label for="first-name">
                            Teacher Name</label>
                            <input type="text" class="form-control" placeholder="" name="teacher" value="@if(isset($course->teachers->name)){{$course->teachers->name}}@endif">

                        </div>
                        <div class="col-12">
                            <label for="first-name">
                        Course Price</label>
                            <input type="text" class="form-control" placeholder="" name="price" value="{{$course->price}}">

                        </div>
                        <div class="col-12">
                            <label for="password"
                                class="Control-label Control-label--password"
                                >Course Category
                            </label>

                            <input type="text"  class="form-control" placeholder="Enter Category" name="category" value="@if(isset($course->category->category)){{$course->category->category}}@endif">

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

