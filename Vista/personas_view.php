<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista del MVC</title>
    <link rel="stylesheet" href="./Vista/estilos.css">
 

</head>

<body>
    <?php
    require("Modelo/paginacion.php");
    ?>

    <h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>
    <form action="Modelo/insertar.php" method="post">
        <table width="65%">

            <tr>
                <td class="primera_fila">Id</td>
                <td class="primera_fila">Nombre</td>
                <td class="primera_fila">Apellido</td>
                <td class="primera_fila">Direccion</td>
                <td class="primera_fila">Borrar</td>
                <td class="primera_fila">Actualizar</td>

            </tr>

            <?php
            //debemos cambiar las filas de la tabla html dinámicamente
            foreach ($matrizPersonas as $persona) : ?>

                <tr>
                    <td class="normal"><?php echo $persona['Id'] ?></td>
                    <td class="normal"><?php echo $persona['Nombre'] ?></td>
                    <td class="normal"><?php echo $persona['Apellido'] ?></td>
                    <td class="normal"><?php echo $persona['Direccion'] ?></td>

                    <td class="bot"><a href="Modelo/borrar.php?Identificador=<?php echo $persona['Id'] ?>"><input type="button" name="del" id="del" value="Borrar"></a></td>
                    <td class="bot"><a href="Vista/personas_viewActu.php?ID=<?php echo $persona['Id'] ?>&Nombre=<?php echo $persona['Nombre'] ?>&Apellido=<?php echo $persona['Apellido'] ?>&Direccion=<?php echo $persona['Direccion'] ?>"><input type="button" name="up" id="up" value="Actualizar"></a></td>
                </tr>

            <?php
            endforeach;
            ?>
            <tr>
                <td style="border: 2px solid black;"></td>
                <td style="border: 2px solid black;"><input type="text" name="Nom" size="10"> </td>
                <td style="border: 2px solid black;"><input type="text" name="Ape" size="10"></td>
                <td style="border: 2px solid black;"><input type="text" name="Dir" size="10"></td>
                <td class="bot"><input type="submit" name="create" id="cr" value="Insertar"></td>
                <td class="primera_fila2">
                    << Insertar</td> </tr>
             </table>
         </form>
         <?php
         //-----------    Diseño HTML&PHP de la paginacion    ----------------------//
         echo "<h6>Se encuentra en la pagina: $pagina <h6>";
         echo "<div class='divisor'>";
         if ($pagina != 1) {
         $anterior = $pagina - 1;
         echo "<a href='?pagina=$anterior'>Anterior</a>" . "&nbsp;";
               }

        for ($i = 1; $i <= $total_paginas; $i++) { //PHP lee las variables si el string del echo va entre comillas dobles-> solo para el metodo echo " '$var' " tmb vale "${var}"

         echo "<a href='?pagina=$i'>$i<a/>  ";
             }
         if ($pagina != $total_paginas) {
         $siguiente = $pagina + 1;
         echo "<a href='?pagina=$siguiente'>Siguiente</a>";
                       }
         echo "</div>";
     ?>
      </body>
 </html>













                