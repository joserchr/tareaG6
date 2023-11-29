<?php
/**
 * Controles en formularios (2) 3-2 - controles-formularios-2-03-2.php
 *
 * @author Fabian Zuniga Aguero
 *
 */
$sexoRecibido = (isset($_GET['genero']))? $_GET['genero']:"";
$cineRecibido = (isset($_GET['cine']))? $_GET['cine']:"";
$literaturaRecibido = (isset($_GET['literatura']))? $_GET['literatura']:"";
$musicaRecibido = (isset($_GET['musica']))? $_GET['musica']:"";
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Datos personales 3 (Resultado).
    Controles en formularios (2). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css" title="Color">
</head>

<body>
  <h1>Datos personales 3 (Resultado)</h1>

<?php

echo "Sexo: " . $sexoRecibido . "<br>";
echo "Cine: " . ($cineRecibido ? "Sí" : "No") . "<br>";
echo "Literatura: " . ($literaturaRecibido ? "Sí" : "No") . "<br>";
echo "Música: " . ($musicaRecibido ? "Sí" : "No") . "<br>";

?>

  <p><a href="controles-formularios-2-03-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Fabian Zuniga Aguero</p>
  </footer>
</body>
</html>
