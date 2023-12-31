<?php
/**
 * Controles en formularios (2) 12-2 - controles-formularios-2-12-2.php
 *
 *  
 * @author Jose Ricardo Chinchilla Rojas
 *
 */
$tamanoRecibido = (isset($_GET['lado'])) ? $_GET['lado'] : "";
$formaRecibido = (isset($_GET['forma'])) ? $_GET['forma'] : "";
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Gradiente en cuadrado (Formulario).
    Controles en formularios (2). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css" title="Color">
</head>

<body>
  <h1>Círculo o cuadrado (Resultado)</h1>
<?php


if($formaRecibido == "cuadrado"){
?>
  <svg
  width="500"
  height="500"
  viewBox="0 0 120 120"
  xmlns="http://www.w3.org/2000/svg">
  <rect x="10" y="10" width="0" height="0" rx="15" ry="15" />
</svg>


<?php
}elseif ($formaRecibido == "circulo"){
?>
  <svg viewBox="0 0 100 100" width="500" height="500" xmlns="http://www.w3.org/2000/svg">
  <circle cx="50" cy="50" r="0" />
</svg>
<?php
}else{
  print"<p>No hay una forma que dibujar</p>";
};

print " <br><br> Aqui esta su ".$formaRecibido;
?>

  <p><a href="controles-formularios-2-12-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Jose Ricardo Chinchilla Rojas</p>
  </footer>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      var rect = document.querySelector('rect');
      rect.setAttribute('width', '<?php echo $tamanoRecibido; ?>');
      rect.setAttribute('height', '<?php echo $tamanoRecibido; ?>');
    });
    document.addEventListener("DOMContentLoaded", function () {
      var circle = document.querySelector('circle');
      circle.setAttribute('r', '<?php echo $tamanoRecibido; ?>');
    });
  </script>
</body>
</html>