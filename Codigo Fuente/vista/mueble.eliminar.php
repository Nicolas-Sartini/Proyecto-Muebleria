<?php

$id = $_GET["id"];
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
            <form action="mueble.eliminar.procesar.php" method="post">
                <div class="card">
                    <div class="card-header">
                        <h3>Eliminar Mueble</h3>
                    </div>
                    <div class="card-body">
                        <p class="alert alert-warning">
                            ATENCI&Oacute;N. Esta operaci&oacute;n no puede deshacerse.
                        </p>
                        <p>¿Est&aacute; seguro que desea eliminar el mueble <b><?= $id; ?></b>?</p>
                    </div>
                    <div class="card-footer">
                        <input type="hidden" name="id" id="id" value="<?= $id; ?>" >
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-check-circle"></i> Eliminar
                        </button>
                        <a href="index.php">
                            <button type="button" class="btn btn-danger">
                                <i class="bi bi-dash-circle"></i> Cancelar
                            </button>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>