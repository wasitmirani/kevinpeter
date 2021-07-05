@extends('admin.layouts.app')
@section('content')
<div class="row flex-column-reverse flex-md-row">
    <div class="col-md-8">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="mb-4">
                    <div class="d-flex flex-column flex-md-row text-center text-md-start mb-3">
                        <figure class="me-4 flex-shrink-0">
                            @if(Auth::user()->image == null)
                            <img width="100" class="rounded-pill" src="../../assets/images/user/man_avatar3.jpg" alt="...">
                            @else
                            <img width="100" class="rounded-pill" src="{{asset('assets/images/user/'.Auth::user()->image)}}" alt="...">

                            @endif
                        </figure>
                        <div class="flex-fill">
                            <h5 class="mb-3">{{Auth::user()->name}}</h5>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Change Avatar</button>
                            {{-- <button class="btn btn-outline-danger btn-icon" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove Avatar">
                                <i class="bi bi-trash me-0"></i>
                            </button> --}}
                            {{-- <p class="small text-muted mt-3">For best results, use an image at least
                                256px by 256px in either .jpg or .png format</p> --}}
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="card-title mb-4">Basic Information</h6>
                            <div id="message"></div>
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}">
                                        </div>


                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control" value="{{Auth::user()->email }}">
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Role</label>
                                            <select class="form-select">
                                                <option @if(Auth::user()->role_id == '1') Selected @endif value="1">Admin</option>
                                                <option @if(Auth::user()->role_id == '2') Selected @endif value="2">Student</option>
                                                <option @if(Auth::user()->role_id == '3') Selected @endif value="3">Teacher</option>

                                            </select>
                                        </div>


                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary" id="updateProfile">Change Avatar</button>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title mb-4">Change Password</h6>
                        <div id="passwordMessage"></div>
                  <form id="changePassword">
                    <div class="mb-3">
                        <label class="form-label">New Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">New Password Repeat</label>
                        <input  type="password" id="confirm-password" placeholder="Password" name="password_confirmation" class="form-control">
                    </div>
                    <button type="button" class="btn btn-primary" id="changePassword">Change Avatar</button>
                  </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-md-4">
        <div class="card sticky-top mb-4 mb-md-0">
            <div class="card-body">
                <ul class="nav nav-pills flex-column gap-2" id="myTab" role="tablist">
                    <li class="nav-item " role="presentation">
                        <a class="nav-link active" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">
                            <i class="bi bi-person me-2"></i> Profile
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link " id="password-tab" data-bs-toggle="tab" href="#password" role="tab" aria-controls="password" aria-selected="false">
                            <i class="bi bi-lock me-2"></i> Password
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Avatar</h5>
          <h2 id="imageError"></h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="editAvatarForm">
              <input class="form-control" name="image" type="file">
              <input type="hidden" " name="id">

        </div>
        <div class="modal-footer">


          <button type="submit" class="btn btn-primary" id="editAvatarBtn" data-id="{{Auth::user()->id}}">Save changes</button>
        </form>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


@endsection
@section('scripts')
<script>
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

// Update Admin Profile
    $("#updateProfile").on('click',function(){

        var name= $("#name").val();
        var email = $("#email").val();
        var role= $("#role_id").val();
        $.ajax({
            url:'/admin/update/profile',
            type:"POST",
            data:{_token: "{{ csrf_token() }}",
            name:name,
            email:email,
            role:role

            },
            success:function(msg){
                $('#message').fadeIn().append("<p class='alert alert-warning alert-dismissible fade show'>"+msg+"<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button><p>");

            },
            error:function(err){
                $('#message').fadeIn().append("<p class='alert alert-warning alert-dismissible fade show'>"+err+"<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button><p>");

            }
        })




    });

    // Update Password

    $("#changePassword").on('click',function(){
        var password = $("password").val();
        var password_confirmation = $("confirm-password").val();
        console.log(password_confirmation)
        $.ajax({
            url:'/admin/update/password',
            type:"POST",
            data:{_token: "{{ csrf_token() }}"
                password:password,
                password_confirmation:password_confirmation,


            },
            success:function(msg){
                $('#passwordMessage').fadeIn().append("<p class='alert alert-warning alert-dismissible fade show'>"+msg+"<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button><p>");

            },
            error:function(err){
                if (err.status == 422) {
                        var errors = err.responseJSON.errors
                        $('#passwordMessage').empty()
                           jQuery.each(errors, (index, item) => {

                           $('#passwordMessage').fadeIn().append("<p class='alert alert-warning alert-dismissible fade show'>"+item+"<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button><p>");

         });
                     }

            }
        })

    })

});
</script>
@endsection
