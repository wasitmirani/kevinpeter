@extends('admin.layouts.app')
@section('content')

<form>
    <div class="mb-3">
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

            },
            error:function(err){

            }
        })


    })
</script>
@endsection
