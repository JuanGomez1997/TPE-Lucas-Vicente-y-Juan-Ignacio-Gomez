{include file="header.tpl"}

    {if isset($_SESSION['id_usuario'])}
        <div>
            <form method="POST" action="aniadirLibro">
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

                <button type="submit">Enviar</button>

                {if $error != null}
                    {include file="error.tpl"}
                {/if}

            </form>
        </div>
    {/if}
    <div>
        <h1>Libros:</h1>
        <ul>
            {foreach from=$libros item=$libro}
                <li><a href="libro/{$libro->id}">{$libro->titulo}</a></li>
            {/foreach}
        </ul>
    </div>

{include file="footer.tpl"}