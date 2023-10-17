<?php
/* Smarty version 4.2.1, created on 2023-10-17 07:26:44
  from 'Z:\XAMPP\htdocs\WebII\TPE\templates\formularioLibro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652e1b1463de00_38920816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f57ca47386d3d66911b25bf72ea885499cd20c9' => 
    array (
      0 => 'Z:\\XAMPP\\htdocs\\WebII\\TPE\\templates\\formularioLibro.tpl',
      1 => 1697520402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:error.tpl' => 1,
  ),
),false)) {
function content_652e1b1463de00_38920816 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="div-form">
    <?php if ($_smarty_tpl->tpl_vars['opcion']->value == 'agregar') {?>
        <form class="form-libros" method="POST" action="agregarLibro">
    <?php } elseif ($_smarty_tpl->tpl_vars['opcion']->value == 'editar') {?>
        <form class="form-libros" method="POST" action="editarLibro/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <?php }?>
            <div class="form-div">
                <div>
                    <label for="titulo">Titulo:</label>
                    <input required type="text" name="titulo" id="titulo">
                </div>
                <div>
                    <label for="autor">Autor:</label>
                    <input required type="text" name="autor" id="autor">
                </div>
            </div>
            <div class="form-div">
                <div class="sinopsis">
                    <label for="sinopsis">Sinópsis:</label>
                    <textarea required type="text" name="sinopsis" id="sinopsis"></textarea>
                </div>
            </div>
            <div class="form-div">
                <div>
                    <label for="anio">Año:</label>
                    <input required type="number" name="anio" id="anio">
                </div>
                <div>
                    <label for="precio">Precio:</label>
                    <input required type="number" name="precio" id="precio">
                </div>
            </div>
            <div class="form-div">
                <div class="select">
                    <p>Género:</p>
                    <select aria-label="Default select example" name="genero" id="genero">
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
                </div>    
                <?php if ($_smarty_tpl->tpl_vars['opcion']->value == 'editar') {?>
                    <div class="select">
                        <p>Disponibilidad:</p>
                        <select aria-label="Default select example" name="disponibilidad" id="disponibilidad">
                            <option value=0>No disponible</option>
                            <option value=1>Disponible</option>
                        </select>
                    </div>
                <?php }?>
            </div>
            
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
