<?php
/* Smarty version 4.2.1, created on 2023-10-14 23:08:25
  from 'Z:\XAMPP\htdocs\WebII\TPE\templates\formularioGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652b03498350c5_22755026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0a3a1be635281d7f31d2c803c9ea07e78428c6f' => 
    array (
      0 => 'Z:\\XAMPP\\htdocs\\WebII\\TPE\\templates\\formularioGenero.tpl',
      1 => 1697313633,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652b03498350c5_22755026 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form class="row g-3 needs-validation" novalidate method="post" action="">
  <div class="col-md-4">
    <?php if ($_smarty_tpl->tpl_vars['opcion']->value == 'agregar') {?>
        <label for="validationCustom01" class="form-label">Genero nuevo:</label>
    <?php } elseif ($_smarty_tpl->tpl_vars['opcion']->value == 'editar') {?>
        <label for="validationCustom01" class="form-label">Editar Genero:</label>
    <?php }?>
    <input type="text" class="form-control" id="validationCustom01" value="" name="nombre" required>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar</button>
  </div>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
