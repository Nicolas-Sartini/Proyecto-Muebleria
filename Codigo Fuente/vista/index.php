<?php

require '../vendor/autoload.php';

$muebleMapper = new MuebleMapper();

$registros = $muebleMapper->listar();

?>

<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listado de Muebles</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    </head>

    <body>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h1> Lista de Muebles</h1>
                </div>
                <div class="card-body">
                    <p>
                        <a title="Agregar mueble" href="mueble.alta.php">
                            <button type="button" class="btn btn-success">
                            <i class="bi bi-plus-circle"></i> Agregar mueble 
                            </button>
                        </a>
                    </p>
                    
                    <br>
                    
                    <table id="tablaAsignaturas" class="table table-striped table-hover">
                        <thead>
                            <tr class="table-info">
                                <th>Id</th>
                                <th>Medida</th>
                                <th>Largo</th>
                                <th>Ancho</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($registros)) {?>
                            <tr>
                                <?php foreach ($registros as $row) { ?>
                                <td><?= $row['id']; ?></td>
                                <td><?= $row['medida']; ?></td>
                                <td><?= $row['largo']; ?></td>
                                <td><?= $row['ancho']; ?></td>
                                <td>
                                    <a title="Modificar" href="mueble.modificar.php?id=<?= $row['id']; ?>">
                                        <button class="btn btn-warning">
                                            <i class="bi bi-pencil-square"></i> Modificar 
                                        </button>
                                    </a>
                                    <a title="Eliminar" href="mueble.eliminar.php?id=<?= $row['id']; ?>">
                                        <button class="btn btn-danger">
                                            <i class="bi bi-trash"></i> Eliminar
                                        </button>
                                    </a>  
                                </td>
                            </tr>
                                <?php } ?>
                            <?php } else { ?>      
                                <tr class="alert alert-warning" role="alert">
                                    <td colspan="5"  align="center">No hay registros </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
    