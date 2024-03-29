<?php
/* Smarty version 4.2.1, created on 2023-10-16 09:03:22
  from 'J:\xammp\htdocs\Web 2\Nueva carpeta (2)\TPE-Lucas-Vicente-y-Juan-Ignacio-Gomez\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652ce03a4a64f3_14170035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb8b0a3eb2f1a347729709d775c2278ef769d56d' => 
    array (
      0 => 'J:\\xammp\\htdocs\\Web 2\\Nueva carpeta (2)\\TPE-Lucas-Vicente-y-Juan-Ignacio-Gomez\\templates\\header.tpl',
      1 => 1697439800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652ce03a4a64f3_14170035 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleprueba.css">
    <title>Biblioteca</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light negrita">
            <div class="container-fluid">
                <a class="navbar-brand" href="inicio">Biblioteca</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="generos">Generos</a>
                        </li>
                        <li class="nav-item">
                            <?php if (!(isset($_smarty_tpl->tpl_vars['_SESSION']->value['id_usuario']))) {?>
                                <a class="nav-link active" aria-current="page" href="login">iniciar sesion</a>
                            <?php } else { ?>
                                <a class="nav-link active" aria-current="page" href="logout">cerrar sesion</a>
                            <?php }?>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main><?php }
}
