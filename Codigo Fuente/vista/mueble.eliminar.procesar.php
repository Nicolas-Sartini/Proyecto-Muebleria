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
            <title>Eliminar Mueble</title>
        </head>
        <body>
            <div>
                <p></p>
                <div>
                    <div>
                        <h3>Eliminación Mueble</h3>
                    </div>
                    <div>
                        <?php if ($consulta) { ?>
                            <div>
                                Operaci&oacute;n realizada con &eacute;xito. Se ha eliminado el mueble.
                            </div>
                        <?php } ?>   
                        <?php if (!$consulta) { ?>
                            <div>
                                Ha ocurrido un error. <?= $error; ?>
                            </div>
                        <?php } ?>
                        <hr />
                        <h5>Opciones</h5>
                        <a href="index.php">
                            <button type="button">
                                Salir
                            </button>
                        </a>
                    </div>
                </div>
            </div>
    </body>
</html>
