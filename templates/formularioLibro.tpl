<div class="col-md-4 mx-auto">
    {if $opcion eq 'agregar'}
        <form class="row g-3" method="POST" action="agregarLibro">
    {elseif $opcion eq 'editar'}
        <form class="row g-3" method="POST" action="editarLibro/{$id}">
    {/if}
        <div class="col-12">
            <label class="form-label" for="titulo">Titulo:</label>
            <input class="form-control" required type="text" name="titulo" id="titulo">
        </div>
        <div class="col-12">
            <label class="form-label" for="autor">Autor:</label>
            <input class="form-control" required type="text" name="autor" id="autor">
        </div>
        <div class="col-12">
            <label class="form-label" for="sinopsis">Sinópsis:</label>
            <input class="form-control" required type="text" name="sinopsis" id="sinopsis">
        </div>
        <div class="col-12">
            <label class="form-label" for="anio">Año:</label>
            <input class="form-control" required type="number" name="anio" id="anio">
        </div>
        <div class="col-12">
            <select class="form-select negrita" aria-label="Default select example" name="genero" id="genero">
                <option selected>Genero</option>
                {foreach from=$generos item=$genero}
                    <option value={$genero->id_genero} class="negrita">{$genero->genero}</option>
                {/foreach}

            </select>       
        </div>
        <div class="col-12">
            <label class="form-label negrita" for="precio">Precio:</label>
            <input required type="number" name="precio" id="precio">
        </div>
            {if $opcion eq 'editar'}
                <select class="form-select negrita" aria-label="Default select example" name="disponibilidad" id="disponibilidad">
                    <option value=0 class="negrita">No disponible</option>
                    <option value=1 class="negrita">Disponible</option>
                </select>
            {/if}

            {if $opcion eq 'agregar'}
                <button class="btn btn-outline-success negrita" type="submit">Agregar</button>
            {elseif $opcion eq 'editar'}
                <button class="btn btn-outline-warning negrita" type="submit">Editar</button>
            {/if}

            {if $error != null}
                {include file="error.tpl"}
            {/if}

        </form>
</div>