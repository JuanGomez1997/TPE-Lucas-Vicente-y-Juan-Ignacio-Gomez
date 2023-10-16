{include file="header.tpl"}

{if isset($_SESSION['id_usuario'])} 
{include file="formularioGenero.tpl"}
{/if}
{foreach from=$generos item=$genero}
  <h1>Lista de libros con la categoría {$genero->genero}</h1>
{/foreach}
  <ul>
    {foreach from=$libros item=$libro}
      <li><a href='libro/{$libro->id}' type='button'>{$libro->titulo}</a>
    {/foreach}
  </ul>

{include file="footer.tpl"}