<meta charset="utf-8">
<?php 
    //llamar la conexion
    include("conexion.php");
    
    //hacer el query para traer los datos
    $consulta = mysql_query("select * from posts")or die(mysql_error());
   
   //Indexa el resultado de la BD en un arreglo 
    $registro = mysql_fetch_array($consulta);
    
    //Recorrer el arreglo para obtener la totalidad de los registros
        
        echo "<h1>Mira  nuestros últimos posts</h1>";
        echo "<table border>";
        
        $i = 1;
        do {
            $tituloPost = $registro['Title'];
            echo "<tr><td>$i.</td>
                  <td>$tituloPost</td></tr>";
            $i++;   
        } while ($i<=10 && $registro = mysql_fetch_array($consulta));
        echo "</table>";
        
        /*
        for ($i = 1; $i <= 10; $i++) {
            $tituloPost = $registro['Title'];
            $registro = mysql_fetch_array($consulta);
            echo "<tr><td>$i.</td>
                  <td>$tituloPost</td></tr>";      
        }
        */
        
?>
<br>
<br>
<a href="../blog/insertar.php"> + New Post </a>
