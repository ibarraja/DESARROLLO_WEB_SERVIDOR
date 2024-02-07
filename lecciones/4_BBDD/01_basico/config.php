<?php

//Constantes definidas
define('MYSQL',1);          //Base de datos MySQL
define('SQLITE',2);         //Base de datos SQLITE

//Base de datos utilizada pòr la aplicación
$cfg['dbMotor'] = MYSQL;    //Valores posibles: MySQL o SQLite

//Configuración para MySQL
$cfg['mysqlHost'] = 'localhost';    //Nombre del host
$cfg['mysqlUser'] = 'root';         //Nombre del usuario
$cfg['mysqlPassword'] = '';         //Contrasela del usuario
$cfg['mysqlDatabase'] = 'personas'; //Nombre de la BBDD

$cfg['mysqlDatabase_prueba'] = 'personas_prueba'; //Nombre de la BBDD