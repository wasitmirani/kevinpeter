<div class="header-wrapper headline">
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">

                    <div class="menu-wrapper">
                        <!-- <div class="menu-hamburger"></div> -->
                        <div class="logo">
                            <img src="{{asset('frontend/assets/images/logo.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="nav-wrapper">
                        <nav>
                            <ul>
                                <li><a href="/">Home          </a></li>
                                <li><a href="#">About Us          </a></li>
                                <li><a href="#">Our Teachers     </a></li>
                                <li><a href="#">Classes          </a></li>
                                <li><a href="#">Contact Us   </a></li>
                                @guest
                                @if (Route::has('login'))
                                <li><a href="{{route('login')}}">Login  </a></li>
                                @endif

                            @if (Route::has('register'))
                                <li><a href="{{route('register')}}">Register Online</a></li>
                                @endif
                            @else
                            <li><a href="#">{{Auth::user()->name}}</a></li>
                            <li><a " href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">Logout</a>
                                               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                              </li>
                            @endguest

                            </ul>
                        </nav>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>


