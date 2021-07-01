@extends('admin.layouts.app')
@section('content')
<h3>Student</h3>
<table id="datatable-example" class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Course</th>

        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Tiger Nixon</td>
        <td>System Architect</td>

        <td>2011/04/25</td>
        <td>

        </td>
      </tr>
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
