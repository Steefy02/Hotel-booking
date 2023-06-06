<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>Cards basic - UI elements | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="">

    <!--animate.css-->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}"/>

    <!--hover.css-->
    <link rel="stylesheet" href="{{asset('/css/hover-min.css')}}">

    <!-- range css-->
    <link rel="stylesheet" href="{{asset('/css/jquery-ui.min.css')}}"/>

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}"/>

    <!-- bootsnav -->
    <link rel="stylesheet" href="{{asset('/css/bootsnav.css')}}"/>

    <!--style.css-->
    <link rel="stylesheet" href="{{asset('/css/style.css')}}"/>

    <!--responsive.css-->
    <link rel="stylesheet" href="{{asset('/css/responsive.css')}}"/>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css">

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('css/core.css')}}" class="template-customizer-core-css">
    <link rel="stylesheet" href="{{asset('css/theme-default.css')}}" class="template-customizer-theme-css">
    <link rel="stylesheet" href="{{asset('css/demo.css')}}">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('css/perfect-scrollbar.css')}}">

    <!-- Page CSS -->
    <script src="https://kit.fontawesome.com/045d1ece88.js" crossorigin="anonymous"></script>

    <!-- Helpers -->
    <script src="{{asset('js/helpers.js')}}"></script>
    <style type="text/css">
        .layout-menu-fixed .layout-navbar-full .layout-menu,
        .layout-page {
            padding-top: 0px !important;
        }

        .content-wrapper {
            padding-bottom: 0px !important;
        }</style>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('js/config.js')}}"></script>
</head>

<body>
<header class="top-area" style="background-color:#4d4e54">
    <div id="sticky-wrapper" class="sticky-wrapper" style="height: 82px;">
        <div class="header-area">
            <div class="container"
                 style="margin-left:87.500px; margin-right:87.500px; padding-left:15px; padding-right:15px;">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="logo">
                            <a href="http://127.0.0.1:8000">
                                Mountain<span>Hotel</span>
                            </a>
                        </div><!-- /.logo-->
                    </div><!-- /.col-->
                    <div class="col-sm-10">
                        <div class="main-menu">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                    <i class="fa fa-bars"></i>
                                </button><!-- / button-->
                            </div><!-- /.navbar-header-->
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    @if(!Session::has('user'))
                                        <a href="{{route('login')}}">
                                            <li>
                                                <button class="book-btn">Logare
                                                </button>
                                            </li>
                                        </a><!--/.project-btn-->
                                        <a href="{{route('register')}}">
                                            <li>
                                                <button class="book-btn">Inregistrare
                                                </button>
                                            </li>
                                        </a><!--/.project-btn-->
                                    @else
                                        <li>
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button"
                                                        data-toggle="dropdown"
                                                        style="background-color: #00d8ff; border-color: #00d8ff; margin-right: 100px;">
                                                    <i class="fa-solid fa-circle-user"
                                                       style="margin-right: 10px;"></i><span
                                                        class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{route('account')}}"
                                                           style="color:black; height:20px; padding-top:0px;">Account</a>
                                                    </li>
                                                    <li><a href="#" style="color:black; height:20px; padding-top:0px;">Settings</a>
                                                    </li>
                                                    <li><a id='logout' href="#"
                                                           style="color:red; height:20px; padding-top:0px;">Log out</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li><!--/.project-btn-->
                                    @endif
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.main-menu-->
                    </div><!-- /.col-->
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container-fluid" style="padding-top:100px;">
    <div class="container-xl flex-grow-1 container-p-y">
        <div class="row mb-5">
            <h4 class="fw-bold">Setarile contului</h4>
            <div class="col-md-6 col-lg-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa-solid fa-user-gear"></i> Detalii personale</h5>
                        <div class="card-subtitle text-muted mb-3">Actualizati-va informatiile.</div>
                        <a href="javascript:void(0)" class="card-link">Gestionati detaliile personale.</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa-solid fa-credit-card"></i> Detalii de plata</h5>
                        <div class="card-subtitle text-muted mb-3">Actualizati-va informatiile.</div>
                        <a href="javascript:void(0)" class="card-link">Gestionati detaliile de plata.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

<script src="{{asset('/js/jquery.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>