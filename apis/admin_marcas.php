<?php

include_once('conectorBD.php');

class Marca
{
    public $id;
    public $nombre;
    public $imagen;
}

class AdminMarcas extends Conector
{

    public function getMarcas($marcas)
    {
        $sql = 'SELECT * FROM dato_vehiculo WHERE marca = "' . $marcas . '";';
        $result = $this->ejecutar($sql);
        $arregloMarcas = array();
        while ($row = $result->fetch_assoc()) {
            $marca = new Marca();
            $marca->id = $row['id'];
            $marca->nombre = $row['titulo'];
            $marca->imagen = $row['foto'];
            $arregloMarcas[] = $marca;
        }
        return $arregloMarcas;
    }
}
