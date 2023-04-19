@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-yellow-700
rounded-lg">

  <h1 class="text-3xl text-center font-bold">Inicia Sesión</h1>

  <form class="mt-4" method="POST" action="">
    @csrf

    <input type="email" class="border border-red-300 rounded-md bg-yellow-200 w-full
    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white text-center" placeholder="E-Mail"
    id="email" name="email">

    <input type="password" class="border border-red-300 rounded-md bg-yellow-200 w-full
    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white text-center" placeholder="Contraseña"
    id="password" name="password">

    @error('message')
    <p class="border border-red-500 rounded-md bg-red-100 w-full
    text-red-600 p-2 my-2">{{$message}}</p>
    @enderror

    <button type="submit" class="rounded-md bg-yellow-500 w-full text-lg
    text-white font-semibold p-2 my-3 hover:bg-red-600">Ingresar</button>
  </form>
</div>

@endsection