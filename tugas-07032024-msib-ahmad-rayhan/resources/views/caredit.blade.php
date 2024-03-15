<!DOCTYPE html>
<html>

<head>
    <title> Edit </title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/P.png.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/form-1.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/form.css') }}" />
</head>

<body>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="/">
                    MyCar Rental<span style="color: hsl(0, 79%, 63%);"> Simply</span></a>
            </div>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown"
                                    role="button" aria-haspopup="true" aria-expanded="false"><span
                                        class="glyphicon glyphicon-user"></span> Control Panel <span
                                        class="caret"></span> </a>
                                <ul class="dropdown-menu">
                                    <li> <a href="/addcar">Tambah Mobil</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 65px;">
        <div class="col-md-7" style="float: none; margin: 0 auto;">
            <div class="form-area">
                <form role="form" action="/editmobil" enctype="multipart/form-data" method="POST">
                    @csrf
                    <br style="clear: both">
                    <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Edit Data Mobil.</h3>  
                    <input type="text" value="{{ $mobil->id }}"hidden name="id">
                    <div class="form-group">
                        <input type="text" class="form-control" id="car_name" name="car_name"
                            placeholder="Nama Mobil " required autofocus="" value="{{ $mobil->nama }}">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="car_nameplate" name="car_nameplate"
                            placeholder="No Polisi" required value="{{ $mobil->no_polisi }}">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="ac_price" name="car_priceday"
                            placeholder="Tarif per hari" required value="{{ $mobil->tarifhari }}">
                    </div>
                    <button type="submit" id="submit" name="submit" class="btn btn-success pull-right"> Submit
                        for Rental</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/theme.js"></script>

</html>
