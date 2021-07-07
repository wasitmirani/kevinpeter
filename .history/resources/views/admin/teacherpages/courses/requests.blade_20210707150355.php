@extends('admin.layouts.app')
@section('content')
<h3>Course</h3>
<div id="message"></div>
<table id="datatable-example" class="table">
    <thead>
      <tr>
        <th>Course Title</th>
        <th>Student Name</th>
        <th>Price</th>
        <th>Teacher</th>
        <th>Category</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($requests as $request)
      <tr>
        <td>{{$request->course_title}}</td>
        <td>{{$request->student_name}}</td>
        <td>{{$request->price}}</td>
        <td>{{$request->teacher}}</td>
        <td>@if (isset($request->category)){{$request->category}} @else - @endif </td>
        <td ><img src="{{asset('admin/courses/images/'.$course->image)}}" style="width:40px; height:40px;"></td>
        <td>
            <div class="btn-group">
                <button type="button" class="btn btn-danger">Action</button>
                <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Update Status</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Separated link</a>
                </div>
              </div>
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
          url:'/admin/courses/delete/'+id,
          data:{_token: "{{ csrf_token() }}",
                id:id

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

