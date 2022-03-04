<!DOCTYPE html>

<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
          content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Staxo Store</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon"
          href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
          rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/nouislider.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/toastr.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/swiper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/toastr.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/wizard/bs-stepper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/toastr.min.css')}}">
    <!-- END: Vendor CSS-->


    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap-extended.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/colors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/components.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/dark-layout.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/bordered-layout.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/semi-dark-layout.min.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/css/plugins/extensions/ext-component-sliders.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/app-ecommerce.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/css/plugins/extensions/ext-component-toastr.min.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!-- END: Custom CSS-->


    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css')}}">
    <!-- END: Vendor CSS-->


    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/app-ecommerce.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/pickers/form-pickadate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/form-wizard.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/extensions/ext-component-toastr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/form-number-input.min.css')}}">
    <!-- END: Page CSS-->

    @livewireStyles


    <style>
        body > div.main-menu.menu-fixed.menu-dark.menu-accordion.menu-shadow > div.navbar-header > ul > li.nav-item.me-auto > a > span > svg {
            height: 12px;
            margin-left: -8px;
        }

        body > div.main-menu.menu-fixed.menu-dark.menu-accordion.menu-shadow.expanded > div.navbar-header > ul > li.nav-item.me-auto > a > span > svg {
            height: 26px;
            margin-left: 35px;
        }
    </style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern content-detached-left-sidebar navbar-floating footer-static  "
      data-open="click" data-menu="vertical-menu-modern" data-col="content-detached-left-sidebar">

