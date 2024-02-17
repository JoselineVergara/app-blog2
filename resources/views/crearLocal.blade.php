@extends('layouts.navigationBar')

@section('contenido')
    <style>
        body {
            font-family: 'IBM Plex Sans', sans-serif;
            background-image: url(/../imagenrestaurante.jpg);
        }
    </style>

    <head>
        <title>RegistroLocal</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&family=Oswald:wght@600&family=Single+Day&display=swap"
            rel="stylesheet">
    </head>
    <div class="container mx-auto px-4 py-8">
        <div class="login-contenedor bg-white shadow-md rounded-md p-8 flex flex-col items-center">
            <div class="titulo-contenedor text-center mb-4">
                <h2 class="text-3xl font-bold">Registra tu restaurante</h2>
            </div>
            <main class="w-full">
                <div class="contenedor-registro w-full space-y-4">
                    <form action="{{ route('restaurantes.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="flex flex-col">
                            <label for="nombre" class="font-bold">Nombre:</label>
                            <input type="text" id="nombre" placeholder="Nombre del local" required name="nombre"
                                class="rounded-md border border-gray-300 px-3 py-2">
                        </div>
                        <div class="flex flex-col">
                            <label for="ubicacion" class="font-bold">Ubicación:</label>
                            <input type="text" id="ubicacion" placeholder="Ej: Sur,Guayaquil" required name="ubicacion"
                                class="rounded-md border border-gray-300 px-3 py-2">
                        </div>
                        <div class="flex flex-col">
                            <label for="descripcion" class="font-bold">Descripción:</label>
                            <input type="text" id="descripcion" placeholder="Ej: Hable sobre el local" required
                                name="descripcion" class="rounded-md border border-gray-300 px-3 py-2">
                        </div>
                        <div class="flex flex-col">
                            <label for="horario" class="font-bold">Horario de atención:</label>
                            <input type="text" id="horario" placeholder="Ej: 7:00am-9:00pm" required
                                name="horarioatencion" class="rounded-md border border-gray-300 px-3 py-2">
                        </div>
                        <div class="flex flex-col">
                            <label for="comida" class="font-bold">Tipo de comida:</label>
                            <select id="tipo-comida" name="categoria" class="rounded-md border border-gray-300 px-3 py-2">
                                <option value="" disabled>Escoja el tipo de cocina</option>
                                <option value="americana">Americana</option>
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <label for="imagen" class="font-bold">Imagen del local:</label>
                            <input type="file" name="img" id=""
                                class="rounded-md border border-gray-300 px-3 py-2">
                        </div>
                        <button type="submit"
                            class="bg-blue-500 text-white px-4 py-2 rounded-md font-bold mt-4 w-full">Guardar</button>
                    </form>
                </div>
            </main>
        </div>
    </div>

@stop
