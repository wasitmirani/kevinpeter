@extends('admin.layouts.app')
@section('content')
<h3>Course</h3>
<div id="message"></div>
<table id="datatable-example" class="table">
    <thead>
      <tr>
        <th>Course Title</th>
        <th>Description</th>
        <th>Price</th>
        <th>Teacher</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($courses as $course)
      <tr>
        <td>{{$course->course_title}}</td>
        <td>{!! $course->course_description !!}</td>
        <td>{{$course->price}}</td>
        <td>@if (isset($course->teachers->name)){{$course->teachers->name}} @else - @endif </td>
        <td ><img src="{{asset('admin/courses/images/'.$course->image)}}" style="width:40px; height:40px;"></td>
        <td>
            <a href="{{route('admin.course.edit',$course->id)}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            <a type="button" class="dltCourseBtn" data-id="{{$course->id}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
        </td>
      </tr>
    @endforeach
      ...
    </tbody>
  </table>
@endsection
@section('scripts')
<script>
    $('#datatable-example').DataTable({
    responsive: true
});

$('.dltCourseBtn').on('click',function(){
    var id = $(this).data('id');
    swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this record!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
      $.ajax({
          type:"POST",
          url:'admin/courses/delete/'+id,
          data:{_token: "{{ csrf_token() }}",
                id:id,

          },
          success:function(message){
            swal(" "+message, {
                icon: "success",
          });

          }




      });



  } else {
    swal("Your data is safe!");
  }


});
});



</script>
@endsection

