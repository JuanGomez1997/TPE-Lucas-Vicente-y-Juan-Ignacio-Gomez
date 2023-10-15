<select name="genero" id="genero">
    {foreach from=$generos item=$genero}
        <option value={$genero->genero}>{$genero->genero}</option>
    {/foreach}
</select>