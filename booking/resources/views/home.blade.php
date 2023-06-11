@extends('layouts.app')

@section('title', 'Hotel Booking Management System')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css"/>

@endsection

@section('content')

<section id="home" class="about-us" style="background-image: url(images/room-bg.jpg);">
    <div class="container">
        <div class="about-us-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="single-about-us">
                        <div class="about-us-txt">
                            <h2>
                                Exploreaza Muntii Rodnei 

                            </h2>
                            
                        </div><!--/.about-us-txt-->
                    </div><!--/.single-about-us-->
                </div><!--/.col-->
                <div class="col-sm-0">
                    <div class="single-about-us">
                        
                    </div><!--/.single-about-us-->
                </div><!--/.col-->
            </div><!--/.row-->
        </div><!--/.about-us-content-->
    </div><!--/.container-->

</section><!--/.about-us-->
<!--about-us end -->

<!--travel-box start-->
<section  class="travel-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="single-travel-boxes">
                    <div id="desc-tabs" class="desc-tabs">

                        <ul class="nav nav-tabs" role="tablist">

                            <li role="presentation" class="active">
                                 <a href="#tours" aria-controls="tours" role="tab" data-toggle="tab">
                                     <i class="fas fa-bed"></i>
                                     Camere
                                 </a>
                            </li>

                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">

                            <div role="tabpanel" class="tab-pane active fade in" id="tours">
                                <div class="tab-para">

                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="single-tab-select-box">

                                                <h2>tip camera</h2>

                                                <div class="travel-select-icon">
                                                    <select class="form-control ">

                                                          <option value="default">alege tipul de camera</option><!-- /.option-->

                                                          <option value="turkey">studio</option><!-- /.option-->

                                                          <option value="russia">camera single</option><!-- /.option-->
                                                          <option value="egept">camera dubla</option><!-- /.option-->
                                                          <option value="">camera tripla</option>
                                                          <option value="">apartament</option>

                                                    </select><!-- /.select-->
                                                </div><!-- /.travel-select-icon -->

                                            </div><!--/.single-tab-select-box-->
                                        </div><!--/.col-->

                                        <div class="col-lg-2 col-md-3 col-sm-4">
                                            <div class="single-tab-select-box">
                                                <h2>check in</h2>
                                                <div class="travel-check-icon">
                                                    <form action="#">
                                                        <input type="text" name="check_in" class="form-control" data-toggle="datepicker" placeholder="{{date('m/d/Y')}}">
                                                    </form>
                                                </div><!-- /.travel-check-icon -->
                                            </div><!--/.single-tab-select-box-->
                                        </div><!--/.col-->

                                        <div class="col-lg-2 col-md-3 col-sm-4">
                                            <div class="single-tab-select-box">
                                                <h2>check out</h2>
                                                <div class="travel-check-icon">
                                                    <form action="#">
                                                        @php
                                                            $datet = explode("/", date('m/d/Y'));
                                                            //echo "<script>alert(" . print_r($datet) . ")</script>";
                                                            $datet[1] = intval($datet[1]) + 1;    
                                                        @endphp
                                                        <input type="text" name="check_out" class="form-control"  data-toggle="datepicker" placeholder="{{$datet[0] . '/' . $datet[1] . '/'. $datet[2]}}">
                                                    </form>
                                                </div><!-- /.travel-check-icon -->
                                            </div><!--/.single-tab-select-box-->
                                        </div><!--/.col-->

                                        <div class="col-lg-2 col-md-1 col-sm-4">
                                            <div class="single-tab-select-box">
                                                <h2>numar adulti</h2>
                                                <div class="travel-select-icon">
                                                    <select class="form-control ">

                                                          <option value="default">5</option><!-- /.option-->

                                                          <option value="10">10</option><!-- /.option-->

                                                          <option value="15">15</option><!-- /.option-->
                                                          <option value="20">20</option><!-- /.option-->

                                                    </select><!-- /.select-->
                                                </div><!-- /.travel-select-icon -->
                                            </div><!--/.single-tab-select-box-->
                                        </div><!--/.col-->

                                        <div class="col-lg-2 col-md-1 col-sm-4">
                                            <div class="single-tab-select-box">
                                                <h2>numar copii</h2>
                                                <div class="travel-select-icon">
                                                    <select class="form-control ">

                                                          <option value="default">1</option><!-- /.option-->

                                                          <option value="2">2</option><!-- /.option-->

                                                          <option value="4">4</option><!-- /.option-->
                                                          <option value="8">8</option><!-- /.option-->

                                                    </select><!-- /.select-->
                                                </div><!-- /.travel-select-icon -->
                                            </div><!--/.single-tab-select-box-->
                                        </div><!--/.col-->

                                    </div><!--/.row-->

                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="travel-budget">
                                                <div class="row">
                                                    <div class="co-md-9 col-sm-8">
                                                        <div class="travel-filter">
                                                            <div class="info_widget">
                                                                <div class="price_filter">
                                                                    
                                                                    <input type="text" id="rangePrimary" name="rangePrimary" value="" />
                                                                    <p id="priceRangeSelected"></P>
                                                                </div><!--/.price-filter-->
                                                            </div><!--/.info_widget-->
                                                        </div><!--/.travel-filter-->
                                                    </div><!--/.col-->
                                                </div><!--/.row-->
                                            </div><!--/.travel-budget-->
                                        </div><!--/.col-->
                                        <div class="clo-sm-7">
                                            <div class="about-btn travel-mrt-0 pull-right">
                                                <button  class="about-view travel-btn">
                                                    cauta	
                                                </button><!--/.travel-btn-->
                                            </div><!--/.about-btn-->
                                        </div><!--/.col-->

                                    </div><!--/.row-->

                                </div><!--/.tab-para-->

                            </div><!--/.tabpannel-->
                        </div><!--/.tab content-->
                    </div><!--/.desc-tabs-->
                </div><!--/.single-travel-box-->
            </div><!--/.col-->
        </div><!--/.row-->
    </div><!--/.container-->

