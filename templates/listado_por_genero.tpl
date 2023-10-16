{include file="header.tpl"}

{if isset($_SESSION['id_usuario'])} 
{include file="formularioGenero.tpl"}
{/if}
<div class="col-md-4 mx-auto">
  {foreach from=$generos item=$genero}
    <h1 class="titulo-genero">Lista de libros con la categoría <span class="texto">{$genero->genero}</span></h1>
  {/foreach}
    <ul>
      {foreach from=$libros item=$libro}
        <li><a href='libro/{$libro->id}' type='button'>{$libro->titulo}</a>
      {/foreach}
  </ul>
</div>
{include file="footer.tpl"}