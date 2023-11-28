<title>
    Gradiente en cuadrado (Formulario).
    Controles en formularios (2). Con formularios.
    Escriba aquí su nombre
    Jose Ricardo Chinchilla Rojas
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css" title="Color">
@@ -40,7 +40,7 @@
  </form>
  <footer>
    <p>Escriba aquí su nombre</p>
    <p>Jose Ricardo Chinchilla Rojas</p>
  </footer>
</body>
</html>
  26 changes: 21 additions & 5 deletions26  
controles-formularios-2-13-2.php
@@ -2,9 +2,13 @@
/**
 * Controles en formularios (2) 13-2 - controles-formularios-2-13-2.php
 *
 * @author Escriba aquí su nombre
 * @author Jose Ricardo Chinchilla Rojas
 *
 */
$tamanoRecibido = (isset($_GET['lado'])) ? $_GET['lado'] : "";
$colorUnoRecibido = (isset($_GET['inicial'])) ? $_GET['inicial'] : "";
$colorDosRecibido = (isset($_GET['final'])) ? $_GET['final'] : "";

?>
<!DOCTYPE html>
<html lang="es">
@@ -24,17 +28,29 @@

<?php

print "  <p class=\"aviso\">Ejercicio incompleto</p>\n";
print "  <p class=\"aviso\">Utilice el código del ejercicio una vez que capture los datos</p>\n";
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
    <p>Escriba aquí su nombre</p>
    <p>Jose Ricardo Chinchilla Rojas</p>
  </footer>
</body>
</html>
