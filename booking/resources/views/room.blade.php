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

<!-- main-menu Start -->
<header class="top-area" style="position: relative; background-color: #4d4e54; height: 77px;">
    <div class="header-area" style="height: 77px;">
        <div class="container">
            <div class="row" style="max-width: 76vw; margin: 0 auto;">
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
                                            <ul class="dropdown-menu" style="position: absolute;">
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
        </div><!-- /.container-->
    </div><!-- /.header-area -->
</header><!-- /.top-area-->

<div class="container-fluid" style="margin-top: 70px; margin-left: 200px;">
    <div class="col-md-6 col-lg-4 mb-3">
        <div class="card h-100">
        <div class="card-body">
            <h5 class="card-title">Camera hotel 69</h5>
            <h6 class="card-subtitle text-muted"><i class="fa-solid fa-location-dot"></i> Strada matii nr 420</h6>
        </div>
        <img class="img-fluid" src="http://127.0.0.1:8000/images/r2.jpg" alt="Card image cap">
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <p style="  margin-bottom: 5px;">Informatii</p>
                </li>
                <li class="list-group-item">
                    <p style="margin-top: 15px;">
                    Cea mai noua unitate de cazare de pe litoralul Marii Negre 
                    apare langa hotelul Phoenicia Luxury 4*, un hotel grandios de 5*, 
                    PHOENICIA ROYAL. Hotelul a fost inaugurat in sezonul estival 2017 
                    si detine distinctia Five Star Diamond Award
                    Toti oaspetii din cadrul Phoenicia Royal, Phoenicia Luxury au 
                    acces la facilitatile gratuite din cadrul Phoenicia Holiday Resort.
                    </p>
                    <p style="margin-top: 70px; margin-bottom: 5px;">Dotari si servicii</p>
                </li>
                <li class="list-group-item">
                    <p style="margin-top: 15px;">
                    Hotelul dispune de 144 spatii de cazare (duplexuri si suite de lux).
                    Servicii incluse:
                    Parcare proprie supravegheata, Internet, Business Corner, Presa (in receptie), 
                    Prosoape de plaja (oferite la cazare, pe baza de tichet), Sezlonguri si umbrele 
                    la plaja si piscine, Sauna, Parc de joaca pentru copii, pe categorii de varsta, 
                    Teatru de vara/Cinema, Parcul indragostitilor (foisoare pentru seri romantice), 
                    Club animatie copii, Jocuri si concursuri pentru adulti si copii (la plaja, piscine, terasa),
                     Piscine exterioare pentru adulti si piscine exterioare pentru copii, cu valuri/ tobogane, 
                     Piscina interioara cu apa incalzita, Animatori, Petreceri tematice, Karaoke, Carnaval, Fitness, 
                     Clase de aerobic, kangoo jumps, zumba, yoga, pilates, aquagym, Baza sportiva (tenis/baschet/fotbal/volei), 
                     Spalatorie haine cu autoservire, Cabinet cu medic generalist, Televiziune interna proprie, 
                     Statie radio si TV intern.
                    *Facilitatile sunt subiectul conditiilor impuse de temeiul legal reglementat de institutiile abilitate.

                    Servicii contra cost:
                    Transfer la/de la gara/aeroport Constanta/Bucuresti, Centru de fotografiere 
                    (pentru cele mai frumoase amintiri din vacanta), Servicii de masaj, Farmacie, 
                    Complex de magazine (alimente/cosmetice/jucarii), Echitatie, Ateliere de creatie, 
                    Club Games/ Biliard, Sporturi nautice, Instructori de sport, Baruri, Restaurante, 
                    Athena Casino (in incinta Phoenicia Boutique).
                    *Parte din servicii sunt subiectul conditiilor impuse de temeiul legal reglementat 
                    de institutiile abilitate.

                    Este obligatorie purtarea bratarilor primite la check-in pentru a beneficia de serviciile 
                    comandate atat la plaja cat si in complex!
                    Ziua hoteliera incepe cu ora 16:00 si se incheie la ora 12:00.
                    </p>
                    <p>Servicii masa</p>
                </li>
            </ul>
        </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 mb-3" style="margin-left: 70px;">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Contact</h5>
                <h6 class="card-subtitle"> Esti prost si ai nevoie de ajutor?</h6>
                <h6 class="card-subtitle" style="margin-top: 10px;"> Contacteaza-ne la:</h6>
            </div>
            <div class="card-body" style="padding-top: 10px;">
                <p class="card-text">0769 420 mortii matii</p>
                <p class="card-text">0769 420 mortii matii</p>
                <div class="btn btn-primary">
                    Rezerva
                </div>
            </div>
        </div>
    </div>
</div>

</body>

<script src="{{asset('/js/jquery.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>

<script>
    $('#card1').on('click', function(){
        window.location.href="{{route('home')}}";
    });

    $('#card2').on('click', function(){
        window.location.href="{{route('home')}}";
    });
</script>