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
    <script src="https://js.stripe.com/v3/"></script>
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
                            <ul class="nav navbar-nav navbar-right" style="display: inline;">
                                @if(!Session::has('user'))
                                    <a href="{{route('login')}}" class="my-buttons">
                                        <li>
                                            <button class="book-btn">Logare
                                            </button>
                                        </li>
                                    </a><!--/.project-btn-->
                                    <a href="{{route('register')}}" class="my-buttons">
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
                                                <li><a href="{{route('settings')}}" style="color:black; height:20px; padding-top:0px;">Settings</a>
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

<img src="{{asset('images/room-bg.jpg')}}" style="position: fixed; top: 0px; z-index: -1; object-fit: fill; filter: brightness(70%);"/>

<div class="container-fluid" style="margin-top: 70px; opacity: 0.90;">
    <div class="col-md-7">
        <div class="card mb-4" style="height: 887px;">
            <h5 class="card-header"><i class="fa-solid fa-suitcase"></i> Detalii rezervare</h5>
            <hr class="my-0">
            <div class="card-body">
                <div class="mb-3 col-12 mb-0">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item mb-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="http://127.0.0.1:8000/images/r1.jpg">
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <h4><b>Camera Hotel69</b></h4>
                                        <h6><i class="fa-solid fa-location-dot"></i> Strada Matii Nr 420</h6>
                                    </div>
                                    <hr class="my-0 mb-4 mt-2">
                                    <div class="row mb-4">
                                        <div class="col-md-5">
                                            <h5>Check-in</h5>
                                            <h6 style="color: black;"><b>luni 31 feb. 2025</b></h6>
                                            <h6>Incepand cu 12:00</h6>
                                        </div>
                                        <div class="col-md-1" style="padding: 0;">
                                            <div style="border-left:1px solid #ccd0d5; height:100px"></div>
                                        </div>
                                        <div class="col-md-5">
                                            <h5>Check-out</h5>
                                            <h6 style="color: black;"><b>luni 34 feb. 2025</b></h6>
                                            <h6>Pana la 12:00</h6>
                                        </div>
                                        <h5 class="mt-4" style="color: black;"><b>Durata totala: <span style="text-transform: lowercase;">*** zile</span></b></h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item mt-4">
                            <div class="col-md-6">
                                <p style="font-size:large; color: #3e4d5d;"><i class="fa-solid fa-person fa-xl"></i><i class="fa-solid fa-person-dress fa-xl"></i>&ensp;Capacitate: 2 pers</p>
                                <p style="font-size:large; color: #3e4d5d;"><i class="fa-solid fa-bed fa-xl"></i>&ensp; Pat dublu</p>
                                <p style="font-size:large; color: #3e4d5d;"><i class="fa-solid fa-wifi fa-xl"></i>&ensp; Wifi gratuit</p>
                                <p style="font-size:large; color: #3e4d5d;"><i class="fa-solid fa-square-parking fa-xl"></i>&emsp; Parcare</p>
                            </div>
                            <div class="col-md-6">
                                <iframe style="width: 100%; height: 300px; margin: 0 auto; border-radius: 10px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2732.647604180104!2d23.584550576162478!3d46.77184217112552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47490e9c5afb3b75%3A0xe7ec93bc1284d8d5!2sThe%20Cock%20Pub!5e0!3m2!1sen!2sro!4v1686339017228!5m2!1sen!2sro" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-5">
        <div class="card mb-4">
            <h5 class="card-header"><i class="fa-solid fa-circle-info"></i> Detalii de facturare</h5>
            <!-- Billing details -->
            <hr class="my-0">
            <div class="card-body">
                <form id="formAccountSettings" method="POST" onsubmit="return false">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Nume intreg <i id="name-bouncy" class="fa-solid fa-asterisk fa-bounce fa-sm" style="color: #ff0000;"></i></label>
                            <input class="form-control" type="text" id="card-name" name="fullName" value="****" autofocus="">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail <i class="fa-solid fa-asterisk fa-bounce fa-sm" style="color: #ff0000;"></i></label>
                            <input class="form-control" type="text" id="email" name="email" value="****@example.com" placeholder="email">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="phoneNumber">Numar de telefon <i class="fa-solid fa-asterisk fa-bounce fa-sm" style="color: #ff0000;"></i></label>
                                <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" value="**** *** ***" placeholder="0769 420 696">
                        </div>    
                        <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Adresa <i class="fa-solid fa-asterisk fa-bounce fa-sm" style="color: #ff0000;"></i></label>
                            <input class="form-control" type="text" id="adress" name="adress" value="****" placeholder="adresa">
                        </div>
                    </div>
                </form>
            </div>
            <!-- /Billing details -->
        </div>

        <div class="card mb-4">
            <h5 class="card-header"><i class="fa-solid fa-credit-card"></i> Detalii card</h5>
            <hr class="my-0">
            <div class="card-body" style="margin: 0 auto;">

                <div class = "my-credit-card">
                    <div class="card-content">
                        <div class = "row">
                            <h5 class="card-label mb-3">Numar card</h5>
                            <h6 id="card-number" class="card-input mb-4">0000 0000 0000 0000</h6>
                        </div>
                        <div class = "row">
                            <div class="col-md-9">
                                <h5 class="card-label mb-3">Data expirare</h5>
                                <h6 id="card-expiration" class="card-input mb-4">00 / 00</h6>
                            </div>
                            <div class="col-md-3">
                                <h5 class="card-label">CVC</h5>
                                <h6 id="card-cvc" class="card-input">000</h6>
                            </div>
                        </div>
                        <div class = "row">
                            <h5 class="card-label mb-3">Nume detinator</h5>
                            <h6 id="card-owner" class="card-input mb-4">Nume Prenume</h6>
                        </div>
                    </div>
                    <div class="wave"></div>
                </div>
                <form action="{{ route('login') }}" method="POST" id="card-form">
                    <div class="row" style="margin: 0 auto; margin-top: 30px;">
                        <div id="card" style="width: 400px; border: 3px solid #00d8ff; padding: 5px; border-radius:10px;"></div>
                    </div>
                </form>
            </div>
            <hr class="my-0">
            <div class="card-body">
                <div class="col-md-6">
                    <h5 style="margin: 0px; margin-left:38px;">TOTAL REZERVARE:</h5>
                </div>
                <div class="col-md-6">
                    <h5 style="margin: 0px;">*****&emsp;LEI</h5>
                </div>
            </div>
            <hr class="my-0">
            <div class="card-body" style="margin: 0 auto;">
                <div class="row">
                    <button type="submit" class="btn btn-danger" style="width: fit-content;">Efectueaza plata</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<script src="{{asset('/js/jquery.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>

