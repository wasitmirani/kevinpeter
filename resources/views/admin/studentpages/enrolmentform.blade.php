@extends('admin.layouts.app')
@section('content')
<div class="content ">
<h4>Enrolment Form</h4>
<div class="card-body">
    <div id="message"></div>
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Student Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" value="{{Auth::user()->name}}">

        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Course Title</label>
            <input type="text" class="form-control" id="title" value="{{$course->course_title}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Teacher Name</label>
            <input type="hidden" value="{{$course->teachers->id}}" id="teacher_id">
            <input type="text" class="form-control" id="teacher" value="{{$course->teachers->name}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Course Category</label>
            <input type="text" class="form-control" id="category" value="@if(isset($course->category)){{$course->category->category}}@endif">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Course Price</label>
            <input type="text" class="form-control" id="price" value={{$course->price}}>
        </div>
        <div class="col-12">
            <h2>Payment Details</h2>
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="cc-name">Name on card</label>
                  <input input
                  class='form-control' size='4' type='text'>
                  <small class="text-muted">Full name as displayed on card</small>
                  <div class="invalid-feedback">
                    Name on card is required
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="cc-number">Credit card number</label>
                  <input   autocomplete='off' class='form-control card-number' size='20'
                  type='text'>
                  <div class="invalid-feedback">
                    Credit card number is required
                  </div>
                </div>
              </div>

        </div>
        <div class="col-12">
        <div class="row">
            <div class="col-md-3 mb-3">
              <label for="cc-expiration">Expiration Month</label>
              <input type="text" class="form-control card-expiry-month" id="cc-expiration" placeholder='MM' required="">
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration Year</label>
                <input  class='form-control card-expiry-year' placeholder='YYYY' size='4'
                type='text'>
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
            <div class="col-md-3 mb-3">
              <label for="cc-expiration">CVV</label>
              <input  autocomplete='off'
              class='form-control card-cvc' placeholder='311' size='4'
              type='text'>
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div>
        </div>


        <div class="col-12">
            <button  data-stripe-publishable-key="" type="button" id="paymentSubmit" class="btn btn-business w-100">Enroll</button>
        </div>
    </form>
</div>

</div>

@endsection
@section('scripts')
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
<script>
    $(document).ready(function(){
        $('#enrollFormBtn').on('click',function(){

            var name = $("#name").val();
            var title = $("#title").val();
            var teacher = $("#teacher").val();
            var category = $("#category").val();
            var price = $("#price").val();
            var teacher_id = $("#teacher_id").val();
            var id = $(this).data('id');

            $.ajax({
                url:"/student/course/enroll",
                type:"POST",
                data:{
                    name : name,
                    title:title,
                    teacher: teacher,
                    category: category,
                    price: price,
                    teacher_id : teacher_id,
                    id : id,
                    _token:"{{csrf_token()}}"

                },
                success:function(msg){
                    $('#message').fadeIn().append("<p class='alert alert-warning alert-dismissible fade show'>"+msg+"<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button><p>");



                },
                error:function(err){
                    if (err.status == 422) {
                        var errors = err.responseJSON.errors
                        $('#message').empty()
                           jQuery.each(errors, (index, item) => {

                           $('#message').fadeIn().append("<p class='alert alert-warning alert-dismissible fade show'>"+item+"<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button><p>");

         });
                     }

                }
            })

        })
    })

</script>
@endsection
