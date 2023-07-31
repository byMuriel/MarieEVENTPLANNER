<?php
    include 'conexion.php'; 
    $objConexion = new conexion(); //aqui se instancia, se crea la conexion con el constructor de conexion.php (try)
    $eventos = $objConexion->consultar("SELECT * FROM `evento` "); //aqui se ejecuta con unmmetodo consultar, definido en conexion.php    
?>