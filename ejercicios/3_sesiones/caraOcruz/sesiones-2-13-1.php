<?php


session_name("sesiones-2-13");
session_start();

if (!isset($_SESSION["g"]) || !isset($_SESSION["m"]) || !isset($_SESSION["moneda"])) {
    $_SESSION["moneda"] = 0;
    $_SESSION["g"] = 0;
    $_SESSION["m"] = 0;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Cara o cruz.
    Sesiones (2). Sesiones.
    Ejercicios. PHP. Bartolomé Sintes Marco. www.mclibre.org
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Cara o cruz</h1>

  <p>Haga clic en uno de los botones:</p>

  <form action="sesiones-2-13-2.php">
    <p>
      <input type="submit" name="siguiente" value="Lanzar moneda">
      <input type="submit" name="siguiente" value="Volver a empezar">
    </p>
  </form>

  <table style="text-align: center;">
    <tr>
      <th>Jugador A</th>
      <th>Resultado</th>
      <th>Jugador B</th>
    </tr>
<?php
print "     <tr style=\"font-size: 400%\">\n";
print "         <td>$_SESSION[g]</td>\n";
print "         <td></td>\n";
print "         <td>$_SESSION[m]</td>\n";
print "     </tr>\n";

print "    <tr style=\"font-size: 400%\">\n";

//Emoji gato
if ($_SESSION["g"] > $_SESSION["m"]) {
    print "      <td>&#128568;</td>\n";
} elseif ($_SESSION["g"] < $_SESSION["m"]) {
    print "      <td>&#128576;</td>\n";
} else {
    print "      <td>&#128572;</td>\n";
}

//Emoji moneda
if ($_SESSION["moneda"] == 0) {
    print "      <td></td>\n";
} elseif ($_SESSION["moneda"] == 1) {
    print "      <td><img src=\"img/a.svg\" alt=\"A\" width=\"100\" height=\"100\"></td>\n";
} else
    print "      <td><img src=\"img/b.svg\" alt=\"B\" width=\"100\" height=\"100\"></td>\n";


// Emoji mono
if ($_SESSION["g"] > $_SESSION["m"]) {
    print "      <td>&#128530;</td>\n";
} elseif ($_SESSION["g"] < $_SESSION["m"]) {
    print "      <td>&#128513;</td>\n";
} else {
    print "      <td>&#128578;</td>\n";
}

print "    </tr>\n";
?>
  </table>

  <footer>
    <p class="ultmod">
        Author: @JIM   
    </p>
  </footer>
</body>
</html>
