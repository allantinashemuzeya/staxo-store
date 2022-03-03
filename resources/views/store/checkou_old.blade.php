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
                                <li class="breadcrumb-item active">Checkout
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body"><div class="bs-stepper checkout-tab-steps">
                <!-- Wizard starts -->
                <div class="bs-stepper-header">
                    <div class="step" data-target="#step-cart" role="tab" id="step-cart-trigger">
                        <button type="button" class="step-trigger">
                            <span class="bs-stepper-box"><i data-feather="shopping-cart" class="font-medium-3"></i></span>
                            <span class="bs-stepper-label">
                              <span class="bs-stepper-title">Cart</span>
                              <span class="bs-stepper-subtitle">Your Cart Items</span>
                            </span>
                        </button>
                    </div>
                    <div class="line">
                        <i data-feather="chevron-right" class="font-medium-2"></i>
                    </div>
                    <div class="step" data-target="#step-address" role="tab" id="step-address-trigger">
                        <button type="button" class="step-trigger">
                            <span class="bs-stepper-box">
                              <i data-feather="home" class="font-medium-3"></i>
                            </span>
                            <span class="bs-stepper-label">
                              <span class="bs-stepper-title">Address</span>
                              <span class="bs-stepper-subtitle">Enter Your Address</span>
                            </span>
                        </button>
                    </div>

                    <div class="line">
                        <i data-feather="chevron-right" class="font-medium-2"></i>
                    </div>
                    <div class="step" data-target="#step-payment" role="tab" id="step-payment-trigger">
                        <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">
                          <i data-feather="credit-card" class="font-medium-3"></i>
                        </span>
                        <span class="bs-stepper-label">
                          <span class="bs-stepper-title">Payment</span>
                          <span class="bs-stepper-subtitle">Select Payment Method</span>
                        </span>
                        </button>
                    </div>
                </div>

                <!-- Wizard ends -->
                <div class="bs-stepper-content">
                    <!-- Checkout Place order starts -->
                    <div id="step-cart" class="content" role="tabpanel" aria-labelledby="step-cart-trigger">
                        <div id="place-order" class="list-view product-checkout">

                            <!-- Checkout Place Order Left starts -->
                            <div class="checkout-items">
                                @foreach($products as $product)
                                    <div class="card ecommerce-card">
                                        <div class="item-img">
                                            <a href="{{route('product', $product->slug)}}">
                                                <img src="{{asset('storage/products/'.$product->image)}}" alt="img-placeholder" />
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <div class="item-name">
                                                <h6 class="mb-0"><a href="{{route('product', $product->name)}}" class="text-body">{{$product->name}}</a></h6>
                                                <span class="item-company">By <a href="" class="company-name">Staxo Store</a></span>
                                                <div class="item-rating">
                                                    <ul class="unstyled-list list-inline">
                                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                        <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="text-success mb-1">In Stock</span>
                                            <div class="item-quantity">
                                                <span class="quantity-title">Qty:</span>
                                                <div class="quantity-counter-wrapper">
                                                    <div class="input-group">
                                                        <input type="text" disabled  class="quantity-counter" value="1" />
                                                    </div>
                                                </div>
                                            </div>
                                            {{--- <span class="delivery-date text-muted">Delivery by, Wed Apr 25</span>--}}
                                            <span class="text-success">17% off 4 offers Available</span>
                                        </div>
                                        <div class="item-options text-center">
                                            <div class="item-wrapper">
                                                <div class="item-cost">
                                                    <h4 class="item-price">R{{$product->price}}</h4>
                                                    <p class="card-text shipping">
                                                        <span class="badge rounded-pill badge-light-success">Free Shipping</span>
                                                    </p>
                                                </div>
                                            </div>
                                            </div>

                                            <button disabled type="button"  class="btn btn-light mt-1 remove-wishlist">
                                                <i data-feather="x" class="align-middle me-25"></i>
                                                <span>Remove</span>
                                            </button>

                                            <button disabled type="button" class="btn btn-primary btn-cart move-cart">
                                                <i data-feather="heart" class="align-middle me-25"></i>
                                                <span class="text-truncate">Add to Wishlist</span>
                                            </button>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <!-- Checkout Place Order Left ends -->

                            <!-- Checkout Place Order Right starts -->
                            <div class="checkout-options">
                                <div class="card">
                                    <div class="card-body">
                                        <label class="section-label form-label mb-1">Options</label>
                                        <div class="coupons input-group input-group-merge">
                                            <input
                                                type="text"
                                                class="form-control"
                                                placeholder="Coupons"
                                                aria-label="Coupons"
                                                aria-describedby="input-coupons"
                                            />
                                            <span class="input-group-text text-primary ps-1" id="input-coupons">Apply</span>
                                        </div>
                                        <hr />
                                        @php
                                            $total_products = count(Session::get('cart'));
                                            $total_price = 0;
                                            $quantity = 1;
                                            foreach(session::get('cart') as $product){
                                                $total_price = $total_price + ($product->price * $quantity);
                                            }
                                        @endphp

                                        <div class="price-details">
                                            <h6 class="price-title">Price Details</h6>
                                            <ul class="list-unstyled">
                                                <li class="price-detail">
                                                    <div class="detail-title">Total MRP</div>
                                                    <div class="detail-amt"></div>
                                                </li>

                                            <hr />
                                            <ul class="list-unstyled">
                                                <li class="price-detail">
                                                    <div class="detail-title detail-total">Total</div>
                                                    <div class="detail-amt fw-bolder">R{{$total_price}}</div>
                                                </li>
                                            </ul>
                                           @if(Auth::check())
                                                <a type="button" href="{{route('placeOrder')}}" class="btn btn-primary w-100  place-order">Place Order</a>
                                           @else
                                                <button type="button" class="btn btn-primary w-100 btn-next place-order">Place Order</button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- Checkout Place Order Right ends -->
                            </div>
                        </div>
                        <!-- Checkout Place order Ends -->
                    </div>
                    <!-- Checkout Customer Address Starts -->
                    <div id="step-address" class="content" role="tabpanel" aria-labelledby="step-address-trigger">

                       @livewire('checkout-component')
                    </div>
                    <!-- Checkout Customer Address Ends -->



                @if (Session::has('success'))
                    <div class="alert alert-success text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <p>{{ Session::get('success') }}</p>
                    </div>
                @endif
                <form
                    role="form"
                    action="{{ route('stripe.post') }}"
                    method="post"
                    class="require-validation"
                    data-cc-on-file="false"
                    data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                    id="payment-form">
                    @csrf
                    <div class='form-row row'>
                        <div class='col-xs-12 form-group required'>
                            <label class='control-label'>Name on Card</label> <input
                                class='form-control' size='4' type='text'>
                        </div>
                    </div>
                    <div class='form-row row'>
                        <div class='col-xs-12 form-group card required'>
                            <label class='control-label'>Card Number</label> <input
                                autocomplete='off' class='form-control card-number' size='20'
                                type='text'>
                        </div>
                    </div>
                    <div class='form-row row'>
                        <div class='col-xs-12 col-md-4 form-group cvc required'>
                            <label class='control-label'>CVC</label> <input autocomplete='off'
                                                                            class='form-control card-cvc' placeholder='ex. 311' size='4'
                                                                            type='text'>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                            <label class='control-label'>Expiration Month</label> <input
                                class='form-control card-expiry-month' placeholder='MM' size='2'
                                type='text'>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                            <label class='control-label'>Expiration Year</label> <input
                                class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                type='text'>
                        </div>
                    </div>
                    <div class='form-row row'>
                        <div class='col-md-12 error form-group hide'>
                            <div class='alert-danger alert'>Please correct the errors and try
                                again.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now ($100)</button>
                        </div>
                    </div>
                </form>
                    <!-- Checkout Payment Starts -->
                    <div id="step-payment" class="content" role="tabpanel" aria-labelledby="step-payment-trigger">
                        @if (Session::has('success'))
                            <div class="alert alert-success text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <p>{{ Session::get('success') }}</p>
                            </div>
                        @endif
                        <form id="checkout-payment" class="list-view product-checkout" onsubmit="return false;"
                          role="form"
                          action="{{ route('stripe.post') }}"
                          method="post"
                          class="require-validation"
                          data-cc-on-file="false"
                          data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                          id="payment-form"
                        >
                            @csrf
                            <div class="payment-type">
                                <div class="card">
                                    <div class="card-header flex-column align-items-start">
                                        <h4 class="card-title">Payment options</h4>
                                        <p class="card-text text-muted mt-25">Be sure to click on correct payment option</p>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-holder-name my-75">John Doe</h6>
                                        <div class="form-check">
                                            <input type="radio" id="customColorRadio1" name="paymentOptions" class="form-check-input" checked />
                                            <label class="form-check-label" for="customColorRadio1">
                                                US Unlocked Debit Card 12XX XXXX XXXX 0000
                                            </label>
                                        </div>
                                        <div class="customer-cvv mt-1 row row-cols-lg-auto">
                                            <div class="col-3 d-flex align-items-center">
                                                <label class="mb-50 form-label" for="card-holder-cvv">Enter CVV:</label>
                                            </div>
                                            <div class="col-4 p-0">
                                                <input type="password" class="form-control mb-50 input-cvv" name="input-cvv" id="card-holder-cvv" />
                                            </div>
                                            <div class="col-3">
                                                <button type="button" class="btn btn-primary btn-cvv mb-50">Continue</button>
                                            </div>
                                        </div>
                                        <hr class="my-2" />
                                        <ul class="other-payment-options list-unstyled">
                                            <li class="py-50">
                                                <div class="form-check">
                                                    <input type="radio" id="customColorRadio2" name="paymentOptions" class="form-check-input" />
                                                    <label class="form-check-label" for="customColorRadio2"> Credit / Debit / ATM Card </label>
                                                </div>
                                            </li>
                                            <li class="py-50">
                                                <div class="form-check">
                                                    <input type="radio" id="customColorRadio3" name="paymentOptions" class="form-check-input" />
                                                    <label class="form-check-label" for="customColorRadio3"> Net Banking </label>
                                                </div>
                                            </li>
                                            <li class="py-50">
                                                <div class="form-check">
                                                    <input type="radio" id="customColorRadio4" name="paymentOptions" class="form-check-input" />
                                                    <label class="form-check-label" for="customColorRadio4"> EMI (Easy Installment) </label>
                                                </div>
                                            </li>
                                            <li class="py-50">
                                                <div class="form-check">
                                                    <input type="radio" id="customColorRadio5" name="paymentOptions" class="form-check-input" />
                                                    <label class="form-check-label" for="customColorRadio5"> Cash On Delivery </label>
                                                </div>
                                            </li>
                                        </ul>
                                        <hr class="my-2" />
                                        <div class="gift-card mb-25">
                                            <p class="card-text">
                                                <i data-feather="plus-circle" class="me-50 font-medium-5"></i>
                                                <span class="align-middle">Add Gift Card</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="amount-payable checkout-options">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Price Details</h4>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-unstyled price-details">
                                            <li class="price-detail">
                                                <div class="details-title">Price of 3 items</div>
                                                <div class="detail-amt">
                                                    <strong>$699.30</strong>
                                                </div>
                                            </li>
                                            <li class="price-detail">
                                                <div class="details-title">Delivery Charges</div>
                                                <div class="detail-amt discount-amt text-success">Free</div>
                                            </li>
                                        </ul>
                                        <hr />
                                        <ul class="list-unstyled price-details">
                                            <li class="price-detail">
                                                <div class="details-title">Amount Payable</div>
                                                <div class="detail-amt fw-bolder">$699.30</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Checkout Payment Ends -->
                    <!-- </div> -->
                </div>
            </div>
        </div>

@endsection
