<?php

/*Como el controlador va a hacer de intermediario entre la vista y el modelo
vamos a importar los dos con rutas.Ojo las rutas deben ser tratadas como si estuvieramos en el index.php, pues es desde aqui desde donde vamos a arrancar el proyecto*/

require_once('./Modelo/personas_modelo.php');

/*Debemos instanciar la clase productos_model,solo por hacerlo conectaremos a la BBDD,pues el constructor llama a conectar.php a su vez.Ademas tenemos un metodo get_produtos con un select ALL */

$persona = new Personas_model();

/*El metodo devuelve un array,asi que necesitamos una variable*/
$matrizPersonas = $persona->get_personas();


require_once('./Vista/personas_view.php');


?>