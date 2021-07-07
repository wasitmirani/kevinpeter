@extends('admin.layouts.app')
@section('content')
<div class="row flex-column-reverse flex-md-row">
    <div class="col-md-8">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="mb-4">
                    <div class="d-flex flex-column flex-md-row text-center text-md-start mb-3">
                        <figure class="me-4 flex-shrink-0">
                            <img width="100" class="rounded-pill" src="{{asset('assets/images/user/man_avatar3.jpg')}}" alt="...">
                        </figure>
                        <div class="flex-fill">
                            <h5 class="mb-3">{{$teacher->name}}</h5>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Change Avatar</button>
                            {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Change Avatar</button> --}}

                            {{-- <p class="small text-muted mt-3">For best results, use an image at least
                                256px by 256px in either .jpg or .png format</p> --}}
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="card-title mb-4">Basic Information</h6>
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control" value="{{$teacher->name}}">

                                        </div>
                                        {{-- <div class="mb-3">
                                            <label class="form-label">Username</label>
                                            <input type="text" class="form-control" value="adek-kembar">
                                        </div> --}}
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control" value="{{$teacher->email}}">
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Role</label>
                                            <select class="form-select">
                                                <option @if($teacher->role_id == '1') selected @endif value="1">Admin</option>
                                                <option @if($teacher->role_id == '2') selected @endif value="2">Student</option>
                                                <option @if($teacher->role_id == '3') selected @endif value="3">Teacher</option>

                                            </select>
                                        </div>
                                        {{-- <div class="mb-3">
                                            <label class="form-label">Status</label>
                                            <select class="form-select">
                                                <option value="">All</option>
                                                <option value="" selected="">Active</option>
                                                <option value="">Blocked</option>
                                            </select>
                                        </div> --}}
                                        {{-- <div class="mb-3">
                                            <label class="form-label">Department</label>
                                            <select class="form-select">
                                                <option value="">All</option>
                                                <option value="">Sales</option>
                                                <option value="" selected="">Development</option>
                                                <option value="">Management</option>
                                            </select>
                                        </div> --}}
                                        <div class="mb-3">
                                            <button class="btn btn-primary me-2" id="updateProfileBtn">Update Profile</button>
                                        </div>
                                    </div>

                                </div>

                            </form>

                        </div>
                    </div>
                </div>


            </div>
            {{-- <div class="tab-pane fade " id="password" role="tabpanel" aria-labelledby="password-tab">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title mb-4">Change Password</h6>
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Old Password</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">New Password</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">New Password Repeat</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary me-2" id="updateProfileBtn">Update Password</button>
                            </div>

                        </form>



                    </div>
                </div>
            </div> --}}

        </div>
    </div>
    <div class="col-md-4">
        <div class="card sticky-top mb-4 mb-md-0">
            <div class="card-body">
                <ul class="nav nav-pills flex-column gap-2" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">
                            <i class="bi bi-person me-2"></i> Profile
                        </a>
                    </li>
                    {{-- <li class="nav-item" role="presentation">
                        <a class="nav-link " id="password-tab" data-bs-toggle="tab" href="#password" role="tab" aria-controls="password" aria-selected="false">
                            <i class="bi bi-lock me-2"></i> Password
                        </a>
                    </li> --}}

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





     })

</script>
@endsection
