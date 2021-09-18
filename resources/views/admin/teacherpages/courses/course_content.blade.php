@extends('admin.layouts.app')
@section('content')
<table id="datatable-example" class="table">
    <thead>
      <tr>
        <th>Course Title</th>
        <th>Category</th>
         <th>File</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
    @foreach($courses as $course)
      <tr>
        <td></td>
        <td> </td>
        <td></td>

        <td>
            <a href=""><i class="fa fa-pencil" aria-hidden="true"></i></a>
            <a type="button" class="dltCourseBtn" data-id=""><i class="fa fa-trash" aria-hidden="true"></i></a>
        </td>

      </tr>
    @endforeach
      ...
    </tbody>
  </table>



@endsection
