<div class="content ">

    <div class="buyer-profile-cover bg-image mb-4" data-image="../../assets/images/profile-bg.jpg">
        <div class="container d-flex align-items-center justify-content-center h-100 flex-column flex-md-row text-center text-md-start">
            <div class="avatar avatar-xl me-3">
                <img src="../../assets/images/user/women_avatar3.jpg" class="rounded-circle" alt="...">
            </div>
            <div class="my-4 my-md-0">
                <h3 class="mb-1">{{Auth::user()->name}}</h3>
                <small>Student</small>
            </div>
            <div class="ms-md-auto">
                <a href="settings.html" class="btn btn-primary btn-lg btn-icon">
                    <i class="bi bi-pencil small"></i> Edit Account
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">

    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <div class="card bg-cyan text-white-90">
                <div class="card-body d-flex align-items-center">
                    <i class="bi bi-box-seam display-7 me-3"></i>
                    <div>
                        <h4 class="mb-0">45</h4>
                        <span>My Orders</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-purple text-white-90">
                <div class="card-body d-flex align-items-center">
                    <i class="bi bi-heart display-7 me-3"></i>
                    <div>
                        <h4 class="mb-0">5</h4>
                        <span>My Wishlist</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-teal text-white-90">
                <div class="card-body d-flex align-items-center">
                    <i class="bi bi-wallet2 display-7 me-3"></i>
                    <div>
                        <h4 class="mb-0">$9,000</h4>
                        <span>My Profit</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <h6 class="card-title mb-4">My List</h6>
            <table id="datatable-example" class="table">
                <thead>
                  <tr>
                    <th>Course Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Teacher</th>
                    <th>Category</th>
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
                        <a href="{{route('admin.course.edit',$course->id)}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
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
                            <a class="nav-link " href="buyer-addresses.html">My Teachers</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- ./ content -->
