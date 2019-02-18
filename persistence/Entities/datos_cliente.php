<?php


class datos_cliente {

    private $id;
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $email;
    private $telefono;
    
    function __construct($id, $nombre, $apellido1, $apellido2, $email, $telefono) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->email = $email;
        $this->telefono = $telefono;
    }
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido1() {
        return $this->apellido1;
    }

    function getApellido2() {
        return $this->apellido2;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido1($apellido1) {
        $this->apellido1 = $apellido1;
    }

    function setApellido2($apellido2) {
        $this->apellido2 = $apellido2;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }



}
