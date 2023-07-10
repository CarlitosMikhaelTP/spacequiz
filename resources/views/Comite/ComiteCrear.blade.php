@extends('layouts.plantillaComite')

@section('title','Creacion Preguntas')

@section('content')
<div class="card flex-fill">
    <div class="card-body">
         <h2 class="card-title mt-2 fw-bold" style="color:#1000c0">Complete la pregunta</h2>
    </div>
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
    <!-- CREACION TITULO DE TEXTAREA PREGUNTA -->
    <div class="row">
        <div class="col-md-12 px-5">
            <h5 class="card-title mt-4 fw-bold" style="color:#1000c0"> Pregunta:</h5>
        </div>
    </div>
    <!-- CREACION DE TEXT AREA PARA INSERCION DE LA NUEVA PREGUNTA -->
    <div class="row">
        <div class="col-md-12 px-5" >
            <textarea  class="form-control" id="exampleFormControlTextarea1" rows="3" style="background-color:rgb(219, 219, 219);">HTML Es un lenguaje de programación?</textarea>
        </div>
    </div>
    <!-- CREACION DE ESTRUCTURA DE OPCION A CON SU INPUT -->
    <div class="row px-5 mt-4">
        <div class="col-md-2 px-3 mx-auto mt-1">
            <h5 class="card-title fw-bold" style="color:#1000c0">Opción A</h5>
        </div>
        <div class="col-md-10 mx-auto">
            <input type="email" class="form-control" style="background-color:rgb(219, 219, 219);" id="exampleFormControlInput1" placeholder="Ingresa la alternativa de pregunta A">
        </div>
    </div>
    <!-- CREACION DE ESTRUCTURA DE OPCION B CON SU INPUT -->
    <div class="row px-5 mt-3">
        <div class="col-md-2 px-3 mt-1">
            <h5 class="card-title fw-bold" style="color:#1000c0">Opción B</h5>
        </div>
        <div class="col-md-10 mx-auto">
            <input type="email" class="form-control" style="background-color:rgb(219, 219, 219);" id="exampleFormControlInput1" placeholder="Ingresa la alternativa de pregunta B">
        </div>
    </div>
    <!-- CREACION DE ESTRUCTURA DE OPCION C CON SU INPUT -->
    <div class="row px-5 mt-3">
        <div class="col-md-2 px-3 mt-1">
            <h5 class="card-title fw-bold" style="color:#1000c0">Opción C</h5>
        </div>
        <div class="col-md-10 mx-auto">
            <input type="email" class="form-control" style="background-color:rgb(219, 219, 219);" id="exampleFormControlInput1" placeholder="Ingresa la alternativa de pregunta C">
        </div>
    </div>
    <!-- CREACION DE ESTRUCTURA DE OPCION D CON SU INPUT -->
    <div class="row px-5 mt-3">
        <div class="col-md-2 px-3 mt-1">
            <h5 class="card-title fw-bold" style="color:#1000c0">Opción D</h5>
        </div>
        <div class="col-md-10 mx-auto">
            <input type="email" class="form-control" style="background-color:rgb(219, 219, 219);" id="exampleFormControlInput1" placeholder="Ingresa la alternativa de pregunta D">
        </div>
    </div>
    <!-- CREACION DE ESTRUCTURA DE SELECCION DE RESPUESTA CORRECTA -->
    <div class="row px-5 mt-3">
        <div class="col-md-2 px-4 mt-1">
            <h5 class="card-title fw-bold" style="color:#1000c0">Correcta</h5>
        </div>
        <div class="col-md-3">
            <select class="form-select" style="background-color:rgb(219, 219, 219);" aria-label="Default select example">
                <option selected>Correct</option>
                <option value="1">A</option>
                <option value="2">B</option>
                <option value="2">C</option>
                <option value="3">D</option>
            </select>
        </div>
    </div>
    <div class="row mx-auto py-3">
        <div class="btn btn-primary">Guardar cambios</div>
    </div>
</div>

@endsection