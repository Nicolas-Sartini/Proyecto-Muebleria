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
            <title>Alta Mueble</title>
        </head>
        <body>
            <div>
                <p></p>
                <div>
                    <div>
                        <h3>Alta Mueble</h3>
                    </div>
                    <div>
                        <?php if ($consulta) { ?>
                            <div>
                                Operaci&oacute;n realizada con &eacute;xito. Se ha dado de alta el mueble.
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
