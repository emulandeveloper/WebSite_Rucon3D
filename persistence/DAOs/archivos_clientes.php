<?php


class archivos_clientes {

    
    private static $instancia;
    private $db;
    
    function __construct() {
        $this->db = Conexion::singleton_conexion();
    }
    
    public static function singletonArchivosClientes(){
        if (!isset(self::$instancia)){
            $miclass = __CLASS__;
            self::$instancia = new $miclass;
        }
        
        return self::$instancia;
        
    }


}
