<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Listado de Información</h1>
    <button onclick="location.href='form.php'">Agregar Nuevo Usuario</button>
    <br><br>
    <?php
    $fichero = fopen("datos.txt", "r");
    while($data = fgetcsv($fichero, 1000, " ")) {
        echo $data[0] . " " . $data[1] . " ";
        echo $data[2] . " " . $data[3] . " ";
        echo $data[4] . " " . $data[5] . " ";
        echo $data[6] . " " . $data[7] . " años" . "<br>";
    }
    fclose($fichero);
    ?>

  </body>
</html>