<!-- BEGIN: Header-->
<nav
    class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-dark navbar-shadow container-xxl">
    <div class="navbar-container d-flex content">

        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a>
                </li>
            </ul>

            <ul class="nav navbar-nav">
                <li class="nav-item d-none d-lg-block">

                    <div class="bookmark-input search-input">
                        <div class="bookmark-input-icon"><i data-feather="search"></i></div>
                        <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0"
                               data-search="search">
                        <ul class="search-list search-list-bookmark"></ul>
                    </div>
                </li>
            </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">
            <li class="nav-item dropdown dropdown-language">

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-flag"><a class="dropdown-item"
                                                                                                href="#"
                                                                                                data-language="en"><i
                            class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#"
                                                                              data-language="fr"><i
                            class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"
                                                                             data-language="de"><i
                            class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item" href="#"
                                                                             data-language="pt"><i
                            class="flag-icon flag-icon-pt"></i> Portuguese</a></div>
            </li>

            <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon"
                                                                                   data-feather="search"></i></a>
                <div class="search-input">
                    <div class="search-input-icon"><i data-feather="search"></i></div>
                    <input class="form-control input" type="text" placeholder="Search Coming Soon..." tabindex="-1"
                           data-search="search">
                    <div class="search-input-close"><i data-feather="x"></i></div>
                    <ul class="search-list search-list-main"></ul>
                </div>
            </li>


            <li class="nav-item dropdown dropdown-cart me-25">
                @if(Session::has('cart'))
                    <a class="nav-link" href="#" data-bs-toggle="dropdown">
                        <i class="ficon" data-feather="shopping-cart"></i>
                        <span class="badge rounded-pill bg-primary badge-up cart-item-count">{{count(Session::get('cart'))}}</span>
                    </a>
                @else
                    <div class="badge rounded-pill badge-light-primary">0</div>
                @endif



                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                    <li class="dropdown-menu-header">
                        <div class="dropdown-header d-flex">
                            <h4 class="notification-title mb-0 me-auto">My Cart</h4>
                            @if(Session::has('cart'))
                                <div class="badge rounded-pill badge-light-primary">{{count(Session::get('cart'))}} Item(s)</div>
                                @else
                                    <div class="badge rounded-pill badge-light-primary">0 Items</div>
                            @endif
                        </div>
                    </li>
                    @if(Session::has('cart'))

                        @php
                            $total_products = count(Session::get('cart'));
                            $total_price = 0;
                            $quantity = 1;
                            foreach(session::get('cart') as $product){
                                $total_price = $total_price + ($product->price * $quantity);
                            }
                        @endphp

                        <li class="scrollable-container media-list">
                               @foreach(session()->get('cart') as $product)
                                    <div class="list-item align-items-center">
                                        <img class="d-block rounded me-1"
                                             src="{{asset('storage/products/'.$product->image)}}"
                                             alt="donuts" width="62">
                                        <div class="list-item-body flex-grow-1">
                                            <i class="ficon cart-item-remove"
                                               data-feather="x"></i>
                                            <div class="media-heading">
                                                <h6 class="cart-item-title"><a class="text-body" href="{{route('product', $product->slug)}}">
                                                       {{$product->name}}</a>
                                                </h6>
                                                <small class="cart-item-by">By Staxo Store</small>
                                            </div>

                                            <div class="cart-item-qty">
                                                <div class="input-group">
                                                    <input  disabled class="touchspin-cart" type="number" value="1">
                                                </div>
                                            </div>
                                            <h5 class="cart-item-price">R{{$product->price}}</h5>
                                        </div>
                                    </div>
                               @endforeach
                        </li>
                        <li class="dropdown-menu-footer">
                            <div class="d-flex justify-content-between mb-1">
                                <h6 class="fw-bolder mb-0">Total:</h6>
                                <h6 class="text-primary fw-bolder mb-0">R{{$total_price}}</h6>
                            </div>
                            <a class="btn btn-primary w-100" {{$total_products > 0 ? '': 'disabled'}} href="{{$total_products > 0 ? route('checkout'): ''}}">Checkout</a>
                        </li>
                    @else
                        <li class="dropdown-menu-footer">
                            <div class="d-flex justify-content-between mb-1">
                                <h6 class="fw-bolder mb-0">Total:</h6>
                                <h6 class="text-primary fw-bolder mb-0">R0.00</h6>
                            </div>
                            <a class="btn btn-primary w-100" disabled="" href="#">Checkout</a>
                        </li>
                    @endif

                </ul>
            </li>





            @if(Auth::check())

                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                                                               id="dropdown-user" href="#" data-bs-toggle="dropdown"
                                                               aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span
                                class="user-name fw-bolder">{{Auth::user()->name}}</span><span
                                class="user-status">{{Auth::user()->userType->name}}</span></div>
                        <span class="avatar"><img class="round"
                                                  src="{{asset('app-assets/images/portrait/small/avatar-s-11.jpg')}}"
                                                  alt="avatar" height="40" width="40"><span
                                class="avatar-status-online"></span></span></a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a
                            class="dropdown-item"
                            href="page-profile.html"><i
                                class="me-50" data-feather="user"></i> Profile</a>

                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="me-50" data-feather="power"></i>
                                {{ __('Logout') }}</button>
                        </form>
                    </div>
                </li>
            @else
                <li class="nav-item dropdown dropdown-user">
                    <a class="nav-link dropdown-toggle dropdown-user-link"
                                                               id="dropdown-user" href="#" data-bs-toggle="dropdown"
                                                               aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span
                                class="user-name fw-bolder">Guest</span><span
                                class="user-status">Guest</span></div>
                        <span class="avatar"><img class="round"
                                                  src="{{asset('app-assets/images/portrait/small/avatar-s-11.jpg')}}"
                                                  alt="avatar" height="40" width="40"><span
                                class="avatar-status-online"></span></span></a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a
                            class="dropdown-item"
                            href="page-profile.html"><i
                                class="me-50" data-feather="user"></i> Profile</a>

                        <a
                            class="dropdown-item" href="{{route('login')}}"><i class="me-50"
                                                                                    data-feather="power"></i>
                            Login</a>
                    </div>
                </li>
            @endif

        </ul>
    </div>
</nav>

