<?php 
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $base = "blog-prueba";
    
    mysql_connect($servidor, $usuario, $clave);
    mysql_select_db($base);
    
?>