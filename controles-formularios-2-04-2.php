<?php
/**
 * Controles en formularios (2) 4-2 - controles-formularios-2-04-2.php
 *
 * @author Escriba aquí su nombre
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Datos personales 4 (Resultado).
    Controles en formularios (2). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css" title="Color">
</head>

<body>
  <h1>Datos personales 4 (Resultado)</h1>

<?php

if (isset($_GET['correo']) && isset($_GET['correo2']) && isset($_GET['recibir'])) {
  $correo = $_GET['correo'];
  $correo2 = $_GET['correo2'];
  $recibir = $_GET['recibir'];

  if($correo == $correo2){
    echo "<p>Correo: $correo</p>";
    echo "<p>Recibir correos: " . ($recibir == 1 ? "Si" : "No") . "</p>";
  } else {
    echo "<p class=\"aviso\">Las direcciones de correo no coinciden</p>";
  }

} else {
  print "  <p class=\"aviso\">Ejercicio incompleto</p>\n";
}


?>

  <p><a href="controles-formularios-2-04-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Fabricio Montanari</p>
  </footer>
</body>
</html>
