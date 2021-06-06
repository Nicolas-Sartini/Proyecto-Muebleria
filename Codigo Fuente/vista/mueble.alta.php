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
            <form action="mueble.alta.procesar.php" method="post"> 
                <div class="card">
                    <div class="card-header">
                        <h3>Crear Mueble</h3>
                        <p class="alert alert-warning">
                            Complete los campos a continuaci&oacute;n. 
                            Luego, presione el bot&oacute;n <b>Confirmar</b>.<br />
                            Si desea cancelar, presione el bot&oacute;n <b>Cancelar</b>.
                        </p>
                    </div>
                    <div class="card-body">
                        <h4>Caracteristicas</h4>
                        <br>
                        <div class="form-group">
                            <label for="inputLargo">Largo</label>
                            <input type="number" step="any" name="largo" class="form-control" id="inputLargo"
                            placeholder="Ingrese el largo del mueble" required="" autofocus>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="inputAncho">Ancho</label>
                            <input type="number" step="any" name="ancho" class="form-control" id="inputAncho"
                            placeholder="Ingrese el ancho del mueble" required="">
                        </div>
                    </div>
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