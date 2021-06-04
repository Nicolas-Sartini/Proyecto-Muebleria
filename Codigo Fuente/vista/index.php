<?php

require '../vendor/autoload.php';

$muebleMapper = new MuebleMapper();

$registros = $muebleMapper->listar();

if ($registros) {
    ?>

<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Listado de Muebles</title>
    </head>

    <body>
        <h1> Lista de Muebles</h1>
        <div>
        <a title="Agregar mueble" href="mueble.alta.php">
            <button>
                Agregar mueble 
            </button>
        </a>
        </div>
        <br>
        <div>
            <table id="tablaAsignaturas" border="1">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Medida</th>
                                <th>Largo</th>
                                <th>Ancho</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                <?php foreach ($registros as $row) { ?>
                                    <td><?= $row['id']; ?></td>
                                    <td><?= $row['medida']; ?></td>
                                    <td><?= $row['largo']; ?></td>
                                    <td><?= $row['ancho']; ?></td>
                                    <td>
                                        <a title="Modificar" href="mueble.modificar.php?id=<?= $row['id']; ?>">
                                            <button>
                                                Modificar 
                                            </button>
                                        </a>
                                        <a title="Eliminar" href="mueble.eliminar.php?id=<?= $row['id']; ?>">
                                            <button>
                                                Eliminar
                                            </button>
                                        </a>  
                                    </td>
                                </tr>
                                <?php } ?>
                        </tbody>
                    </table>
        </div>
    </body>
</html>
    <?php
} else { ?>
        <a title="Agregar mueble" href="mueble.alta.php">
            <button>
                Agregar mueble 
            </button>
        </a>
    <?php
}
?>