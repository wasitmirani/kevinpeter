@extends('admin.layouts.app')
@section('content')
<div>
    <div class="card mb-4">
        <div class="card-body">
            <h6 class="card-title mb-4">Student Detail</h6>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" value="{{$student->student_name}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Course Taken</label></label>
                        <input type="text" class="form-control" value="@if(isset($student->course_title)){{$student->course_title}}@endif" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" value="{{$student->email}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Course Category</label>
                        <input type="text" class="form-control" value="{{$student->category}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Course Price</label>
                        <input type="text" class="form-control"  value="{{$student->price}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Picture</label>
                       <img class="img-thumbnail" style="width:50px" src="{{asset('assets/images/user/'.$student->image)}}">
                    </div>



                </div>

            </div>
        </div>
    </div>
</div>
</div>
@endsection