</section><!--/.travel-box-->
<!--travel-box end-->

<!--service start-->
<section id="service" class="service">
    <div class="container">

        <div class="service-counter text-center">

            <div class="col-md-4 col-sm-4">
                <div class="single-service-box">
                    <div class="service-img">
                        <i class="fa-solid fa-person-walking-luggage" style="font-size: 5rem"></i>
                    </div><!--/.service-img-->
                    <div class="service-content">
                        <h2>
                            <a href="#">
                            Gama variata de pachete
                            </a>
                        </h2>
                        <p>Alege pachetul care ti se potriveste</p>
                    </div><!--/.service-content-->
                </div><!--/.single-service-box-->
            </div><!--/.col-->

            <div class="col-md-4 col-sm-4">
                <div class="single-service-box">
                    <div class="service-img">
                        <i class="fa-solid fa-tree" style="font-size: 5rem"></i>
                    </div><!--/.service-img-->
                    <div class="service-content">
                        <h2>
                            <a href="#">
                                Petrece timp in natura
                            </a>
                        </h2>
                        <p>Iesi in natura si uita de aglomeratia urbana</p>
                    </div><!--/.service-content-->
                </div><!--/.single-service-box-->
            </div><!--/.col-->

            <div class="col-md-4 col-sm-4">
                <div class="single-service-box">
                    <div class="statistics-img">
                        <i class="fa-solid fa-mountain-sun" style="font-size: 5rem"></i>
                    </div><!--/.service-img-->
                    <div class="service-content">

                        <h2>
                            <a href="#">
                                Exploreaza frumusetea platoului muntos
                            </a>
                        </h2>
                        <p>Admira natura si alege din drumetiile prin defileuri</p>
                    </div><!--/.service-content-->
                </div><!--/.single-service-box-->
            </div><!--/.col-->

        </div><!--/.statistics-counter-->	
    </div><!--/.container-->

</section><!--/.service-->
<!--service end-->

