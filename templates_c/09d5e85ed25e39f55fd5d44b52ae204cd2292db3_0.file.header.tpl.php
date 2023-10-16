<?php
/* Smarty version 4.2.1, created on 2023-10-16 04:10:54
  from 'Z:\XAMPP\htdocs\WebII\TPE\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652c9bae659c45_12370871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09d5e85ed25e39f55fd5d44b52ae204cd2292db3' => 
    array (
      0 => 'Z:\\XAMPP\\htdocs\\WebII\\TPE\\templates\\header.tpl',
      1 => 1697422253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652c9bae659c45_12370871 (Smarty_Internal_Template $_smarty_tpl) {
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
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
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
</body><?php }
}
