@extends('layouts.app')

@section('title', 'Home')

@section('content')
  <div>
    <h1 class="text-5xl text-center pt-24 text-yellow-400	">Bienvenido Alumno {{Auth::user()->nombre}}</h1>
  </div>
      
@endsection