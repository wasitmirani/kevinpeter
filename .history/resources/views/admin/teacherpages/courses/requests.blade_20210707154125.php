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
        <th>Status</th>
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
        <td >@if ($request->status == '1')
            <span class="badge bg-danger">Pending</span>

        @endif
        @if ($request->status == '2')
        <span class="badge bg-success">Accepted</span>

        @endif
        @if ($request->status == '3')
        <span class="badge bg-primary">Rejected</span>

    @endif
    </td>
        <td>
            <div class="btn-group">
                <button type="button" class="btn btn-danger">Action</button>
                <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item">Update Status</a>

                  <a class="dropdown-item status" type="button" data-id="{{$request->id}}" data-status="2">Accept</a>
                  <a class="dropdown-item status" href="button" data-id="{{$request->id}}" data-status="3">Reject</a>

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


$('.status').on('click',function(){
    var id = $(this).data('id');
    var status = $(this).data('status');
    swal({
  title: "Are you sure?",
  text: "Do You Realy Want To Update Status",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
      $.ajax({
          type:"POST",
          url:'/teacher/update/request/status/'+id,
          data:{_token: "{{ csrf_token() }}",
                id:id,
                status:status

          },
          success:function(message){
            swal(" "+message, {
                icon: "success",
          });

          reload.location()

          }




      });



  } else {
    swal("Your Status Remain Same!");
  }


});
});



</script>
@endsection

