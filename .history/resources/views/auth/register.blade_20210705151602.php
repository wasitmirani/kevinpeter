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
                <ul class="nav nav-tabs" id="tabs-nav" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="home" aria-selected="true">Teacher</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="profile" aria-selected="false">Student</button>
                    </li>

                  </ul>

                  <div class="" id="tab-content">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="home-tab">Teacher</div>
                    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="profile-tab">Student</div>

                  </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section("scripts")
<script>
  // Show the first tab and hide the rest
$('#tabs-nav li:first-child').addClass('active');
$('.tab-content').hide();
$('.tab-content:first').show();

// Click function
$('#tabs-nav li').click(function(){
  $('#tabs-nav li').removeClass('active');
  $(this).addClass('active');
  $('.tab-content').hide();

  var activeTab = $(this).find('a').attr('href');
  $(activeTab).fadeIn();
  return false;
});

</script>
@endsection
