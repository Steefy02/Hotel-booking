@extends('layouts.app')

@section('title', 'Hotel Booking Management System')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css" />

@endsection

@section('content')

<section id="home" class="about-us">
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

<div class="row" style="background-color: white;">
    <p>
        Bucură-te de o escapadă relaxantă la munte! Hotelul nostru este o oază de liniște și confort,
        situat în inima peisajelor pitorești ale munților. Aici vei găsi o combinație perfectă între lux și natură,
        unde te poți relaxa în camere spațioase și elegante, înconjurate de aerul proaspăt al munților.
    </p>
</div>

<!--travel-box start-->
<section class="travel-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="single-travel-boxes" style="margin-top: 300px; margin-bottom: 50px;">
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
                                    <form method="post" action="{{route('search')}}">
                                        @csrf

                                        <div class="row">

                                            <div class="col-lg-2 col-md-3 col-sm-4">
                                                <div class="single-tab-select-box">
                                                    <h2>check in</h2>
                                                    <div class="travel-check-icon">
                                                        <input type="text" name="check_in" class="form-control" data-toggle="datepicker" value="{{date('m/d/Y')}}">
                                                    </div><!-- /.travel-check-icon -->
                                                </div><!--/.single-tab-select-box-->
                                            </div><!--/.col-->

                                            <div class="col-lg-2 col-md-3 col-sm-4">
                                                <div class="single-tab-select-box">
                                                    <h2>check out</h2>
                                                    <div class="travel-check-icon">
                                                        @php
                                                        $datet = explode("/", date('m/d/Y'));
                                                        $datet[1] = intval($datet[1]) + 1;
                                                        @endphp
                                                        <input type="text" name="check_out" class="form-control" data-toggle="datepicker" value="{{$datet[0] . '/' . $datet[1] . '/'. $datet[2]}}">
                                                    </div><!-- /.travel-check-icon -->
                                                </div><!--/.single-tab-select-box-->
                                            </div><!--/.col-->

                                            @php
                                            use App\Models\RoomType;
                                            $roomtypes = RoomType::all();
                                            @endphp

                                            <div class="col-lg-3 col-md-2 col-sm-5">
                                                <div class="single-tab-select-box">
                                                    <h2>Tip camera</h2>
                                                    <select name='type' class="form-control" style="height: 48px">
                                                        @foreach ($roomtypes as $roomtype)
                                                        <option value="{{$roomtype->id_RoomType}}">{{$roomtype->type}}</option>
                                                        @endforeach
                                                        <option value="no" selected>Selecteaza tipul</option>
                                                    </select>
                                                </div><!--/.single-tab-select-box-->
                                            </div><!--/.col-->

                                            <div class="col-lg-4 col-md-1 col-sm-4">
                                                <div class="single-tab-select-box" style="text-align: center">
                                                    <h2>Pret</h2>
                                                    <div class="travel-filter">
                                                        <div class="info_widget">
                                                            <div class="price_filter">
                                                                <input type="text" id="rangePrimary" name="rangePrimary" value="" />
                                                                <p id="priceRangeSelected"></P>
                                                            </div><!--/.price-filter-->
                                                        </div><!--/.info_widget-->
                                                    </div><!--/.travel-filter-->
                                                </div><!--/.col-->
                                            </div>
                                        </div><!--/.row-->

                                        <div class="row">
                                            <div class="col-sm-7">
                                                <div class="about-btn travel-mrt-0 pull-left">
                                                    <button class="about-view travel-btn">
                                                        cauta
                                                    </button><!--/.travel-btn-->
                                                </div><!--/.about-btn-->
                                            </div><!--/.col-->
                                        </div><!--/.row-->
                                    </form>
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

<!--galley start-->
<section id="gallery" class="gallery" style="background-color: rgba(0,0,0,0.4);">
    <div class="container">
        <div class="gallery-details" style="margin-top: 74px;">
            <div class="gallary-header text-center">
                <h2>
                    Exploreaza
                </h2>
                <p>
                    Alege una dintre camerele noastre
                </p>
            </div><!--/.gallery-header-->
            <div class="owl-carousel owl-theme" id="testemonial-carousel">
                @php
                use App\Models\Room;
                $rooms = Room::all();
                @endphp

                @foreach ($rooms as $room)
                @php
                $data = RoomType::find($room->id_RoomType);
                @endphp
                <div class="home1-testm item">
                    <div class="home1-testm-single text-center">
                        <div class="home1-testm-img">
                            <a href="{{route('room', ['id' => $room->id_Room])}}"><img src="{{asset('/images/' . $room->image)}}" alt="img" /></a>
                        </div><!--/.home1-testm-img-->
                        <div class="home1-testm-txt">
                            <h3>
                                <a href="#">
                                    {{$data->type}}
                                </a>
                            </h3>
                            <h4>Pret: {{$data->price}} RON / noapte</h4>
                            <h4><i class="fa-solid fa-user"></i>: {{$data->capacity}}</h4>
                        </div><!--/.home1-testm-txt-->
                    </div><!--/.home1-testm-single-->

                </div><!--/.item-->
                @endforeach

            </div><!--/.testemonial-carousel-->
        </div><!--/.gallery-details-->
    </div><!--/.container-->

</section><!--/.gallery-->
<!--gallery end-->

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