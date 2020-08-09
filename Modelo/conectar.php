<?php

class Conectar
{

    //el metodo mejor estatico,no hace falta instancia alguna de clase
    public static function conexion()
    {

        try {
            //conectamos a la bd-> new PDO('driver/host/dbname',user,password)
            $conexion = new PDO("mysql:host=localhost; dbname=pruebas", "root", "");
            //habilitamos los warnings 
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            //fijamos el set de caracteres
            $conexion->exec("SET CHARACTER SET utf8");
            //la exception puede ser PDOException tmb
        } catch (Exception $e) {
            die("Error " . $e->getLine() . " " . $e->getMessage());
        }

        //muy importante que nos devuelva la conexion
        return $conexion;
    }
}
?>