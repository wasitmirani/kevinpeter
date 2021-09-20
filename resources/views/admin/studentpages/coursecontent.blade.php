@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive" tabindex="1" style="overflow: hidden; outline: none;">
                    <table class="table table-custom table-lg mb-0" id="shopping-cart">
                        <thead>
                        <tr>
                            <th>Lessons</th>
                            <th>Download Lesson</th>

                        </tr>
                        </thead>
                        <tbody>
                            @foreach($contents as $content)
                        <tr>

                            <td>{{$content->lessonTitle}}</td>
                            <td><a href="{{ route('teacher.course.download.content',$content->id) }}"><i class="fas fa-download"></i></a> </td>


                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