<ul class="main-search-list-defaultlist d-none">
    <li class="d-flex align-items-center"><a href="#">
            <h6 class="section-label mt-75 mb-0">Files</h6></a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                                   href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{asset('app-assets/images/icons/xls.png')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing
                        Manager</small>
                </div>
            </div>
            <small class="search-data-size me-50 text-muted">&apos;17kb</small></a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                                   href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{asset('app-assets/images/icons/jpg.png')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd
                        Developer</small>
                </div>
            </div>
            <small class="search-data-size me-50 text-muted">&apos;11kb</small></a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                                   href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{asset('app-assets/images/icons/pdf.png')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital
                        Marketing Manager</small>
                </div>
            </div>
            <small class="search-data-size me-50 text-muted">&apos;150kb</small></a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                                   href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{asset('app-assets/images/icons/doc.png')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                </div>
            </div>
            <small class="search-data-size me-50 text-muted">&apos;256kb</small></a></li>
    <li class="d-flex align-items-center"><a href="#">
            <h6 class="section-label mt-75 mb-0">Members</h6></a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                                   href="app-user-view.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="{{asset('app-assets/images/portrait/small/avatar-s-8.jpg')}}"
                                               alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                                   href="app-user-view.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="{{asset('app-assets/images/portrait/small/avatar-s-1.jpg')}}"
                                               alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd
                        Developer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                                   href="app-user-view.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="{{asset('app-assets/images/portrait/small/avatar-s-14.jpg')}}"
                                               alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing
                        Manager</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                                   href="app-user-view.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="{{asset('app-assets/images/portrait/small/avatar-s-6.jpg')}}"
                                               alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                </div>
            </div>
        </a></li>
</ul>
<ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion justify-content-between"><a
            class="d-flex align-items-center justify-content-between w-100 py-50">
            <div class="d-flex justify-content-start"><span class="me-75" data-feather="alert-circle"></span><span>No results found.</span>
            </div>
        </a></li>
</ul>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto">
                <a class="navbar-brand" href="/">
                    <span class="brand-logo">
                        <svg class="logo-svg" viewBox="0 0 130 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.6451 20.9596C19.6451 24.6346 17.1786 28.8462 10.1098 28.8462C5.50759 28.8462 2.13572 27.2942 0 24.2308L2.90179 22.2288C4.75313 24.3923 6.38393 25.6904 10.0924 25.6904C14.7353 25.6904 16.0933 23.5673 16.0933 21.1558C16.0933 18.5019 14.7353 16.7019 9.39599 15.8827C4.0567 15.0635 0.615179 12.5019 0.615179 7.59808C0.615179 3.55385 3.29063 0 9.78482 0C14.3058 0 17.138 1.51154 19.1576 4.61538L16.4009 6.57692C14.8804 4.61538 13.238 3.18462 9.65715 3.18462C6.36652 3.18462 4.14955 4.65577 4.14955 7.59808C4.14955 10.95 6.69732 12.0923 10.8469 12.8308C16.3196 13.7654 19.6451 15.7327 19.6451 20.9596ZM26.0987 3.51346H34.7344V28.5173H38.2688V3.51346H46.8987V0.328846H26.0987V3.51346ZM64.3674 0.328846L74.2335 28.5231H70.4902L68.3139 22.0673H57.1304L54.954 28.5173H51.2107L61.0768 0.323077L64.3674 0.328846ZM67.1996 18.8769L62.7192 5.63654L58.2272 18.8769H67.1996ZM100.593 0.328846H96.6875L90.9188 10.7885L85.1616 0.328846H81.2558L88.8585 13.9788L80.3911 28.5173H84.2969L90.913 17.4462L97.529 28.5173H101.435L92.9326 13.9731L100.593 0.328846ZM129.24 12.8712V15.975C129.24 25.0846 125.253 28.8462 118.962 28.8462C112.671 28.8462 108.684 25.0846 108.684 15.975V12.8712C108.672 3.76154 112.659 0 118.944 0C125.229 0 129.222 3.76154 129.222 12.8712H129.24ZM125.705 12.8712C125.705 5.88462 123.32 3.18462 118.967 3.18462C114.615 3.18462 112.2 5.88462 112.2 12.8712V15.975C112.2 22.9615 114.586 25.6558 118.938 25.6558C123.291 25.6558 125.676 22.9615 125.676 15.975L125.705 12.8712Z"
                                fill="#fff">
                            </path>
                        </svg>
                    </span>
                    <h2 class="brand-text"></h2>
                </a>
            </li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                        class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                        class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc"
                        data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a class="d-flex align-items-center" href="index-2.html"><i
                        data-feather="home"></i><span class="menu-title text-truncate"
                                                      data-i18n="Dashboards">Dashboards</span><span
                        class="badge badge-light-warning rounded-pill ms-auto me-1">2</span></a>
                <ul class="menu-content">
                    {{--                    <li><a class="d-flex align-items-center" href="dashboard-analytics.html"><i--}}
                    {{--                                data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Analytics</span></a>--}}
                    {{--                    </li>--}}
                    {{--                    <li><a class="d-flex align-items-center" href="dashboard-ecommerce.html"><i--}}
                    {{--                                data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">eCommerce</span></a>--}}
                    {{--                    </li>--}}
                </ul>
            </li>
            <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Shop & More</span><i
                    data-feather="more-horizontal"></i>
            </li>


            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                        data-feather="shopping-cart"></i><span class="menu-title text-truncate" data-i18n="eCommerce">Shop</span></a>
                <ul class="menu-content">
                    <li class="active">
                        <a class="d-flex align-items-center" href="app-ecommerce-shop.html"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                                                data-i18n="Shop">Shop</span>
                        </a>
                    </li>

                    @if(Auth::check())
                        @if(Auth::user()->userType->name === 'Admin')
                            <li>
                                <a class="d-flex align-items-center" href="{{route('products')}}"><i
                                        data-feather="circle"></i><span class="menu-item text-truncate"
                                                                        data-i18n="Details">Products</span></a>
                            </li>
                        @endif
                    @endif

                    <li>
                        <a class="d-flex align-items-center" href="app-ecommerce-details.html"><i
                                data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Details">Details</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-ecommerce-wishlist.html"><i
                                data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Wish List">Wish List</span></a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</div>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content ecommerce-application">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        @yield('content')
    </div>
</div>
<!-- END: Content-->


<!-- BEGIN: Customizer-->
<div class="customizer d-none d-md-block"><a class="customizer-toggle d-flex align-items-center justify-content-center"
                                             href="#"><i class="spinner" data-feather="settings"></i></a>
    <div class="customizer-content">
        <!-- Customizer header -->
        <div class="customizer-header px-2 pt-1 pb-0 position-relative">
            <h4 class="mb-0">Theme Customizer</h4>
            <p class="m-0">Customize & Preview in Real Time</p>

            <a class="customizer-close" href="#"><i data-feather="x"></i></a>
        </div>

        <hr/>

        <!-- Styling & Text Direction -->
        <div class="customizer-styling-direction px-2">
            <p class="fw-bold">Skin</p>
            <div class="d-flex">
                <div class="form-check me-1">
                    <input
                        type="radio"
                        id="skinlight"
                        name="skinradio"
                        class="form-check-input layout-name"
                        checked
                        data-layout=""
                    />
                    <label class="form-check-label" for="skinlight">Light</label>
                </div>
                <div class="form-check me-1">
                    <input
                        type="radio"
                        id="skinbordered"
                        name="skinradio"
                        class="form-check-input layout-name"
                        data-layout="bordered-layout"
                    />
                    <label class="form-check-label" for="skinbordered">Bordered</label>
                </div>
                <div class="form-check me-1">
                    <input
                        type="radio"
                        id="skindark"
                        name="skinradio"
                        class="form-check-input layout-name"
                        data-layout="dark-layout"
                    />
                    <label class="form-check-label" for="skindark">Dark</label>
                </div>
                <div class="form-check">
                    <input
                        type="radio"
                        id="skinsemidark"
                        name="skinradio"
                        class="form-check-input layout-name"
                        data-layout="semi-dark-layout"
                    />
                    <label class="form-check-label" for="skinsemidark">Semi Dark</label>
                </div>
            </div>
        </div>

        <hr/>

        <!-- Menu -->
        <div class="customizer-menu px-2">
            <div id="customizer-menu-collapsible" class="d-flex">
                <p class="fw-bold me-auto m-0">Menu Collapsed</p>
                <div class="form-check form-check-primary form-switch">
                    <input type="checkbox" class="form-check-input" id="collapse-sidebar-switch"/>
                    <label class="form-check-label" for="collapse-sidebar-switch"></label>
                </div>
            </div>
        </div>
        <hr/>

        <!-- Layout Width -->
        <div class="customizer-footer px-2">
            <p class="fw-bold">Layout Width</p>
            <div class="d-flex">
                <div class="form-check me-1">
                    <input type="radio" id="layout-width-full" name="layoutWidth" class="form-check-input" checked/>
                    <label class="form-check-label" for="layout-width-full">Full Width</label>
                </div>
                <div class="form-check me-1">
                    <input type="radio" id="layout-width-boxed" name="layoutWidth" class="form-check-input"/>
                    <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                </div>
            </div>
        </div>
        <hr/>

        <!-- Navbar -->
        <div class="customizer-navbar px-2">
            <div id="customizer-navbar-colors">
                <p class="fw-bold">Navbar Color</p>
                <ul class="list-inline unstyled-list">
                    <li class="color-box bg-white border selected" data-navbar-default=""></li>
                    <li class="color-box bg-primary" data-navbar-color="bg-primary"></li>
                    <li class="color-box bg-secondary" data-navbar-color="bg-secondary"></li>
                    <li class="color-box bg-success" data-navbar-color="bg-success"></li>
                    <li class="color-box bg-danger" data-navbar-color="bg-danger"></li>
                    <li class="color-box bg-info" data-navbar-color="bg-info"></li>
                    <li class="color-box bg-warning" data-navbar-color="bg-warning"></li>
                    <li class="color-box bg-dark" data-navbar-color="bg-dark"></li>
                </ul>
            </div>

            <p class="navbar-type-text fw-bold">Navbar Type</p>
            <div class="d-flex">
                <div class="form-check me-1">
                    <input type="radio" id="nav-type-floating" name="navType" class="form-check-input" checked/>
                    <label class="form-check-label" for="nav-type-floating">Floating</label>
                </div>
                <div class="form-check me-1">
                    <input type="radio" id="nav-type-sticky" name="navType" class="form-check-input"/>
                    <label class="form-check-label" for="nav-type-sticky">Sticky</label>
                </div>
                <div class="form-check me-1">
                    <input type="radio" id="nav-type-static" name="navType" class="form-check-input"/>
                    <label class="form-check-label" for="nav-type-static">Static</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="nav-type-hidden" name="navType" class="form-check-input"/>
                    <label class="form-check-label" for="nav-type-hidden">Hidden</label>
                </div>
            </div>
        </div>
        <hr/>

        <!-- Footer -->
        <div class="customizer-footer px-2">
            <p class="fw-bold">Footer Type</p>
            <div class="d-flex">
                <div class="form-check me-1">
                    <input type="radio" id="footer-type-sticky" name="footerType" class="form-check-input"/>
                    <label class="form-check-label" for="footer-type-sticky">Sticky</label>
                </div>
                <div class="form-check me-1">
                    <input type="radio" id="footer-type-static" name="footerType" class="form-check-input" checked/>
                    <label class="form-check-label" for="footer-type-static">Static</label>
                </div>
                <div class="form-check me-1">
                    <input type="radio" id="footer-type-hidden" name="footerType" class="form-check-input"/>
                    <label class="form-check-label" for="footer-type-hidden">Hidden</label>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- End: Customizer-->

<!-- Buynow Button-->

</div>
<div class="sidenav-overlay"></div>
<div class="drag-target"></div>


<!-- BEGIN: Vendor JS-->
<script src="{{asset('app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('app-assets/vendors/js/extensions/wNumb.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/extensions/nouislider.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
<!-- END: Page Vendor JS-->


<!-- BEGIN: Page JS-->
<script src="{{asset('app-assets/js/scripts/pages/app-ecommerce-checkout.min.js')}}"></script>
<!-- END: Page JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('app-assets/vendors/js/forms/wizard/bs-stepper.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/extensions/swiper.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('app-assets/js/core/app-menu.min.js')}}"></script>
<script src="{{asset('app-assets/js/core/app.min.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/customizer.min.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/jszip.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/tables/table-datatables-basic.min.js')}}"></script>

<!-- END: Page Vendor JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('app-assets/js/scripts/pages/app-ecommerce.min.js')}}"></script>
<!-- END: Page JS-->

<script>
    $(window).on('load', function () {
        if (feather) {
            feather.replace({width: 14, height: 14});
        }
    })
</script>
@livewireScripts

</body>
<!-- END: Body-->

</html>
