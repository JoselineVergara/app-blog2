@extends('layouts.navigationBar')

@section('tittle', 'Pagina blog')

@section('contenido')
    <div class="px-10 py-2">
        <div class="flex items-center justify-center  min-h-screen mx-auto">
            <!--Grid-->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!--Card -->
                @foreach ($filesImagenes as $file)
                    <div class="rounded-xl shadow-lg" style="background-color: white;">
                        <div class="p-5 flex flex-col">
                            <div class="rounded-xl overflow-hidden">
                                <img src="{{ asset($file->url_imagen) }}" alt="Imagen" width="200px" height="300px">
                            </div>
                            <h5 class="text-2xl md:text-3xl font-medium mt-3">Local de comida</h5>
                            <p class="text-slate-500 text-lg mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores
                                et
                                perferendis
                                eaque, exercitationem praesentium nihil.
                            </p>
                            <x-button rounded href="{{ route('crearlocales.index') }}" target="_blank" label="Visitanos"
                                teal />
                            {{-- <a href="{{ route('crearlocales.index') }}"
                                class=" max-w-sm text-center bg-blue-400 text-blue-700 py-2 rounded-lg font-semibold mt-4 hover:bg-blue-300 focus:scale-95 transition-all duration-200 ease-out">
                                Busqueda
                            </a> --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <br>
@stop
