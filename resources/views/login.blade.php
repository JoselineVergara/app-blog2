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
    <link rel="stylesheet" href="css/iniciarSesion.css">
    <script src="login.js" defer></script>
    <title>Login</title>
</head>
<body>
    <div class="aliniamiento">
        <div class="border">
            <form class="row g-3 container" method="POST" action="{{route('inicia-sesion')}}">
                @csrf
                <h1>Login</h1>

                <div class="row-md-4">
                    <label for="input_Nome" id="label_Nome" class="form-label">Correo Electrónico</label>
                    <input type="email" id="input_Nome" class="form-control" placeholder="Digite su correo aqui" aria-label="default input example" name="email">
                </div>

                <div class="row-md-4">
                    <label for="input_Senha" id="label_Senha" class="form-label">Contraseña</label>
                    <input type="password" id="input_Senha" class="form-control" aria-labelledby="passwordHelpBlock" placeholder="Digite su contraseña" name="password">
                    <div id="passwordHelpBlock" class="form-text"></div>
                    <p>Ha olvidado su contraseña? <a href="#">Click aqui</a></p>
                </div>

                <div class="col-12">
                <button class="btn btn-primary center_button" type="submit">Entrar</button>
                <p class="page_login">Todavia no tiene cuenta? </br><a href="{{route('registro')}}">Registrese aqui </a></p>
                </div>
            </form>
        </div>
    </div>


</body>
</html>
