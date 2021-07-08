
<div class="menu">
    <div class="menu-header">
        <a href="{{route('home')}}" class="menu-header-logo">
            <img src="{{asset('assets/images/logo.png')}}" alt="logo">
        </a>
        <a href="index.html" class="btn btn-sm menu-close-btn">
            <i class="bi bi-x"></i>
        </a>
    </div>
    <div class="menu-body">
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                <div class="avatar me-3">
                    @if (Auth::user()->image != null)
                    <img src="{{asset('assets/images/user/'.Auth::user()->image)}}" class="rounded-circle" alt="image">
                    @else
                    <img src="{{asset('assets/images/user/man_avatar3.jpg')}}" class="rounded-circle" alt="image">

                    @endif

                </div>
                <div>
                    <div class="fw-bold">{{Auth::user()->name}}</div>
                    @if (Auth::user()->role_id == '1')
                    <small class="text-muted">Admin</small>
                    @endif
                    @if (Auth::user()->role_id == '2')
                    <small class="text-muted">Student</small>
                    @endif
                    @if (Auth::user()->role_id == '3')
                    <small class="text-muted">Teacher</small>
                    @endif

                </div>
            </a>

        </div>
        <ul>

          <li>
                <a class="@if (request()->route()->getName()=="admin.dashboard")
                    active
                @endif" href="{{route('admin.dashboard')}}">
                    <span class="nav-link-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </span>
                    <span>Dashboard</span>
                </a>
            </li>
            @if(Auth::user()->role_id == '1')
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="fab fa-discourse"></i>
                    </span>
                    <span>Courses</span>

                </a>
                <ul>
                    <li>
                        <a href="{{route('admin.course.list')}}" class='@if (request()->route()->getName()=="admin.course.list")
                            active
                        @endif"'>List</a>
                    </li>
                    <li>
                        <a href="{{route('admin.course.create')}}" class='@if (request()->route()->getName()=="admin.course.create")
                            active
                        @endif"' >Add Course</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </span>
                    <span>Teachers</span>
                </a>
                <ul>
                    <li>
                        <a href="{{route('admin.teachers')}}" class='@if (request()->route()->getName()=="admin.teachers")
                            active
                        @endif"'> List</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="fas fa-user-graduate"></i>
                    </span>
                    <span>Students</span>
                </a>
                <ul>
                    <li>
                        <a href="{{route('admin.students')}}" class='@if (request()->route()->getName()=="admin.students")
                            active
                        @endif"'>List</a>
                    </li>
                    <li>

                    </li>
                </ul>
            </li>
            <li>
                <a  href="{{route('admin.enrollments')}}" class='@if (request()->route()->getName()=="admin.enrollments")
                    active
                @endif"'>
                    <span class="nav-link-icon">
                        <i class="far fa-address-book"></i>
                    </span>
                    <span>Enrollments</span>
                </a>

            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="fas fa-external-link-alt"></i>
                    </span>
                    <span>Category</span>
                </a>
                <ul>
                    <li>
                        <a href="{{route('admin.categories')}}" class='@if (request()->route()->getName()=="admin.categories")
                            active
                        @endif"'> List</a>
                    </li>
                    <li>
                        <a href="{{route('admin.categories.create')}}" class='@if (request()->route()->getName()=="admin.categories.create")
                            active
                        @endif"'>Add</a>
                    </li>
                </ul>
            </li>
        </li>
        @endif
        @if (Auth::user()->role_id == '2')
        <li>
            <a href="{{route('admin.course.list')}}">
                <span class="nav-link-icon">
                    <i class="fab fa-discourse"></i>
                </span>
                <span>My Courses</span>
            </a>
            <ul>
                <li>
                    <a href="{{route('student.course.my.courses')}}" class='@if (request()->route()->getName()=="student.course.my.courses")
                        active
                    @endif"'>Courses List</a>
                </li>


            </ul>
        </li>
        <li>
            <a href="{{route('admin.course.list')}}"  class='@if (request()->route()->getName()=="admin.course.list")
                active
            @endif"'>
                <span class="nav-link-icon">
                    <i class="fas fa-book"></i>
                </span>
                <span>New Courses</span>
            </a>
            <ul>
                <li>
                    <a href="{{route('student.course.list')}}" class='@if (request()->route()->getName()=="student.course.list")
                        active
                    @endif"'>Courses</a>
                </li>


            </ul>
        </li>
        <li>
            <a href="{{route('admin.students.edit',Auth::user()->id )}}"  class='@if (request()->route()->getName()=="admin.teachers.edit")
                active
            @endif"'>
                <span class="nav-link-icon">
                    <i class="fas fa-user-alt"></i>
                </span>
                <span>Profile</span>
            </a>

        </li>


        @endif
        @if (Auth::user()->role_id == '3')
        <li>
            <a href="#">
                <span class="nav-link-icon">
                    <i class="fab fa-discourse"></i>
                </span>
                <span>My Courses</span>
            </a>
            <ul>
                <li>
                    <a href="{{route('teacher.course.list')}}" class='@if (request()->route()->getName()=="teacher.course.list")
                        active
                    @endif"'>My Courses List</a>
                </li>
                <li>
                    <a href="{{route('teacher.course.create')}}" class='@if (request()->route()->getName()=="teacher.course.create")
                        active
                    @endif"'>Add Course</a>
                </li>

            </ul>
        </li>
        <li>
            <a href="#">
                <span class="nav-link-icon">
                    <i class="fas fa-user-graduate"></i>
                </span>
                <span>My Students</span>
            </a>
            <ul>
                <li>
                    <a href="{{route('teacher.student.list')}}" class='@if (request()->route()->getName()=="teacher.student.list")
                        active
                    @endif"'>List</a>
                </li>
                <li>

                </li>
            </ul>
        </li>
        <li>
            <a href="">
                <span class="nav-link-icon">
                    <i class="fas fa-retweet"></i>
                </span>
                <span>Join Requests</span>
            </a>
            <ul>
                <li>
                    <a href="{{route('teacher.course.request')}}" class='@if (request()->route()->getName()=="teacher.course.request")
                        active
                    @endif"'>List</a>
                </li>
                <li>

                </li>
            </ul>
        </li>
        <li>
            <a href="{{route('admin.teachers.edit',Auth::user()->id )}}"  class='@if (request()->route()->getName()=="admin.teachers.edit")
                active
            @endif"'>
                <span class="nav-link-icon">
                    <i class="fas fa-user-alt"></i>
                </span>
                <span>Profile</span>
            </a>

        </li>

        @endif

        <li>

            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">

                <span class="nav-link-icon">
                    <i class="fas fa-sign-out-alt"></i>
                </span>
                <span>   {{ __('Logout') }}</span>
            </a>


             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form>
            </li>










        </ul>
    </div>
</div>
