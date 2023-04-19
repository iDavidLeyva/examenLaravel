@extends('layouts.app')

@section('title', 'Home')

@section('content')
  <!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<div class="my-4">
  <a href="{{route('crearexamen.docente')}}" class="bg-green-200 w-200 text-lg p-2 mx-4 bg-gradient-to-r from-green-200 to-yellow-500
  hover:from-purple-500 hover:to-pink-200">Nuevo examen</a>
  <a href="{{route('eliminarExamen.docente')}}" class="bg-red-600 w-200 text-lg p-2 mx-4 bg-gradient-to-r from-red-200 to-orange-500
  hover:from-yellow-500 hover:to-red-200">Eliminar examen</a>
  <a href="{{route('haciaEditar.docente')}}" class="w-200 text-lg p-2 mx-4 bg-gradient-to-r from-green-400 to-blue-500
   hover:from-pink-500 hover:to-yellow-500">Editar/Listar preguntas</a>
</div>



<div class="bg-indigo-800">
    <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
      <h2 class="sr-only"><center>Products</center></h2>
        <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-4 xl:grid-cols-4 xl:gap-x-8">
            {{-- Tiene que mostrar todos los usuarios que coincidan con el id del docente --}}
            @foreach ($examens as $examen)
            @if(Auth::user()->id == $examen->id_usuario)
              <a class="group" href="{{route('crearPreguntas.docente')}}?examen={{$examen->id}}&nombre={{$examen->nombre}}">
                <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                  <img src="https://i.pinimg.com/564x/a6/25/88/a62588dc61ca87e10f1f0cd052123314.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="w-full h-full object-center object-cover group-hover:opacity-75">
                </div>
                {{-- <h3 class="mt-4 text-sm text-white">{{$examen->users->nombre}}</h3> --}}
                <p class="mt-1 text-lg font-medium text-white" ><b>{{$examen->nombre}}</b></p>
              </a>

            @endif
            @endforeach


        </div>
    </div>
</div>


     
      
@endsection