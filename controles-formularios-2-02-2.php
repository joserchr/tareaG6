<?php
/**
 * Controles en formularios (2) 2-2 - controles-formularios-2-02-2.php
 *
 * @author Fabian Zuniga Aguero
 *
 */
$edadRecibido = (isset($_GET['edad']))? $_GET['edad']:"";
$pesoRecibido = (isset($_GET['peso']))? $_GET['peso']:"";
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Datos personales 2 (Resultado).
    Controles en formularios (2). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css" title="Color">
</head>

<body>
  <h1>Datos personales 2 (Resultado)</h1>

<?php

echo $edadRecibido. " " .$pesoRecibido;

?>

  <p><a href="controles-formularios-2-02-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Fabian Zuniga</p>
  </footer>
</body>
</html>
