
<!-- ./ notifications sidebar -->

<!-- settings sidebar -->

<!-- ./ settings sidebar -->

<!-- search sidebar -->

<!-- ./ search sidebar -->

<!-- ./ sidebars -->

<!-- menu -->
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
                    <i class="fab fa-discourse"></i>
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
