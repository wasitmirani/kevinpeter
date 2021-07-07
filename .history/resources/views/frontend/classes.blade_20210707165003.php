@extends('layout.master')
@section('content')
<section class="study dis-flex headline">
    <div class="container">
        <div class="col-lg-10 m-auto">
            <h2 class="heading-two mb5">Do You Want To Study <span>at Kevin Peter Jones Music School? </span></h2>
            <p class="para-two">A professional instructor will teach your lesson at a preappointed day and time each week. Material from the previous lesson will be briefly reviewed, then new material will be introduced. You'll learn exercises to develop playing technique and music theory knowledge as well as practical skills such as ear training, sight-reading and notation to give you the confidence to explore the style of music you prefer. You'll also learn how to play real songs, and your teacher will be happy to work your favorite music into the curriculum. At the end of the lesson, your instructor will provide you with material to practice before your next lesson.</p>
            <a href="{{route('contact')}}" class="btn btn-business">Get Started</a>
        </div>
    </div>
</section>


@endsection
