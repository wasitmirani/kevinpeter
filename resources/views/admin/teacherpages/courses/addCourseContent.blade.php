@extends('admin.layouts.app')
@section('content')
<div>
    <h3>Add Course Content</h3>
</div>
<div id="message">

</div>
<form class="row g-3" id="addCourseContent"  enctype="multipart/form-data" >

    <div class="col-md-12 form-group">
        <label for="inputEmail4" class="form-label">Select Course</label>
        <select class="form-control" name="course_id">
            <option value="">Select Course</option>
            @foreach ($courses as $course)
            <option value="{{ $course->id }}">{{ $course->course_title }}</option>
            @endforeach

        </select>

    </div>
    <div class="col-md-6 form-group">
        <label for="inputEmail4" class="form-label">Add Files ('text or video')</label>

        <input type="file" name="file[]" class="form-control"   id="inputEmail4">


    </div>
    <div class="col-md-6 form-group">
        <button class="btn btn-primary " id="addMore" type="button"
        >Add More</button>
    </div>

    <div class="col-md-6 form-group" id="files"></div>
    <div>
        <button class="btn btn-primary" type="submit">Add Files</button>
    </div>
</form>

@endsection
@section('scripts')
   <script>
       $(document).ready(function(){
        $.ajaxSetup({
          headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
       });

        $("#addCourseContent").on('submit',function(e){
            e.preventDefault()
            var data = new FormData(this);

            $.ajax({
                type:'post',
                url:'/teacher/course/content',
                data: data,
                processData: false,
                contentType: false,
                success:function(res){
                    console.log(res)

                },
                error:function(err){
                    console.log(err)

                }
            })


    })






        $("#addMore").on('click',function(){
            var row = "";
            row +='<div><input type="file" name="file[]" class="form-control "   id="inputEmail4"><button class="btn btn-primary remove" type="button">Remove</button></div>';
            $("#files").append(row)

        })

        $("div").on("click", "button.remove", function(){
            $(this).closest('div').remove();
        });
       })
   </script>
@endsection
