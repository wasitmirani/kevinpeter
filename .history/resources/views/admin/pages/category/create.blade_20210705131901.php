@extends('admin.layouts.app')
@section('content')

<form>
    <div class="mb-3">
      <label  class="form-label">Category</label>
      <input type="text" class="form-control" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
