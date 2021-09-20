@extends('layouts.master')

@section('content')
<section class="main-register">
    <div class="container">

            <div class="col-md-12">
                <h1>Enroll Now</h1>
                @if (Session::has('message'))

                <p class="alert alert-success">{{Session::get('message')}}</p>

               @endif

            <form id="require-validation" action="{{route('enroll.now')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input id="key" type="hidden" name="stripe_key" value="{{ env('STRIPE_KEY') }}">
                <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first-name">
                        Student Name</label>
                        <input type="text" class="form-control" name="name" placeholder="First Name" value="{{Auth::user()->name}}">

                    </div>
                    <div class="form-group">
                        <label for="first-name">
                        Course Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Email Address" value="{{$course->course_title}}">

                    </div>
                    <div class="form-group">
                        <label for="first-name">
                        Teacher Name</label>
                        <input type="text" class="form-control" placeholder="" name="teacher" value="@if(isset($course->teachers->name)){{$course->teachers->name}}@endif">

                    </div>
                    <div class="form-group">
                        <label for="first-name">
                    Course Price</label>
                        <input type="text" class="form-control" placeholder="" name="price" value="{{$course->price}}">
                        <input type="hidden" name="teacher_id" value={{$course->teachers->id}}>
                        <input type="hidden" name="id" value={{$course->id}}>

                    </div>
                    <div class="form-group">
                        <label for="password"
                            class="Control-label Control-label--password"
                            >Course Category
                        </label>

                        <input type="text"  class="form-control" placeholder="Enter Category" name="category" value="@if(isset($course->category->category)){{$course->category->category}}@endif">

                    </div>

                </div>
                <div class="col-md-6">

                        <h2>Payment Details</h2>
                    <div class="form-group">
                        <label for="cc-name">Name on card</label>
                        <input input
                        class='form-control' size='4' type='text'>
                        <small class="text-muted">Full name as displayed on card</small>
                        <div class="invalid-feedback">
                          Name on card is required
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cc-number">Credit card number</label>
                        <input   autocomplete='off' class='form-control card-number' size='20'
                        type='text'>
                        <div class="invalid-feedback">
                          Credit card number is required
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cc-expiration">Expiration Month</label>
              <input type="text" class="form-control card-expiry-month" id="cc-expiration" placeholder='MM' required="">
              <div class="invalid-feedback">
                Expiration date required
              </div>
                    </div>
                    <div class="form-group">
                        <label for="cc-expiration">Expiration Year</label>
                        <input  class='form-control card-expiry-year' placeholder='YYYY' size='4'
                        type='text'>
                        <div class="invalid-feedback">
                          Expiration date required
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cc-expiration">CVV</label>
                        <input  autocomplete='off'
                        class='form-control card-cvc' placeholder='311' size='4'
                        type='text'>
                        <div class="invalid-feedback">
                          Security code required
                        </div>
                    </div>




            </div>
    <div class="col-12">
        <button  data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" type="button" id="paymentSubmit" class="btn btn-business w-100">Enroll</button>
    </div>
        </div>
    </form>
    </div>
</section>

@endsection
@section('scripts')
<script></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script>
    $('#paymentSubmit').on('click', function (e) {
        e.preventDefault();
        var stripekey = $('#key').val();
        var $form = $("#require-validation");
        var $form  = $("#require-validation");

        if (!$form.data('cc-on-file')) {

                  Stripe.setPublishableKey(stripekey);
                  Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                  }, stripeResponseHandler);
                }

        function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    /* token contains id, last4, and card type */
                    var token = response['id'];
                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");

                    $form.get(0).submit();
                }
            }

      })


</script>
@endsection

