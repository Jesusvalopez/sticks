<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sticks</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #000;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        img{
            width: 75%;
        }

        .links > a {
            color: #FFF;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            color: #ed7c2c;
            text-align: center;
        }

        .footer a {
            color: #ed7c2c;
            font-size: 25px;
        }

        .footer a:hover{

            color: #c85300;

        }

    </style>
</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="top-right links">

            <a id="menuLink" href="">Menú</a>
            <a id="zonaDespachoLink" href="">Zona Despacho</a>

    </div>

    <div class="content">

        <div id="menu" class="col-md-12 col-sm-12 col-xs-12" style="display: block;">
            <img src="/images/flyer-sticks.png" alt="flyer">
        </div>
        <div id="zonaDespacho" class="col-md-12 col-sm-12 col-xs-12" style="display: none;">
            <img src="/images/zona-despacho.jpeg" alt="delivery">
        </div>

    </div>
    <div class="footer">
        <a href="https://www.instagram.com/stickschile" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com/stickschile" target="_blank"><i class="fab fa-facebook-square"></i></a>
    </div>
</div>


</body>

<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

<script>

    $('#zonaDespachoLink').click(function (e) {
        e.preventDefault();

        $('#menu').fadeOut(function () {
            $('#zonaDespacho').fadeIn();
        });

    });

    $('#menuLink').click(function (e) {
        e.preventDefault();

        $('#zonaDespacho').fadeOut(function () {
            $('#menu').fadeIn();
        });


    });


</script>

</html>
