<?php
/* Smarty version 4.2.1, created on 2023-10-15 05:42:10
  from 'Z:\XAMPP\htdocs\WebII\TPE\templates\listado_por_genero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652b5f92675fa7_62550248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f713b27bae8ba4cf690b826feefef106dce9d09' => 
    array (
      0 => 'Z:\\XAMPP\\htdocs\\WebII\\TPE\\templates\\listado_por_genero.tpl',
      1 => 1697337567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652b5f92675fa7_62550248 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'Z:\\XAMPP\\htdocs\\WebII\\TPE\\libs\\smarty-4.2.1\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Autor</th>
      <th scope="col">Sinopsis</th>
      <th scope="col">Anio</th>
      <th scope="col">Genero</th>
      <th scope="col">Precio</th>
      <th scope="col">Disponibilidad</th>
      <th scope="col">*</th>
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
            <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['libro']->value->sinopsis,25);?>
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
            <td><a href='libro/<?php echo $_smarty_tpl->tpl_vars['libro']->value->id;?>
' type='button' class='btn btn-success'>Ver mas</a></td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
  </tbody>
</table>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
