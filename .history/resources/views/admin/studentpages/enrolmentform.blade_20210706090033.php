@extends('admin.layouts.app')
@section('content')
<h4>Enrolment Form</h4>
<div class="card-body">
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Student Name</label>
            <input type="email" class="form-control" id="name" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Course Title</label>
            <input type="password" class="form-control" id="title">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Teacher Name</label>
            <input type="text" class="form-control" id="teacher">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Course Category</label>
            <input type="text" class="form-control" id="category">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Course Price</label>
            <input type="text" class="form-control" id="price">
        </div>

        <button type="button" id="enrollFormBtn" class="btn btn-primary">Submit</button>
    </form>
</div>



@endsection
@section('scripts')
<script>
    $(document).ready(function(){
        $('#enrollFormBtn').on('click',function(){

            var title =

        })
    })

</script>
@endsection
