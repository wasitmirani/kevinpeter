@extends('admin.layouts.app')
@section('content')
<div class="order-2 order-lg-1 col-lg-9 bd-content">
    <h4 id="overview">Edit Teacher</h4>
    <div id="message"></div>
    <form id="editTeacherForm">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text"  class="form-control" id="name" aria-describedby="emailHelp" value="{{$teacher->name}}">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" value="{{$teacher->email}}">

          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Update Profile Picture</label>
            <input type="file" class="form-control" id="image" >

          </div>

        <button type="submit" id="editTeacherBtn" data-id="{{$teacher->id}}"  class="btn btn-primary">Update</button>
      </form>

</div>


@endsection
@section('scripts')
<script>
    $(document).ready(function(){
        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$("#editTeacherForm").on('submit',function(e){
    e.preventDefault();
        var data = new FormData(this);

        var id = $("#id").val()
        $.ajax({
            url : '/admin/teachers/update/'+id,
            type: 'POST',
            data:data,
            processData: false,
                contentType: false,
            success:function(msg){
                $('#message').fadeIn().append("<p class='alert alert-warning alert-dismissible fade show'>"+msg+"<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button><p>");


            },
            error:function(err){

                $('#message').fadeIn().append("<p class='alert alert-warning alert-dismissible fade show'>"+err+"<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button><p>");

            }
        })



    })

    })

</script>
@endsection
