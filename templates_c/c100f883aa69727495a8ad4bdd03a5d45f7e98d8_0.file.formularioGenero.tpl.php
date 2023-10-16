<?php
/* Smarty version 4.2.1, created on 2023-10-16 07:30:05
  from 'J:\xammp\htdocs\Web 2\Nueva carpeta (2)\TPE-Lucas-Vicente-y-Juan-Ignacio-Gomez\templates\formularioGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652cca5da902d8_91800920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c100f883aa69727495a8ad4bdd03a5d45f7e98d8' => 
    array (
      0 => 'J:\\xammp\\htdocs\\Web 2\\Nueva carpeta (2)\\TPE-Lucas-Vicente-y-Juan-Ignacio-Gomez\\templates\\formularioGenero.tpl',
      1 => 1697434202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652cca5da902d8_91800920 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="contenedor">
    <div class="container text-center">
        <?php if ($_smarty_tpl->tpl_vars['opcion']->value == 'agregar') {?>
        <form class="row g-3 needs-validation" novalidate method="POST" action="agregarGenero">
        <?php } elseif ($_smarty_tpl->tpl_vars['opcion']->value == 'editar') {?>
        <form class="row g-3 needs-validation" novalidate method="POST" action='editarGenero/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
' >
        <?php }?>
            <div class="col-md-4 mx-auto">
                <?php if ($_smarty_tpl->tpl_vars['opcion']->value == 'agregar') {?>
                <label for="validationCustom01" class="form-label">Genero nuevo:</label>
                <?php } elseif ($_smarty_tpl->tpl_vars['opcion']->value == 'editar') {?>
                <label for="validationCustom01" class="form-label">Editar Genero:</label>
                <?php }?>
                <input type="text" class="form-control" id="validationCustom01" value="" name="genero"  required>
            </div>
            <div class="col-12 text-center">
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </form>
    </div>
</div><?php }
}
