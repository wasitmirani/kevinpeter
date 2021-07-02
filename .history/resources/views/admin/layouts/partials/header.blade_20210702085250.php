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
                <i class="bi bi-search"></i>
            </button>
            <input type="text" class="form-control" placeholder="Search..." aria-label="Example text with button addon" aria-describedby="button-addon1">
            <a href="#" class="btn btn-outline-light close-header-search-bar">
                <i class="bi bi-x"></i>
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
                                <a href="#" class="text-danger me-3" title="Remove">
                                    <i class="fa fa-user" aria-hidden="true"></i>

                                </a>
                                <div>
                                    <h6>Profile</h6>

                                </div>


                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <a href="#" class="text-danger me-3" title="Remove">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i>

                                </a>

                                <div>
                                    <h6>Logout</h6>

                                </div>
                            </div>
                        </div>

                    </div>
                    <h6 class="m-0 px-4 py-3 border-top small">Sub Total : <strong class="text-primary">$1.442,78</strong></h6>
                </div>
            </li>
            <li class="nav-item ms-3">
                    <a href="{{route('admin.course.create')}}" class="btn btn-primary btn-icon">
        <i class="bi bi-plus-circle"></i> Add Course
    </a>
            </li>
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
