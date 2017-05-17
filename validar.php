<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

// Conexion a la db

$conexion=mysqli_connect("localhost", "root", "", "innerdb");
$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'";

$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);
if ($filas>1) {
    header("location:bienvenido.html");
}
else {
    echo "Error en la autentificación";
}

mysqli_free_result($resultado);
mysqli_close($conexion);