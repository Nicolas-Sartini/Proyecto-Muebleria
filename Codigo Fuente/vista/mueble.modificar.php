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
        <title>Modificar Mueble</title>
    </head>
    <body>
        <form action="mueble.modificar.procesar.php" method="post"> 
                    <div>
                        <div>
                            <h3>Modificar Mueble</h3>
                            <p>
                                Complete los campos a continuaci&oacute;n. 
                                Luego, presione el bot&oacute;n <b>Confirmar</b>.<br />
                                Si desea cancelar, presione el bot&oacute;n <b>Cancelar</b>.
                            </p>
                        </div>
                        <div>
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
                        <div>
                            <button type="submit">
                                Confirmar
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