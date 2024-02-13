<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/registrarse.css">
    <script src="../js/Cadastro.js" defer></script>
    <title>Cadastro</title>
</head>
<body>
    <div class="alinhamento">
        <div class="border">
            <form class="row g-3 container" method="POST" action="{{route('validar-Registro')}}">
                @csrf
                <h1>Sign Up</h1>

                <div class="row-md-4">
                <label for="validationServer01" class="form-label"><b>Nombre de Usuario</b> </label>
                <input type="text" class="form-control" id="validationServer01" placeholder="Digite su nombre aqui" required name="name">
                </div>

                <div class="row-md-4">
                    <label for="validationServer01" class="form-label"><b>Correo Electrónico</b> </label>
                    <input type="email" class="form-control" id="validationServer01" placeholder="Digite su correo" required name="email">
                </div>

                <div class="row-md-4">
                    <label for="inputPassword5" class="form-label"><b>Contraseña</b></label>
                    <input type="password" id="inputPassword4" class="form-control" aria-labelledby="passwordHelpBlock" placeholder="Digite su contraseña aqui" name="password">
                    <div id="passwordHelpBlock" class="form-text"> </div>

                </div>

                {{-- <div class="row-md-4">
                    <label for="inputPassword5" class="form-label"><b>Confirmar contraseña</b></label>
                    <input type="password" id="inputPassword5" class="form-control" aria-labelledby="passwordHelpBlock" placeholder="Digite su contraseña nuevamente" >
                    <div id="passwordHelpBlock" class="form-text">
                        Your password must be 8-20 characters long, contain letters and numbers.
                    </div>
                </div> --}}


                <div class="col-12">
                <button class="btn btn-primary center_button" type="submit">Registrar</button>
                <p class="page_login"><b>Ya posee una cuenta?</b> </br><a href="{{route('login')}}">Entre aqui</a></p>
                </div>
            </form>
        </div>
    </div>


</body>
</html>
