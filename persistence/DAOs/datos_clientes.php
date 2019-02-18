<?php

require_once './conexion.php';

class datos_cliente {

    private static $instancia;
    private $db;
    
    function __construct() {
        $this->db = Conexion::singleton_conexion();
    }
    
    public static function singletonDatosClientes(){
        if (!isset(self::$instancia)){
            $miclass = __CLASS__;
            self::$instancia = new $miclass;
        }
        
        return self::$instancia;
        
    }
}