<?php require './templates/header.phtml'; ?>

<div>
    <h2>Generos Disponibles</h2>
    <ul class="list-group list-group-flush">
    <?php foreach ($generos as $genero){ ?>    
        <li class="list-group-item">
            <span><?=$genero->nombre?></span>
            <div>
                <a href='librosporgenero/$genero->id_genero' type='button' class='btn btn-success'>Ver genero</a>
                <a href='editargenero/$genero->id_genero' type='button' class='btn btn-warning'>Editar genero</a>
                <a href='eliminargenero/$genero->id_genero' type='button' class='btn btn-danger'>Eliminar genero</a>
            </div>
        </li>
    <?php }?>    
    </ul>
</div>

<?php require './templates/footer.phtml'; ?>