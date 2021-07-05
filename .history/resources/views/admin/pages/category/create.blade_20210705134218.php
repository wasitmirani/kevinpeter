@extends('admin.layouts.app')
@section('content')

<form>
    <div class="mb-3">
        <h4>Add Category</h4>
        <div id="message"></div>
      <label  class="form-label">Category</label>
      <input type="text" id="category" name="category" class="form-control" aria-describedby="emailHelp">

    </div>


    <button type="button" class="btn btn-primary" id="addCategory">Submit</button>
  </form>

@endsection
@section('scripts')
<script>
    $('#addCategory').on('click',function(){

        var category = $("#category").val();
        $.ajax({

        })


    })
</script>
@endsection
