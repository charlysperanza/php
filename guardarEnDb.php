<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_prueba";

$enlace = mysqli_connect($servername, $username,$password, $database);

if ($enlace == false ) {
  die("Fallo la conexion a la base de datos" . $enlace->connect_error);
}
if(isset($_POST["submit"])){
    //echo "todo piola";
}
else{
    echo "pincho";
}
$nombre = $_POST['nombre'];
$mje = $_POST['mensaje'];


$consulta = "INSERT INTO mensajes (fecha, usuario, mensaje) VALUES (CURRENT_DATE(), '".$nombre ."' , '" .$mje . "' )";

//echo $consulta;

$resultado = mysqli_query($enlace,$consulta);
mysqli_close($enlace);
if($resultado){
    echo '<script language="javascript">alert("mensaje enviado");document.location.href="index.html";
          </script>';
}
else{
    echo '<script language="javascript">alert("No se pudo enviar el mensaje");document.location.href="index.html";
          </script>';
}


?> 