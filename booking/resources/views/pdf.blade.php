<html>
    <head>
        <title>PDF</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Hotel Admin</title>

        {{-- <link rel="stylesheet" href="{{asset('/css/core.css')}}" class="template-customizer-core-css" /> --}}
        {{-- <link rel="stylesheet" href="{{asset('/css/theme-default.css')}}" class="template-customizer-theme-css" /> --}}
        {{-- <link rel="stylesheet" href="{{asset('/css/demo.css')}}" /> --}}
    </head>
    <body>

        @php
            use App\Models\User;
            use App\Models\Payment;
            use App\Models\Room;
            use App\Models\RoomType;
            $user = User::find($booking->id_User);
            $payment = Payment::find($booking->id_Payment);
            $room = Room::find($booking->id_Room);
            $roomtype = RoomType::find($room->id_RoomType);
        @endphp

        <div class="main-panel" style="width: 100%; height: 100%">
            <div class="content-wrapper">

                <div class='col-lg-4 col-sm-10 dri-form' style="">

                    <div class="form-group row" style="margin-bottom: 80px; text-align: center">
                        <h4>Hotel Perla Somesului</h4>
                        <h5>Raport rezervare ID: {{$booking['id_Reservation']}}</h5>
                    </div>

                    <div class="form-group row" style="margin-bottom: 15px">
                      <label for="inputType" class="col-sm-4 col-form-label" style="margin-right: 20px">Nume Complet: </label>
                        <input type="text" style="border: 0px" class="form-control-plaintext" name='type' id="inputType" required value="{{$booking->fullName}}">
                    </div>
                    <div class="form-group row" style="margin-bottom: 15px">
                        <label for="inputDesc" class="col-sm-4 col-form-label" style="margin-right: 20px">Numar de Telefon: </label>
                          <input type="text" style="border: 0px" name='description' class="form-control-plaintext" id="inputDesc" required value="{{$user->phoneNumber}}">
                      </div>
                    <div class="form-group row" style="margin-bottom: 15px">
                      <label for="inputPrice" class="col-sm-4 col-form-label" style="margin-right: 20px">Email: </label>
                        <input type="text" style="border: 0px" name='price' class="form-control-plaintext" id="inputPrice" required value="{{$user->email}}">
                    </div>
                    <div class="form-group row" style="margin-bottom: 15px">
                        <label for="inputCapacity" class="col-sm-4 col-form-label" style="margin-right: 20px">Data Check in: </label>
                          <input type="text" style="border: 0px" name='capacity' class="form-control-plaintext" id="inputcapacity" required value="{{$booking->checkIn}}">
                    </div>
                    <div class="form-group row" style="margin-bottom: 15px">
                        <label for="inputCapacity" class="col-sm-4 col-form-label" style="margin-right: 20px">Data Check Out: </label>
                          <input type="text" style="border: 0px" name='capacity' class="form-control-plaintext" id="inputcapacity" required value="{{$booking->checkOut}}">
                    </div>
                    <div class="form-group row" style="margin-bottom: 15px">
                        <label for="inputCapacity" class="col-sm-4 col-form-label" style="margin-right: 20px">Tip de camera: </label>
                          <input type="text" style="border: 0px" name='capacity' class="form-control-plaintext" id="inputcapacity" required value="{{$roomtype->type}}">
                    </div>
                    <div class="form-group row" style="margin-bottom: 15px">
                        <label for="inputCapacity" class="col-sm-4 col-form-label" style="margin-right: 20px">Numar camera: </label>
                          <input type="text" style="border: 0px" name='capacity' class="form-control-plaintext" id="inputcapacity" required value="{{$room->roomNumber}}">
                    </div>
                    <div class="form-group row" style="margin-bottom: 15px">
                        <label for="inputCapacity" class="col-sm-4 col-form-label" style="margin-right: 20px">Modalitate Plata: </label>
                          <input type="text" style="border: 0px" name='capacity' class="form-control-plaintext" id="inputcapacity" required value="{{$payment->typePayment}}">
                    </div>
                    <div class="form-group row" style="margin-bottom: 15px">
                        <label for="inputCapacity" class="col-sm-4 col-form-label" style="margin-right: 20px">Suma: </label>
                          <input type="text" style="border: 0px" name='capacity' class="form-control-plaintext" id="inputcapacity" required value="{{$payment->ammount}}">
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>