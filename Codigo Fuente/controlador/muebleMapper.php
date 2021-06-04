<?php

require '../vendor/autoload.php';

class MuebleMapper extends DatabaseConnect
{

    protected $resultset;
    protected $query;
    protected $nombreTabla;
    protected $nombreAtributoId;
    protected $db;


    public function __construct()
    {
        $this->nombreTabla = "mueble";
        $this->nombreAtributoId = "id";
        parent::__construct();
    }


    //Funcion para Alta
    public function alta($mueble)
    {
        $medida = $mueble->getMedida();
        $largo = $mueble->getLargo();
        $ancho = $mueble->getAncho();
        $campos = "(medida, largo, ancho)";

        $this->query = "INSERT INTO " . $this->nombreTabla . " $campos VALUES ($medida, $largo, $ancho)";

        $this->resultset = $this->db->query($this->query);

        if ($this->resultset) {
            return true;
            $this->resultset->close();
            $this->db->close();
        } else {
            return false;
            $this->resultset->close();
            $this->db->close();
        }
    }


    //Funcion para Baja
    public function baja($id)
    {
        $this->query = "DELETE FROM " . $this->nombreTabla . " WHERE " . $this->nombreAtributoId . " = $id";

        $this->resultset = $this->db->query($this->query);

        if ($this->resultset) {
            return true;
            $this->resultset->close();
            $this->db->close();
        } else {
            return false;
            $this->resultset->close();
            $this->db->close();
        }
    }



    //Funcion para Modificación
    public function modificar($id, $mueble)
    {
        $largo = $mueble->getLargo();
        $ancho = $mueble->getAncho();
        $medida = $mueble->getMedida();

        $this->query = "UPDATE " . $this->nombreTabla .
        " SET medida = $medida, largo = $largo , ancho = $ancho WHERE " . $this->nombreAtributoId . " = $id";

        $this->resultset = $this->db->query($this->query);

        if ($this->resultset) {
            return true;
            $this->resultset->close();
            $this->db->close();
        } else {
            return false;
            $this->resultset->close();
            $this->db->close();
        }
    }


    //Funcion para listar
    public function listar()
    {
        $this->query = "SELECT * FROM " . $this->nombreTabla;

        $this->resultset = $this->db->query($this->query);

        $resultado = $this->resultset->fetch_all(MYSQLI_ASSOC);

        if ($resultado) {
            return $resultado;
            $this->resultset->close();
            $this->db->close();
        }

        $this->resultset->close();
        $this->db->close();
    }

    //Funcion para buscar segun su ID
    public function buscar($id)
    {
        $campos = "largo, ancho";

        $this->query = "SELECT $campos FROM " . $this->nombreTabla .
        " WHERE " . $this->nombreAtributoId . "=" . $id;

        $this->resultset = $this->db->query($this->query);

        $resultado = $this->resultset->fetch_all(MYSQLI_ASSOC);

        if ($resultado) {
            return $resultado;
            $this->resultset->close();
            $this->db->close();
        }

        $this->resultset->close();
        $this->db->close();
    }
}
