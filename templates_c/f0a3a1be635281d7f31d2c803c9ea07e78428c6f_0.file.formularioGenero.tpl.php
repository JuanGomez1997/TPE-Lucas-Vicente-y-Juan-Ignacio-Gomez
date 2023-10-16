<?php
/* Smarty version 4.2.1, created on 2023-10-16 04:27:28
  from 'Z:\XAMPP\htdocs\WebII\TPE\templates\formularioGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652c9f90197f85_94655123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0a3a1be635281d7f31d2c803c9ea07e78428c6f' => 
    array (
      0 => 'Z:\\XAMPP\\htdocs\\WebII\\TPE\\templates\\formularioGenero.tpl',
      1 => 1697423156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652c9f90197f85_94655123 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="contenedor">
    <div class="container text-center">
        <?php if ($_smarty_tpl->tpl_vars['opcion']->value == 'agregar') {?>
            <form class="row g-3 needs-validation" novalidate method="POST" action="agregarGenero">
        <?php } elseif ($_smarty_tpl->tpl_vars['opcion']->value == 'editar') {?>
            <form class="row g-3 needs-validation" novalidate method="POST" action='editarGenero/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'>
        <?php }?>
            <div class="col-md-4 mx-auto">
                <?php if ($_smarty_tpl->tpl_vars['opcion']->value == 'agregar') {?>
                    <label for="validationCustom01" class="form-label">Genero nuevo:</label>
                <?php } elseif ($_smarty_tpl->tpl_vars['opcion']->value == 'editar') {?>
                    <label for="validationCustom01" class="form-label">Editar Genero:</label>
                <?php }?>
                <input type="text" class="form-control" id="validationCustom01" value="" name="genero" required>
            </div>
            <div class="col-12 text-center">
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </form>
    </div>
</div><?php }
}
