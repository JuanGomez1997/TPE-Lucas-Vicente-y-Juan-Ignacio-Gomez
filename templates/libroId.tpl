{include file="header.tpl"}

{if isset($_SESSION['id_usuario'])}
    {include file="formularioLibro.tpl"}
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
                {if isset($_SESSION['id_usuario'])} 
                    <th></th>
                {/if}
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
                    {if isset($_SESSION['id_usuario'])} 
                        <td><a href='eliminarLibro/{$libro->id}' type="button">Borrar</a></td>
                    {/if}
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>
{include file="footer.tpl"}