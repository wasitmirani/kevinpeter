@extends('admin.layouts.app')
@section('content')
@if(Auth::user()->role_id == '1')

@include('admin.components.admindeshboard')

@endif
@if(Auth::user()->role_id == '2')
@include('admin.components.studentdeshboard')

@endif
@if(Auth::user()->role_id == '3')
@include('admin.components.teacherdeshboard')


@endif

@endsection
@section('scripts')
<script>
    $('#datatable-example').DataTable({
    responsive: true
});
$(document).ready(function(){
        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
//Update Profile Picture
    $('#editAvatarForm').on('submit',function(e){
        e.preventDefault()
    var data = new FormData(this)
      $.ajax({
          url:"/admin/update/profile/avatar",
          type:"POST",
          data: data,
          processData: false,
          contentType: false,
          success:function(msg){
            location.reload();

          },
          error:function(err){
            $('#imageError').fadeIn().append("<p class='alert alert-warning alert-dismissible fade show'>"+err+"<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button><p>");

          }
      })
    })

    $('#searchBtn').on('click',function(){

        var searchKeyword = $("#searchKeyword").val();

        $.ajax({
            url:"/admin/search",
            type:"POST",
            data:{
                keyword:searchKeyword,
                _token:"{{csrf_token()}}"
            },
            success:function(msg){
                jQuery.each(errors, (index, item) => {
                    console.log(item)
                }



            },
            error:function(err){
                console.log(err)

            }
        })

    })
});

// fetch(url)
//     .then(response => {
//         // handle the response
//     })
//     .catch(error => {
//         // handle the error
//     })
</script>
@endsection
