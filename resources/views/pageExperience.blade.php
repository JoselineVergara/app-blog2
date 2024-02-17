<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/pageExperience.css">
</head>

<body>
    <section class="about" id="about">
        <div class="row">
            <a href="{{ route('restaurantes.index') }}" class="text-xs text-white font-bold uppercase ">regresar</a>
        </div>
        <h1 class="heading"><span>Sobre el retaurante</span></h1>
        <div class="row">
            <div class="image" style="text-align: center;">
                <img src="../foto.jpg" alt="Imagen del restaurante">
            </div>
            <div class="content" style="text-align: center;">
                <hr>
                <h1>DETALLES</h1>
                <hr>
                <br>
                <br>
                <h3>Rango de Precios</h3>
                <p>{{ $r->rangoprecios }}</p>
                <h3>Horario de atención</h3>
                <p>{{ $r->horarioatencion }}</p>
                <h3>Dirección</h3>
                <p>{{ $r->ubicacion }}</p>
                <h3>Sitio web</h3>
                <p>{{ $r->sitioweb }}</p>
                <h3>Teléfono</h3>
                <p>{{ $r->telefono }}</p>
            </div>
        </div>

        <br>
        <br>
        <br>

        <section id="testimonios">
            <div class="testimonios-head">
                <span>Comentarios</span>
                <h1>Los clientes dijeron:</h1>
                <label for="btn-modal">
                    Escribe tu experiencia aqui
                </label>
                <div class="area-comentar">
                    <div class="grid-comentar">
                        <div class="avatar">
                            <img src="/../usuarios.jpg" alt="img">
                        </div>
                        <form  action="{{route('experiencia.store', $r->id)}}"  method="POST" >
                            @csrf
                            <input type="text" name="usuario">
                            <br>
                            <textarea name="comentario" class="area-comentario" >

                            </textarea>
                            <!--dentro de este div se encuentras los botones para publicar el comentario y subir el archivo-->
                            <div class="botones-comentar">
                                {{-- <div class="boton-subir-archivo">
                                    <label class="boton-file" for="adjuntar">
                                        <i class="far fa-image"></i>
                                        Adjuntar archivo
                                    </label>
                                    <input type="file" name="" value="" placeholder="" id="adjuntar">
                                </div> --}}
                                <br>
                                <!--Aqui esta el boton de enviar el comentario-->
                                <div>
                                    <button class="boton-enviar" type="submit">
                                        <i class="fas fa-paper-plane"></i>
                                        Enviar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="testimonio-box-contenedor">
                <div class="testimonio-box">
                    @foreach ($c as $item)
                        <div class="box-top">
                            <div class="profile">
                                <img src="#" alt="">
                            </div>
                            <div class="name-user">
                                <strong>{{ $item->usuario }}</strong>
                                <span>{{ $item->id }}</span>
                            </div>
                            <div class="reviews">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="omentario-cliente">
                            <p>{{ $item->comentario }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

</body>
