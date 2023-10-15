<?php
/* Smarty version 4.2.1, created on 2023-10-15 14:47:42
  from 'J:\xammp\htdocs\Web 2\TPE-Lucas-Vicente-y-Juan-Ignacio-GomezPublic\TPE-Lucas-Vicente-y-Juan-Ignacio-Gomez\templates\libroId.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652bdf6ea339f5_12395441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f9800686e3bb5d274c740534c089dc195354caf' => 
    array (
      0 => 'J:\\xammp\\htdocs\\Web 2\\TPE-Lucas-Vicente-y-Juan-Ignacio-GomezPublic\\TPE-Lucas-Vicente-y-Juan-Ignacio-Gomez\\templates\\libroId.tpl',
      1 => 1697373702,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:error.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652bdf6ea339f5_12395441 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['id_usuario']))) {?>
    <div>
        <form method="POST" action="editarLibro/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
            <label for="titulo">Titulo:</label>
            <input required type="text" name="titulo" id="titulo">
            <label for="autor">Autor:</label>
            <input required type="text" name="autor" id="autor">
            <label for="sinopsis">Sinópsis:</label>
            <input required type="text" name="sinopsis" id="sinopsis">
            <label for="anio">Año:</label>
            <input required type="number" name="anio" id="anio">
            <label for="genero">Género:</label>
            <select name="genero" id="genero">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
                    <option value=<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
><?php echo $_smarty_tpl->tpl_vars['genero']->value->genero;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>            
            <label for="precio">Precio:</label>
            <input required type="number" name="precio" id="precio">
            <select name="disponibilidad" id="disponibilidad">
                <option value=0>No disponible</option>
                <option value=1>Disponible</option>
            </select>
            <button type="submit">Editar</button>

            <?php if ($_smarty_tpl->tpl_vars['error']->value != null) {?>
                <?php $_smarty_tpl->_subTemplateRender("file:error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>

        </form>
    </div>
<?php }?>

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
                <th></th>
                <th></th>
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
                    <td><a href="eliminarLibro/<?php echo $_smarty_tpl->tpl_vars['libro']->value->id;?>
" type="button">Borrar</a></td>
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
