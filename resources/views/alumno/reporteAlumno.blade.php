@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="w-3/4 m-auto pt-10">
  <a href="{{route('verPdf')}}"class="bg-red-600 w-200 text-lg p-2 mx-4 bg-gradient-to-r from-red-200 to-orange-500
  hover:from-yellow-500 hover:to-red-200">Crear PDF</a>
  <table class="table-auto bg-white m-auto">
    <thead>
      <tr>
        <th>ID Resultado</th>
        <th>Alumno</th>
        <th>Examen</th>
        <th>Intentos</th>
        <th>Promedio</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($resultados as $resultado)
      <tr>
        <td>{{$resultado->id}}</td>
        <td>{{$resultado->alumno}}</td>
        <td>{{$resultado->tituloExamen}}</td>
        <td>{{$resultado->intentos}}</td>
        <td>{{$resultado->promedio}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<div class="w-3/4 m-auto pt-10">

  <table class="table-auto bg-white m-auto">
    <thead>
      <tr>
        <th>ID Resultado</th>
        <th>Calificacion</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($calificaciones as $calificacion)
      <tr>
        <td>{{$calificacion->idResultado}}</td>
        <td>{{$calificacion->calificacion}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
  
  @endsection