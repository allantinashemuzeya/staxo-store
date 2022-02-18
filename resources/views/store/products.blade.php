@extends('layouts.store')
@section('content')

    <style>
        #basic-datatable > button{
            margin-left:87%;
            width: 12%;
        }
    </style>
{{--    @livewire('wishlist')--}}
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">Shop</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Shop
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


<!-- E-commerce Search Bar Starts -->
<section id="ecommerce-searchbar" class="ecommerce-searchbar">
    <div class="row mt-1">
        <div class="col-sm-12">
            <div class="input-group input-group-merge">
                <input
                    type="text"
                    class="form-control search-product"
                    id="shop-search"
                    placeholder="Search Product"
                    aria-label="Search..."
                    aria-describedby="shop-search"
                />
                <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
            </div>
        </div>
    </div>
</section>
<!-- E-commerce Search Bar Ends -->

<!-- background Overlay when sidebar is shown  starts-->
<div class="body-content-overlay"></div>
<!-- background Overlay when sidebar is shown  ends-->


<div class="divider"></div>
<div class="content-detached content-right">
        <div class="content-body">
            <!-- E-commerce Content Section Starts -->
            <section id="ecommerce-header">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Basic table -->
                      @livewire('product')
                        <!--/ Basic table -->
                    </div>
                </div>
            </section>
            <!-- E-commerce Content Section Starts -->

        </div>
    </div>

@endsection
