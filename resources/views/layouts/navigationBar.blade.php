<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">

    <!-- Bootstrap CSS
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">-->

    <!-- TailWind CSS -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>

<body>
    <section class="px-8 py-3" style="background-color:  #d8b38f">
        <nav class="flex justify-between items-center">
            <div>
                <a href="{{route("restaurantes.index")}}">
                    <img src="logoTemporal.jpg" alt="Blog imagen" height="16" width="165">
                </a>
            </div>

            <div>
                {{-- {{route('restaurantes.index')}} --}}
                <a href="{{route('restaurantes.create')}}" class="text-xs text-white font-bold uppercase">introduce tu local</a>
                <a href="{{route('login')}}" class="text-xs text-white font-bold uppercase">Login</a>
                <a href="{{route('registro')}}" class="text-xs text-white font-bold uppercase">Registrarse</a>
                {{-- <x-button rounded label="Iniciar sesion" right-icon="login"
                    style="background-color: rgba(165, 42, 42, 0.864); border-color:  rgba(165, 42, 42, 0.864); color: white" />
                <x-button rounded label="Registrarse"
                    style="background-color: rgba(165, 42, 42, 0.864); border-color:  rgba(165, 42, 42, 0.864); color: white" /> --}}
            </div>
        </nav>
    </section>
    @yield('contenido')
</body>

</html>
