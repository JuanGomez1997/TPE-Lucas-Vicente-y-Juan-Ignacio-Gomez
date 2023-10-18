{include file="header.tpl"}

{if isset($_SESSION['id_usuario'])}
    {include file="formularioLibro.tpl"}
{/if}

<div class="tabla-libros">

    <table>
        <thead class="thead-light">
            <tr>
                <th scope="col">
                    <p class="borde">Titulo</p>
                    <p>Autor</p>    
                </th>
                <th scope="col">Sinópsis</th>
                <th scope="col">
                    <p class="borde">Año</p>
                    <p>Género</p>
                </th>
                <th scope="col">
                    <p class="borde">Precio</p>
                    <p>Disponibilidad</p>
                </th>
                {if isset($_SESSION['id_usuario'])} 
                    <th></th>
                {/if}
            </tr>
        </thead>
        <tbody>
            {foreach from=$libros item=$libro}
                <tr>
                    <td scope="row">
                        <p class="borde">{$libro->titulo}</p>
                        <p>{$libro->autor}</p>
                    </td>
                    <td><p>{$libro->sinopsis}</p></td>
                    <td>
                        <p class="borde">{$libro->anio}</p>
                        <p><a class="genero" href='genero/{$libro->id_genero}'>{$libro->genero}</p>
                    </td>
                    <td>
                        <p class="borde">${$libro->precio}</p>
                        <p>
                    {if $libro->disponibilidad}
                        <span class="border border-success negrita verde">Disponible</span>
                    {else}
                        <span class="border border-danger negrita rojo">No Disponible</span>
                    {/if}
                        </p>
                    </td>
                    {if isset($_SESSION['id_usuario'])} 
                        <td><a href='eliminarLibro/{$libro->id}' type="button" class="btn btn-outline-danger negrita borrar">Borrar</a></td>
                    {/if}
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>

{include file="footer.tpl"}