<?php

require_once './conexion.php';

class imagenes {

    
    private static $instancia;
    private $db;
    
    function __construct() {
        $this->db = Conexion::singleton_conexion();
    }
    
    public static function singletonImagenes(){
        if (!isset(self::$instancia)){
            $miclass = __CLASS__;
            self::$instancia = new $miclass;
        }
        
        return self::$instancia;
        
    }
    
}