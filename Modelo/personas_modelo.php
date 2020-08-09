<?php

//suele ser habitual acompañar de las palabras model/controller/view en los proyectos reales
class Personas_model {

    //variable para la conexion
    private $db;

    //variable para crear el array de productos
    private $personas;

    //solo por instanciar esta clase conectaremos y crearemos un array
    public function __construct()
    {
        require_once("modelo/conectar.php");
        $this->db = Conectar::conexion();
        $this->personas = array();
    }

    public function get_personas () 
    {
        require("paginacion.php");

        $consulta = $this->db->query("select * from datos_usuarios limit $empezar_desde, $tamagno_paginas");

        //con fetchAll lo metes al array directamente¿?
        //$this->personas = $consulta->fetchAll(PDO::FETCH_ASSOC);

        while($filas = $consulta->fetch(PDO::FETCH_ASSOC)){
            //cada vuelta de bucle el array $personas[]
           //debe llenarse con una fila,es decir con $filas             
            $this->personas[] = $filas;
        }
        //una vez lleno lo devuelves
        return $this->personas;
    }

}






?>