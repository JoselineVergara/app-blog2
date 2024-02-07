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
                <a href="">
                    <img src="" alt="Blog imagen" height="16" width="165">
                </a>
            </div>

            <div>
                <a href="/" class="text-xs text-white font-bold uppercase">introduce tu local</a>
                <x-button rounded label="Iniciar sesion" right-icon="login"
                    style="background-color: rgba(165, 42, 42, 0.864); border-color:  rgba(165, 42, 42, 0.864); color: white" />
                <x-button rounded label="Registrarse"
                    style="background-color: rgba(165, 42, 42, 0.864); border-color:  rgba(165, 42, 42, 0.864); color: white" />
            </div>
        </nav>

        <main>

        </main>

        <footer>

        </footer>

    </section>
    <!--
  max-w-4xl mx-auto mt-20 text-center
max-w-xl mx-auto
-->
    <header class="text-center max-w-4xl mx-auto mt-5">
        <div class="max-w-xl mx-auto">
            <div class="tw-flex tw-justify-center space-x-4 mt-8">
                <span class="relative inline-flex items-center bg-gray-200 inline-block rounded-xl">
                    <select class="appeareance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                        <option value="Categoria" disabled selected>Categoria</option>
                        <option value="Lujo">Lujo</option>
                        <option value="5 estrellas">5 estrellas</option>
                    </select>
                </span>

                <span class="relative inline-flex items-center bg-gray-200 inline-block rounded-xl px-3 py-2">
                    <form method="get" action="#">
                        <input type="text" name="search" placeholder="Encuentra tu local"
                            class="bg-transparent placeholder-black font-semibold text-sm">
                    </form>
                </span>
            </div>
        </div>
    </header>

    <br>
    @yield('contenido')
    <!--
  <div class="container">
        <div class="row" style="background-color: lightgray">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                aria-describedby="search-addon" />

        </div>
    </div>
    <br>
    -->
</body>

</html>
