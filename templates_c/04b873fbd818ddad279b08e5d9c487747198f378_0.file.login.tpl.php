<?php
/* Smarty version 4.2.1, created on 2023-10-16 09:20:02
  from 'J:\xammp\htdocs\Web 2\Nueva carpeta (2)\TPE-Lucas-Vicente-y-Juan-Ignacio-Gomez\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652ce422ef3601_23100016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04b873fbd818ddad279b08e5d9c487747198f378' => 
    array (
      0 => 'J:\\xammp\\htdocs\\Web 2\\Nueva carpeta (2)\\TPE-Lucas-Vicente-y-Juan-Ignacio-Gomez\\templates\\login.tpl',
      1 => 1697440801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652ce422ef3601_23100016 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="fondologin col-md-4 mx-auto">
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
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
