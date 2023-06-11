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
        <div class="container" style="max-height: 77px;">
            <div class="row" style="max-width: 76vw; max-height: 77px; margin: 0 auto;">
                <div class="col-sm-2">
                    <div class="logo">
                        <a href="{{route('home')}}">
                            Mountain<span>Hotel</span>
                        </a>
                    </div><!-- /.logo-->
                </div><!-- /.col-->
                <div class="col-sm-10" style="height: 77px;">
                    <div class="main-menu">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                <i class="fa fa-bars"></i>
                            </button><!-- / button-->
                        </div><!-- /.navbar-header-->
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right" style="display: inline;">
                                @if(!Session::has('user'))
                                <li>
                                    <a href="{{route('login')}}" class="my-buttons">
                                        <button class="book-btn">Logare
                                        </button>

                                    </a><!--/.project-btn-->
                                </li>
                                <li>
                                    <a href="{{route('register')}}" class="my-buttons">
                                        <button class="book-btn">Inregistrare
                                        </button>
                                    </a><!--/.project-btn-->
                                </li>
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
                                                <li><a href="{{route('settings')}}" style="color:black; height:20px; padding-top:0px;">Settings</a>
                                                </li>
                                                <li><a id='logout' href="" style="color:red; height:20px; padding-top:0px;">Log out</a></li>
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

<img src="{{asset('images/room-bg.jpg')}}" style="position: fixed; top: 0px; z-index: -1; object-fit: fill; filter: brightness(70%);"/>

