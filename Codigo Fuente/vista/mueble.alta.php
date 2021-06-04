<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alta Mueble</title>
    </head>

    <body>
    
    <form action="mueble.alta.procesar.php" method="post"> 
                <div>
                    <div>
                        <h3>Crear Mueble</h3>
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
                            <input type="number" step="any" name="largo" class="form-control" id="inputLargo"
                            placeholder="Ingrese el largo del mueble" required="">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="inputAncho">Ancho</label>
                            <input type="number" step="any" name="ancho" class="form-control" id="inputAncho"
                            placeholder="Ingrese el ancho del mueble" required="">
                        </div>
                    </div>
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