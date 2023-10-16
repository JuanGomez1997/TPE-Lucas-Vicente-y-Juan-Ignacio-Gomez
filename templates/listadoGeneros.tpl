{include file="header.tpl"}

{if isset($_SESSION['id_usuario'])} 
    {include file="formularioGenero.tpl"}
{/if}

<div class="col-md-4 mx-auto">
    <h2 class="h2-genero">Generos Disponibles</h2>
    <table>
        <tbody>
            {foreach from=$generos item=$genero}
                <tr>
                    <td><a href='genero/{$genero->id_genero}' type='button' class='btn btn-outline-primary'>Listado del genero {$genero->genero}</a></td>
                    {if isset($_SESSION['id_usuario'])} 
                        <td><a href='eliminarGenero/{$genero->id_genero}' type='button' class='btn btn-outline-danger'>Eliminar genero</a></td>
                    {/if}
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>

{include file="footer.tpl"}