<meta charset="utf-8">
<?php 
    //llamar la conexion
    include("conexion.php");
    
    //hacer el query(consulta ) para traer los datos
    $consulta = mysql_query("select * from posts")or die(mysql_error());
   
   //Indexa el resultado de la BD en un arreglo 
    $registro = mysql_fetch_array($consulta);
    echo $registro['Title']; 
    
    //id es lo que tendras que poner en la barra de direcciones
    //$id = strip_tags($id);
    
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
        
?>
<br>
<br>
<a href="../blog/insertar.php"> + New Post </a>
