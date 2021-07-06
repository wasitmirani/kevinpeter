@extends('admin.layouts.app')
@section('content')
<table id="datatable-example" class="table">
    <thead>
      <tr>
        <th>Student Name</th>
        <th>Course Taken</th>

        <th>Category</th>
        <th>Image</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
    @foreach($enrollments as $student)
      <tr>
        <td>@if(isset($student->student->name)){{$student->student->name}}@endif</td>
        <td>@if(isset($student->student->name)){{$student->course->course_title}}@endif</td>
        <td> @if(isset($student->student->name)){{$student->category}}@endif</td>
        <td>@if(isset($student->student->name))<img stc="{{asset('assets/images/user/').$student->student->image}}">@endif</td>
        <td><a href="{{route('teacher.student.detail',$student->id)}}"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>

      </tr>
    @endforeach
      ...
    </tbody>
  </table>

@endsection
