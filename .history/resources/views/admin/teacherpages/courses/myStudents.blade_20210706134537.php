@extends('admin.layouts.app')
@section('content')
<table id="datatable-example" class="table">
    <thead>
      <tr>
        <th>Student Name</th>
        <th>Course Taken</th>

        <th>Category</th>
        <th>Image</th>

      </tr>
    </thead>
    <tbody>
    @foreach($students as $student)
      <tr>
        <td>{{$student->student->name}}</td>
        <td>{{$student->course->course_title}}</td>
        <td>{{$student->category}}</td>
        <td>{{asset('assets/images/user/')$student->student->image}}</td>

      </tr>
    @endforeach
      ...
    </tbody>
  </table>

@endsection
