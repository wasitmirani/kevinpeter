@extends('admin.layouts.app')
@section('content')
<div>
    <h3>Course</h3>
</div>
<div id="message">

</div>
<form class="row g-3" @if(isset($course)) id="editCourseForm"  @else id="addCourseForm" @endif  enctype="multipart/form-data" >
    @csrf
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Title</label>

      <input type="text" name="title" class="form-control"   @if(isset($course)) value="{{$course->course_title}}" @endif id="inputEmail4">
      @if(isset($course)) <input type="hidden" id="id" name="id" value={{$course->id}}> @endif



    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Teacher</label>
      <select class="form-control" name="teacher">
          <option value=" ">Teacher  Name</option>
          @foreach($teachers as $teacher)
          <option @if(isset($course->teacher_id) ==  $teacher->id) selected @endif value="{{$teacher->id}}">{{$teacher->name}}</option>
          @endforeach

      </select>
    </div>
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Price</label>
        <input type="number" name="price" @if(isset($course)) value="{{$course->price}}" @endif class="form-control" id="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Image</label>
        <input type="file" class="form-control" name="image">
        @if(isset($course))

        <input type="hidden" name="oldImage" value="{{$course->image}}">

         @endif
      </div>
    <div class="col-12">
      <label for="inputAddress2" class="form-label">Description</label>
      @if(isset($course))
      <textarea id="editor" name="description">
         {!! $course->course_description !!}
    </textarea>
    <img class="img-thumbnail mt-4" src="{{asset('admin/courses/images/'.$course->image)}}" style="    width: 115px;
        height: 84px;">
    @else
    <textarea id="editor" name="description">

    </textarea>

       @endif


    </div>


    <div class="col-12">
      <button type="submit" class="btn btn-primary">@if(isset($course)) Update Course @else Add Course @endif</button>
    </div>
  </form>
  @endsection
@section('scripts')
<script>
    ClassicEditor.create(document.querySelector('#editor'))

    $(document).ready(function(){
        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
//Add Course
        $('#addCourseForm').on('submit',function(e){
            e.preventDefault()
            var data = new FormData(this);
            console.log(data)
            $.ajax({
                url:'/admin/course/store',
                type:'POST',
                data: data,
                processData: false,
                contentType: false,
                success:function(mesage){
                    $('#message').fadeIn().append("<p class='alert alert-warning alert-dismissible fade show'>"+mesage+"<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button><p>");

                 },
                 error:function(err){

                     if (err.status == 422) {
                        var errors = err.responseJSON.errors
                        $('#message').empty()
                           jQuery.each(errors, (index, item) => {

                           $('#message').fadeIn().append("<p class='alert alert-warning alert-dismissible fade show'>"+item+"<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button><p>");

         });
                     }

                 }
            })

        });
        //Edit Course
        $('#editCourseForm').on('submit',function(e){
            e.preventDefault()
            var data = new FormData(this);
            var id = $("#id").val();
            console.log(data)
            $.ajax({
                url:'/admin/courses/update/'+id,
                type:'POST',
                data: data,
                processData: false,
                contentType: false,
                success:function(mesage){
                    $('#message').fadeIn().append("<p class='alert alert-warning alert-dismissible fade show'>"+mesage+"<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button><p>");

                 },
                 error:function(err){

                     if (err.status == 422) {
                        var errors = err.responseJSON.errors
                        $('#message').empty()
                           jQuery.each(errors, (index, item) => {

                           $('#message').fadeIn().append("<p class='alert alert-warning alert-dismissible fade show'>"+item+"<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button><p>");

         });
                     }

                 }
            })

        })

    })
</script>
@endsection
