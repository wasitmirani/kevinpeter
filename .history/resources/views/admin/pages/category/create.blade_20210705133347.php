@extends('admin.layouts.app')
@section('content')

<form>
    <div class="mb-3">
        <h4>Add Category</h4>
      <label  class="form-label">Category</label>
      <input type="text" id="category" name="category" class="form-control" aria-describedby="emailHelp">

    </div>


    <button type="submit" class="btn btn-primary" id="addCategory">Submit</button>
  </form>

@endsection
@section('scripts')
<script>
    $('#addCategory').on('click',function(){

        var category = $("#category").val();
        $.ajax({
            url:"/admin/categories/store",
            type:"POST",
            data:{_token: "{{ csrf_token() }}",
            category:category,
            },
            success:function(msg){

                $('#message').fadeIn().append("<p class='alert alert-warning alert-dismissible fade show'>"+msg+"<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button><p>");



            },
            error:function(err){
                if (err.status == 422) {
                    var errors = err.responseJSON.errors;
                    $('#message').empty()
                           jQuery.each(errors, (index, item) => {

                           $('#message').fadeIn().append("<p class='alert alert-warning alert-dismissible fade show'>"+item+"<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button><p>");

         });

            }
        })


    })
</script>
@endsection
