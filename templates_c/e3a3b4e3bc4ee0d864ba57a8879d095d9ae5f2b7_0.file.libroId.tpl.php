<?php
/* Smarty version 4.2.1, created on 2023-10-16 04:51:31
  from 'Z:\XAMPP\htdocs\WebII\TPE\templates\libroId.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652ca5337e6dd8_99327200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3a3b4e3bc4ee0d864ba57a8879d095d9ae5f2b7' => 
    array (
      0 => 'Z:\\XAMPP\\htdocs\\WebII\\TPE\\templates\\libroId.tpl',
      1 => 1697423937,
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
function content_652ca5337e6dd8_99327200 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['id_usuario']))) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:formularioLibro.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<div>
    <h1>Libros:</h1>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Sinópsis</th>
                <th>Año</th>
                <th>Género</th>
                <th>Precio</th>
                <th>Disponibilidad</th>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->titulo;?>
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
                        <span class="border border-success">Disponible</span>
                    <?php } else { ?>
                        <span class="border border-danger">No Disponible</span>
                    <?php }?>
                    </td>
                    <?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['id_usuario']))) {?> 
                        <td><a href='eliminarLibro/<?php echo $_smarty_tpl->tpl_vars['libro']->value->id;?>
' type="button">Borrar</a></td>
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
