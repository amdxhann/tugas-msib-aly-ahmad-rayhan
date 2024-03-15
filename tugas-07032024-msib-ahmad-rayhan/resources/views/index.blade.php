<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCar Rental</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/P.png') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand page-scroll" href="/" style="margin-left: 100px; font-weight: 700; letter-spacing:2px"> 
                    MyCar Rental<span style="color: hsl(0, 79%, 63%);"> Simply</span></a>
            </div>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav" style="margin-right: 100px">
                    <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" style="font-weight: 700; letter-spacing:2px"
                            role="button" aria-haspopup="true" aria-expanded="false"><span
                                class="glyphicon glyphicon-user"></span> Control Panel <span
                                class="caret"></span> </a>
                        <ul class="dropdown-menu">
                            <li> <a href="/addcar">Tambah Mobil</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="bgimg-1">
        <div class="grid-item" >
            <h2 class="tittle" style="">Dashboard Admin</h2> <br>
            <p class="text">Lorem Ipsum is simply dummy text of the printing 
                and typesetting industry. Lorem Ipsum has been the industry's 
                standard dummy text ever since the 1500s, when an unknown printer 
                took a galley of type and scrambled it to make a type specimen book. 
                It has survived not only five centuries, but also the leap into electronic 
                typesetting, remaining essentially unchanged. It was popularised in the 1960s 
                with the release of Letraset sheets containing Lorem Ipsum passages, and more 
                recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                <p style="color: hsl(0, 79%, 63%);">(ilustration)</p> 
            </p>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
