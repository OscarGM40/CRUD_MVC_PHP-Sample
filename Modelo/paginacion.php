<?php

require_once("conectar.php");
//no confundir la clase Conectar con el archivo conectar.php
$base = Conectar::conexion();


//----------------PAGINACION------------------//

/*Vamos a crear la paginacion.Debe empezar desde aqui*/
//variable para el numero de registros que queremos ver por pagina
$tamagno_paginas = 3 ;
//variable que indica la pag en la que estamos,por defecto,la 1
$pagina = 1;
//si usamos un vinculo ya $pagina sera el numero que va por la URL
if(isset($_GET['pagina']))
{
  $pagina = $_GET['pagina'];
}
//variable que indica el indice del primer registro de cada pagina para el 1er argumento dinamico de la instruccion limit
$empezar_desde = ($pagina-1) * $tamagno_paginas;

$rs = $base->prepare("select * from datos_usuarios");
$rs->execute(array());

$num_filas = $rs->rowCount();
//el total es el entero inmediato superior del numero de registros entre las paginas que queremos.ejemplo 15 registros 3 por pag salen 5 pag en total 16 registros 3 por pagina salen 6 pag
$total_paginas = ceil($num_filas/ $tamagno_paginas);
$rs->closeCursor();

//-------------------- CODIGO DEL CRUD--------------//

//lo primero seria ejecutar una instruccion SQl que devuelva todos los datos de la tabla.Ademas, deberiamos guardarlos en un array de objetos
//$conexion = $base->query("select * from datos_usuarios");

//creamos el array de objetos
//$registros = $conexion->fetchAll(PDO::FETCH_OBJ);

//mejor en un unico paso.Debemos ponerla un limite para la paginacion
$registros = $base->query("select * from datos_usuarios limit $empezar_desde,$tamagno_paginas")->fetchAll(PDO::FETCH_OBJ);







?>