<script>
    var name_bouncy = document.getElementById('name-bouncy');
    var name_input = document.getElementsByName('fullName');
    
    name_input.onchange=function(){
        if(this.value == "")
        {
            name_bouncy.classList.remove('fa-bounce');
        }
        else
        {
            name_bouncy.classList.add('fa-bounce');
        }
    };
</script>

<script>
    $('#card1').on('click', function(){
        window.location.href="{{route('home')}}";
    });

    $('#card2').on('click', function(){
        window.location.href="{{route('home')}}";
    });
</script>


<script>
    let stripe = Stripe('{{ env("STRIPE_KEY") }}');
    const elements = stripe.elements();
    const cardElement = elements.create('card', {
        hidePostalCode: true,
        style: {
            base: {
                color: '#32325d',
                lineHeight: '18px',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                },
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a',
            }
        }
    });
    const cardForm = document.getElementById('card-form');
    const cardName = document.getElementById('card-name');
    cardElement.mount('#card');

    
    cardForm.addEventListener('submit', async (e) => {

        e.preventDefault()
        const { paymentMethod, error } = await stripe.createPaymentMethod({
            type: 'card',
            card: cardElement,
            billing_details: {
                name: cardName.value
            }
        })
        if (error) {
            console.log(error)
            console.log(my_border)
        } else {
            let input = document.createElement('input')
            input.setAttribute('type', 'hidden')
            input.setAttribute('name', 'payment_method')
            input.setAttribute('value', paymentMethod.id)
            cardForm.appendChild(input)
            cardForm.submit()
        }
    })
</script>