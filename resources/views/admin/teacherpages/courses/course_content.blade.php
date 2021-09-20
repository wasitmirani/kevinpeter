@extends('admin.layouts.app')
@section('content')
<table id="datatable-example" class="table">
    <thead>
      <tr>
        <th>Course Title</th>
          <th>Lesson Title</th>
         <th>Download Lesson</th>
        {{-- <th>Action</th> --}}

      </tr>
    </thead>
    <tbody>
    @foreach($contents as $content)
      <tr>
        <td>{{ $content->course->course_title }}</td>
        <td>{{ $content->lessonTitle }}</td>
        <td><a href="{{ route('teacher.course.download.content',$content->id) }}"><i class="fas fa-download"></i></a> </td>

{{--
        <td>
            <a href=""><i class="fa fa-pencil" aria-hidden="true"></i></a>
            <a type="button" class="dltCourseBtn" data-id=""><i class="fa fa-trash" aria-hidden="true"></i></a>
        </td> --}}

      </tr>
    @endforeach
      ...
    </tbody>
  </table>



@endsection
