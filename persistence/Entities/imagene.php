<?php


class imagenes {

    private $id;
    private $modelo;
    private $tipo;
    private $ruta;
    
    function __construct($id, $modelo, $tipo, $ruta) {
        $this->id = $id;
        $this->modelo = $modelo;
        $this->tipo = $tipo;
        $this->ruta = $ruta;
    }
    
    function getId() {
        return $this->id;
    }

    function getModelo() {
        return $this->modelo;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getRuta() {
        return $this->ruta;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setRuta($ruta) {
        $this->ruta = $ruta;
    }



    
    
}
