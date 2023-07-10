@extends('layouts.plantillaComite')
@section('title','Comité Configuracion')

@section('content')
<div class="card flex-fill">
    <div class="card-body">
         <h2 class="card-title fw-bold mt-4" style="color:#1000c0">Listado de preguntas</h2>
    </div>
    <!-- CREANDO TITULOS DE TEMA Y TIPO DE PREGUNTA  -->
    <!-- CREANDO TITULOS DE TEMA Y TIPO DE PREGUNTA  -->
    <div class="row">
        <div class="col-md-6 px-5">
           <h5 class="card-title mt-3 fw-bold" style="color:#1000c0">Especialidad:</h5>
        </div>
        <div class="col-md-6 px-5">
           <h5 class="card-title mt-3 fw-bold" style="color:#1000c0">Ciclo:</h5>
        </div>
    </div>
    <div class="row">
        <!-- CREACION DE SELECT DE TEMAS DE PREGUNTAS -->
        <div class="col-md-6 px-5">
            <select class="form-select" aria-label="Default select example" style="background-color:rgb(219, 219, 219);">
                <option selected>Especialidades</option>
                <option value="1">Redes y comunicaciones</option>
                <option value="2">Diseño y Desarrollo de Software</option>
                <option value="3">Diseño y Desarrollo de Videojuegos</option>
                <option value="4">Big Data</option>
            </select>
        </div>
        <!-- CREACION DE SELECT DE TIPOS DE PREGUNTAS -->
        <div class="col-md-6 px-5">
            <select class="form-select" aria-label="Default select example" style="background-color:rgb(219, 219, 219);">
                <option selected>Ciclo</option>
                <option value="1"> I </option>
                <option value="2"> II</option>
                <option value="3"> III </option>
                <option value="4"> IV </option>
                <option value="5"> V </option>
                <option value="6"> VI </option>
              </select>
        </div>
    </div>
         <!-- CREANDO TITULOS DE TEMA Y TIPO DE PREGUNTA  -->
         <div class="row">
            <div class="col-md-6 px-5">
               <h5 class="card-title mt-3 fw-bold" style="color:#1000c0">Cursos:</h5>
            </div>
            <div class="col-md-6 px-5">
               <h5 class="card-title mt-3 fw-bold" style="color:#1000c0"> Módulo:</h5>
            </div>
        </div>
        <div class="row">
            <!-- CREACION DE SELECT DE TEMAS DE PREGUNTAS -->
            <div class="col-md-6 px-5">
                <select class="form-select" aria-label="Default select example" style="background-color:rgb(219, 219, 219);">
                    <option selected>Cursos</option>
                    <option value="1">Estructuras de Datos y Algoritmos</option>
                    <option value="2">Bases de Datos Avanzadas</option>
                    <option value="3">Sistemas Operativos</option>
                    <option value="4">Ingeniería de Requerimiento de Software</option>
                    <option value="5">Mejora y Calidad Continua</option>
                    <option value="6">Desarrollo de Aplicaciones en Internet</option>
                </select>
            </div>
            <!-- CREACION DE SELECT DE TIPOS DE PREGUNTAS -->
            <div class="col-md-6 px-5">
                <select class="form-select" aria-label="Default select example" style="background-color:rgb(219, 219, 219);">
                    <option selected>Módulos</option>
                    <option selected>1</option>
                    <option selected>2</option>
                    <option selected>3</option>
                    <option selected>4</option>
                    <option selected>5</option>
                    <option selected>6</option>
                    <option selected>7</option>
                    <option selected>8</option>
                    <option selected>9</option>
                    <option selected>10</option>
                    <option selected>11</option>
                    <option selected>12</option>
                    <option selected>13</option>
                    <option selected>14</option>
                    <option selected>15</option>
                    <option selected>16</option>
                  </select>
            </div>
        </div>
    <!-- CREACION CUADRO DE PRIMERA PREGUNTA -->
    <div class="row g-0 border border-dark mt-4 mx-2">
        <!-- CREACION DE PREGUNTA Y BOTONES DE ELIMNAR Y EDITAR -->
        <div class="col-md-10 px-5">
            <h5 class="mt-3 fw-bold" style="color:#1000c0"> Pregunta 1:</h5>
        </div>
        <div class="col-md-2 mx-auto mt-2">
            <img src="{{asset('images/icono_editar.png')}}" class="btn img-fluid img-thumbnail custom-image7" alt="imagen">
            <img src="{{asset('images/icono_eliminar.png')}}" class="btn img-fluid img-thumbnail custom-image7" alt="imagen">
        </div>
        <!-- CREACION DE BORDE DE LA PREGUNTA 1 -->
        <div class="row g-0 border border-dark mx-auto"></div>
        <!-- Creación de espacio de pregunta -->
        <div class="col-md-10">
            <div class="fs-5 text-center fw-semibold mt-3"> ¿A qué lenguaje de programación pertenece este logo?</div>
             <!-- Creacion de 2 botones de opciones dentro de la fila de la columna-10 -->
            <div class="row mt-4">
                <div class="col-md-5 mx-auto d-grid">
                   <div class="btn btn-primary">Java</div>
                </div>
                <div class="col-md-4 mx-auto d-grid">
                   <div class="btn btn-warning">Javascript</div>
                </div>
            </div>
            <!-- Creacion de 2 botones restantes de opciones -->
            <div class="row py-4 ">
                <div class="col-md-5 mx-auto d-grid">
                   <div class="btn btn-danger">HTML</div>
                </div>
                <div class="col-md-4 mx-auto d-grid">
                   <div class="btn btn-info">Python</div>
                </div>
            </div>
        </div>
        <div class="col-md-2 mt-5">
            <img src="{{asset('images/loog_python.png')}}" class="custom-image8" alt="imagen">
        </div>    
    </div>
    <!-- CREACION CUADRO DE SEGUNDA PREGUNTA -->
    <div class="row g-0 border border-dark mt-4 mx-2">
        <!-- CREACION DE PREGUNTA Y BOTONES DE ELIMNAR Y EDITAR -->
        <div class="col-md-10 px-5">
            <h5 class="mt-3 fw-bold" style="color:#1000c0"> Pregunta 2:</h5>
        </div>
        <div class="col-md-2 mx-auto mt-2">
            <img src="{{asset('images/icono_editar.png')}}" class="btn img-fluid img-thumbnail custom-image7" alt="imagen">
            <img src="{{asset('images/icono_eliminar.png')}}" class="btn img-fluid img-thumbnail custom-image7" alt="imagen">
        </div>
        <!-- CREACION DE BORDE DE LA PREGUNTA 1 -->
        <div class="row g-0 border border-dark mx-auto"></div>
        <!-- Creación de espacio de pregunta -->
        <div class="col-md-10">
            <div class="fs-5 text-center fw-semibold mt-3"> ¿A qué lenguaje de programación pertenece este logo?</div>
             <!-- Creacion de 2 botones de opciones dentro de la fila de la columna-10 -->
            <div class="row mt-4">
                <div class="col-md-5 mx-auto d-grid">
                   <div class="btn btn-primary">Java</div>
                </div>
                <div class="col-md-4 mx-auto d-grid">
                   <div class="btn btn-warning">Javascript</div>
                </div>
            </div>
            <!-- Creacion de 2 botones restantes de opciones -->
            <div class="row py-4 ">
                <div class="col-md-5 mx-auto d-grid">
                   <div class="btn btn-danger">HTML</div>
                </div>
                <div class="col-md-4 mx-auto d-grid">
                   <div class="btn btn-info">Python</div>
                </div>
            </div>
        </div>
        <div class="col-md-2 mt-5">
            <img src="{{asset('images/loog_python.png')}}" class="custom-image8 " alt="imagen">
        </div>    
    </div>
    <!-- CREACION CUADRO DE TERCERA PREGUNTA -->
    <div class="row g-0 border border-dark mt-4 mx-2">
        <!-- CREACION DE PREGUNTA Y BOTONES DE ELIMNAR Y EDITAR -->
        <div class="col-md-10 px-5">
            <h5 class="mt-3 fw-bold" style="color:#1000c0"> Pregunta 3:</h5>
        </div>
        <div class="col-md-2 mx-auto mt-2">
            <img src="{{asset('images/icono_editar.png')}}" class="btn img-fluid img-thumbnail custom-image7" alt="imagen">
            <img src="{{asset('images/icono_eliminar.png')}}" class="btn img-fluid img-thumbnail custom-image7" alt="imagen">
        </div>
        <!-- CREACION DE BORDE DE LA PREGUNTA 1 -->
        <div class="row g-0 border border-dark mx-auto"></div>
        <!-- Creación de espacio de pregunta -->
        <div class="col-md-10">
            <div class="fs-5 text-center fw-semibold mt-3"> ¿A qué lenguaje de programación pertenece este logo?</div>
             <!-- Creacion de 2 botones de opciones dentro de la fila de la columna-10 -->
            <div class="row mt-4">
                <div class="col-md-5 mx-auto d-grid">
                   <div class="btn btn-primary">Java</div>
                </div>
                <div class="col-md-4 mx-auto d-grid">
                   <div class="btn btn-warning">Javascript</div>
                </div>
            </div>
            <!-- Creacion de 2 botones restantes de opciones -->
            <div class="row py-4 ">
                <div class="col-md-5 mx-auto d-grid">
                   <div class="btn btn-danger">HTML</div>
                </div>
                <div class="col-md-4 mx-auto d-grid">
                   <div class="btn btn-info">Python</div>
                </div>
            </div>
        </div>
        <div class="col-md-2 mt-5">
            <img src="{{asset('images/loog_python.png')}}" class="custom-image8 " alt="imagen">
        </div>    
    </div>         
</div>
@endsection