<?php
//traemos la conexion
require_once("../modelo/conectar.php");
$base = Conectar::conexion();

//el boton submit se llamam 'bot' si no se ha pulsado(!isset) debemos rescatar los GEt de la otra pag index

if(isset($_POST['bot_actualizar'])){
//traemos todo por POST a traves de los name
//ojo,no son las mismas variables que las del GET,solo se llaman igual
$id = $_POST["id"];
$nom = $_POST["nom"];
$ape = $_POST["ape"];
$dir = $_POST["dir"];


//instruccion con marcadores
$sql = "update datos_usuarios set Nombre= :miNom, Apellido= :miApe, Direccion= :miDir where Id= :miId";

$resultado = $base->prepare($sql);

$resultado->execute(array(":miId"=>$id,":miNom"=>$nom, ":miApe"=>$ape,":miDir"=>$dir));

header("Location:../index.php");
}
?>


    