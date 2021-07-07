@extends('admin.layouts.app')
@section('content')
<div class="order-2 order-lg-1 col-lg-9 bd-content">
    <h4 id="overview">Edit Student Detail</h4>
    <div id="message"></div>
    <form  id="editStudentForm">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text"  class="form-control" name="name" aria-describedby="emailHelp" value="{{$student->name}}">

        </div>
        <input type="hidden" id="id" value={{$student->id}}>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" value="{{$student->email}}">

          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Update Profile Image</label>
            <input type="file" class="form-control" name="image" >

          </div>

        <button type="submit" id="editStudentBtn" data-id="{{$student->id}}"  class="btn btn-primary">Update</button>
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


        $("#editStudentForm").on('submit',function(e){
            e.preventDefault();

      var id = $("#id").val();
      var data = new FormData(this);
      $.ajax({
          url : '/admin/students/update/'+id,
          type: 'POST',
          data:data,
          processData: false,
          contentType: false,
          success:function(msg){
              $('#message').fadeIn().append("<p class='alert alert-warning alert-dismissible fade show'>"+msg+"<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button><p>");


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
