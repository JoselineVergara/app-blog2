<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <!-- TailWind CSS -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>

<body>
    <section class="px-8 py-3" style="background-color:  #d8b38f">
        <nav class="flex justify-between items-center">
            <div>
                <a href="{{route("restaurantes.index")}}">
                    <img src="/../logoTemporal.jpg" alt="Blog imagen" height="16" width="165">
                </a>
            </div>

            <div>
                <a href="{{route('restaurantes.create')}}" class="text-xs text-white font-bold uppercase ">introduce tu local</a>
                <x-button rounded label="Iniciar sesion" right-icon="login" href="{{route('login')}}"
                    style="background-color: rgba(165, 42, 42, 0.864); border-color:  rgba(165, 42, 42, 0.864); color: white" />
                <x-button rounded label="Registrarse" href="{{route('registro')}}"
                    style="background-color: rgba(165, 42, 42, 0.864); border-color:  rgba(165, 42, 42, 0.864); color: white" />
            </div>
        </nav>
    </section>
    @yield('contenido')
</body>
</html>
