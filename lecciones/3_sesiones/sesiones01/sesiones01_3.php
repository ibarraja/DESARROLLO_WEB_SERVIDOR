<?php

session_name("sesion_j");
session_start();

print "<h1>Sesiones01_2</h1>";

print "<pre>";
print_r($_SESSION);
print "</pre>";

print "<p><a href='sesiones01_1.php'>➡️ sesiones01_1.php</a></p>";
print "<p><a href='sesiones01_2.php'>➡️ sesiones01_2.php</a></p>";