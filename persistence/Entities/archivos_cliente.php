<?php


class archivos_clientes {

    private $id;
    private $nombre_modelo;
    private $ruta_archivo;
    
    function __construct($id, $nombre_modelo, $ruta_archivo) {
        $this->id = $id;
        $this->nombre_modelo = $nombre_modelo;
        $this->ruta_archivo = $ruta_archivo;
    }
    
    function getId() {
        return $this->id;
    }

    function getNombre_modelo() {
        return $this->nombre_modelo;
    }

    function getRuta_archivo() {
        return $this->ruta_archivo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre_modelo($nombre_modelo) {
        $this->nombre_modelo = $nombre_modelo;
    }

    function setRuta_archivo($ruta_archivo) {
        $this->ruta_archivo = $ruta_archivo;
    }



}
