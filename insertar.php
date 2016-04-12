<meta charset="utf-8">
<?php 
    //llamar la conexion
    include("conexion.php");
?>
    <!-- Construir un formulario -->
    
    <h1>Insertar un nuevo Post</h1>
    <form action="" method="post">
        <p>
            <label for="titulo">Titulo</label> <br>
            <input type="text" name="titulo" required>
        </p>
        <p>
            <label for="contenido">Contenido</label> <br>
            <textarea name="contenido" id="" cols="30" rows="10" required></textarea>
        </p>
        <p>
            <input type="submit" name="enviar" value="Enviar Post">
        </p>
    </form>
    <?php 
        if($_POST) { //si se ha presionado el enviar
            $title=$_POST['titulo'];
            $content=$_POST['contenido'];
            
            //insercion con el sql
            mysql_query("insert into posts(Title, Content)values('$title', '$content')")or die(mysql_error());
            echo "<h2> ¡Enviado! </h2>";
        }
    ?>