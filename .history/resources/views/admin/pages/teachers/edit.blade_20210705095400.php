@extends('admin.layouts.app')
@section('content')
<div class="order-2 order-lg-1 col-lg-9 bd-content">
    <h4 id="overview">Edit Teacher</h4>
    <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text"  class="form-control" id="name" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">

          </div>

        <button type="button" id="editTeacherBtn" data-id="{{$teacher->id}}"  class="btn btn-primary">Update</button>
      </form>

</div>


@endsection
@section('scripts')
<script>
    $("#editTeacherBtn").on('click',function(){
        var name = $("#name").val();
        var email = $("#email").val();
        var id = $(this).data('id')



    })
</script>
@endsection
