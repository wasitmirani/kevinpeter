@extends('admin.layouts.app')
@section('content')
<div>
    <h3>Course</h3>
</div>
<form class="row g-3" action="{{route('admin.course.store')}}" method="post" enctype="multipart/form-data" >
    @csrf
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Title</label>
      <input type="text" name="title" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Teacher</label>
      <select class="form-control">
          <option>Teacher  Name</option>
          @foreach($teachers as $teacher)
          <option value="{{$teacher->id}}">{{$teacher->name}}</option>
          @endforeach

      </select>
    </div>
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Price</label>
        <input type="number" name="price" class="form-control" id="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Image</label>
        <input type="file" class="form-control" name="image">
      </div>
    <div class="col-12">
      <label for="inputAddress2" class="form-label">Description</label>
      <div id="editor">

    </div>

    </div>


    <div class="col-12">
      <button type="submit" class="btn btn-primary">Add Course</button>
    </div>
  </form>
  @endsection
@section('scripts')
<script>
    ClassicEditor.create(document.querySelector('#editor'))
</script>
@endsection
