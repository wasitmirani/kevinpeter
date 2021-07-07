@extends('admin.layouts.app')
@section('content')
<h3>Teachers</h3>
<table id="datatable-example" class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Speciality</th>
        <th>Email</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($teachers as $teacher)
      <tr>
        <td>{{$teacher->name}}</td>
        <td>{{$teacher->ctegory}}</td>

        <td>{{$teacher->email}}</td>
        <td><img src="{{asset('assets/images/user/'.$teacher->image)}}" style="width: 20px, height:20"></td>
        <td>
            <a href="{{route('admin.teachers.edit',$teacher->id)}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            <a type="button" class="dltTeacherBtn" data-id="{{$teacher->id}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
            <a href="{{route('admin.teachers.show',$teacher->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>

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

$('.dltTeacherBtn').on('click',function(){
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
          url:'/admin/teachers/delete/'+id,
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
