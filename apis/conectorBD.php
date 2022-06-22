<?php

class Conector
{

    private $servername; // servidorDB 1
    private $database;  // nombreDB 4
    private $username; // usuarioDB 2
    private $password; // contraseñaDB 3

    public function __construct()
    {
        $this->servername = "pruebas.seminuevosharo.mx";
        $this->database = "iohanes_seminuevosharo";
        $this->username = "iohanes_seminuevosharo";
        $this->password = "Haro2021$";
    }
    public function ejecutar($query)
    {
        $conn = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
        if (!$conn) {
            die("No se pudo conectar devido a: " . mysqli_connect_error());
        }
        $result = $conn->query($query);
        return $result;
    }
}
