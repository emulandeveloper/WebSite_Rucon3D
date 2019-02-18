<?php
class Conexion {

    private static $instance;
    private $dbh;

    private function __construct() {
        try {
            $host = "localhost";
            $database = "rucon3d";
            $usuario = "root";
            $password = "";

            $this->dbh = new PDO("mysql:host=$host;dbname$database", $usuario, $password);
            if ($this->dbh){
                $this->dbh->exec("SET CHARSET utf8");
                $this->dbh->exec("SET NAME 'utf8'");
            }
            
        } catch (Exception $exc) {
            die();
        }
    }
    
    function preparar($sql){
        return $this->dbh->prepare($sql);
    }
    
    public static function singleton_conexion(){
        
        if (!isset(self::$instance)){
            $miclase=__CLASS__;
            self::$instance = new $miclase;
        }
        
        return self::$instance;
    }
    
}
