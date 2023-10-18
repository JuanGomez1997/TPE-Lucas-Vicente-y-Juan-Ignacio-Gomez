{include file="header.tpl"}

    {if isset($_SESSION['id_usuario'])}
        {include file="formularioLibro.tpl"}
    {/if}
    
    <div>
        <h1 class="titulo">Historial de libros de la Biblioteca:</h1>
        <div class="div-lista">
            <ul class="list-group lista-libros">
                {foreach from=$libros item=$libro}
                    <li class="list-group-item"><a href="libro/{$libro->id}">{$libro->titulo}</a></li>
                {/foreach}
            </ul>
        </div>
    </div>

{include file="footer.tpl"}