<div class="contenedor">
    <div class="container text-center">
        {if $opcion eq 'agregar'}
        <form class="row g-3 needs-validation" novalidate method="POST" action="agregarGenero">
        {elseif $opcion eq 'editar'}
        <form class="row g-3 needs-validation" novalidate method="POST" action='editarGenero/{$id}' >
        {/if}
            <div class="col-md-4 mx-auto">
                {if $opcion eq 'agregar'}
                <label for="validationCustom01" class="form-label">Genero nuevo:</label>
                {elseif $opcion eq 'editar'}
                <label for="validationCustom01" class="form-label">Editar Genero:</label>
                {/if}
                <input type="text" class="form-control" id="validationCustom01" value="" name="genero"  required>
            </div>
            <div class="col-12 text-center">
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
            {if $error != null}
                {include file="error.tpl"}
            {/if}
        </form>
    </div>
</div>