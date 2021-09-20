@extends('admin.layouts.app')
@section('content')
<div class="row flex-column-reverse flex-md-row">
    <table id="datatable-example" class="table">
        <thead>
          <tr>
            <th>Course</th>
            <th>Price</th>
            <th>Action</th>
          </tr>
        </thead>
        @foreach($sales as $sale)
        <tr>
            <td>{{ $sale->course->course_title }}</td>
            <td>{{ $sale->price }}$</td>
            <td></td>
        </tr>
        @endforeach()
        <tbody>
        </tbody>
    </table>

</div>

@endsection
@section('scripts')
<script>
      $('#datatable-example').DataTable({
    responsive: true
});
</script>
@endsection
