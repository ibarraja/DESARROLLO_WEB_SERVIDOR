<?php

require_once "funciones.php";

$pdo = conectaDb();

$consulta = "SELECT * FROM personas";

$resultado = $pdo