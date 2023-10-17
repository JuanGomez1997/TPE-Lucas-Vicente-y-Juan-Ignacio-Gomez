<div class="div-form">
    {if $opcion eq 'agregar'}
        <form class="form-libros" method="POST" action="agregarLibro">
    {elseif $opcion eq 'editar'}
        <form class="form-libros" method="POST" action="editarLibro/{$id}">
    {/if}
            <div class="form-div">
                <div>
                    <label for="titulo">Titulo:</label>
                    <input required type="text" name="titulo" id="titulo">
                </div>
                <div>
                    <label for="autor">Autor:</label>
                    <input required type="text" name="autor" id="autor">
                </div>
            </div>
            <div class="form-div">
                <div class="sinopsis">
                    <label for="sinopsis">Sinópsis:</label>
                    <textarea required type="text" name="sinopsis" id="sinopsis"></textarea>
                </div>
            </div>
            <div class="form-div">
                <div>
                    <label for="anio">Año:</label>
                    <input required type="number" name="anio" id="anio">
                </div>
                <div>
                    <label for="precio">Precio:</label>
                    <input required type="number" name="precio" id="precio">
                </div>
            </div>
            <div class="form-div">
                <div class="select">
                    <p>Género:</p>
                    <select aria-label="Default select example" name="genero" id="genero">
                        {foreach from=$generos item=$genero}
                            <option value={$genero->id_genero}>{$genero->genero}</option>
                        {/foreach}
                    </select>
                </div>    
                {if $opcion eq 'editar'}
                    <div class="select">
                        <p>Disponibilidad:</p>
                        <select aria-label="Default select example" name="disponibilidad" id="disponibilidad">
                            <option value=0>No disponible</option>
                            <option value=1>Disponible</option>
                        </select>
                    </div>
                {/if}
            </div>
            
                {if $opcion eq 'agregar'}
                    <button type="submit">Agregar</button>
                {elseif $opcion eq 'editar'}
                    <button type="submit">Editar</button>
                {/if}

                {if $error != null}
                    {include file="error.tpl"}
                {/if}

        </form>
</div>