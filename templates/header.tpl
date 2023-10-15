<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleprueba.css">
    <title>Biblioteca</title>
</head>
<body>
    <header><!--poner los nav en color marron tipo  madera,deajrlo para despues-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="container-fluid">
                <a class="navbar-brand" href="inicio">Biblioteca</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            {if !isset($_SESSION['id_usuario'])}
                                <a class="nav-link active" aria-current="page" href="login">iniciar sesion</a>
                            {else }
                                <a class="nav-link active" aria-current="page" href="logout">cerrar sesion</a>
                            {/if}
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="vergeneros">Ver Generos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
        <!--este nav lo usariamos cuando el usuario esta logueado-->
        {* <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="agregargenero">Agregar Genero</a>
                        </li>      
                    </ul>
                </div>
            </div>
<<<<<<< HEAD
        </nav>
    <main>

=======
        </nav> *}
</body>
>>>>>>> 834bec48f8a9fd64b214b559ed314afaf340ecbf