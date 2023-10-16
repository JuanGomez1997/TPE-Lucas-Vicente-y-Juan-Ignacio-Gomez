<?php
/* Smarty version 4.2.1, created on 2023-10-16 08:28:17
  from 'J:\xammp\htdocs\Web 2\Nueva carpeta (2)\TPE-Lucas-Vicente-y-Juan-Ignacio-Gomez\templates\libroId.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652cd801358006_49556887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e58b65f539c36dfaf22688af6012a2c359832666' => 
    array (
      0 => 'J:\\xammp\\htdocs\\Web 2\\Nueva carpeta (2)\\TPE-Lucas-Vicente-y-Juan-Ignacio-Gomez\\templates\\libroId.tpl',
      1 => 1697437695,
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
function content_652cd801358006_49556887 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['id_usuario']))) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:formularioLibro.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<div class="espaciado">
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'libro');
$_smarty_tpl->tpl_vars['libro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->do_else = false;
?>
    <h1 class="titulo-genero">Libro:<?php echo $_smarty_tpl->tpl_vars['libro']->value->titulo;?>
</h1>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Autor</th>
                <th scope="col">Sinópsis</th>
                <th scope="col">Año</th>
                <th scope="col">Género</th>
                <th scope="col">Precio</th>
                <th scope="col">Disponibilidad</th>
                <?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['id_usuario']))) {?> 
                    <th></th>
                <?php }?>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'libro');
$_smarty_tpl->tpl_vars['libro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->do_else = false;
?>
                <tr>
                    <td scope="row"><?php echo $_smarty_tpl->tpl_vars['libro']->value->titulo;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->autor;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->sinopsis;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->anio;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->genero;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->precio;?>
</td>
                    <td>
                    <?php if ($_smarty_tpl->tpl_vars['libro']->value->disponibilidad) {?>
                        <span class="border border-success negrita verde">Disponible</span>
                    <?php } else { ?>
                        <span class="border border-danger negrita rojo">No Disponible</span>
                    <?php }?>
                    </td>
                    <?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['id_usuario']))) {?> 
                        <td><a href='eliminarLibro/<?php echo $_smarty_tpl->tpl_vars['libro']->value->id;?>
' type="button" class="btn btn-outline-danger negrita">Borrar</a></td>
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
