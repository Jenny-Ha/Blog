<?php 
    //llamar la conexion
    include("conexion.php");
    
    //hacer el query(consulta ) para traer los datos
    $resultado = mysql_query("select * from posts order by id desc limit 10")or die(mysql_error());
   
   //Indexa el resultado de la BD en un arreglo 
    $registro = mysql_fetch_array($resultado);
      
    /*
    //echo $registro['Title']."<br>"."<hr>";
     
     echo "- varDump de Consulta".var_dump($resultado);
     echo "<hr>";
     echo "- varDump de Resgistro".var_dump($registro);
     echo "<hr>";
     echo "- Prueba de indice 1 y key Title <br>" . $registro[1]. "<br>" . $registro["Title"];
     echo "<hr>";
     echo "- Prueba de indice 2 y key content <br>" . $registro[2]. "<br>" . $registro["Content"];
     echo "<hr>";
     echo "- Prueba de indice 3 y key Date <br>" . $registro[3]. "<br>" . $registro["Date"];
     echo "<hr>";
      $tituloPost = $registro['Title'];
     echo "- Prueba de Titulo post con var_dump <br>" . var_dump($tituloPost). "<br>" . $tituloPost[1];
     echo "<hr>";
     echo "- Prueba de Titulo post con var_dump <br>" . var_dump($tituloPost). "<br>" . $tituloPost[0];
     echo "<hr>";
     foreach ($registro as $value) {
         echo "$value <br>";
     }
     echo "<hr>";
     echo "El largo de este array Registro es  " . count($registro) . " Incluye los indices numericos y los key";
     echo "<hr>";
     echo "El largo de este array Consulta es  " . count($resultado) . " Consulta no es un array?";
     echo "<hr>";
     
     //Usando un foreach para un array asociativo
     foreach($registro as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
     }
     echo "<hr>";
     //usando un for para recorrer
        $arrlength = count($registro);

        for($x = 0; $x < $arrlength; $x++) {
            echo $registro[$x];
            echo "<br>";
        }
    
     */

    ####
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ultimos posts</title>
</head>
<body>    
    <h1>Mira  nuestros últimos posts</h1>
    <table border>
    <?php    
    
    //Recorrer el arreglo para obtener la totalidad de los registros      
    $i = 1;
    do {
        $tituloPost = $registro['Title'];
        $id = $registro['ID'];
        echo "<tr><td>$i.</td>
                <td>$tituloPost</td>
                <td>
                <a target='_blank' href='../blog/post.php?id=$id'> Leer más </a>
                </td></tr>";
        $i++;   
    } while ($registro = mysql_fetch_array($resultado));
    
    /* #Uso de FOR para mostrar las entradas*/
        
    mysql_data_seek($resultado, 0);

    //$registro = mysql_fetch_array($resultado);
    
    for($i = 1;  $registro = mysql_fetch_array($resultado); $i++ ){
        $tituloPost = $registro['Title'];
        
        $id = $registro['ID'];
        echo "<table border>";
        echo "<tr><td>$i.</td>
                <td>$tituloPost</td>
                <td><a href='../blog/post.php?id=$id'> Leer más </a></td></tr>";
        echo "</table>";
    }    
    ?>
    </table>
     
    <br>
    <br>
    <a href="../blog/insertar.php" target="_blank"> + New Post </a>

</body>
</html>
