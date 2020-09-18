
<html>
    <head>
        <title>
            Mensajeate bro
        </title>
    </head>
<body>
<h1>
    Mensajes recibidos
</h1>
<hr/>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db_prueba";
    
    $enlace = mysqli_connect($servername, $username,$password, $database);
    
    if ($enlace == false ) {
      die("Fallo la conexion a la base de datos" . $enlace->connect_error);
    }
        $consulta = "SELECT * FROM mensajes";
        $resultado = mysqli_query($enlace,$consulta) or die(mysqli_error());
        while($fila = mysqli_fetch_array($resultado)){
            echo $fila['usuario']. "(" . $fila['fecha'] . ") - " . $fila['mensaje'];
            echo "<br/>";
        }
    ?>
    <hr>
    <a href ="index.html"> Volver al home </a>
</body>
</html>