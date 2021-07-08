<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col-lg-7 col-md-12">
        <div class="card widget h-100">


        </div>
    </div>
    <div class="col-lg-5 col-md-12">
        <div class="card widget h-100">


        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card h-100">
            <div class="card-body">
                <div class="d-flex mb-3">
                    <div class="display-7">
                        <i class="fa fa-book" aria-hidden="true"></i>
                    </div>
                    <div class="dropdown ms-auto">
                        <a href="#" data-bs-toggle="dropdown" class="btn btn-sm" aria-haspopup="true" aria-expanded="false">

                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Detail</a>
                            <a href="#" class="dropdown-item">Download</a>
                        </div>
                    </div>
                </div>
                <h4 class="mb-3">Courses</h4>
                <div class="d-flex mb-3">
                    <div class="display-7">{{$totalCourses}}</div>

                </div>

            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card h-100">
            <div class="card-body">
                <div class="d-flex mb-3">
                    <div class="display-7">
                        <i class="fa fa-credit-card" aria-hidden="true"></i>
                    </div>
                    <div class="dropdown ms-auto">
                        <a href="#" data-bs-toggle="dropdown" class="btn btn-sm" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Detail</a>
                            <a href="#" class="dropdown-item">Download</a>
                        </div>
                    </div>
                </div>
                <h4 class="mb-3">Enrollments</h4></h4>
                <div class="d-flex mb-3">
                    <div class="display-7">{{$totalEnrollments}}</div>

                </div>

            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card h-100">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h6 class="card-title">Teachers</h6>
                    <div class="dropdown ms-auto">
                        <a href="{{route('admin.teachers')}}">View All</a>
                    </div>
                </div>
                <div class="summary-cards">
                    @foreach($teachers as $teacher)
                    <div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="avatar me-3">
                                <img src="{{asset('assets/images/user/'.$teacher->image)}}" class="rounded-circle" alt="image">
                            </div>
                            <div>
                                <h5 class="mb-1">{{$teacher->name}}</h5>
                                <ul class="list-inline ms-auto mb-0">
                                    <li class="list-inline-item mb-0">
                                        <i class="bi bi-star-fill text-warning"></i>
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="bi bi-star-fill text-warning"></i>
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="bi bi-star-fill text-warning"></i>
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="bi bi-star-fill text-warning"></i>
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="bi bi-star-fill text-muted"></i>
                                    </li>
                                    <li class="list-inline-item mb-0">(4)</li>
                                </ul>
                            </div>
                        </div>
                        @if(isset($teacher->category->category))
                        <div>{{$teacher->category->category}}</div>
                        @endif
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6">

    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card widget h-100">


        </div>
    </div>
    <div class="col-lg-5 col-md-12">
        <div class="card widget">
            <div class="card-header">
                <h5 class="card-title">Activity Overview</h5>
            </div>
            <div class="row g-4">

                    <div class="col-md-6">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <div class="display-5">
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                </div>
                                  <a href="{{route('admin.course.list')}}">
                                <h5 class="my-3">Courses</h5>
                                 </a>

                                {{-- <div class="text-muted"> New Courses</div> --}}
                                <div class="progress mt-3" style="height: 5px">
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>



                <div class="col-md-6">
                    <div class="card border-0">
                        <div class="card-body text-center">
                            <div class="display-5">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                              <a href="{{route('admin.teachers')}}">
                            <h5 class="my-3">Teachers</h5>
                            </a>
                            {{-- <div class="text-muted">72 New Items</div> --}}
                            <div class="progress mt-3" style="height: 5px">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 67%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-6">
                    <div class="card border-0">
                        <div class="card-body text-center">
                            <div class="display-5">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>
                             <a href="{{route('admin.students')}}">
                            <h5 class="my-3">Students</h5>
                                  </a>
                            {{-- <div class="text-muted">50 Support New Cases</div> --}}
                            <div class="progress mt-3" style="height: 5px">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>


                 {{-- <a> --}}
                    <div class="col-md-6">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <div class="display-5">
                                    <i class="bi bi-cursor text-success"></i>
                                </div>
                                <h5 class="my-3">Arrived</h5>
                                {{-- <div class="text-muted">34 Upgraded Boxed</div> --}}
                                <div class="progress mt-3" style="height: 5px">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                 {{-- </a> --}}

            </div>
        </div>
    </div>
    <div class="col-lg-7 col-md-12">
        <div class="card widget">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title">Recent Courses</h5>
                <div class="dropdown ms-auto">
                    <a href="#" data-bs-toggle="dropdown" class="btn btn-sm btn-floating" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-three-dots"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a href="#" class="dropdown-item">Action</a>
                        <a href="#" class="dropdown-item">Another action</a>
                        <a href="#" class="dropdown-item">Something else here</a>
                    </div>
                </div>
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-custom mb-0" id="recent-products">
                        <thead>
                        <tr>
                            <th>
                                <input class="form-check-input select-all" type="checkbox" data-select-all-target="#recent-products" id="defaultCheck1">
                            </th>
                            <th>Image</th>
                            <th>Course Title</th>
                            <th>Teacher</th>
                            <th>Price</th>
                            <th class="text-end">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($courses as $course)
                        <tr>
                            <td>
                                <input class="form-check-input" type="checkbox">
                            </td>
                            <td>
                                <a href="#">
                                    <img src="{{asset('admin/courses/images/'.$course->image)}}" class="rounded" width="40" alt="...">
                                </a>
                            </td>
                            <td>{{$course->course_title}}</td>
                            <td>
                                {{$course->teachers->name}}

                            </td>
                            <td>${{$course->price}}</td>
                            <td class="text-end">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-three-dots"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">view</a>

                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


