<?php

//-----------     Codigo del insert            -------------------

require_once("../modelo/conectar.php");
$base = Conectar::conexion();


//si hemos pulsado en insertar
if(isset($_POST['create']) && $_POST['Nom'] != ""){

$nom = $_POST['Nom'];
$ape = $_POST['Ape'];
$dir = $_POST['Dir'];

$sql= "insert into datos_usuarios (Nombre,Apellido,Direccion) values (:miNom, :miApe, :miDir)";

$resultado = $base->prepare($sql);

$resultado->execute(array(":miNom"=>$nom,":miApe"=>$ape,":miDir"=>$dir));

header("Location:../index.php");

}else {
    echo '<script language="javascript">';
    echo 'alert("Por favor,inserte un registro.")';    
    echo '</script>';
    header("Refresh:0.5;url=../index.php");
}

?>