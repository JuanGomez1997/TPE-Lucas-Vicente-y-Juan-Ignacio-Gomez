{include file="header.tpl"}

<div>
    <h2>Generos Disponibles</h2>
    <ul class="list-group list-group-flush">
    {foreach from=$generos item=$genero}    
        <li class="list-group-item">
            <span>{$genero->genero}</span>
            <div>
                <a href='librosporgenero/{$genero->id_genero}' type='button' class='btn btn-success'>Ver genero</a>
                <!-- esto solo lo ve cuando se loguea-->
                <a href='editargenero/{$genero->id_genero}' type='button' class='btn btn-warning'>Editar genero</a>
                <a href='eliminargenero/{$genero->id_genero}' type='button' class='btn btn-danger'>Eliminar genero</a>
            </div>
        </li>
    {/foreach}    
    </ul>
</div>

{include file="footer.tpl"}