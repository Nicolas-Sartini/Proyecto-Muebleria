<?php

require '../vendor/autoload.php';

$id = $_GET["id"];

$muebleMapper = new MuebleMapper();

$datosMueble = $muebleMapper->buscar($id);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modificar Mueble</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    </head>
    <body>
        <div class="container">
            <form action="mueble.modificar.procesar.php" method="post"> 
                <div class="card">
                    <div  class="card-header">
                        <h3>Modificar Mueble</h3>
                        <p>
                            Complete los campos a continuaci&oacute;n. 
                            Luego, presione el bot&oacute;n <b>Confirmar</b>.<br />
                            Si desea cancelar, presione el bot&oacute;n <b>Cancelar</b>.
                        </p>
                    </div>
                    <div class="card-body">
                        <h4>Caracteristicas</h4>

                        <div class="form-group">
                            <label for="inputLargo">Largo</label>
                            <input type="number" name="largo"  value="<?= $datosMueble[0]['largo']; ?>"
                            class="form-control" id="inputLargo" placeholder="Ingrese el largo del mueble" required="">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="inputAncho">Ancho</label>
                            <input type="number" name="ancho"  value="<?= $datosMueble[0]['ancho']; ?>"
                            class="form-control" id="inputAncho" placeholder="Ingrese el ancho del mueble" required="">
                        </div>
                    </div>
                    <input id="id" name="id" type="hidden" value="<?= $id; ?>">
                    <br>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-check-circle"></i> Confirmar
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