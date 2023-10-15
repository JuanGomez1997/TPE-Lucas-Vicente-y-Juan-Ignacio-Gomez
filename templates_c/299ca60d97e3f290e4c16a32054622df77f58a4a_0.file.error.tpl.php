<?php
/* Smarty version 4.2.1, created on 2023-10-15 06:40:40
  from 'Z:\XAMPP\htdocs\WebII\TPE\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652b6d48936212_80265620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '299ca60d97e3f290e4c16a32054622df77f58a4a' => 
    array (
      0 => 'Z:\\XAMPP\\htdocs\\WebII\\TPE\\templates\\error.tpl',
      1 => 1697344838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652b6d48936212_80265620 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class='alert alert-danger' role='alert'>
    <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
</div> 

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
