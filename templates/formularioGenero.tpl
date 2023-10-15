{include file="header.tpl"}
<div class="contenedor">
    <div class="container text-center">
        <form class="row g-3 needs-validation" novalidate method="post" action="">
            <div class="col-md-4 mx-auto"> <!-- Aplicamos mx-auto para centrar el div horizontalmente -->
                {if $opcion eq 'agregar'}
                    <label for="validationCustom01" class="form-label">Genero nuevo:</label>
                {elseif $opcion eq 'editar'}
                    <label for="validationCustom01" class="form-label">Editar Genero:</label>
                {/if}
                <input type="text" class="form-control" id="validationCustom01" value="" name="nombre" required>
            </div>
            <div class="col-12 text-center"> <!-- Aplicamos text-center para centrar el botón horizontalmente -->
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </form>
    </div>
</div>
{include file="footer.tpl"}