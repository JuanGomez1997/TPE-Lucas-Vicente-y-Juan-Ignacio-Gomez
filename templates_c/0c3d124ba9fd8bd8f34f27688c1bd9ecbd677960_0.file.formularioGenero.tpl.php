<?php
/* Smarty version 4.2.1, created on 2023-10-14 19:35:11
  from 'J:\xammp\htdocs\Web 2\TPE-Lucas-Vicente-y-Juan-Ignacio-GomezPublic\TPE-Lucas-Vicente-y-Juan-Ignacio-Gomez\templates\formularioGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652ad14f50fb80_49677072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c3d124ba9fd8bd8f34f27688c1bd9ecbd677960' => 
    array (
      0 => 'J:\\xammp\\htdocs\\Web 2\\TPE-Lucas-Vicente-y-Juan-Ignacio-GomezPublic\\TPE-Lucas-Vicente-y-Juan-Ignacio-Gomez\\templates\\formularioGenero.tpl',
      1 => 1697304863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652ad14f50fb80_49677072 (Smarty_Internal_Template $_smarty_tpl) {
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
