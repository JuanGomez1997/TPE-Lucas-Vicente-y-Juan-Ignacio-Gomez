{include file="header.tpl"}

    {if isset($_SESSION['id_usuario'])}
        {include file="formularioLibro.tpl"}
    {/if}
    
    <div>
        <h1 class="titulo-genero">Historial de libros de la Biblioteca:</h1>
        <ul class="list-group lista-libros">
            {foreach from=$libros item=$libro}
                <li class="list-group-item"><a href="libro/{$libro->id}">{$libro->titulo}</a></li>
            {/foreach}
        </ul>
    </div>

{include file="footer.tpl"}