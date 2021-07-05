@extends('admin.layouts.app')
@section('content')
<h4>Categories List</h4>
<table id="datatable-example" class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->category}}</td>
            <td>
                <a href="{{route('admin.categories.edit',$category->id)}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                <a type="button" class="dltCategoryBtn" data-id="{{$category->id}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>

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
