@extends('admin.layouts.app')
@section('content')
<form class="row g-3">
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Title</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Teacher</label>
      <select class="form-control">
          <option>Teacher  Name</option>

      </select>
    </div>
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Price</label>
        <input type="email" class="form-control" id="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Image</label>
        <input type="file" class="form-control" name="image">
      </div>
    <div class="col-12">
      <label for="inputAddress2" class="form-label">Description</label>
      <div id="editor">
        <p>Here goes the initial content of the editor.</p>
    </div>

    </div>


    <div class="col-12">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </form>
  @endsection
@section('scripts')
<script>
    ClassicEditor.create(document.querySelector('#editor'))
</script>
@endsection
