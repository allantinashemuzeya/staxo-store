@extends('layouts.store')
@section('content')
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    </head>


    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Checkout</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Cart</a>
                                </li>
                                <li class="breadcrumb-item active">Checkout
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            @if (Session::has('success'))
                <div class="alert alert-success text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <p>{{ Session::get('success') }}</p>
                </div>
            @endif
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html">
                                <i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="bs-stepper checkout-tab-steps">
                <!-- Wizard starts -->
                <div class="bs-stepper-header">
                    <div class="step" data-target="#step-cart" role="tab" id="step-cart-trigger">
                        <button type="button" class="step-trigger">
        <span class="bs-stepper-box">
          <i data-feather="shopping-cart" class="font-medium-3"></i>
        </span>
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
                                            <span class="item-company">By <a href="#" class="company-name">Apple</a></span>
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
                                        <span class="delivery-date text-muted">Delivery by, Wed Apr 25</span>
                                        <span class="text-success">17% off 4 offers Available</span>
                                    </div>
                                    <div class="item-options text-center">
                                        <div class="item-wrapper">
                                            <div class="item-cost">
                                                <h4 class="item-price">${{$product->price}}.00</h4>
                                                <p class="card-text shipping">
                                                    <span class="badge rounded-pill badge-light-success">Free Shipping</span>
                                                </p>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-light mt-1 remove-wishlist">
                                            <i data-feather="x" class="align-middle me-25"></i>
                                            <span>Remove</span>
                                        </button>
                                        <button type="button" class="btn btn-primary btn-cart move-cart">
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
                                                    <div class="detail-title">Delivery Charges</div>
                                                    <div class="detail-amt discount-amt text-success">Free</div>
                                                </li>
                                            </ul>
                                            <hr />
                                            <ul class="list-unstyled">
                                                <li class="price-detail">
                                                    <div class="detail-title detail-total">Total</div>
                                                    <div class="detail-amt fw-bolder">R{{$total_price}}.00</div>
                                                </li>
                                            </ul>
                                            <button type="button" class="btn btn-primary w-100 btn-next place-order">Place Order</button>
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
                        <form id="checkout-address" class="list-view product-checkout">
                            <!-- Checkout Customer Address Left starts -->
                            <div class="card">
                                <div class="card-header flex-column align-items-start">
                                    <h4 class="card-title">Add New Address</h4>
                                    <p class="card-text text-muted mt-25">Be sure to check "Deliver to this address" when you have finished</p>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="mb-2">
                                                <label class="form-label" cfor="checkout-name">Full Name:</label>
                                                <input type="text" id="checkout-name" class="form-control" name="fname" placeholder="John Doe" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="mb-2">
                                                <label class="form-label" cfor="checkout-number">Mobile Number:</label>
                                                <input
                                                    type="number"
                                                    id="checkout-number"
                                                    class="form-control"
                                                    name="mnumber"
                                                    placeholder="0123456789"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="mb-2">
                                                <label class="form-label" cfor="checkout-apt-number">Flat, House No:</label>
                                                <input
                                                    type="number"
                                                    id="checkout-apt-number"
                                                    class="form-control"
                                                    name="apt-number"
                                                    placeholder="9447 Glen Eagles Drive"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="mb-2">
                                                <label class="form-label" cfor="checkout-landmark">Landmark e.g. near apollo hospital:</label>
                                                <input
                                                    type="text"
                                                    id="checkout-landmark"
                                                    class="form-control"
                                                    name="landmark"
                                                    placeholder="Near Apollo Hospital"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="mb-2">
                                                <label class="form-label" cfor="checkout-city">Town/City:</label>
                                                <input type="text" id="checkout-city" class="form-control" name="city" placeholder="Tokyo" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="mb-2">
                                                <label class="form-label" cfor="checkout-pincode">Pincode:</label>
                                                <input type="number" id="checkout-pincode" class="form-control" name="pincode" placeholder="201301" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="mb-2">
                                                <label class="form-label" cfor="checkout-state">State:</label>
                                                <input type="text" id="checkout-state" class="form-control" name="state" placeholder="California" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="mb-2">
                                                <label class="form-label" cfor="add-type">Address Type:</label>
                                                <select class="form-select" id="add-type">
                                                    <option>Home</option>
                                                    <option>Work</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="button" class="btn btn-primary btn-next delivery-address">Save And Deliver Here</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkout Customer Address Left ends -->

                            <!-- Checkout Customer Address Right starts -->
                            <div class="customer-card">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">{{Auth::check() ? Auth::user()->name : 'Guest'}}</h4>
                                    </div>
                                    <div class="card-body actions">
                                        <p class="card-text mb-0">9447 Glen Eagles Drive</p>
                                        <p class="card-text">Lewis Center, OH 43035</p>
                                        <p class="card-text">UTC-5: Eastern Standard Time (EST)</p>
                                        <p class="card-text">202-555-0140</p>
                                        <button type="button" class="btn btn-primary w-100 btn-next delivery-address mt-2">
                                            Deliver To This Address
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkout Customer Address Right ends -->
                        </form>
                    </div>
                    <!-- Checkout Customer Address Ends -->

                    <!-- Checkout Payment Starts -->
                    <div id="step-payment" class="content" role="tabpanel" aria-labelledby="step-payment-trigger">
                        <div class="card">
                            <div class="card-body">
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
                                               name="card-holder" value="Allan" class='form-control' size='4' type='text'>
                                        </div>
                                    </div>
                                    <input type="hidden" name="product-id" value="{{$product->id}}"/>
                                    <input type="hidden" name="product-price" value="{{$product->price}}"/>
                                    <input type="hidden" name="product-name" value="{{$product->name}}"/>
                                    <input type="hidden" name="total-price" value="{{$total_price}}"/>

                                    <div class='form-row row'>
                                        <div class='col-xs-12 form-group card required'>
                                            <label class='control-label'>Card Number</label>
                                            <input required autocomplete='off' class='form-control card-number' value="4242424242424242" size='20' name="card-number" type='text'>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class='form-row row'>
                                        <div class='col-xs-12 form-group card required'>
                                            <label class='control-label'>Email Address</label>
                                            <input required autocomplete='off' class='form-control card-number' value="allan@staxostore.co.za" size='20' name="emailAddress" type='text'>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class='form-row row'>
                                        <div class='col-xs-12 col-md-4 form-group cvc required'>
                                            <label class='control-label'>CVV</label>
                                            <input required autocomplete='off' name="cvv" class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                                        </div>

                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                            <label class='control-label'>Expiration Month</label>
                                            <input required  class='form-control card-expiry-month' name="expMonth" value="03" placeholder='MM' size='2' type='text'>
                                        </div>

                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                            <label class='control-label'>Expiration Year</label>
                                            <input required name="expYear" value="2030" class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                                type='text'>
                                        </div>
                                    </div>
                                    <br/>
{{--                                    <div class='form-row row'>--}}
{{--                                        <div class='col-md-12 error form-group hide'>--}}
{{--                                            <div class=' alert-warning alert'>Please correct the errors and try--}}
{{--                                                again.--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now (${{$total_price}})</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                    <!-- Checkout Payment Ends -->
                    <!-- </div> -->
                </div>
            </div>

        </div>
    </div>

    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript">
        $(function() {
            var $form = $(".require-validation");
            $('form.require-validation').bind('submit', function(e) {
                var $form = $(".require-validation"),
                    inputSelector = ['input[type=email]', 'input[type=password]',
                        'input[type=text]', 'input[type=file]',
                        'textarea'
                    ].join(', '),
                    $inputs = $form.find('.required').find(inputSelector),
                    $errorMessage = $form.find('div.error'),
                    valid = true;
                $errorMessage.addClass('hide');
                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                         if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorMessage.removeClass('hide');
                        e.preventDefault();
                    }
                });
                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                }
            });
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
                    $form.append($('#payment-form').serialize());
                    $form.get(0).submit();
                }
            }
        });
    </script>
@endsection
<!-- END: Content-->
