<?php
/**
 * Controles en formularios (2) 1-2 - controles-formularios-2-01-2.php
 *
 * @author Kendal Calderón Marín
 *
 */
$nombreRecibido = (isset($_GET['nombre']))? $_GET['nombre']:"";
$apellidosRecibido = (isset($_GET['apellidos']))? $_GET['apellidos']:"";
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Datos personales 1 (Resultado).
    Controles en formularios (2). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css" title="Color">
</head>

<body>
  <h1>Datos personales 1 (Resultado)</h1>

<?php
echo $nombreRecibido." ".$apellidosRecibido;

?>

  <p><a href="controles-formularios-2-01-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Kendal Calderón</p>
  </footer>
</body>
</html>
