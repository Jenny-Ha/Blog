<?php 
   //Establecer la conexion
     include("conexion.php");   
   
   //Obtener id del post
        $id = $_GET['id']; 
        $_id = mysql_real_escape_string($id);
   
   //hacer el query(consulta ) para traer los datos(REsult)
        $consulta = mysql_query("select * from posts where ID = '$_id' ")or die(mysql_error());
    
   //Indexa el resultado de la BD en un arreglo (Fila)
        $registro = mysql_fetch_array($consulta);
   
   /* 
    echo "- varDump de Consulta" . var_dump($consulta);
    echo "<br> <hr>";
    echo "- varDump de Resgistro".var_dump($registro);
    echo "<br> <hr>";
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Post: <?php echo $registro["Title"] ?> </title>
    <style>
        .container {
            width: 80%;
            margin: 30px auto;
        }
        .h1 {
            text-transform: capitalize;
        }
        .content {
            line-height: 1.5;     
        }
        
    </style>
</head>
<body>
    <div class="container">
        <h1> <?php echo $registro["Title"] ?> </h1>
        <hr>
        <div class="content">
            
            Contenido del post: 
            <br>
            <?php echo $registro["Content"] ?>
            <br>
            <br>
            <br>     
            <hr>
            <b>ID del post: <?php echo $_GET["id"] ?> </b> 
            
            <br>
        </div>
    </div>
</body>
</html>