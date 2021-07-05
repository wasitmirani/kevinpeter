@extends('admin.layouts.app')
@section('content')

<form>
    <div class="mb-3">
      <label  class="form-label">Category</label>
      <input type="text" class="form-control" aria-describedby="emailHelp">

    </div>


    <button type="submit" class="btn btn-primary" id="addCategory">Submit</button>
  </form>

@endsection
