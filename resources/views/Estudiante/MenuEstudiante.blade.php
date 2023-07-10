<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</head>

<body style="background-image: url(images/Venus2prueba.jpg);">
    <!-- Desconozco, pero al parecer aumenta el rango en altura del cuerpo -->
    <div style="display: flex;flex-direction: column; height: 100vh;">
        <!-- Estableciendo NavBar -->
        <nav class="navbar  navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid px-3">
                <a href="{{asset('/')}}">
                    <img src="{{asset('images/Logo - copia.png')}}" class="custom-image12" alt="">
                <b class="navbar-brand px-2" style="color:white">SPACE QUIZ</b>        
                </a>    
            </div>
            <!-- Creación de despliegue de menú dentro del NavBar -->
            <div class="col-1" id="navclock">
                <div class="d-flex align-items-center justify-content-center px-3">
                    <select class="form-select" id="" onchange="redirect()">
                        <option value="" selected disabled>Salir</option>
                        <option value="1">Configuración</option>
                        <option value="2">Menú</option>
                    </select>
                </div>
            </div>
        </nav>
<script src="https://kit.fontawesome.com/a70db94014.js" crossorigin="anonymous"></script>
</body>

</html>