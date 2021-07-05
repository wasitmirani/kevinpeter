@extends('admin.layouts.app')
@section('content')
<h4>Categories List</h4>
<table id="datatable-example" class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->category}}</td>

          </tr>

        @endforeach


    </tbody>
  </table>
@endsection
@section('scripts')
<script>
    $('#datatable-example').DataTable({
    responsive: true
});
</script>
@endsection
