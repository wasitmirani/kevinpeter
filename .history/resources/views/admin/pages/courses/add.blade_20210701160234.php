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
      <label for="inputAddress2" class="form-label">Category</label></label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>

    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Check me out
        </label>
      </div>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </form>
  @endsection
