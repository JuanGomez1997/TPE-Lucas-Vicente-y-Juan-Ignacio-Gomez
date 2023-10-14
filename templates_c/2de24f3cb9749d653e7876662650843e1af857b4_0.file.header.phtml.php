<?php
/* Smarty version 4.2.1, created on 2023-10-13 18:39:38
  from 'J:\xammp\htdocs\Web 2\TPE-Lucas-Vicente-y-Juan-Ignacio-GomezPublic\TPE-Lucas-Vicente-y-Juan-Ignacio-Gomez\templates\header.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652972ca0fc4d9_28465421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2de24f3cb9749d653e7876662650843e1af857b4' => 
    array (
      0 => 'J:\\xammp\\htdocs\\Web 2\\TPE-Lucas-Vicente-y-Juan-Ignacio-GomezPublic\\TPE-Lucas-Vicente-y-Juan-Ignacio-Gomez\\templates\\header.phtml',
      1 => 1697215176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652972ca0fc4d9_28465421 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
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
                            <a class="nav-link active" aria-current="page" href="login">iniciar sesion</a>
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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="agregargenero">Agregar Genero</a>
                        </li>      
                    </ul>
                </div>
            </div>
        </nav>
</body>

<?php }
}
