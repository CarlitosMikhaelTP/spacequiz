@extends('layouts.plantillaComite')
@section('title','Panel de Comité')
@section('content')
<div class="card flex-fill">
    <div class="card-body">
         <h2 class="card-title mt-4 fw-semibold" style="color:#1000c0">Panel</h2>
         <!-- Creacion de 8 cards,4 en cada una de las 2 filas -->
         <!-- Creacion de row con 4 cards -->
         <div class="row mt-3">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body" style="background-color:rgb(219, 219, 219);">
                        <h3 class="card-title text-center">Total</h3>
                        <h4 class="text-center" style="color: rgb(118, 22, 170);">1000</h4>
                        <h5 class="text-center" style="color:#1000c0">preguntas</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body" style="background-color:rgb(219, 219, 219);">
                        <h3 class="card-title text-center">Tipos</h3>
                        <h4 class="text-center" style="color: rgb(118, 22, 170);">3</h4>
                        <h5 class="text-center" style="color:#1000c0">preguntas</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body" style="background-color: rgb(219, 219, 219);">
                        <h3 class="card-title text-center">Curso 1</h3>
                        <h4 class="text-center" style="color: rgb(118, 22, 170);">200</h4>
                        <h5 class="text-center" style="color:#1000c0">preguntas</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body" style="background-color:rgb(219, 219, 219);">
                        <h3 class="card-title text-center">Curso 2</h3>
                        <h4 class="text-center" style="color: rgb(118, 22, 170);">200</h4>
                        <h5 class="text-center" style="color:#1000c0">preguntas</h5>
                    </div>
                </div>
            </div>
         </div>
         <!-- Creacion de segundo row con 4 cards -->
         <div class="row py-5 ">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body" style="background-color:rgb(219, 219, 219);">
                        <h3 class="card-title text-center">Curso 3</h3>
                        <h4 class="text-center" style="color: rgb(118, 22, 170);">200</h4>
                        <h5 class="text-center" style="color:#1000c0">preguntas</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body" style="background-color:rgb(219, 219, 219);">
                        <h3 class="card-title text-center">Curso 4</h3>
                        <h4 class="text-center" style="color: rgb(118, 22, 170);">200</h4>
                        <h5 class="text-center" style="color:#1000c0">preguntas</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body" style="background-color:rgb(219, 219, 219);">
                        <h3 class="card-title text-center">Curso 5</h3>
                        <h4 class="text-center" style="color: rgb(118, 22, 170);">100</h4>
                        <h5 class="text-center" style="color:#1000c0">preguntas</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body" style="background-color:rgb(219, 219, 219);">
                        <h3 class="card-title text-center">Curso 6</h3>
                        <h4 class="text-center" style="color: rgb(118, 22, 170);">100</h4>
                        <h5 class="text-center" style="color:#1000c0">preguntas</h5>
                    </div>
                </div>
            </div>
         </div>
    </div>
</div>

@endsection