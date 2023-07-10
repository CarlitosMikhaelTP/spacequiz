    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel=StyleSheet href="{{asset('css/styles.css')}}" type="text/css" media=screen> 
    </head>.
    <body style="background-image: url({{ asset('images/FondoEspacio5.jpg') }});">
        <div class="container py-5">
           <!-- CREACION DE CUADRO GRIS PRINCIPAL EXTERNO -->
           <div class="row">
              <div class="col-md-12 d-flex justify-content-center">
                <div class="card rounded-4" style="background-color:rgba(205, 205, 227, 0.8);">
                    <div class="row">
                        <div class="col-md-3 div-superior px-4">
                            <a href="{{asset('/')}}"><img src="{{asset('images/Preguntados-Logo.png')}}" class="img-fluid" alt="images"></a>
                        </div>
                    </div>
                   <div class="card-body">
                        <!-- CREACION DE 2 COLUMNAS EN LA MISMA FILA -->
                        <div class="row">
                            <div class="col-md-3 d-flex">
                                <div class="card flex-fill">
                                    <div class="card-body">
                                         <!-- CREACION DE BOTON PANEL -->
                                         <a href="{{asset('Comite/ComitePanel')}}">
                                         <div class="row g-0 mt-3">
                                            <div class="col-md-3">
                                                <img src="{{asset('images/icono_user.jpg')}}" class="img-fluid img-thumbnail custom-image1" alt="imagen">
                                            </div>
                                            <div class="col-md-9">
                                                <div class="fw-bold mt-2" style="color: rgb(118, 22, 170);">Panel</div>
                                            </div>
                                         </div>
                                         </a>
                                         <!-- CREACION DE BOTON NUEVA PREGUNTA -->
                                         <a href="{{asset('Comite/ComiteCrear')}}">
                                         <div class="row g-0 mt-3">
                                            <div class="col-md-3">
                                                <img src="{{asset('images/icono_pregunta.png')}}" class="img-fluid img-thumbnail custom-image2" alt="imagen">
                                            </div>
                                            <div class="col-md-9">
                                                <div class="fw-bold mt-2" style="color: rgb(118, 22, 170);">Nueva Pregunta</div>
                                            </div>
                                         </div>
                                         </a>
                                         <!-- CREACION DE BOTON LISTADO DE PREGUNTAS -->
                                         <a href="{{asset('Comite/ComiteListar')}}">
                                         <div class="row g-0 mt-3">
                                            <div class="col-md-3">
                                                <img src="{{asset('images/icono_menu.png')}}" class="img-fluid img-thumbnail custom-image3" alt="imagen">
                                            </div>
                                            <div class="col-md-9">
                                                <div class="fw-bold mt-2" style="color: rgb(118, 22, 170);">Listado de Preguntas</div>
                                            </div>
                                         </div>
                                         </a>
                                         <!-- CREACION DE BOTON CONFIGURACION DE PREGUNTAS -->
                                         <a href="{{asset('Comite/ComiteConfiguracion')}}">
                                         <div class="row g-0 mt-3">
                                            <div class="col-md-3">
                                                <img src="{{asset('images/icono_config.png')}}" class="img-fluid img-thumbnail custom-image4" alt="imagen">
                                            </div>
                                            <div class="col-md-9">
                                                <div class="fw-bold mt-2" style="color: rgb(118, 22, 170);">Configuración</div>
                                            </div>
                                         </div>
                                         </a>
                                         <!-- CREACION DE BOTON DE QUIZ.COM -->
                                         <a href="{{asset('/')}}">
                                         <div class="row g-0 mt-3">
                                            <div class="col-md-3">
                                                <img src="{{asset('images/icono_net.png')}}" class="img-fluid img-thumbnail custom-image5" alt="imagen">
                                            </div>
                                            <div class="col-md-9">
                                                <div class="fw-bold mt-2" style="color: rgb(118, 22, 170);">Quiz.com</div>
                                            </div>
                                         </div>
                                         </a>
                                         <!-- CREACION DE BOTON LISTADO DE PREGUNTAS -->
                                         <a href="javascript:history.back()">
                                         <div class="row g-0 mt-3">
                                            <div class="col-md-3">
                                                <img src="{{asset('images/icono_retroceder.png')}}" class="img-fluid img-thumbnail custom-image6" alt="imagen">
                                            </div>
                                            <div class="col-md-9">
                                                <div class="fw-bold mt-2" style="color: rgb(118, 22, 170);">Salir</div>
                                            </div>
                                         </div>
                                         </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                @yield('content')
                            </div>
                        </div>
                   </div>
                </div>
              </div>
            </div>
        </div> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> 
    </body>
    </html>
    </html>











