<?php

require '../vendor/autoload.php';

$id = $_POST["id"];

$muebleMapper = new MuebleMapper();

$error = "";

$consulta = false;

try {
    $consulta = $muebleMapper->baja($id);
} catch (Exception $e) {
    $error = $e->getMessage();
}
?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Eliminar Mueble</title>
            <link rel="stylesheet" href="../css/bootstrap.min.css">
            <script src="../js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        </head>
        <body>
            <div class="container">
                <p></p>
                <div class="card">
                    <div class="card-header">
                        <h3>Eliminación Mueble</h3>
                    </div>
                    <div class="card-body">
                        <?php if ($consulta) { ?>
                            <div class="alert alert-success" role="alert">
                                Operaci&oacute;n realizada con &eacute;xito. Se ha eliminado el mueble.
                            </div>
                        <?php } ?>   
                        <?php if (!$consulta) { ?>
                            <div class="alert alert-danger" role="alert">
                                Ha ocurrido un error. <?= $error; ?>
                            </div>
                        <?php } ?>
                        <hr />
                        <h5 class="card-text">Opciones</h5>
                        <a href="index.php">
                            <button type="button" class="btn btn-primary">
                            <i class="bi bi-reply"></i> Salir
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </body>
    </html>
