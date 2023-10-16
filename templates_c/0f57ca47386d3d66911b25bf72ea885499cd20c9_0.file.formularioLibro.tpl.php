<?php
/* Smarty version 4.2.1, created on 2023-10-16 04:51:28
  from 'Z:\XAMPP\htdocs\WebII\TPE\templates\formularioLibro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652ca5300d1121_82360583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f57ca47386d3d66911b25bf72ea885499cd20c9' => 
    array (
      0 => 'Z:\\XAMPP\\htdocs\\WebII\\TPE\\templates\\formularioLibro.tpl',
      1 => 1697424686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:error.tpl' => 1,
  ),
),false)) {
function content_652ca5300d1121_82360583 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <?php if ($_smarty_tpl->tpl_vars['opcion']->value == 'agregar') {?>
        <form method="POST" action="agregar">
    <?php } elseif ($_smarty_tpl->tpl_vars['opcion']->value == 'editar') {?>
        <form method="POST" action="editarLibro/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <?php }?>

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

            <?php if ($_smarty_tpl->tpl_vars['opcion']->value == 'editar') {?>
                <select name="disponibilidad" id="disponibilidad">
                    <option value=0>No disponible</option>
                    <option value=1>Disponible</option>
                </select>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['opcion']->value == 'agregar') {?>
                <button type="submit">Agregar</button>
            <?php } elseif ($_smarty_tpl->tpl_vars['opcion']->value == 'editar') {?>
                <button type="submit">Editar</button>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['error']->value != null) {?>
                <?php $_smarty_tpl->_subTemplateRender("file:error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>

        </form>
</div><?php }
}
