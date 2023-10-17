{include file="header.tpl"}

{if isset($_SESSION['id_usuario'])}
    {include file="formularioLibro.tpl"}
{/if}

<div class="tabla-libros">

    <table>
        <thead class="thead-light">
            <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Autor</th>
                <th scope="col">Sinópsis</th>
                <th scope="col">Año</th>
                <th scope="col">Género</th>
                <th scope="col">Precio</th>
                <th scope="col">Disponibilidad</th>
                {if isset($_SESSION['id_usuario'])} 
                    <th></th>
                {/if}
            </tr>
        </thead>
        <tbody>
            {foreach from=$libros item=$libro}
                <tr>
                    <td scope="row">{$libro->titulo}</td>
                    <td>{$libro->autor}</td>
                    <td>{$libro->sinopsis}</td>
                    <td>{$libro->anio}</td>
                    <td><a href='genero/{$libro->id_genero}'>{$libro->genero}</td>
                    <td>${$libro->precio}</td>
                    <td>
                    {if $libro->disponibilidad}
                        <span class="border border-success negrita verde">Disponible</span>
                    {else}
                        <span class="border border-danger negrita rojo">No Disponible</span>
                    {/if}
                    </td>
                    {if isset($_SESSION['id_usuario'])} 
                        <td><a href='eliminarLibro/{$libro->id}' type="button" class="btn btn-outline-danger negrita">Borrar</a></td>
                    {/if}
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>

{include file="footer.tpl"}