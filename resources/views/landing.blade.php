
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page - Space Quiz</title>

    <!-- Link para CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">

    <!-- En esta ocasión usé boxicons (como fontawesome) -->
    <link rel="stylesheet" 
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- Y también remixicons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Link para google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Poppins:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&family=Permanent+Marker&family=Poppins:ital,wght@1,600&display=swap" rel="stylesheet">
</head>
<!-- Definiendo fondo de Landing Page -->
<body style="background-image: url({{asset('images/venus1prueba.jpg')}});" class="hero">
    <div class="container">
    <header>
        <img src="{{asset('images/Logo - copia.png')}}" alt="">
        <a href="{{asset('/')}}" class="logo">Space Quiz</a>

        <ul class="navlist">
            <li><a href="{{asset('OpcionesLanding/Masinformacion')}}">Más Información</a></li>
            <li><a href="{{asset('OpcionesLanding/ComoJugar')}}">¿Cómo jugar?</a></li>
            <li><a href="{{asset('RL/RegistroTipo')}}">Registrar</a></li>
        </ul>
    </header>

    <section class="hero">
        <div class="hero-text">
            <h5></h5>
            <h4>Bienvenido a</h4>
            <h1>SPACE QUIZ</h1>
            <p>¡Tu espacio para poder aprender y jugar a la vez!</p>
            <a href="{{asset('RL/RegistroTipo')}}">Registrarme</a>
            <a href="{{asset('RL/Login')}}" class="ctaa"><i class="ri-login-box-line"></i>Iniciar sesión</a>
        </div>

        <div class="hero-img">
            <img src="{{asset('images/astronauta.png')}}" alt="" class="flotar">
        </div>
    </section>
    <!-- Javascript -->
    <script src="js/script.js"></script>
</div>
</body>
</html>


