<?php
/* Smarty version 4.2.1, created on 2023-10-15 14:47:40
  from 'J:\xammp\htdocs\Web 2\TPE-Lucas-Vicente-y-Juan-Ignacio-GomezPublic\TPE-Lucas-Vicente-y-Juan-Ignacio-Gomez\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652bdf6c36fba7_21911180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b975059e71406f0bad55a9e53d39c06d7cba684e' => 
    array (
      0 => 'J:\\xammp\\htdocs\\Web 2\\TPE-Lucas-Vicente-y-Juan-Ignacio-GomezPublic\\TPE-Lucas-Vicente-y-Juan-Ignacio-Gomez\\templates\\login.tpl',
      1 => 1697373702,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652bdf6c36fba7_21911180 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="formulario">
    <form class="form-login" method="POST" action="aut">
        <div>
            <label for="nombre_usuario">Nombre de Usuario</label>
            <input type="text" name="nombre_usuario" id="nombre_usuario">
        </div>
        <div>
            <label for="contrasenia">Contraseña</label>
            <input type="password" name="contrasenia" id="contrasenia">
        </div>
       
        <button type="submit" class="boton-login">Iniciar Sesión</button>

        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
            <div class="error">
                <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
            </div>
        <?php }?>

    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
