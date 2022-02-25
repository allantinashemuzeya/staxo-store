@extends('layouts.store')
@section('content')

        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Checkout</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">Checkout
                                </li>
                                <li class="breadcrumb-item active">Order Cancelled
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">
            <div class="bs-stepper checkout-tab-steps">
                <div class="card text-center">
                    <div class="card-header">Oops 😱!</div>
                    <div class="card-body">
                        <h4 class="card-title">~Are you sure....Cancel ?</h4>
                        <p class="card-text">You have cancelled your order!</p>
                        <a href="{{route('home')}}" class="btn btn-outline-primary waves-effect">Go Home ?</a>
                    </div>
                </div>
            </div>
        </div>

@endsection
