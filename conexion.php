<?php
    include '.env';
    class conexion{
        private $servidor;
        private $usuario;
        private $contrasenia;
        private $conexion;
    
        public function __construct(){
            global $DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME;
            $this->servidor = $DB_HOST;
            $this->usuario = $DB_USER;
            $this->contrasenia = $DB_PASSWORD;
            
            try{
                $this->conexion = new PDO("mysql:host=$this->servidor;dbname=$DB_NAME", $this->usuario, $this->contrasenia);
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                die("falla de conexion: " . $e->getMessage());
            }
        }
        
        //Metodo para ejecutar inserciones, borrardos y actualizaciones en la BBDD
        public function ejecutar($sql){
            $this->conexion->exec($sql);

            //Retorna el id que se inserto o modifico
            return $this->conexion->lastInsertId();
        }

        //Metodo para consultar datos en la BBDD
        public function consultar($sql, $params = array()){
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->execute($params);
            return $sentencia->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>