<?php

//namespace modelo;

class Mueble
{

    protected $id;
    protected $medida;
    protected $largo;
    protected $ancho;


    public function __construct($largo, $ancho)
    {
        $this->largo = $largo;
        $this->ancho = $ancho;
        $this->medida = $largo * $ancho;
    }


    //Setters y Getters

    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getMedida()
    {
        return $this->medida;
    }


    public function setMedida($largo, $ancho)
    {
        $this->medida = $largo * $ancho;
    }


    public function getLargo()
    {
        return $this->largo;
    }


    public function setLargo($largo)
    {
        $this->largo = $largo;
    }


    public function getAncho()
    {
        return $this->ancho;
    }


    public function setAncho($ancho)
    {
        $this->ancho = $ancho;
    }
}
