@extends('layouts.store')
@section('content')

{{--    @livewire('wishlist')--}}
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Product Details</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">eCommerce</a>
                        </li>
                        <li class="breadcrumb-item"><a href="app-ecommerce-shop.html">Shop</a>
                        </li>
                        <li class="breadcrumb-item active">Details
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
        <div class="mb-1 breadcrumb-right">
            <div class="dropdown">
                <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
            </div>
        </div>
    </div>
</div>
<!-- BEGIN: Content-->
<div class="app-content content ecommerce-application">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-body"><!-- app e-commerce details start -->
            <section class="app-ecommerce-details">
                <div class="card">
                    <!-- Product Details starts -->
                    <div class="card-body">
                        <div class="row my-2">
                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                                <div class="d-flex align-items-center justify-content-center">
                                    <img
                                        src="{{ asset('storage/products/'.$product->image)}}"
                                        class="img-fluid product-img"
                                        alt="product image"
                                    />
                                </div>
                            </div>
                            <div class="col-12 col-md-7">
                                <h4>{{$product->name}}</h4>
                                <span class="card-text item-company">By <a href="#" class="company-name">Staxo Store</a></span>
                                <div class="ecommerce-details-price d-flex flex-wrap mt-1">
                                    <h4 class="item-price me-1">R{{$product->price}}</h4>
                                    <ul class="unstyled-list list-inline ps-1 border-start">
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                    </ul>
                                </div>
                                <p class="card-text">Available - <span class="text-success">In stock</span></p>
                                <p class="card-text">
                                    {{ $product->description}}
                                </p>
                                <ul class="product-features list-unstyled">
                                    <li><i data-feather="shopping-cart"></i> <span>Free Shipping</span></li>
                                </ul>
                                <hr />
                                <div class="d-flex flex-column flex-sm-row pt-1">
                                    @livewire('product-details', ['product'=>$product])

                                    <a href="#" class="btn btn-outline-secondary btn-wishlist me-0 me-sm-1 mb-1 mb-sm-0">
                                        <i data-feather="heart" class="me-50"></i>
                                        <span>Wishlist</span>
                                    </a>
                                    <div class="btn-group dropdown-icon-wrapper btn-share">
                                        <button
                                            type="button"
                                            class="btn btn-icon hide-arrow btn-outline-secondary dropdown-toggle"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                        >
                                            <i data-feather="share-2"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">
                                                <i data-feather="facebook"></i>
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i data-feather="twitter"></i>
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i data-feather="youtube"></i>
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i data-feather="instagram"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Details ends -->
                </div>
            </section>
            <!-- app e-commerce details end -->

        </div>
    </div>
</div>
<!-- END: Content-->

@endsection
