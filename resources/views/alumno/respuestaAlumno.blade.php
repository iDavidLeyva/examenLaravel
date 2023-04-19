@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 
rounded-lg shadow-lg">

  <h1 class="text-3xl text-center font-bold">Examen {{$nombre}}</h1>

  <form class="mt-4" method="POST" action="">
    @csrf
   @foreach ($preguntas as $i => $pregunta)
   @if($i<5)
    <div>
      <legend class="text-base font-medium text-gray-900">{{$pregunta->pregunta}}</legend>
  </div>
    <div class="mt-4 space-y-4">
      <div class="flex items-center">
        <input id="push-everything" name="pregunta1{{$i}}" value="{{$pregunta->opcion1}}" type="text" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
        <label for="push-everything" class="ml-3 block text-sm font-medium text-gray-700">{{$pregunta->opcion1}}</label>
      </div>
      <div class="flex items-center">
        <input id="push-email" name="pregunta2{{$i}}" value="{{$pregunta->opcion2}}" type="text" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
        <label for="push-email" class="ml-3 block text-sm font-medium text-gray-700">{{$pregunta->opcion2}}</label>
      </div>
      <div class="flex items-center">
        <input id="push-nothing" name="pregunta3{{$i}}" value="{{$pregunta->opcion3}}"  type="text" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
        <label for="push-nothing" class="ml-3 block text-sm font-medium text-gray-700">{{$pregunta->opcion3}} </label>
        
        {{-- DECLARAMOS LA REPUESTA CORRECTA CON UN INPUT--}}
        <input type="hidden" name="correcta{{$i}}" value="{{$pregunta->correcta}}" />
        <input type="hidden" name="idDocente" value="{{$pregunta->id_usuario}}" />
        <input type="hidden" name="idExamen" value="{{$pregunta->id_examen}}" />
        <input type="hidden" name="nombreExamen" value="{{$nombre}}" />
      </div>
      <p></p>
    </div>
   
      @endif
      @endforeach
  
    <button type="submit" class="rounded-md bg-yellow-500 w-full text-lg
    text-white font-semibold p-2 my-3 hover:bg-red-600">Enviar</button>
  </form>

      
@endsection