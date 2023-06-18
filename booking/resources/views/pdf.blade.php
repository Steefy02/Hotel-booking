<html>
    <head>
        <title>PDF</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Hotel Admin</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{asset('/css/feather/feather.css')}}">
        {{-- <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css"> --}}
        <link rel="stylesheet" href="{{asset('/css/vendor.bundle.base.css')}}">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="{{asset('/css/vertical-layout-light/style.css')}}">
        <script src="https://kit.fontawesome.com/045d1ece88.js" crossorigin="anonymous"></script>
        <!-- endinject -->
        <link rel="stylesheet" href="{{asset('/css/customcss.css')}}">

        <link rel="stylesheet" href="{{asset('/css/core.css')}}" class="template-customizer-core-css" />
        <link rel="stylesheet" href="{{asset('/css/theme-default.css')}}" class="template-customizer-theme-css" />
        <link rel="stylesheet" href="{{asset('/css/demo.css')}}" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    </head>
    <body>
        <div class="main-panel" style="width: 100%; height: 100%">
            <div class="content-wrapper">

                <div class='col-lg-4 col-sm-10 dri-form' style="margin: 0 auto">

                    <div class="form-group row" style="text-align: center">
                        <img src="{{asset('/images/logo.jpeg')}}" style="margin: 0 auto; width: 240px; height: 190px; border-radius: 50px">
                        <h4>Hotel Perla Somesului</h4>
                        <h5>Raport rezervare ID: </h5>
                    </div>

                    <div class="form-group row">
                      <label for="inputType" class="col-sm-4 col-form-label">Nume Complet</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control-plaintext" name='type' id="inputType" required>
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputDesc" class="col-sm-4 col-form-label">Numar de Telefon</label>
                        <div class="col-sm-8">
                          <input type="text" name='description' class="form-control-plaintext" id="inputDesc" required>
                        </div>
                      </div>
                    <div class="form-group row">
                      <label for="inputPrice" class="col-sm-4 col-form-label">Email</label>
                      <div class="col-sm-8">
                        <input type="number" name='price' class="form-control-plaintext" id="inputPrice" required>
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputCapacity" class="col-sm-4 col-form-label">Data Check in</label>
                        <div class="col-sm-8">
                          <input type="number" name='capacity' class="form-control-plaintext" id="inputcapacity" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputCapacity" class="col-sm-4 col-form-label">Data Check Out</label>
                        <div class="col-sm-8">
                          <input type="number" name='capacity' class="form-control-plaintext" id="inputcapacity" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputCapacity" class="col-sm-4 col-form-label">Tip de camera</label>
                        <div class="col-sm-8">
                          <input type="number" name='capacity' class="form-control-plaintext" id="inputcapacity" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputCapacity" class="col-sm-4 col-form-label">Numar camera</label>
                        <div class="col-sm-8">
                          <input type="number" name='capacity' class="form-control-plaintext" id="inputcapacity" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputCapacity" class="col-sm-4 col-form-label">Modalitate Plata</label>
                        <div class="col-sm-8">
                          <input type="number" name='capacity' class="form-control-plaintext" id="inputcapacity" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputCapacity" class="col-sm-4 col-form-label">Suma</label>
                        <div class="col-sm-8">
                          <input type="number" name='capacity' class="form-control-plaintext" id="inputcapacity" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>