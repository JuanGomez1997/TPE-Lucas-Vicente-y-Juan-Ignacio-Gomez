<?php
/* Smarty version 4.2.1, created on 2023-10-16 09:17:00
  from 'J:\xammp\htdocs\Web 2\Nueva carpeta (2)\TPE-Lucas-Vicente-y-Juan-Ignacio-Gomez\templates\listaLibros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652ce36c248f95_25324611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b74597bc916947555e7221588284780d8ccf891' => 
    array (
      0 => 'J:\\xammp\\htdocs\\Web 2\\Nueva carpeta (2)\\TPE-Lucas-Vicente-y-Juan-Ignacio-Gomez\\templates\\listaLibros.tpl',
      1 => 1697440618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:formularioLibro.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652ce36c248f95_25324611 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['id_usuario']))) {?>
        <?php $_smarty_tpl->_subTemplateRender("file:formularioLibro.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
    
    <div>
        <h1 class="titulo-genero">Historial de libros de la Biblioteca:</h1>
        <ul class="list-group list-group-numbered">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'libro');
$_smarty_tpl->tpl_vars['libro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->do_else = false;
?>
                <li class="list-group-item"><a href="libro/<?php echo $_smarty_tpl->tpl_vars['libro']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['libro']->value->titulo;?>
</a></li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
