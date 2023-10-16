{include file="header.tpl"}

    {if isset($_SESSION['id_usuario'])}
        {include file="formularioLibro.tpl"}
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