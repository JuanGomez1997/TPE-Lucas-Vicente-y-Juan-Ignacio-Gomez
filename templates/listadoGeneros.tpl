{include file="header.tpl"}

{if isset($_SESSION['id_usuario'])} 
    {include file="formularioGenero.tpl"}
{/if}

<div>
    <h2>Generos Disponibles</h2>
    <table>
        <tbody>
            {foreach from=$generos item=$genero}
                <tr>
                    <td><a href='genero/{$genero->id_genero}' type='button' class='btn btn-success'>{$genero->genero}</a></td>
                    {if isset($_SESSION['id_usuario'])} 
                        <td><a href='eliminarGenero/{$genero->id_genero}' type='button' class='btn btn-danger'>Eliminar genero</a></td>
                    {/if}
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>

{include file="footer.tpl"}