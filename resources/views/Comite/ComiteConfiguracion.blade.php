@extends('layouts.plantillaComite')
@section('title','Comité Configuracion')

@section('content')
                            <div class="card flex-fill">
                                <!-- Creación de título de configuración de comité -->
                                <div class="card-body">
                                     <h3 class="card-title fw-bold mt-2" style="color:#1000c0">Configuración del comité</h3>
                                </div> 
                                <!-- CREACION DE ESTRUCTURA DE USUARIO CON SU INPUT -->
                                <div class="row px-5 mt-3">
                                    <div class="col-md-12 px-4  mt-1">
                                        <h5 class="card-title fw-bold" style="color:#1000c0">Usuario :</h5>
                                    </div>
                                    <div class="col-md-12 mx-auto">
                                        <input type="text" class="form-control" style="background-color:rgb(219, 219, 219);" id="exampleFormControlInput1" placeholder="Ingresa el nombre de tu usuario">
                                    </div>
                                </div> 
                                <!-- CREACION DE ESTRUCTURA DE CONTRASEÑA CON SU INPUT -->
                                <div class="row px-5 mt-4">
                                    <div class="col-md-12 px-4  mt-1">
                                        <h5 class="card-title fw-bold" style="color:#1000c0">Contraseña :</h5>
                                    </div>
                                    <div class="col-md-12 mx-auto">
                                        <input type="password" class="form-control" style="background-color:rgb(219, 219, 219);" id="exampleFormControlInput1" placeholder="Ingresa tu contraseña">
                                    </div>
                                </div>
                                <!-- CREACION DE ESTRUCTURA DE nro DE PREGUNTAS CON SU INPUT -->
                                <div class="row px-5 mt-4">
                                    <div class="col-md-12 px-4  mt-1">
                                        <h5 class="card-title fw-bold" style="color:#1000c0">Total de preguntas por juego :</h5>
                                    </div>
                                    <div class="col-md-12 mx-auto">
                                        <input type="number" class="form-control" style="background-color:rgb(219, 219, 219);" id="exampleFormControlInput1" placeholder="Ingresa el número de preguntas">
                                    </div>
                                </div>
                                <!-- CREACION DE BOTON DE ACTUALIZAR CONFIGURACION -->
                                <div class="row px-4 mx-4 mt-3">
                                    <div class="col-md-3 btn btn-primary rounded-4">Actualizar configuración</div>
                                </div> 
                                <!-- Creación de título de configuración de comité -->
                                <div class="card-body">
                                    <h3 class="card-title fw-bold mt-3" style="color:#1000c0">Preguntas y categorías</h3>
                                </div>
                                <!-- Creación de botones rojos tipos de eliminación -->
                                <div class="row py-3">
                                    <div class="col-md-6 mx-auto d-grid px-5">
                                        <div class="btn btn-danger"> Eliminar preguntas(solo preguntas)</div>
                                    </div>
                                    <div class="col-md-6 mx-auto d-grid px-5">
                                        <div class="btn btn-danger "> Eliminar preguntas y categorías</div>
                                    </div>
                                </div>
                            </div>
@endsection
