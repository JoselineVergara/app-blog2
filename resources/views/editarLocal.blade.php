@extends('layouts.navigationBar')

@section('contenido')
    <html>

    <head>
        <link href="crearLocal.css" rel="stylesheet">
        <title>RegistroLocal</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&family=Oswald:wght@600&family=Single+Day&display=swap"
            rel="stylesheet">
    </head>
    <div class="container">


        <div class="login-contenedor">
            <div class="titulo-contenedor">
                <h2><b>Actualiza el restaurante</b></h2>
            </div>
            <hr>
            <main>
                <div class="contenedor-registro">
                    <form action="#" method="GET">
                        @csrf
                        <label for="nombre"><b>Nombre:</b></label>
                        <input type="text" id="nombre" placeholder="Nombre del local" required name="nombre"><br>

                        <label for="ubicacion"><b>Ubicacion:</b></label>
                        <input type="text" id="ubicacion" placeholder="Ej: Sur,Guayaquil" required name="ubicacion"><br>

                        <label for="horario"><b>Horario de atencion:</b></label>
                        <input type="text" id="horario" placeholder="Ej: 7:00am-9:00pm" required
                            name="horarioatencion"><br>

                        <label for="comida"><b>Tipo de comida:</b></label>
                        <select id="tipo-comida" name="categoria">
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
                        </select>
                        <br>
                        <button type="submit" class="btn btn-primary"> Subir imagen </button>
                    </form>
                </div>
            </main>
        </div>
    </div>

    </html>
@stop
