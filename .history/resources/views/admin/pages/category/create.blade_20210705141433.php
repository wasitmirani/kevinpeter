@extends('admin.layouts.app')
@section('content')

<form>
    <div class="mb-3">
        @if(isset($category))
        <h4>Edit Category</h4>
        @else
        <h4>Add Category</h4>
        @endif
        <div id="message"></div>
      <label  class="form-label">Category</label>
      <input type="text" id="category" name="category" class="form-control" aria-describedby="emailHelp" value=@if(isset($category)) {{$category->category}}} @endif>

    </div>

@if(isset($category))
    <button type="button" class="btn btn-primary" id="editCategory">Update</button>
    @else
    <button type="button" class="btn btn-primary" id="addCategory">Submit</button>
    @endif
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
            }
        })


    })
</script>
@endsection
