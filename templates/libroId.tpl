{include file="header.tpl"}

{if isset($_SESSION['id_usuario'])}
    <div>
        <form method="POST" action="editarLibro/{$id}">
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
            <select name="disponibilidad" id="disponibilidad">
                <option value=0>No disponible</option>
                <option value=1>Disponible</option>
            </select>
            <button type="submit">Editar</button>

            {if $error != null}
                {include file="error.tpl"}
            {/if}

        </form>
    </div>
{/if}

<div>
    <h1>Libros:</h1>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Sinópsis</th>
                <th>Año</th>
                <th>Género</th>
                <th>Precio</th>
                <th>Disponibilidad</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$libros item=$libro}
                <tr>
                    <td>{$libro->titulo}</td>
                    <td>{$libro->autor}</td>
                    <td>{$libro->sinopsis}</td>
                    <td>{$libro->anio}</td>
                    <td>{$libro->genero}</td>
                    <td>{$libro->precio}</td>
                    <td>
                        {if $libro->disponibilidad}
                            <span class="border border-success">Disponible</span>
                        {else}
                            <span class="border border-danger">No Disponible</span>
                        {/if}
                    </td>
                    <td><a href="eliminarLibro/{$libro->id}" type="button">Borrar</a></td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>
{include file="footer.tpl"}