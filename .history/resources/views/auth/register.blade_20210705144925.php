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
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Teacher</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Student</a>
                    </li>

                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>

                  </div>
            </div>
        </div>
    </div>
</section>
@endsection
