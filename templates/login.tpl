{include file="header.tpl"}
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
        {if $error}
            <div class="alert alert-danger mt-3">
                <p>{$error}</p>
            </div>
        {/if}
    </form>
</div>

{include file="footer.tpl"}