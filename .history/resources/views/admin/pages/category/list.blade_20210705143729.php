@extends('admin.layouts.app')
@section('content')
<h4>Categories List</h4>
<table id="datatable-example" class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->category}}</td>
            <td>
                <a href="{{route('admin.categories.edit',$category->id)}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                <a type="button" class="dltCategoryBtn" data-id="{{$category->id}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>

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
$('.dltCategoryBtn').on('click',function(){
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
          url:'/admin/categories/delete/'+id,
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
