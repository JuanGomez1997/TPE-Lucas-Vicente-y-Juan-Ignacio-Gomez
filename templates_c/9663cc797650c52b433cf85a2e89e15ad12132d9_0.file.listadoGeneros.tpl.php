<?php
/* Smarty version 4.2.1, created on 2023-10-16 07:25:52
  from 'J:\xammp\htdocs\Web 2\Nueva carpeta (2)\TPE-Lucas-Vicente-y-Juan-Ignacio-Gomez\templates\listadoGeneros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652cc960d16da1_38793895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9663cc797650c52b433cf85a2e89e15ad12132d9' => 
    array (
      0 => 'J:\\xammp\\htdocs\\Web 2\\Nueva carpeta (2)\\TPE-Lucas-Vicente-y-Juan-Ignacio-Gomez\\templates\\listadoGeneros.tpl',
      1 => 1697433951,
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
function content_652cc960d16da1_38793895 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['id_usuario']))) {?> 
    <?php $_smarty_tpl->_subTemplateRender("file:formularioGenero.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<div class="col-md-4 mx-auto">
    <h2 class="h2-genero">Generos Disponibles</h2>
    <table>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
                <tr>
                    <td><a href='genero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
' type='button' class='btn btn-outline-primary'>Listado del genero <?php echo $_smarty_tpl->tpl_vars['genero']->value->genero;?>
</a></td>
                    <?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['id_usuario']))) {?> 
                        <td><a href='eliminarGenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
' type='button' class='btn btn-outline-danger'>Eliminar genero</a></td>
                    <?php }?>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
