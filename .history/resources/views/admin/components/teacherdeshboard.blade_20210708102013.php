<div class="content ">

    <div class="buyer-profile-cover bg-image mb-4" data-image="../../assets/images/tavatar.jpg">
        <div class="container d-flex align-items-center justify-content-center h-100 flex-column flex-md-row text-center text-md-start">
            <div class="avatar avatar-xl me-3">
                @if(Auth::user()->image == null)
                <img src="{{asset('images/user/tavatar.jpg')}}" class="rounded-circle" alt="...">
                @else
                <img src="{{asset('assets/images/user/'.Auth::user()->image)}}" class="rounded-circle" alt="...">

                @endif
            </div>
            <div class="my-4 my-md-0">
                <h3 class="mb-1">{{Auth::user()->name}}</h3>
                <small class="badge badge-info">Teacher</small>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Change Avatar</button>

            </div>
            <div class="ms-md-auto">
                <a href="{{route('admin.teachers.edit',Auth::user()->id)}}" class="btn btn-primary btn-lg btn-icon">
                    <i class="fa fa-pencil"></i>Edit Account
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">

    <div class="row g-4 mb-4">
        <div class="col-md-6">
            <div class="card bg-cyan text-white-90">
                <div class="card-body d-flex align-items-center">
                    <i class="fa fa-book display-7 me-3"></i>
                    <div>
                        <h4 class="mb-0">{{$totalCourses}}</h4>
                        <span>My Courses</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card bg-purple text-white-90">
                <div class="card-body d-flex align-items-center">
                    <i class="fa fa-graduation-cap display-7 me-3"></i>
                    <div>
                        <h4 class="mb-0">{{$students}}</h4>
                        <span>My Students</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="card mb-4">
        <div class="card-body">
            <h6 class="card-title mb-4">Course List</h6>
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
                    <td>@if (isset($course->teachers->name)){{$course->teachers->name}} @else - @endif </td>
                    <td ><img src="{{asset('admin/courses/images/'.$course->image)}}" style="width:40px; height:40px;"></td>
                    <td>
                        <a href=""><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a type="button" class="dltCourseBtn" data-id="{{$course->id}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                  </tr>
                @endforeach
                  ...
                </tbody>
              </table>

        </div>
    </div>


        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-pills flex-column gap-2">
                        <li class="nav-item">
                            <a class="nav-link  active " href="buyer-dashboard.html">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="buyer-orders.html">My Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="buyer-addresses.html">My Students</a>
                        </li>

                    </ul>
                </div>
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
    <!-- ./ content -->
