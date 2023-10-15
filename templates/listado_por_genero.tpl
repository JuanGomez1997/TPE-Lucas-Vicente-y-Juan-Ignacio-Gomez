{include file="header.tpl"}

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Autor</th>
      <th scope="col">Sinopsis</th>
      <th scope="col">Anio</th>
      <th scope="col">Genero</th>
      <th scope="col">Precio</th>
      <th scope="col">Disponibilidad</th>
      <th scope="col">*</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$libros item=$libro}
        <tr>
            <td scope="row">{$libro->titulo}</td>
            <td>{$libro->autor}</td>
            <td>{$libro->sinopsis|truncate:25}</td>
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
            <td><a href='libro/{$libro->id}' type='button' class='btn btn-success'>Ver mas</a></td>
        </tr>
    {/foreach}
    
  </tbody>
</table>
{include file="footer.tpl"}