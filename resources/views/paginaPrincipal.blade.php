@extends('layouts.navigationBar')

@section('tittle', 'Pagina blog')
@section('contenido')

    <header class="text-center max-w-4xl mx-auto mt-5">
        <div class="max-w-xl mx-auto">
            <div class="tw-flex tw-justify-center space-x-4 mt-8">
                <span class="relative inline-flex items-center bg-gray-200 rounded-xl">
                    <select class="appeareance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                        <option value="Categoria" disabled selected>Categoria</option>
                        <option value="Lujo">Lujo</option>
                        <option value="5 estrellas">5 estrellas</option>
                    </select>
                </span>

                <span class="relative inline-flex items-center bg-gray-200  rounded-xl px-3 py-2">
                    <form method="get" action="#">
                        <input type="text" name="search" placeholder="Encuentra tu local"
                            class="bg-transparent placeholder-black font-semibold text-sm">
                    </form>
                </span>
            </div>
        </div>
    </header>
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
                                <img src="{{ asset($file->url_imagen) }}" alt="Imagen"
                                    style="            width: 100%;
                                height: 500px;
                                object-fit: cover;
                                object-position: bottom;
                                max-width: 100%;">
                            </div>
                            <h5 class="text-2xl md:text-3xl font-medium mt-3 text-center">{{ $file->nombre }}</h5>
                            <p class="text-slate-500 text-lg mt-3">{{ $file->descripcion }}</p>
                            <x-button rounded href="/" target="_blank" label="Visitanos" teal />
                            {{-- {{ route('crearlocales.index') }} --}}
                            {{-- esto deberia enviar para crear tu experiencia sobre el local --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <br>
@stop
