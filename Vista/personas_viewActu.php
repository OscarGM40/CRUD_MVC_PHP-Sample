<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="estilosActu.css">
</head>

<body>
    <h1>Actualizar</h1>
    <p></p>

<?php

//rescatamos los valores desde la URL
$id = $_GET['ID'];
$nom = $_GET['Nombre'];
$ape = $_GET['Apellido'];
$dir = $_GET['Direccion'];

?>


    <form name="formu" action="../Modelo/actualizar.php" method="post">
        <table >
            <tr>
                <td></td>
                <td><label for="id"></label>
                    <input type="hidden" name="id" id="id" value="<?php echo $id?>"></td>
            </tr>

            <tr>
                <td>Nombre</td>
                <td><label for="nom"></label>
                    <input type="text" name="nom" id="nom" value="<?php echo $nom?>"></td>
            </tr>

            <tr>
                <td>Apellido</td>
                <td><label for="ape"></label>
                    <input type="text" name="ape" id="ape" value="<?php echo $ape?>"></td>
            </tr>

            <tr>
                <td>Direccion</td>
                <td><label for="dir"></label>
                    <input type="text" name="dir" id="dir" value="<?php echo $dir?>"></td>
            </tr>
    
            <tr>
               <td colspan="1" id="ide"><input type="submit" value="Actualiza" name="bot_actualizar">
               </td>
               <td colspan="1" id="volver"><a href="../index.php">Volver al Menu</a>
               </td>
            </tr>

        </table>

    </form>
</body>

</html>