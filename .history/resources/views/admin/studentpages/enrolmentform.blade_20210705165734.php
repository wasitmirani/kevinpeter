@extends('admin.layouts.app')
@section('content')
<div class="content ">

    <div class="mb-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">
                        <i class="bi bi-globe2 small me-2"></i> Dashboard
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-md-flex gap-4 align-items-center">
                        <div class="d-none d-md-flex">All Products</div>
                        <div class="d-md-flex gap-4 align-items-center">
                            <form class="mb-3 mb-md-0">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <select class="form-select">
                                            <option>Sort by</option>
                                            <option value="desc">Desc</option>
                                            <option value="asc">Asc</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select">
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="40">40</option>
                                            <option value="50">50</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="dropdown ms-auto">
                            <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle" aria-haspopup="true" aria-expanded="false">Actions</a>
                            <div class="dropdown-menu dropdown-menu-end" style="margin: 0px;">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card card-hover">
                        <a href="#">
                            <img src="../../assets/images/products/1.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title mb-3">Headphone</h5>
                            </a>
                            <div class="d-flex gap-3 mb-3 align-items-center">
                                <del class="text-muted">$800</del>
                                <h4 class="mb-0">$499,90</h4>
                            </div>
                            <div class="d-flex gap-2 mb-3">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-muted"></i>
                                <span>(25)</span>
                            </div>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                <a href="#" class="btn ms-auto">
                                    <i class="bi bi-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card card-hover">
                        <a href="#">
                            <img src="../../assets/images/products/3.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title mb-3">Digital clock</h5>
                            </a>
                            <div class="d-flex gap-3 mb-3 align-items-center">
                                <h4 class="mb-0">$1.190,90</h4>
                            </div>
                            <div class="d-flex gap-2 mb-3">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <span>(10)</span>
                            </div>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                <a href="#" class="btn ms-auto">
                                    <i class="bi bi-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card card-hover">
                        <a href="#">
                            <img src="../../assets/images/products/5.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title mb-3">Glasses</h5>
                            </a>
                            <div class="d-flex gap-3 mb-3 align-items-center">
                                <h4 class="mb-0">$1.599,00</h4>
                            </div>
                            <p>&nbsp;</p>
                            <div class="d-flex">
                                <a href="#" class="btn btn-success">In cart (2)</a>
                                <a href="#" class="btn ms-auto text-danger">
                                    <i class="bi bi-heart-fill"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card card-hover">
                        <a href="#">
                            <img src="../../assets/images/products/6.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title mb-3">Cake</h5>
                            </a>
                            <div class="d-flex gap-3 mb-3 align-items-center">
                                <h4 class="mb-0">$10,00</h4>
                            </div>
                            <p>&nbsp;</p>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                <a href="#" class="btn ms-auto">
                                    <i class="bi bi-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card card-hover">
                        <a href="#">
                            <img src="../../assets/images/products/9.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title mb-3">Perfume</h5>
                            </a>
                            <div class="d-flex gap-3 mb-3 align-items-center">
                                <h4 class="mb-0">$30,00</h4>
                            </div>
                            <div class="d-flex gap-2 mb-3">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-muted"></i>
                                <span>(5)</span>
                            </div>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                <a href="#" class="btn ms-auto">
                                    <i class="bi bi-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card card-hover">
                        <a href="#">
                            <img src="../../assets/images/products/10.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title mb-3">Cookie</h5>
                            </a>
                            <div class="d-flex gap-3 mb-3 align-items-center">
                                <h4 class="mb-0">$25,00</h4>
                            </div>
                            <div class="d-flex gap-2 mb-3">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-muted"></i>
                                <i class="bi bi-star-fill text-muted"></i>
                                <span>(8)</span>
                            </div>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                <a href="#" class="btn ms-auto text-danger">
                                    <i class="bi bi-heart-fill"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="mt-5" aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">»</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>

    </div>

@endsection
