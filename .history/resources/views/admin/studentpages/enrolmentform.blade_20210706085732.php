@extends('admin.layouts.app')
@section('content')
<h4>Enrolment Form</h4>
<div class="card-body">
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Student Name</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Course Title</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Teacher Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Course Category</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Course Price</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>



@endsection
