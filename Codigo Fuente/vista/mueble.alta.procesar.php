<?php

require '../vendor/autoload.php';

$largo = $_POST["largo"];
$ancho = $_POST["ancho"];

$mueble = new Mueble($largo, $ancho);

$muebleMapper = new MuebleMapper();

$error = "";

$consulta = false;

try {
    $consulta = $muebleMapper->alta($mueble);
} catch (Exception $e) {
        $error = $e->getMessage();
}
?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Alta Mueble</title>
            <link rel="stylesheet" href="../css/bootstrap.min.css">
            <script src="../js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        </head>
        <body>
            <div class="container">
                <p></p>
                <div class="card">
                    <div class="card-header">
                        <h3>Alta Mueble</h3>
                    </div>
                    <div class="card-body">
                        <?php if ($consulta) { ?>
                            <div class="alert alert-success" role="alert">
                                Operaci&oacute;n realizada con &eacute;xito. Se ha dado de alta el mueble.
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