<div class="container-fluid" style="margin: 0 auto; padding-top: 50px; background-color: transparent;">

	<div class="container mx-auto grid grid-cols-2 md:flex px-4 py-2 font-semibold" style="border-radius: 25px; background-color: #00d8ff; box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px; text-align:center; opacity: 0.70;">
		<a href="#informatii" class="py-1 px-3" style="color: black"><b>Informatii</b></a>
        <span style="color: black"><b> | </b></span>
		<a href="#dotari" class="py-1 px-3" style="color: black"><b>Dotari camere</b></a>
        <span style="color: black"><b> | </b></span>
		<a href="#facilitati" class="py-1 px-3" style="color: black"><b>Facilitati</b></a>
        <span style="color: black"><b> | </b></span>
		<a href="#servicii_masa" class="py-1 px-3" style="color: black"><b>Servicii masa</b></a>
	</div>

	<div class="row justify-content-center" style="margin: 0 auto; margin-top: 50px;">
		<div class="col-md-6 col-lg-6 mb-3">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Camera hotel 69</h4>
                    <h5 class="card-subtitle" style="margin-top: 10px;">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </h5>
					<h6 class="card-subtitle text-muted" style="margin-top: 20px;"><i class="fa-solid fa-location-dot"></i> Strada matii nr 420</h6>
				</div>
                
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" style="background-color: #365566;">
                        <div class="item active">
                            <div style="display: flex; justify-content: center; align-items: center;">
                                <img src="http://127.0.0.1:8000/images/r1.jpg" alt="Los Angeles">
                            </div>
                        </div>

                        <div class="item">
                            <div style="display: flex; justify-content: center; align-items: center;">
                                <img src="http://127.0.0.1:8000/images/r2.jpg" alt="Chicago">
                            </div>
                        </div>

                        <div class="item">
                            <div style="display: flex; justify-content: center; align-items: center;">
                                <img src="http://127.0.0.1:8000/images/r3.jpg" alt="New York">
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>


				<div class="card-body">
					<ul class="list-group list-group-flush">
						<li class="list-group-item">
							<h4 id="informatii" style="margin-bottom: 5px;">Informatii</h4>
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
							<h4 id="dotari" style="margin-top: 70px; margin-bottom: 5px;">Dotari camere</h4>
						</li>
						<li class="list-group-item">
							<p style="margin-top: 15px;">
                            Sunset Apartment - are un spatiu generos de 61 mp, format dintr-un living si un dormitor 
                            cu pat matrimonial(180/200 cm), o cada rotunda in fata patului, baie cu dus, balcon, 
                            vedere frontala catre lacul Siutghiol.<br>
                            Capacitate maxima: 2 adulti<br>
                            Facilitati spatii de cazare: Sistem de acces pe baza de cartela magnetica, 
                            instalatie individuala de climatizare,TV, internet, seif in camera, telefon, 
                            minibar, cana electrica, cani, pahare, lingurite, fier de calcat, masa de calcat, 
                            uscator de par, prosoape, halate, papuci, cosmetice hoteliere, canapea, baie cu dus, 
                            pat bebe la cerere, housekeeping zilnic.
							</p>
							<h4 id="facilitati" style="margin-top: 70px; margin-bottom: 5px;">Facilitati</h4>
						</li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col"><i class="fa-solid fa-check"></i> All inclusive</div>
                                <div class="col"><i class="fa-solid fa-check"></i> Piscina</div>
                                <div class="col"><i class="fa-solid fa-check"></i> Internet</div>

                                <!-- Force next columns to break to new line -->
                                <div class="w-100"></div>

                                <div class="col"><i class="fa-solid fa-check"></i> Parcare</div>
                                <div class="col"><i class="fa-solid fa-check"></i> Restaurant</div>
                                <div class="col"><i class="fa-solid fa-check"></i> Minibar</div>

                                <!-- Force next columns to break to new line -->
                                <div class="w-100"></div>
                                
                                <div class="col"><i class="fa-solid fa-check"></i> Aer conditionat</div>
                                <div class="col"><i class="fa-solid fa-check"></i> Frigider</div>
                                <div class="col"><i class="fa-solid fa-check"></i> Prosoape</div>
                            </div>
							<h4 id="servicii_masa" style="margin-top: 70px; margin-bottom: 5px;">Servicii masa</h4>
						</li>
                        <li class="list-group-item">
							<p style="margin-top: 15px;">
                            MASA: restaurant propriu, Piazzetta; mic dejun, pranz, cina sistem bufet suedez.<br>
                            1. Mic dejun  - (07:30 - 10:00 bufet) suedez, se serveste incepand cu a doua zi de cazare 
                            si inclusiv in ziua plecarii.
                            Bauturi incluse: apa, suc, ceai, cafea, cappuccino, ciocolata calda;<br>
                            2. Demipensiune -  (7:30 - 10:00) mic dejun bufet suedez si masa de pranz (13:00 - 15:00)bufet suedez- 
                            se serveste incepand cu a doua zi de cazare si inclusiv in ziua plecarii.
                            Bauturi incluse: apa, suc, ceai, cafea, cappuccino, ciocolata calda;<br>
                            3. Pensiune Completa -  mic dejun (7:30 - 10:00), masa de pranz (13:00 - 15.00), 
                            cina (19:00 - 21:00) in sistem bufet suedez. In prima zi de cazare se serveste cina, 
                            incepand cu a doua zi de cazare se servesc toate mesele si in ziua plecarii se servesc 
                            doar micul dejun si pranzul.
                            Bauturi incluse: apa, suc, ceai, cafea, cappuccino, ciocolata calda;<br>
                            4. All Inclusive - mic dejun (07:30 - 10:00), masa de pranz (13:00 - 15.00) si cina 
                            (19:00 - 21:00), acces la barul de pe piscina si la barul de pe plaja. 
                            In prima zi de cazare se serveste cina, incepand cu a doua zi de cazare 
                            se servesc toate mesele si in ziua plecarii se servesc doar micul dejun si pranzul.<br>
                            Bauturile incluse: apa, cafea, cappuccino, ciocolata calda, bauturi racoritoare(gama Pepsi), 
                            bauturi alcoolice(bere, draft, vin alb/rosu draft, whisky, vodka, rom, gin, lichior), 
                            cocktailuri( Cuba Libre, Screwdriver, Whisky Cola, Gin Tonic, Campari Orange).<br>
                            * Bauturile incluse pentru tipurile de masa 1, 2 si 3 sunt disponibile doar in restaurant, 
                            in timpul servirii mesei.<br>
                            * Pachetul de bauturi inclus in tipul de masa All Inclusive este disponibil in restaurant
                            (in intervalul de servire al meselor principale), la barul de pe plaja( program 10:00-19:00) 
                            si la barul de pe piscina( program 10:00-20:00).
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-lg-4 mb-6" style="margin-left: 70px;">
            <div class="card" style="opacity: 0.85;">
				<div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="text-align: center;">
                            <h4 style="margin-bottom: 5px;">Tarif pentru perioada selectata</h4>
                            <p style="font-size:larger; margin-top: 10px; margin-bottom: 5px; color: #3e4d5d;"><b>31.02.2050 - 34.02.2050</b></p>
                        </li>
                        <li class="list-group-item"  style="text-align: center;">
                            <p style="font-size:x-large; margin-top: 10px; margin-bottom: 5px; color: #3e4d5d;">420 Lei</p>
                        </li>
                        <li class="list-group-item">
                            <p style="font-size:medium; color: #3e4d5d; margin-top: 20px;"><i class="fa-solid fa-location-dot"></i>&ensp; Strada Matii Nr 420</p>
                            <p style="font-size:medium; color: #3e4d5d;"><i class="fa-solid fa-person"></i><i class="fa-solid fa-person-dress"></i>&ensp;Capacitate: 2 pers</p>
                            <p style="font-size:medium; color: #3e4d5d;"><i class="fa-solid fa-bed"></i>&ensp; Pat dublu</p>
                            <p style="font-size:medium; color: #3e4d5d;"><i class="fa-solid fa-clock"></i>&ensp; Checkin 7:00 - 12:00</p>
                            <p style="font-size:medium; color: #3e4d5d;"><i class="fa-solid fa-wifi"></i>&ensp; Wifi gratuit</p>
                            <p style="font-size:medium; color: #3e4d5d;"><i class="fa-solid fa-square-parking"></i>&ensp; Parcare</p>
                        </li>
                        <li class="list-group-item" style="display: flex; justify-content: center;">
                            <a href="{{route('checkout')}}">
                                <div class="btn btn-primary my-book-buttons" style="color: white; width: 250px; margin-top: 10px;">
                                    Rezerva acum
                                </div>
                            </a>
                        </li>
                    </ul>
				</div>
			</div>

            <div class="card" style="background-color: #00d8ff; margin-top: 70px; opacity: 0.85;">
				<div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h5 class="card-title" style="color: #3e4d5d; margin-bottom: 5px;">Contact</h5>
                        </li>
                        <li class="list-group-item" style="padding-left: 0px;">
                            <p style="font-size:medium; margin-top: 10px; margin-bottom: 5px; color: #3e4d5d;"> Esti prost si ai nevoie de ajutor?</p>
                            <p style="font-size:medium; color: #3e4d5d;"> Contacteaza-ne la:</p>
                            <p style="margin-bottom: 5px; padding-left: 10px;"><i class="fa-solid fa-phone"></i>&emsp;0769 420 mortii matii</p>
                            <p style="margin-bottom: 5px; padding-left: 10px;"><i class="fa-solid fa-envelope"></i>&emsp;guta.regele.manelelor@gmail.com</p>
                        </li>
                    </ul>
				</div>
			</div>

            <div class="card" style="margin-top: 70px; height:400px;">
                <div class="card-body" style="padding: 0px; display: flex; justify-content: center;">
                    <iframe style="width: 100%; height: 100%; margin: 0 auto; border-radius: 10px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2732.647604180104!2d23.584550576162478!3d46.77184217112552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47490e9c5afb3b75%3A0xe7ec93bc1284d8d5!2sThe%20Cock%20Pub!5e0!3m2!1sen!2sro!4v1686339017228!5m2!1sen!2sro" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="card" style="margin-top: 70px; height:300px; opacity: 0.85;">
                <div class="card-body" style="padding: 0px; display: flex; justify-content: center;">
                TO DO RECENZII
                </div>
            </div>
		</div>
	</div>
</div>

</body>

<script src="{{asset('/js/jquery.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>

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

<script>
    $('#card1').on('click', function(){
        window.location.href="{{route('home')}}";
    });

    $('#card2').on('click', function(){
        window.location.href="{{route('home')}}";
    });
</script>