<?php
//conectamos

require_once("../modelo/conectar.php");
$base = Conectar::conexion();

//traemos la variable por l que vamos a filtrar
$Id = $_GET['Identificador'];

//recordar que $base es el objeto con la conexion
$base->query("delete from datos_usuarios where Id='$Id'");

//despues de borrar redirigimos al index
header('Location:../index.php');


?>