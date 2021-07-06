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
                <ul id="tabs-nav">
                    <li><a class="nav-link" href="#tab1">Bob</a></li>
                    <li><a class="nav-link" href="#tab2">Dante</a></li>

                  </ul>
                  <div id="tabs-content">
                    <div id="tab1" class="tab-content">
                      <h2>Silent Bob</h2>
                      <p>"You know, there's a million fine looking women in the world, dude. But they don't all bring you lasagna at work. Most of 'em just cheat on you."</p>
                    </div>
                    <div id="tab2" class="tab-content">
                      <h2>Dante Hicks</h2>
                      <p>"My friend here's trying to convince me that any independent contractors who were working on the uncompleted Death Star were innocent victims when it was destroyed by the Rebels."</p>
                    </div>

                </div> <!-- END tabs-content -->

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
