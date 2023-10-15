{include file="header.tpl"}

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

        {if $error}
            <div class="error">
                <p>{$error}</p>
            </div>
        {/if}

    </form>
</div>

{include file="footer.tpl"}