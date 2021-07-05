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
            <a href="{{route('admin.teachers.edit',$teacher->id)}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            <a type="button" class="dltTeacherBtn" data-id="{{$teacher->id}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
            <a href="{{route('admin.teachers.show',$teacher->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>

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

$('.dltTeacherBtn').on('click',function(){


})
</script>
@endsection