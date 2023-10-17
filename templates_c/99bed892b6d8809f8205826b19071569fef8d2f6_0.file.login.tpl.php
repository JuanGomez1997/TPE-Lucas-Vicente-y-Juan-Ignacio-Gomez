<?php
/* Smarty version 4.2.1, created on 2023-10-17 05:03:29
  from 'Z:\XAMPP\htdocs\WebII\TPE\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652df981ca2992_83032761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99bed892b6d8809f8205826b19071569fef8d2f6' => 
    array (
      0 => 'Z:\\XAMPP\\htdocs\\WebII\\TPE\\templates\\login.tpl',
      1 => 1697500975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652df981ca2992_83032761 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="col-md-4 mx-auto">
    <form class="form-login" method="POST" action="aut">
        <div class="form-group">
            <label for="nombre_usuario">Nombre de Usuario</label>
            <input type="text" class="form-control" name="nombre_usuario" id="nombre_usuario" required>
        </div>
        
        <div class="form-group">
            <label for="contrasenia">Contraseña</label>
            <input type="password" class="form-control" name="contrasenia" id="contrasenia" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
            <div class="alert alert-danger mt-3">
                <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
            </div>
        <?php }?>
        
    </form>
</div>
</body>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
