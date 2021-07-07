@extends('admin.layouts.app')
@section('content')
<h3>Student</h3>
<table id="datatable-example" class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>

        <th>Courses</th>
        <th>Action</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
      <tr>
        <td>{{$student->name}}</td>
        <td>{{$student->email}}</td>

        <td>2011/04/25</td>
        <td>
            <a href="{{route('admin.students.edit',$student->id)}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            <a type="button" class="dltStudentBtn" data-id="{{$student->id}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
            <a href="{{route('admin.students.show')}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
        </td>
        <td></td>
      </tr>
        @endforeach

    </tbody>
  </table>
@endsection
@section('scripts')
<script>
    $('#datatable-example').DataTable({
    responsive: true
});
$('.dltStudentBtn').on('click',function(){
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
          url:'/admin/students/delete/'+id,
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


})
</script>
@endsection
