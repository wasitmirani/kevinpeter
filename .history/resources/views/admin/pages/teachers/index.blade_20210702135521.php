@extends('admin.layouts.app')
@section('content')
<h3>Teachers</h3>
<table id="datatable-example" class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Speciality</th>

        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($teachers as $teacher)
      <tr>
        <td>{{$teacher->name}}</td>
        <td>System Architect</td>

        <td>{{$teacher->email}}</td>
        <td>

        </td>
      </tr>
      @endforeach
      ...
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
