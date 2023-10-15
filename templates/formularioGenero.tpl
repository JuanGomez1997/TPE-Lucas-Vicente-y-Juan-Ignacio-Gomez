{include file="header.tpl"}
<div class="contenedor">
    <div class="centrado">
        <form class="row g-3 needs-validation" novalidate method="post" action="">
            <div class="col-md-4">
                {if $opcion eq 'agregar'}
                    <label for="validationCustom01" class="form-label">Genero nuevo:</label>
                {elseif $opcion eq 'editar'}
                    <label for="validationCustom01" class="form-label">Editar Genero:</label>
                {/if}
                <input type="text" class="form-control" id="validationCustom01" value="" name="nombre" required>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </form>
    </div>
</div>
{include file="footer.tpl"}