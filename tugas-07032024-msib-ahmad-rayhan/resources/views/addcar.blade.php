<!DOCTYPE html>
<html>

<head>
    <title> Add Car |HiCar Rentals </title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/P.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/form-1.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/w3css/w3.css') }}">
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
                <form role="form" action="/addcar" enctype="multipart/form-data" method="POST">
                    @csrf
                    <br style="clear: both">
                    <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Masukkan Detail Mobil. </h3>
                    <div class="form-group">
                        <input type="text" class="form-control" id="car_name" name="car_name"
                            placeholder="Nama Mobil " required autofocus="">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="car_nameplate" name="car_nameplate"
                            placeholder="No Polisi" required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="ac_price" name="car_priceday"
                            placeholder="Tarif per hari" required>
                    </div>

                    <div class="form-group">
                        <select name="admin_id" class="form-control" aria-label="Default select example">
                            <option selected hidden>Admin Select</option>
                            @foreach ($admins as $admin)
                                <option value="{{ $admin->id }}">{{ $admin->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <input name="uploadedimage" type="file">
                    </div>
                    <button type="submit" id="submit" name="submit" class="btn btn-success pull-right"> Submit
                        for Rental</button>
                </form>
            </div>
        </div>


        <div class="col-md-12" style="float: none; margin: 0 auto;">
            <div class="form-area" style="padding: 0px 100px 100px 100px;">

                <br style="clear: both">
                <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Berikut Daftar Mobil yan </h3>

                <div style="overflow-x:auto;">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th width="20%">No. Mobil</th>
                                <th width="20%"> Jenis Mobil</th>
                                <th width="20%"> No. Polisi </th>
                                <th width="20%"> Tarif (/hari) </th>
                                <th width="20%"> Action </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($mobil as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->no_polisi }}</td>
                                    <td>{{ $item->tarifhari }}</td>
                                    <td>
                                        <a href="/editmobil/{{ $item->id }}"><button class="btn btn-info">Edit</button></a>
                                        <a onclick="return confirm('Apa anda yakin?')" href="/deletee/{{ $item->id }}">
                                            <button class="btn btn-danger">Delete</button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/theme.js"></script>

</html>
