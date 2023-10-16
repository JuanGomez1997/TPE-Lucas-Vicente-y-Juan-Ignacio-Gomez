<div>
    {if $opcion eq 'agregar'}
        <form method="POST" action="agregar">
    {elseif $opcion eq 'editar'}
        <form method="POST" action="editarLibro/{$id}">
    {/if}

            <label for="titulo">Titulo:</label>
            <input required type="text" name="titulo" id="titulo">

            <label for="autor">Autor:</label>
            <input required type="text" name="autor" id="autor">

            <label for="sinopsis">Sinópsis:</label>
            <input required type="text" name="sinopsis" id="sinopsis">

            <label for="anio">Año:</label>
            <input required type="number" name="anio" id="anio">

            <label for="genero">Género:</label>
            <select name="genero" id="genero">

                {foreach from=$generos item=$genero}
                    <option value={$genero->id_genero}>{$genero->genero}</option>
                {/foreach}

            </select>       

            <label for="precio">Precio:</label>
            <input required type="number" name="precio" id="precio">

            {if $opcion eq 'editar'}
                <select name="disponibilidad" id="disponibilidad">
                    <option value=0>No disponible</option>
                    <option value=1>Disponible</option>
                </select>
            {/if}

            {if $opcion eq 'agregar'}
                <button type="submit">Agregar</button>
            {elseif $opcion eq 'editar'}
                <button type="submit">Editar</button>
            {/if}

            {if $error != null}
                {include file="error.tpl"}
            {/if}

        </form>
</div>