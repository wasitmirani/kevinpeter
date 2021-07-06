@extends('admin.layouts.app')
@section('content')
<div class="order-2 order-lg-1 col-lg-9 bd-content">
    <h4 id="overview">Edit Student Detail</h4>
    <div id="message"></div>
    <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text"  class="form-control" id="name" aria-describedby="emailHelp" value="{{$student->name}}">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" value="{{$student->email}}">

          </div>

        <button type="button" id="editstudentBtn" data-id="{{$student->id}}"  class="btn btn-primary">Update</button>
      </form>

</div>


@endsection
@section('scripts')
<script>
    $("#editstudentBtn").on('click',function(){
        var name = $("#name").val();
        var email = $("#email").val();
        var id = $(this).data('id')
        $.ajax({
            url : '/admin/students/update/'+id,
            type: 'POST',
            data:{
                name : name,
                email: email,
                id : id,
                _token: "{{ csrf_token() }}",

            },
            success:function(msg){
                $('#message').fadeIn().append("<p class='alert alert-warning alert-dismissible fade show'>"+msg+"<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button><p>");


            },
            error:function(err){

                $('#message').fadeIn().append("<p class='alert alert-warning alert-dismissible fade show'>"+err+"<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button><p>");

            }
        })



    })
</script>
@endsection
