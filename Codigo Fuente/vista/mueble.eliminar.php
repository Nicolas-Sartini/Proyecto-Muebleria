<?php

$id = $_GET["id"];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Eliminar Mueble</title>
    </head>

    <body>
    
        <form action="mueble.eliminar.procesar.php" method="post">
                    <div>
                        <div>
                            <h3>Eliminar Mueble</h3>
                        </div>
                        <div>
                            <p>
                                ATENCI&Oacute;N. Esta operaci&oacute;n no puede deshacerse.
                            </p>
                            <p>¿Est&aacute; seguro que desea eliminar el mueble <b><?= $id; ?></b>?</p>
                        </div>
                        <div>
                            <input type="hidden" name="id" id="id" value="<?= $id; ?>" >
                            <button type="submit">
                                Eliminar
                            </button>
                            <a href="index.php">
                                <button type="button">
                                    Cancelar
                                </button>
                            </a>
                        </div>
                    </div>
        </form>

    </body>
</html>