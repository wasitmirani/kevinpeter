@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive" tabindex="1" style="overflow: hidden; outline: none;">
                    <table class="table table-custom table-lg mb-0" id="shopping-cart">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Course Title</th>
                            <th>Teacher Name</th>
                            <th>Cateory</th>
                            <th>Price</th>
                            <th colspan="2">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($myCourses as $enrolled)
                        <tr>
                            <td>
                                <a href="#">
                                    <img src="{{asset('admin/courses/images/'.$enrolled->course->image)}}" class="rounded" width="60" alt="...">
                                </a>
                            </td>
                            <td>{{$enrolled->course_title}}</td>
                            <td >
                                {{$enrolled->course_title}}

                            </td>
                            <td>{{$enrolled->category}}</td>
                            <td>${{$enrolled->price}}</td>

                            <td class="text-end">
                                <button class="btn btn-outline-danger flex-shrink-0">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-4">
            <div class="card-body">
                <h6 class="card-title mb-4">Price</h6>
                <div class="row justify-content-center mb-3">
                    <div class="col-4 text-end">Sub Total :</div>
                    <div class="col-4">$1.442,78</div>
                </div>
                <div class="row justify-content-center mb-3">
                    <div class="col-4 text-end">Shipping :</div>
                    <div class="col-4">Free</div>
                </div>
                <div class="row justify-content-center mb-3">
                    <div class="col-4 text-end">Tax(18%) :</div>
                    <div class="col-4">$259.70</div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-4 text-end">
                        <strong>Total :</strong>
                    </div>
                    <div class="col-4">
                        <strong>$1.702,48</strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Coupon Code" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <button class="btn btn-light" type="button" id="button-addon1">Apply</button>
                </div>
                <p>Order note:</p>
                <textarea rows="2" class="form-control"></textarea>
            </div>
        </div>
        <div class="d-flex gap-3 justify-content-end">
            <a href="#" class="btn btn-danger">All Clear</a>
            <a href="#" class="btn btn-primary">Checkout</a>
        </div>
    </div>
</div>

@endsection
