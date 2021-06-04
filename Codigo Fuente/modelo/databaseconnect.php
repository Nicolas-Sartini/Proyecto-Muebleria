<?php

//namespace modelo;
require '../vendor/autoload.php';

class DatabaseConnect
{

    protected $db;

    public function __construct()
    {
        $this->db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        if ($this->db->connect_errno) {
            echo "Fallo al conectar la BD " . $this->db->connect_errno;
            return;
        }
        $this->db->set_charset(DB_CHARSET);
    }
}
