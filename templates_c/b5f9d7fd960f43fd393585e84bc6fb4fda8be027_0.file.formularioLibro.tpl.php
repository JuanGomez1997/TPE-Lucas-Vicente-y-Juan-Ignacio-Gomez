<?php
/* Smarty version 4.2.1, created on 2023-10-16 08:23:12
  from 'J:\xammp\htdocs\Web 2\Nueva carpeta (2)\TPE-Lucas-Vicente-y-Juan-Ignacio-Gomez\templates\formularioLibro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652cd6d02bac85_77072642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5f9d7fd960f43fd393585e84bc6fb4fda8be027' => 
    array (
      0 => 'J:\\xammp\\htdocs\\Web 2\\Nueva carpeta (2)\\TPE-Lucas-Vicente-y-Juan-Ignacio-Gomez\\templates\\formularioLibro.tpl',
      1 => 1697437380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:error.tpl' => 1,
  ),
),false)) {
function content_652cd6d02bac85_77072642 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-4 mx-auto">
    <?php if ($_smarty_tpl->tpl_vars['opcion']->value == 'agregar') {?>
        <form class="row g-3" method="POST" action="agregarLibro">
    <?php } elseif ($_smarty_tpl->tpl_vars['opcion']->value == 'editar') {?>
        <form class="row g-3" method="POST" action="editarLibro/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <?php }?>
        <div class="col-12">
            <label class="form-label" for="titulo">Titulo:</label>
            <input class="form-control" required type="text" name="titulo" id="titulo">
        </div>
        <div class="col-12">
            <label class="form-label" for="autor">Autor:</label>
            <input class="form-control" required type="text" name="autor" id="autor">
        </div>
        <div class="col-12">
            <label class="form-label" for="sinopsis">Sinópsis:</label>
            <input class="form-control" required type="text" name="sinopsis" id="sinopsis">
        </div>
        <div class="col-12">
            <label class="form-label" for="anio">Año:</label>
            <input class="form-control" required type="number" name="anio" id="anio">
        </div>
        <div class="col-12">
            <select class="form-select negrita" aria-label="Default select example" name="genero" id="genero">
                <option selected>Genero</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
                    <option value=<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
 class="negrita"><?php echo $_smarty_tpl->tpl_vars['genero']->value->genero;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </select>       
        </div>
        <div class="col-12">
            <label class="form-label negrita" for="precio">Precio:</label>
            <input required type="number" name="precio" id="precio">
        </div>
            <?php if ($_smarty_tpl->tpl_vars['opcion']->value == 'editar') {?>
                <select class="form-select negrita" aria-label="Default select example" name="disponibilidad" id="disponibilidad">
                    <option value=0 class="negrita">No disponible</option>
                    <option value=1 class="negrita">Disponible</option>
                </select>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['opcion']->value == 'agregar') {?>
                <button class="btn btn-outline-success negrita" type="submit">Agregar</button>
            <?php } elseif ($_smarty_tpl->tpl_vars['opcion']->value == 'editar') {?>
                <button class="btn btn-outline-warning negrita" type="submit">Editar</button>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['error']->value != null) {?>
                <?php $_smarty_tpl->_subTemplateRender("file:error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>

        </form>
</div><?php }
}
