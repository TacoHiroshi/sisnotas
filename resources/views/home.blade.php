@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Pagina de Inicio</h1>
@stop

@section('content')
    <x-adminlte-card theme="lime" theme-mode="outline">
        
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <span class="input-group-text" id="basic-addon2">@example.com</span>
</div>
    </x-adminlte-card>

<div class="container">
    <div class="row md-6">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://i.pinimg.com/originals/15/81/4b/15814bcbe69d06b95a94d128fffe65d0.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://images.pexels.com/photos/1252983/pexels-photo-1252983.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.pinimg.com/originals/15/81/4b/15814bcbe69d06b95a94d128fffe65d0.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
 <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop