<?php
/**
 * Controles en formularios (2) 11-2 - controles-formularios-2-11-2.php
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
    Cuadrado con bordes redondeados (Resultado).
    Controles en formularios (2). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css" title="Color">
</head>

<body>
  <h1>Cuadrado con bordes redondeados (Resultado)</h1>

<?php
 if (isset($_GET['lado']) && isset($_GET['esquina'])){
  $lado = $_GET['lado'];
  $esquina = $_GET['esquina'];

  echo "<svg width=\"$lado\" height=\"$lado\">";
  echo "<rect width=\"$lado\" height=\"$lado\" rx=\"$esquina\" ry=\"$esquina\" fill=\"blue\"/>";
  echo "</svg>";

 } else {
  
print "  <p class=\"aviso\">Ejercicio incompleto</p>\n";
print " <br> Investigue de svg y rect en html para dibujar";
 }

?>

  <p><a href="controles-formularios-2-11-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Fabricio Montanari</p>
  </footer>
</body>
</html>
