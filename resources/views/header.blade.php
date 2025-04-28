<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\app.css">
    @vite(['public/app.css', 'public/java.js','resources/js/app.js', 'public/javafigure.js'])
    <title>Eco Portal</title>
</head>

<body>
    <div class="header">
        <div class="adress">
            <a href="">Asuncion, Villa Elisa</a>
        </div>
        <div class="search">
            <div class="logo">
                <a href="/"><img src="\img\logo80x80.png" alt=""></a>
                <div class="interes">
                    <div class="text_interes">
                        Estudio topiari
                    </div>
                    <div class="text_interes_green">
                        Eco Portal
                    </div>
                    <div class="text_interes">
                        Producción de figuras topiarias
                    </div>
                </div>
            </div>
            <div class="header-search">
                <div class="time-email">
                    <div class="time">
                        <img class="img-clock" src="\img\clock.svg">
                        <div>
                            <p>Régimen del trabajo:</p>
                            <p>Lun-Dom 9:00-19:00</p>
                        </div>
                    </div>
                    <div class="email">
                        <img class="img-email" src="\img\email.svg">
                        <div>
                            <p>Email:</p>
                            <p>ecoportal@gmail.com</p>
                        </div>
                    </div>
                </div>
                <form action="" method="get">
                    <input class="search-line" type="text" name="query" placeholder="Buscar por catálogo...">
                </form>

            </div>
            <div class="phone_adres">
                <div class="phone">
                    <img src="\img\phone-modern.svg" alt="" width="15" height="20">
                    <p>+595 123 123 123</p>
                </div>
                <div class="phone">
                    <img src="\img\phone-modern.svg" alt="" width="15" height="20">
                    <p>+595 123 123 123</p>
                </div>
            </div>
        </div>
        <nav class="nav_header">
            @include('nav')
        </nav>
    </div>

