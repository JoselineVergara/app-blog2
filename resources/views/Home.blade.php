@extends('layouts.navigationBar')

@section('tittle', 'Pagina blog')

@section('contenido')

    <div class="conatiner" style="padding: 40px; background-color: whitesmoke">
        <div class="row">

            <div class="card-columns"> 
                @foreach ($filesImagenes as $file)
                
                <div class="card">
                    <img class="card-img-top" src="{{asset($file->url_imagen)}}" alt="" width="100px" height="250px">
                    <div class="card-body">
                        <h5 class="card-title">Nombre del local</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                
                <br>
                <br>
                
                @endforeach
            </div>

        </div>
    </div>
@stop
