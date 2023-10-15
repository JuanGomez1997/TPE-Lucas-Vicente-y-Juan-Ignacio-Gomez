<?php
/* Smarty version 4.2.1, created on 2023-10-15 05:42:12
  from 'Z:\XAMPP\htdocs\WebII\TPE\templates\listadoGeneros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652b5f947a4181_25414324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9b20874513251c58f83f6072a144988a4d8976c' => 
    array (
      0 => 'Z:\\XAMPP\\htdocs\\WebII\\TPE\\templates\\listadoGeneros.tpl',
      1 => 1697339188,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652b5f947a4181_25414324 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>
    <h2>Generos Disponibles</h2>
    <ul class="list-group list-group-flush">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>    
        <li class="list-group-item">
            <span><?php echo $_smarty_tpl->tpl_vars['genero']->value->genero;?>
</span>
            <div>
                <a href='librosporgenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
' type='button' class='btn btn-success'>Ver genero</a>
                <!-- esto solo lo ve cuando se loguea-->
                <a href='editargenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
' type='button' class='btn btn-warning'>Editar genero</a>
                <a href='eliminargenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
' type='button' class='btn btn-danger'>Eliminar genero</a>
            </div>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
    </ul>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
