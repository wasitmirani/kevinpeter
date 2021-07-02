@extends('admin.layouts.app')
@section('content')
<h3>Student</h3>
<table id="datatable-example" class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>>Email</th>

        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
      <tr>
        <td>{{$student->name}}</td>
        <td>{{$student->email}}</td>

        <td>2011/04/25</td>
        <td>

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