<!--galley start-->
<section id="gallery" class="gallery">
    <div class="container">
        <div class="gallery-details">
            <div class="gallary-header text-center">
                <h2>
                    top destination
                </h2>
                <p>
                    Where do you wanna go? How much you wanna explore?  
                </p>
            </div><!--/.gallery-header-->
            <div class="owl-carousel owl-theme" id="testemonial-carousel">
                @php
                    use App\Models\Room;
                    use App\Http\Controllers\RoomController;
                    $rooms = Room::all();
                @endphp

                @foreach ($rooms as $room)
                @php
                    $data = RoomController::get_data($room->id_Room);
                @endphp
                <div class="home1-testm item">
                    <div class="home1-testm-single text-center" style="padding-top:0px">
                        <div class="home1-testm-img">
                            <img src="{{asset('/images/' . $room->image)}}" alt="img"/>
                        </div><!--/.home1-testm-img-->
                        <div class="home1-testm-txt">
                            <span class="icon section-icon">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </span>
                            <p>
                                {{$data[0]->description}} 
                            </p>
                            <h3>
                                <a href="#">
                                    {{$data[0]->type}}
                                </a>
                            </h3>
                            <h4>Pret: {{$data[0]->price}}RON / noapte</h4>
                            <h4><i class="fa-solid fa-user"></i>: {{$data[0]->capacity}}</h4>
                        </div><!--/.home1-testm-txt-->	
                    </div><!--/.home1-testm-single-->
    
                </div><!--/.item-->
                @endforeach
    
            </div><!--/.testemonial-carousel-->
        </div><!--/.gallery-details-->
    </div><!--/.container-->

</section><!--/.gallery-->
<!--gallery end-->

