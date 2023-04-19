@extends('layouts.app')

@section('title', 'Home')

@section('content')
  <div>
    <h1 class="text-5xl text-center pt-24 text-yellow-300	">Bienvenido Profesor {{Auth::user()->nombre}}</h1>

  </div>
      
@endsection