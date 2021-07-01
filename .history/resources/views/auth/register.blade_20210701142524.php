@extends('layouts.master')

@section('content')
<section class="main-register">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="img-box">
                    <img src="{{asset('frontend/assets/images/login-img.jpg')}}" class="img-fluid" alt="">
                    <div class="overlay">
                        <h3>Welcome To</h3>
                        <h2>Kevin Peter Jones <strong>Music School</strong> </h2>
                        <p>Grursus mal suada faci lisis Lorem ipsum dolarorit more ametion consectetur elit. Vesti at bulum nec odio aea the dumm ipsumm ipsum that dolocons rsus mal suada and fadolorit to the dummy consectetur elit the Lorem Ipsum genera.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 dis-flex">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <label for="first-name">
                            Name</label>
                            <input type="text" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus class="form-control" placeholder="Name">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        </div>

                        <div class="col-12">
                            <label for="first-name">
                            Email Address</label>
                            <input type="email" class="form-control" placeholder="Email Address" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        </div>
                         <div class="col-12">
                            <label for="first-name">
                            Password</label>
                            <input type="password" class="form-control" placeholder="Password" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>


                        <div class="col-12">
                            <label for="password"
                                class="Control-label Control-label--password"
                                >Confirm Password
                            </label>
                            <input type="checkbox" id="show-password" class="show-password"  placeholder=" Password" checked >
                            <label for="show-password" class="m-0 Control-label Control-label--showPassword" >
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="32" height="32" class="svg-toggle-password" title="Toggle Password Security">
                                    <title>Hide/Show Password</title>
                                    <path d="M24,9A23.654,23.654,0,0,0,2,24a23.633,23.633,0,0,0,44,0A23.643,23.643,0,0,0,24,9Zm0,25A10,10,0,1,1,34,24,10,10,0,0,1,24,34Zm0-16a6,6,0,1,0,6,6A6,6,0,0,0,24,18Z"/>
                                    <rect x="20.133" y="2.117" height="44" transform="translate(23.536 -8.587) rotate(45)" class="closed-eye"/>
                                    <rect x="22" y="3.984" width="4" height="44" transform="translate(25.403 -9.36) rotate(45)" style="fill:#fff" class="closed-eye"/>
                                </svg>
                            </label>

                            <input type="password" id="password" class="form-control" placeholder="Password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">

                        </div>
                        <div class="col-12">
                            <label for="first-name">
                            Register As</label>
                            <select class="form-control" name="role">
                                <option>Select Role</option>
                                <option value="2">Student</option>
                                <option value="3">Teacher</option>


                            </select>

                        </div>


                        <div class="col-12 mt-5">
                            <button type="submit" class="btn btn-business w-100"></button>
                        </div>
                          <div class="col-12 text-center mt-4 ">
                            Have an account?<a class="text-dark" href="#"> <strong>Log in</strong></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
