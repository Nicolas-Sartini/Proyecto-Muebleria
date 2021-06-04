<?php

require '../vendor/autoload.php';

$largo = $_POST["largo"];
$ancho = $_POST["ancho"];
$id = $_POST["id"];

$mueble = new Mueble($largo, $ancho);

$muebleMapper = new MuebleMapper();

$error = "";

$consulta = false;

try {
    $consulta = $muebleMapper->modificar($id, $mueble);
} catch (Exception $e) {
        $error = $e->getMessage();
}
?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Modificar Mueble</title>
        </head>
        <body>
            <div>
                <p></p>
                <div>
                    <div>
                        <h3>Modificación Mueble</h3>
                    </div>
                    <div>
                        <?php if ($consulta) { ?>
                            <div>
                                Operaci&oacute;n realizada con &eacute;xito. Se ha modificado el mueble.
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
