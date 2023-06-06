<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- META DATA -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet"/>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet"/>

    <!-- TITLE OF SITE -->
    <title>@yield('title')</title>

    @yield('styles')

    <!-- favicon img -->
    {{-- <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/> --}}

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>

    <!--animate.css-->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}"/>

    <!--hover.css-->
    <link rel="stylesheet" href="{{asset('/css/hover-min.css')}}">

    <!--datepicker.css-->
    <link rel="stylesheet" href="{{asset('/css/datepicker.css')}}">

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="{{asset('/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/owl.theme.default.min.css')}}"/>

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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->


<!-- main-menu Start -->
<header class="top-area">
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="logo">
                        <a href="{{route('home')}}">
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
                                <li class="smooth-menu"><a href="#home" style="bottom:0px;">Acasa</a></li>
                                <li class="smooth-menu"><a href="#gallery">Camere</a></li>
                                <li class="smooth-menu"><a href="#pack">Pachete</a></li>
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
                                                    style="background-color: #00d8ff; border-color: #00d8ff;">
                                                <i class="fa-solid fa-circle-user" style="margin-right: 10px;"></i><span
                                                    class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{route('account')}}"
                                                       style="color:black; height:20px; padding-top:0px;">Account</a>
                                                </li>
                                                <li><a href="#" style="color:black; height:20px; padding-top:0px;">Settings</a>
                                                </li>
                                                <li><a id='logout' href="#"
                                                       style="color:red; height:20px; padding-top:0px;">Log out</a></li>
                                            </ul>
                                        </div>
                                        <!--button class="book-btn" id="logout"><i class="fa-solid fa-circle-user"></i>
                                            </button-->
                                    </li><!--/.project-btn-->
                                @endif
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.main-menu-->
                </div><!-- /.col-->
            </div><!-- /.row -->
            <div class="home-border"></div><!-- /.home-border-->
        </div><!-- /.container-->
    </div><!-- /.header-area -->

</header><!-- /.top-area-->
<!-- main-menu End -->

<div class="container-fluid">@yield('content')</div>

<!-- footer-copyright start -->
<footer class="footer-copyright">
    <div class="container">
        <div class="footer-content">
            <div class="row">

                <div class="col-sm-3">
                    <div class="single-footer-item">
                        <div class="footer-logo">
                            <a href="index.html">
                                Mountain<span>Hotel</span>
                            </a>
                            <p>
                                best travel agency
                            </p>
                        </div>
                    </div><!--/.single-footer-item-->
                </div><!--/.col-->

                <div class="col-sm-3" style="padding-top: 11rem;">
                    <div class="single-footer-item text-center">
                        <h2 class="text-left">contacts</h2>
                        <div class="single-footer-txt text-left">
                            <p>+40 748 024 111</p>
                            <p>guta.regele.manelelor@gmail.com</p>
                            <p>Valea Mare, 69</p>
                            <p>Bistrita-Nasaud</p>
                            <a href="{{route('contact')}}">
                                <p><b>Contacteaza-ne</b></p>
                            </a>
                        </div><!--/.single-footer-txt-->
                    </div><!--/.single-footer-item-->
                </div><!--/.col-->

                <div class="col-sm-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d349752.50176071655!2d23.12399903508541!3d46.775905687856174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47490c18ae19d137%3A0xa7352ce9c8b974de!2zU29tZciZ!5e0!3m2!1sen!2sro!4v1685370928918!5m2!1sen!2sro"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

            </div><!--/.row-->

        </div><!--/.footer-content-->
        <hr>
        <div class="foot-icons ">
            <ul class="footer-social-links list-inline list-unstyled">
                <li><a href="#" target="_blank" class="foot-icon-bg-1"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" target="_blank" class="foot-icon-bg-2"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" target="_blank" class="foot-icon-bg-3"><i class="fa fa-instagram"></i></a></li>
            </ul>
            <p>&copy; 2017 <a href="https://www.themesine.com">ThemeSINE</a>. All Right Reserved</p>

        </div><!--/.foot-icons-->
        <div id="scroll-Top">
            <i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip" data-placement="top"
               title="" data-original-title="Back to Top" aria-hidden="true"></i>
        </div><!--/.scroll-Top-->
    </div><!-- /.container-->

</footer><!-- /.footer-copyright-->
<!-- footer-copyright end -->


<script src="{{asset('/js/jquery.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

<!--modernizr.min.js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


<!--bootstrap.min.js-->
<script src="{{asset('/js/bootstrap.min.js')}}"></script>

<!-- bootsnav js -->
<script src="{{asset('/js/bootsnav.js')}}"></script>

<!-- jquery.filterizr.min.js -->
<script src="{{asset('/js/jquery.filterizr.min.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

<!--jquery-ui.min.js-->
<script src="{{asset('/js/jquery-ui.min.js')}}"></script>

<!-- counter js -->
<script src="{{asset('/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('/js/waypoints.min.js')}}"></script>

<!--owl.carousel.js-->
<script src="{{asset('/js/owl.carousel.min.js')}}"></script>

<!-- jquery.sticky.js -->
<script src="{{asset('/js/jquery.sticky.js')}}"></script>

<!--datepicker.js-->
<script src="{{asset('/js/datepicker.js')}}"></script>

<!--Custom JS-->
<script src="{{asset('/js/custom.js')}}"></script>

@if(Session::has('user'))
    <script>
        $("#logout").on("click", function () {
            $.ajax({
                url: "{{route('logout')}}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: function (data, status, xhr) {
                    location.reload();
                }
            });
        });
    </script>
@endif

@yield('scripts')


</body>

</html>
