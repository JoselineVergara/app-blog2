@extends('layouts.navigationBar')

@section('tittle', 'Pagina blog')
@section('contenido')

    <br>
    <div class="px-10 py-2">
        <div class="flex items-center justify-center  min-h-screen mx-auto">
            <!--Grid-->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!--Card -->
                @foreach ($datos as $file)
                    <div class="rounded-xl shadow-lg" style="background-color: white;">
                        <div
                            class="p-5 flex flex-col transition-colors duration-300 hover:bg-gray-200 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl py-3 px-3">
                            <div class="rounded-xl overflow-hidden">
                                <img src="{{ asset($file->img) }}" alt="Imagen"
                                    style="            width: 100%;
                                height: 500px;
                                object-fit: cover;
                                object-position: bottom;
                                max-width: 100%;">
                            </div>
                            <br>
                            <div class="flex justify-end gap-2">
                                <form action="{{route('restaurantes.edit', $file->id)}}" method="GET">
                                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full uppercase">Editar</button>
                                </form>
                                <form action="{{route('restaurantes.show', $file->id)}}" method="GET">
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full uppercase">Eliminar</button>
                                </form>
                            </div>
                            {{-- <form action="{{route("restaurantes.edit", $file->id)}}" method="GET">
                                <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full uppercase ">Editar</button>
                            </form>
                            <form action="{{route("restaurantes.edit", $file->id)}}" method="GET">
                                <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full uppercase ">Eliminar</button>
                            </form> --}}
                            <h5 class="text-2xl md:text-3xl font-medium mt-3 text-center">{{ $file->nombre }}</h5>
                            <br>
                            <p class="text-slate-500 text-lg mt-3 text-center">{{ $file->descripcion }}</p>
                            <x-button rounded href="{{route('experiencia.index', $file->id)}}" label="Visitanos" teal />
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            {{$datos->links()}}
        </div>
    </div>
    <br>
@stop
