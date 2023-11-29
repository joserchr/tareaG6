<?php
/**
 * Controles en formularios (2) 13-2 - controles-formularios-2-13-2.php
 *
 * 
 * @author Jose Ricardo Chinchilla Rojas
 *
 */
$tamanoRecibido = (isset($_GET['lado'])) ? $_GET['lado'] : "";
$colorUnoRecibido = (isset($_GET['inicial'])) ? $_GET['inicial'] : "";
$colorDosRecibido = (isset($_GET['final'])) ? $_GET['final'] : "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gradiente en cuadrado (Formulario).
    Controles en formularios (2). Con formularios.
    Jose Ricardo Chinchilla Rojas</title>
  <link rel="stylesheet" href="styles.css" title="Color">
</head>
<body>
<h1>Gradiente en cuadrado(Resultado)</h1>
  <?php


  if ($tamanoRecibido && $colorUnoRecibido && $colorDosRecibido){
    print " <svg version=\"1.1\" xmlns=\"http://www.w3.0rg/2000/svg\" \n"
    . "  width=\"" . ($tamanoRecibido + 10) . "px\" height=\"" . ($tamanoRecibido + 10) . "px\">\n";
    print"<defs>\n"
    . "<linearGradient id=\"gradiente\">\n"
    . "<stop offset=\"5%\" stop-color=\"$colorUnoRecibido\" />\n"
    . "<stop offset=\"95%\" stop-color=\"$colorDosRecibido\" />\n"
    . "</linearGradient>\n"
    . "</defs>\n";
    print " <rect fill=\"url(#gradiente)\" stroke=\"black\" stroke-width=\"10\" "
    . "x=\"5\" y=\"5\" width=\"$tamanoRecibido\" height=\"$tamanoRecibido\" />\n";
    print " </svg>\n";
    print "\n";

  }


  ?>
  <p><a href="controles-formularios-2-13-1.php">Volver al formulario.</a></p>

  <footer>
  <p>Jose Ricardo Chinchilla Rojas</p>
  </footer>
</body>
</html>
  


