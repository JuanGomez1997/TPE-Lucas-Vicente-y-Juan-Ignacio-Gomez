<?php
/* Smarty version 4.2.1, created on 2023-10-15 14:47:39
  from 'J:\xammp\htdocs\Web 2\TPE-Lucas-Vicente-y-Juan-Ignacio-GomezPublic\TPE-Lucas-Vicente-y-Juan-Ignacio-Gomez\templates\listaLibros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652bdf6b705634_35451725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '140c8b04aeee222fd50155e68b2a6228110a01ec' => 
    array (
      0 => 'J:\\xammp\\htdocs\\Web 2\\TPE-Lucas-Vicente-y-Juan-Ignacio-GomezPublic\\TPE-Lucas-Vicente-y-Juan-Ignacio-Gomez\\templates\\listaLibros.tpl',
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
function content_652bdf6b705634_35451725 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['id_usuario']))) {?>
        <div>
            <form method="POST" action="aniadirLibro">
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

                <button type="submit">Enviar</button>

                <?php if ($_smarty_tpl->tpl_vars['error']->value != null) {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php }?>

            </form>
        </div>
    <?php }?>
    <div>
        <h1>Libros:</h1>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'libro');
$_smarty_tpl->tpl_vars['libro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->do_else = false;
?>
                <li><a href="libro/<?php echo $_smarty_tpl->tpl_vars['libro']->value->id;?>
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
