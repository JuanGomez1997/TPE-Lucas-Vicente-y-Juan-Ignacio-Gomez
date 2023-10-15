<?php
/* Smarty version 4.2.1, created on 2023-10-15 05:24:54
  from 'Z:\XAMPP\htdocs\WebII\TPE\templates\seleccionGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652b5b862801d8_69157140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abae65602389ffa2af335e72bec55a7ffd62b155' => 
    array (
      0 => 'Z:\\XAMPP\\htdocs\\WebII\\TPE\\templates\\seleccionGenero.tpl',
      1 => 1697340291,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652b5b862801d8_69157140 (Smarty_Internal_Template $_smarty_tpl) {
?><select name="genero" id="genero">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
        <option value=<?php echo $_smarty_tpl->tpl_vars['libro']->value->genero;?>
><?php echo $_smarty_tpl->tpl_vars['genero']->value->genero;?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select><?php }
}
