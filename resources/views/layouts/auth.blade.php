<!DOCTYPE html>
<!--
Project Name: Staxo Store - eCommerce Application
Author: Allan Tinashe Muzeya
Website: https://allanthecodemaster.co.za
Contact: dev@allanthecodemaster.co.za

-->
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Staxo Store">
    <meta name="keywords" content="online laravel store, Online store eCommerce Staxo has a store">
    <meta name="author" content="PIXINVENT">

    <title>Staxo Store | Login</title>

    <link rel="apple-touch-icon" href="{{asset('app-assets/images/ico/apple-icon-120.html')}}">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

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
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/form-validation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/page-auth.min.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">

    <style>
        body > div.app-content.content > div.content-wrapper > div.content-body > div > div > div {
            background: linear-gradient(45deg, black, #1b2d53);
        }
        body > div.app-content.content > div.content-wrapper > div.content-body > div > div > div > div > a > svg{
            height: 41px;
        }
        body > div.app-content.content > div.content-wrapper > div.content-body > div > div > div > div > p.card-text.mb-2{
            font-size: 13px;
            letter-spacing: 2px;
            margin-top: 7px;
        }
    </style>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial;
            font-size: 17px;
        }

        #myVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
        }

        .content {
            position: fixed;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            color: #f1f1f1;
            width: 100%;
            padding: 20px;
        }

        #myBtn {
            width: 200px;
            font-size: 18px;
            padding: 10px;
            border: none;
            background: #000;
            color: #fff;
            cursor: pointer;
        }

        #myBtn:hover {
            background: #ddd;
            color: black;
        }
    </style>
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">



<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">

            <video autoplay muted loop id="myVideo">
                <source src="{{asset('app-assets/videos/pixels.mp4')}}" type="video/mp4">
                Your browser does not support HTML5 video.
            </video>

            <div class="auth-wrapper auth-v1 px-2">
                <div class="auth-inner py-2">
                    <!-- Login v1 -->
                    <div class="card mb-0">
                        <div class="card-body">
                            <a href="#" class="brand-logo">
                                <svg class="logo-svg" viewBox="0 0 130 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.6451 20.9596C19.6451 24.6346 17.1786 28.8462 10.1098 28.8462C5.50759 28.8462 2.13572 27.2942 0 24.2308L2.90179 22.2288C4.75313 24.3923 6.38393 25.6904 10.0924 25.6904C14.7353 25.6904 16.0933 23.5673 16.0933 21.1558C16.0933 18.5019 14.7353 16.7019 9.39599 15.8827C4.0567 15.0635 0.615179 12.5019 0.615179 7.59808C0.615179 3.55385 3.29063 0 9.78482 0C14.3058 0 17.138 1.51154 19.1576 4.61538L16.4009 6.57692C14.8804 4.61538 13.238 3.18462 9.65715 3.18462C6.36652 3.18462 4.14955 4.65577 4.14955 7.59808C4.14955 10.95 6.69732 12.0923 10.8469 12.8308C16.3196 13.7654 19.6451 15.7327 19.6451 20.9596ZM26.0987 3.51346H34.7344V28.5173H38.2688V3.51346H46.8987V0.328846H26.0987V3.51346ZM64.3674 0.328846L74.2335 28.5231H70.4902L68.3139 22.0673H57.1304L54.954 28.5173H51.2107L61.0768 0.323077L64.3674 0.328846ZM67.1996 18.8769L62.7192 5.63654L58.2272 18.8769H67.1996ZM100.593 0.328846H96.6875L90.9188 10.7885L85.1616 0.328846H81.2558L88.8585 13.9788L80.3911 28.5173H84.2969L90.913 17.4462L97.529 28.5173H101.435L92.9326 13.9731L100.593 0.328846ZM129.24 12.8712V15.975C129.24 25.0846 125.253 28.8462 118.962 28.8462C112.671 28.8462 108.684 25.0846 108.684 15.975V12.8712C108.672 3.76154 112.659 0 118.944 0C125.229 0 129.222 3.76154 129.222 12.8712H129.24ZM125.705 12.8712C125.705 5.88462 123.32 3.18462 118.967 3.18462C114.615 3.18462 112.2 5.88462 112.2 12.8712V15.975C112.2 22.9615 114.586 25.6558 118.938 25.6558C123.291 25.6558 125.676 22.9615 125.676 15.975L125.705 12.8712Z"
                                        fill="#fff">
                                    </path>
                                </svg>
{{--                                <h2 class="brand-text text-primary ms-1">Staxo Store</h2>--}}
                            </a>

                            @yield('content')
                        </div>
                    </div>
                    <!-- /Login v1 -->
                </div>
            </div>

        </div>
    </div>
</div>
<!-- END: Content-->


<!-- BEGIN: Vendor JS-->
<script src="{{asset('app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('app-assets/js/core/app-menu.min.js')}}"></script>
<script src="{{asset('app-assets/js/core/app.min.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('app-assets/js/scripts/pages/page-auth-login.js')}}"></script>
<!-- END: Page JS-->

<script>
    import {feather} from "{{asset('app-assets/vendors/js/vendors.min')}}";

    $(window).on('load',  function(){
        if (feather) {
            feather.replace({ width: 14, height: 14 });
        }
    })
</script>
</body>
<!-- END: Body-->

<!-- Mirrored from pixinvent.com/demo/vuexy-html-bootstrap-admin-template/html/ltr/vertical-menu-template-dark/page-auth-login-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Aug 2021 05:09:26 GMT -->
</html>
