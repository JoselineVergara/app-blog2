@extends('layouts.navigationBar')
@section('contenido')
    <style>
        body {
            font-family: 'IBM Plex Sans', sans-serif;
            background-image: url(/../imagenrestaurante.jpg);
        }
    </style>

    <head>
        <title>EditarLocal</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&family=Oswald:wght@600&family=Single+Day&display=swap"
            rel="stylesheet">
    </head>
    <div class="container mx-auto">
        <div class="row">
            <div class="container mx-auto px-4 py-8">
                <div class="login-contenedor bg-white shadow-md rounded-md p-8 flex flex-col items-center">
                    <div class="titulo-contenedor text-center mb-4">
                        <h2 class="text-3xl font-bold">Actualiza el restaurante</h2>
                    </div>
                    <div class="contenedor-registro w-full space-y-4">
                        <form action="{{ route('restaurantes.update', $restaurante->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="flex flex-col">
                                <label for="nombre" class="font-bold">Nombre:</label>
                                <input type="text" id="nombre" placeholder="Nombre del local" required name="nombre"
                                    value="{{ $restaurante->nombre }}" class="rounded-md border border-gray-300 px-3 py-2">
                            </div>
                            <div class="flex flex-col">
                                <label for="ubicacion" class="font-bold">Ubicación:</label>
                                <input type="text" id="ubicacion" placeholder="Ej: Sur,Guayaquil" required
                                    name="ubicacion" value="{{ $restaurante->ubicacion }}"
                                    class="rounded-md border border-gray-300 px-3 py-2">
                            </div>
                            <div class="flex flex-col">
                                <label for="descripcion" class="font-bold">Descripción:</label>
                                <input type="text" id="descripcion" placeholder="Ej: Hable sobre el local" required
                                    name="descripcion" value="{{ $restaurante->descripcion }}"
                                    class="rounded-md border border-gray-300 px-3 py-2">
                            </div>





                            <div class="flex flex-col">
                                <label for="rangoprecios" class="font-bold">Rango de precios:</label>
                                <input type="text" id="rangoprecios" placeholder="Ej: $$$,$$,$" required
                                    name="rangoprecios" class="rounded-md border border-gray-300 px-3 py-2" value="{{ $restaurante->rangoprecios }}">
                            </div>
                            <div class="flex flex-col">
                                <label for="sitioweb" class="font-bold">Sitio web:</label>
                                <input type="text" id="sitioweb" placeholder="Ej:www.local.com" required name="sitioweb"
                                    class="rounded-md border border-gray-300 px-3 py-2" value="{{ $restaurante->sitioweb }}">
                            </div>
                            <div class="flex flex-col">
                                <label for="telefono" class="font-bold">Telefono:</label>
                                <input type="text" id="telefono" placeholder="Ej: 0999999999" required name="telefono"
                                    class="rounded-md border border-gray-300 px-3 py-2" value="{{ $restaurante->telefono }}">
                            </div>




                            <div class="flex flex-col">
                                <label for="horario" class="font-bold">Horario de atención:</label>
                                <input type="text" id="horario" placeholder="Ej: 7:00am-9:00pm" required
                                    name="horarioatencion" value="{{ $restaurante->horarioatencion }}"
                                    class="rounded-md border border-gray-300 px-3 py-2">
                            </div>
                            <div class="flex flex-col">
                                <label for="comida" class="font-bold">Tipo de comida:</label>
                                <select id="tipo-comida" name="categoria" value="{{ $restaurante->categoria }}"
                                    class="rounded-md border border-gray-300 px-3 py-2">
                                    <option value="" disabled>Escoja el tipo de cocina</option>
                                    <option value="americana">Americana</option>
                                    <option value="china">China</option>
                                    <option value="francesa">Francesa</option>
                                    <option value="india">India</option>
                                    <option value="italia">Italia</option>
                                    <option value="japonesa">Japonesa</option>
                                    <option value="mexicana">Mexicana</option>
                                    <option value="tailandesa">Tailandesa</option>
                                    <option value="gourmet">Gourmet</option>
                                    <option value="desconocido">Desconocido</option>
                                </select>
                            </div>
                            <button type="submit"
                                class="bg-blue-500 text-white px-4 py-2 rounded-md font-bold mt-4 w-full">Actualiza tu
                                local</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- <div class="container">
        <div class="login-contenedor">
            <div class="titulo-contenedor">
                <h2><b>Actualiza el restaurante</b></h2>
            </div>
            <hr>
            <div>
                <div class="contenedor-registro">
                    <form action="{{ route('restaurantes.update', $restaurante->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="nombre"><b>Nombre:</b></label>
                        <input type="text" id="nombre" placeholder="Nombre del local" required name="nombre"
                            value="{{ $restaurante->nombre }}"><br>

                        <label for="ubicacion"><b>Ubicacion:</b></label>
                        <input type="text" id="ubicacion" placeholder="Ej: Sur,Guayaquil" required name="ubicacion"
                            value="{{ $restaurante->ubicacion }}"><br>

                        <label for="descripcion"><b>Descripcion:</b></label>
                        <input type="text" id="ubicacion" placeholder="Ej: Hable sobre el local" required
                            name="descripcion" value="{{ $restaurante->descripcion }}"><br>

                        <label for="horario"><b>Horario de atencion:</b></label>
                        <input type="text" id="horario" placeholder="Ej: 7:00am-9:00pm" required
                            name="horarioatencion" value="{{ $restaurante->horarioatencion }}"><br>

                        <label for="comida"><b>Tipo de comida:</b></label>
                        <select id="tipo-comida" name="categoria" value="{{ $restaurante->categoria }}">
                            <option value="" disabled>Escoja el tipo de cocina</option>
                            <option value="americana">Americana</option>
                            <option value="china">China</option>
                            <option value="francesa">Francesa</option>
                            <option value="india">India</option>
                            <option value="italia">Italia</option>
                            <option value="japonesa">Japonesa</option>
                            <option value="mexicana">Mexicana</option>
                            <option value="tailandesa">Tailandesa</option>
                            <option value="gourmet">Gourmet</option>
                            <option value="desconocido">Desconocido</option>
                        </select>
                        <br>
                        <button type="submit" class="btn btn-primary">Actualiza tu local</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-image h-full w-full" style="background-image: url('imagenrestaurante.jpg');">
    </div> --}}
@stop