<!--packages start-->
<section id="pack" class="packages">
    <div class="container">
        <div class="gallary-header text-center">
            <h2>
                Pachete speciale
            </h2>
            <p>
                Alege unul dintre pachetele noastre si bucura-te de natura  
            </p>
        </div><!--/.gallery-header-->
        <div class="packages-content">
            <div class="row">

                <div class="col-md-4 col-sm-6">
                    <div class="single-package-item">
                        <img src="assets/images/packages/p1.jpg" alt="package-place">
                        <div class="single-package-item-txt">
                            <h3>italy <span class="pull-right">$499</span></h3>
                            <div class="packages-para">
                                <p>
                                    <span>
                                        <i class="fa fa-angle-right"></i> 3 Days 2 nights
                                    </span>
                                    <i class="fa fa-angle-right"></i>  5 star accomodation
                                </p>
                                <p>
                                    <span>
                                        <i class="fa fa-angle-right"></i>  transportation
                                    </span>
                                    <i class="fa fa-angle-right"></i> food facilities
                                 </p>
                            </div><!--/.packages-para-->
                            <div class="packages-review">
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>254 reviews</span>
                                </p>
                            </div><!--/.packages-review-->
                            <div class="about-btn">
                                <button  class="about-view packages-btn">
                                    book now
                                </button>
                            </div><!--/.about-btn-->
                        </div><!--/.single-package-item-txt-->
                    </div><!--/.single-package-item-->

                </div><!--/.col-->

                <div class="col-md-4 col-sm-6">
                    <div class="single-package-item">
                        <img src="assets/images/packages/p2.jpg" alt="package-place">
                        <div class="single-package-item-txt">
                            <h3>england <span class="pull-right">$1499</span></h3>
                            <div class="packages-para">
                                <p>
                                    <span>
                                        <i class="fa fa-angle-right"></i> 6 Days 7 nights
                                    </span>
                                    <i class="fa fa-angle-right"></i>  5 star accomodation
                                </p>
                                <p>
                                    <span>
                                        <i class="fa fa-angle-right"></i>  transportation
                                    </span>
                                    <i class="fa fa-angle-right"></i>  Free food 
                                 </p>
                            </div><!--/.packages-para-->
                            <div class="packages-review">
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>344 reviews</span>
                                </p>
                            </div><!--/.packages-review-->
                            <div class="about-btn">
                                <button  class="about-view packages-btn">
                                    book now
                                </button>
                            </div><!--/.about-btn-->
                        </div><!--/.single-package-item-txt-->
                    </div><!--/.single-package-item-->

                </div><!--/.col-->
                
                <div class="col-md-4 col-sm-6">
                    <div class="single-package-item">
                        <img src="assets/images/packages/p3.jpg" alt="package-place">
                        <div class="single-package-item-txt">
                            <h3>france <span class="pull-right">$1199</span></h3>
                            <div class="packages-para">
                                <p>
                                    <span>
                                        <i class="fa fa-angle-right"></i> 5 Days 6 nights
                                    </span>
                                    <i class="fa fa-angle-right"></i>  5 star accomodation
                                </p>
                                <p>
                                    <span>
                                        <i class="fa fa-angle-right"></i>  transportation
                                    </span>
                                    <i class="fa fa-angle-right"></i>  food facilities
                                 </p>
                            </div><!--/.packages-para-->
                            <div class="packages-review">
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>544 reviews</span>
                                </p>
                            </div><!--/.packages-review-->
                            <div class="about-btn">
                                <button  class="about-view packages-btn">
                                    book now
                                </button>
                            </div><!--/.about-btn-->
                        </div><!--/.single-package-item-txt-->
                    </div><!--/.single-package-item-->

                </div><!--/.col-->
                
                <div class="col-md-4 col-sm-6">
                    <div class="single-package-item">
                        <img src="assets/images/packages/p4.jpg" alt="package-place">
                        <div class="single-package-item-txt">
                            <h3>india <span class="pull-right">$799</span></h3>
                            <div class="packages-para">
                                <p>
                                    <span>
                                        <i class="fa fa-angle-right"></i> 4 Days 5 nights
                                    </span>
                                    <i class="fa fa-angle-right"></i>  5 star accomodation
                                </p>
                                <p>
                                    <span>
                                        <i class="fa fa-angle-right"></i>  transportation
                                    </span>
                                    <i class="fa fa-angle-right"></i>  food facilities
                                 </p>
                            </div><!--/.packages-para-->
                            <div class="packages-review">
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>625 reviews</span>
                                </p>
                            </div><!--/.packages-review-->
                            <div class="about-btn">
                                <button  class="about-view packages-btn">
                                    book now
                                </button>
                            </div><!--/.about-btn-->
                        </div><!--/.single-package-item-txt-->
                    </div><!--/.single-package-item-->

                </div><!--/.col-->
                
                <div class="col-md-4 col-sm-6">
                    <div class="single-package-item">
                        <img src="assets/images/packages/p5.jpg" alt="package-place">
                        <div class="single-package-item-txt">
                            <h3>spain <span class="pull-right">$999</span></h3>
                            <div class="packages-para">
                                <p>
                                    <span>
                                        <i class="fa fa-angle-right"></i> 4 Days 4 nights
                                    </span>
                                    <i class="fa fa-angle-right"></i>  5 star accomodation
                                </p>
                                <p>
                                    <span>
                                        <i class="fa fa-angle-right"></i>  transportation
                                    </span>
                                    <i class="fa fa-angle-right"></i>  food facilities
                                 </p>
                            </div><!--/.packages-para-->
                            <div class="packages-review">
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>379 reviews</span>
                                </p>
                            </div><!--/.packages-review-->
                            <div class="about-btn">
                                <button  class="about-view packages-btn">
                                    book now
                                </button>
                            </div><!--/.about-btn-->
                        </div><!--/.single-package-item-txt-->
                    </div><!--/.single-package-item-->

                </div><!--/.col-->
                
                <div class="col-md-4 col-sm-6">
                    <div class="single-package-item">
                        <img src="assets/images/packages/p6.jpg" alt="package-place">
                        <div class="single-package-item-txt">
                            <h3>thailand <span class="pull-right">$799</span></h3>
                            <div class="packages-para">
                                <p>
                                    <span>
                                        <i class="fa fa-angle-right"></i> 5 Days 6 nights
                                    </span>
                                    <i class="fa fa-angle-right"></i>  5 star accomodation
                                </p>
                                <p>
                                    <span>
                                        <i class="fa fa-angle-right"></i>  transportation
                                    </span>
                                    <i class="fa fa-angle-right"></i>  food facilities
                                 </p>
                            </div><!--/.packages-para-->
                            <div class="packages-review">
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>447 reviews</span>
                                </p>
                            </div><!--/.packages-review-->
                            <div class="about-btn">
                                <button  class="about-view packages-btn">
                                    book now
                                </button>
                            </div><!--/.about-btn-->
                        </div><!--/.single-package-item-txt-->
                    </div><!--/.single-package-item-->

                </div><!--/.col-->

            </div><!--/.row-->
        </div><!--/.packages-content-->
    </div><!--/.container-->

