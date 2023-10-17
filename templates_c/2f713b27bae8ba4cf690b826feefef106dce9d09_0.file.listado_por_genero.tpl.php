<?php
/* Smarty version 4.2.1, created on 2023-10-17 01:22:53
  from 'Z:\XAMPP\htdocs\WebII\TPE\templates\listado_por_genero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652dc5cdde4404_60449592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f713b27bae8ba4cf690b826feefef106dce9d09' => 
    array (
      0 => 'Z:\\XAMPP\\htdocs\\WebII\\TPE\\templates\\listado_por_genero.tpl',
      1 => 1697498507,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:formularioGenero.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652dc5cdde4404_60449592 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['id_usuario']))) {?> 
<?php $_smarty_tpl->_subTemplateRender("file:formularioGenero.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
<div class="col-md-4 mx-auto">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
    <h1 class="titulo-genero">Lista de libros con la categoría <span class="texto"><?php echo $_smarty_tpl->tpl_vars['genero']->value->genero;?>
</span></h1>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'libro');
$_smarty_tpl->tpl_vars['libro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->do_else = false;
?>
        <li><a href='libro/<?php echo $_smarty_tpl->tpl_vars['libro']->value->id;?>
' type='button'><?php echo $_smarty_tpl->tpl_vars['libro']->value->titulo;?>
</a>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
