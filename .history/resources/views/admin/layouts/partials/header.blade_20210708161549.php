<div class="header">
    <div class="menu-toggle-btn"> <!-- Menu close button for mobile devices -->
        <a href="#">
            <i class="bi bi-list"></i>
        </a>
    </div>
    <!-- Logo -->
    <a href="index.html" class="logo">
        <img width="100" src="{{asset('assets/images/logo.svg')}}" alt="logo">
    </a>
    <!-- ./ Logo -->

    <form class="search-form">
        <div class="input-group">
            <button class="btn btn-outline-light" type="button" id="button-addon1">

                <i class="fas fa-search" aria-hidden="true"></i>
            </button>
            <input type="text" id="searchKeyword" class="form-control" placeholder="Search courses, students, teachers...." aria-label="Example text with button addon" aria-describedby="button-addon1">
            <a type="button" id="searchBtn" class="btn btn-outline-light close-header-search-bar">
                <i class="fa fa-search"></i>
            </a>
        </div>
    </form>
    <div class="header-bar ms-auto">
        <ul class="navbar-nav justify-content-end">

            <li class="nav-item dropdown">
                <a href="#" class="nav-link"  data-bs-toggle="dropdown">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                    <h6 class="m-0 px-4 py-3 border-bottom">{{Auth::user()->name}}</h6>
                    <div class="dropdown-menu-body">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                @if (Auth::user()->role_id == '1')
                                <a href="{{route('admin.profile')}}" class="text-danger me-3" title="Remove">
                                    <i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;<span>Profile</span>

                                </a>

                                @endif
                                @if (Auth::user()->role_id == '2')
                                <a href="{{route('admin.students.edit',Auth::user()->id)}}" class="text-danger me-3" title="Remove">
                                    <i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;<span>Profile</span>

                                </a>

                                @endif  @if (Auth::user()->role_id == '3')
                                <a href="{{route('admin.teachers.edit',Auth::user()->id )}}" class="text-danger me-3" title="Remove">
                                    <i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;<span>Profile</span>

                                </a>

                                @endif

                                <div>


                                </div>


                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <a class="text-danger me-3" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;&nbsp;<span>Logout</span>

                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <div>


                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </li>
            @if(Auth::user()->role_id == '1')
            <li class="nav-item ms-3">

                <a href="{{route('admin.course.create')}}" class="btn btn-primary btn-icon">
                    <i class="fa fa-plus"></i> Add Course
                </a>




            </li>
            @endif
            @if(Auth::user()->role_id == '3')
            <li class="nav-item ms-3">
                    <a href="{{route('teacher.course.create')}}" class="btn btn-primary btn-icon">
                        <i class="fa fa-plus-circle"></i>  Add Course
    </a>
            </li>
            @endif
        </ul>
    </div>
    <!-- Header mobile buttons -->
    <div class="header-mobile-buttons">
        <a href="#" class="search-bar-btn">
            <i class="bi bi-search"></i>
        </a>
        <a href="#" class="actions-btn">
            <i class="bi bi-three-dots"></i>
        </a>
    </div>
