@extends('admin.layouts.app')
@section('content')
<h3>Course</h3>
<table id="datatable-example" class="table">
    <thead>
      <tr>
        <th>Course Title</th>
        <th>Description</th>
        <th>Price</th>
        <th>Teacher</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($courses as $course)
      <tr>
        <td>{{$course->course_title}}</td>
        <td>{!! $course->course_description !!}</td>
        <td>{{$course->price}}</td>
        <td>@if (isset($course->teachers->name))
          {{$course->teachers->name}}
          @else -
        @endif </td>
        <td ><img src="{{asset('admin/courses/images/'.$course->image)}}" style="width:40px; height:40px;"></td>
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