</section><!--/.packages-->
<!--packages end-->

<!-- testemonial Start -->
<section   class="testemonial">
    <div class="container">

        <div class="gallary-header text-center">
            <h2>
                Testimoniale
            </h2>
            <p>
                Iata ce au spus clientii nostrii despre locatia noastra
            </p>

        </div><!--/.gallery-header-->

        <div class="owl-carousel owl-theme" id="testemonial-carousel1">

            <div class="home1-testm item">
                <div class="home1-testm-single text-center">
                    <div class="home1-testm-img">
                        <img src="assets/images/client/testimonial1.jpg" alt="img"/>
                    </div><!--/.home1-testm-img-->
                    <div class="home1-testm-txt">
                        <span class="icon section-icon">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </span>
                        <p>
                            Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
                        </p>
                        <h3>
                            <a href="#">
                                kevin watson
                            </a>
                        </h3>
                        <h4>london, england</h4>
                    </div><!--/.home1-testm-txt-->	
                </div><!--/.home1-testm-single-->

            </div><!--/.item-->

            <div class="home1-testm item">
                <div class="home1-testm-single text-center">
                    <div class="home1-testm-img">
                        <img src="assets/images/client/testimonial2.jpg" alt="img"/>
                    </div><!--/.home1-testm-img-->
                    <div class="home1-testm-txt">
                        <span class="icon section-icon">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </span>
                        <p>
                            Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
                        </p>
                        <h3>
                            <a href="#">
                                kevin watson
                            </a>
                        </h3>
                        <h4>london, england</h4>
                    </div><!--/.home1-testm-txt-->	
                </div><!--/.home1-testm-single-->

            </div><!--/.item-->

            <div class="home1-testm item">
                <div class="home1-testm-single text-center">
                    <div class="home1-testm-img">
                        <img src="assets/images/client/testimonial1.jpg" alt="img"/>
                    </div><!--/.home1-testm-img-->
                    <div class="home1-testm-txt">
                        <span class="icon section-icon">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </span>
                        <p>
                            Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
                        </p>
                        <h3>
                            <a href="#">
                                kevin watson
                            </a>
                        </h3>
                        <h4>london, england</h4>
                    </div><!--/.home1-testm-txt-->	
                </div><!--/.home1-testm-single-->

            </div><!--/.item-->

            <div class="home1-testm item">
                <div class="home1-testm-single text-center">
                    <div class="home1-testm-img">
                        <img src="assets/images/client/testimonial1.jpg" alt="img"/>
                    </div><!--/.home1-testm-img-->
                    <div class="home1-testm-txt">
                        <span class="icon section-icon">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </span>
                        <p>
                            Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
                        </p>
                        <h3>
                            <a href="#">
                                kevin watson
                            </a>
                        </h3>
                        <h4>london, england</h4>
                    </div><!--/.home1-testm-txt-->	
                </div><!--/.home1-testm-single-->

            </div><!--/.item-->

            <div class="home1-testm item">
                <div class="home1-testm-single text-center">
                    <div class="home1-testm-img">
                        <img src="assets/images/client/testimonial2.jpg" alt="img"/>
                    </div><!--/.home1-testm-img-->
                    <div class="home1-testm-txt">
                        <span class="icon section-icon">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </span>
                        <p>
                            Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
                        </p>
                        <h3>
                            <a href="#">
                                kevin watson
                            </a>
                        </h3>
                        <h4>london, england</h4>
                    </div><!--/.home1-testm-txt-->	
                </div><!--/.home1-testm-single-->

            </div><!--/.item-->

            <div class="home1-testm item">
                <div class="home1-testm-single text-center">
                    <div class="home1-testm-img">
                        <img src="assets/images/client/testimonial1.jpg" alt="img"/>
                    </div><!--/.home1-testm-img-->
                    <div class="home1-testm-txt">
                        <span class="icon section-icon">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </span>
                        <p>
                            Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
                        </p>
                        <h3>
                            <a href="#">
                                kevin watson
                            </a>
                        </h3>
                        <h4>london, england</h4>
                    </div><!--/.home1-testm-txt-->	
                </div><!--/.home1-testm-single-->

            </div><!--/.item-->

            <div class="home1-testm item">
                <div class="home1-testm-single text-center">
                    <div class="home1-testm-img">
                        <img src="assets/images/client/testimonial1.jpg" alt="img"/>
                    </div><!--/.home1-testm-img-->
                    <div class="home1-testm-txt">
                        <span class="icon section-icon">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </span>
                        <p>
                            Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
                        </p>
                        <h3>
                            <a href="#">
                                kevin watson
                            </a>
                        </h3>
                        <h4>london, england</h4>
                    </div><!--/.home1-testm-txt-->	
                </div><!--/.home1-testm-single-->

            </div><!--/.item-->

            <div class="home1-testm item">
                <div class="home1-testm-single text-center">
                    <div class="home1-testm-img">
                        <img src="assets/images/client/testimonial2.jpg" alt="img"/>
                    </div><!--/.home1-testm-img-->
                    <div class="home1-testm-txt">
                        <span class="icon section-icon">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </span>
                        <p>
                            Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
                        </p>
                        <h3>
                            <a href="#">
                                kevin watson
                            </a>
                        </h3>
                        <h4>london, england</h4>
                    </div><!--/.home1-testm-txt-->	
                </div><!--/.home1-testm-single-->

            </div><!--/.item-->

            <div class="home1-testm item">
                <div class="home1-testm-single text-center">
                    <div class="home1-testm-img">
                        <img src="assets/images/client/testimonial1.jpg" alt="img"/>
                    </div><!--/.home1-testm-img-->
                    <div class="home1-testm-txt">
                        <span class="icon section-icon">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </span>
                        <p>
                            Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
                        </p>
                        <h3>
                            <a href="#">
                                kevin watson
                            </a>
                        </h3>
                        <h4>london, england</h4>
                    </div><!--/.home1-testm-txt-->	
                </div><!--/.home1-testm-single-->

            </div><!--/.item-->

        </div><!--/.testemonial-carousel-->
    </div><!--/.container-->

</section><!--/.testimonial-->	
<!-- testemonial End -->

<!--subscribe start-->
<section id="subs" class="subscribe">
    <div class="container">
        <div class="subscribe-title text-center">
            <h2>
                Fii primul care afla despre noile noastre oferte!
            </h2>
            <p>
                Aboneaza-te la newsletter: 
            </p>
        </div>
        <form>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="custom-input-group">
                        <input type="email" class="form-control" placeholder="Enter your Email Here">
                        <button class="appsLand-btn subscribe-btn">Aboneaza-te</button>
                        <div class="clearfix"></div>
                        <i class="fa fa-envelope"></i>
                    </div>

                </div>
            </div>
        </form>
    </div>

</section>
<!--subscribe end-->

@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>
<script src="https://kit.fontawesome.com/045d1ece88.js" crossorigin="anonymous"></script>

<script>


$("#rangePrimary").ionRangeSlider({
    type: "double",
    grid: true,
    min: 0,
    max: 1000,
    from: 200,
    to: 800,
    prefix: "RON"
});



</script>
@endsection
