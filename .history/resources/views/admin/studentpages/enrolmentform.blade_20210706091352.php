@extends('admin.layouts.app')
@section('content')
<h4>Enrolment Form</h4>
<div class="card-body">
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Student Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" value="{{Auth::user()->name}}">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Course Title</label>
            <input type="password" class="form-control" id="title" value="{{$course->course_title}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Teacher Name</label>
            <input type="text" class="form-control" id="teacher" value="{{$course->teachers->name}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Course Category</label>
            <input type="text" class="form-control" id="category" value="@if(isset($course->category)){{$course->category->category}}@endif">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Course Price</label>
            <input type="text" class="form-control" id="price" value={{$course->price}}>
        </div>

        <button type="button" data-id="{{$course->id}}" id="enrollFormBtn" class="btn btn-primary">Submit</button>
    </form>
</div>



@endsection
@section('scripts')
<script>
    $(document).ready(function(){
        $('#enrollFormBtn').on('click',function(){

            var name = $("#name").val();
            var title = $("#title").val();
            var teacher = $("#teacher").val();
            var category = $("#category").val();
            var price = $("#price").val();
            var id = $(this).data('id');

            $.ajax({
                url:"",
                type:"POST",
                data:{
                    name : name,
                    title:title,
                    teacher: teacher,
                    category: category,

                }
            })

        })
    })

</script>
@endsection
