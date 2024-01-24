<?php

//Constantes definidas
define('MYSQL',1);          //Base de datos MySQL
define('SQLITE',2);         //Base de datos SQLITE

define("MENU_PRINCIPAL",1); //Menú principal
define("MENU_VOLVER",2);    //Menú volver a inicio

//Base de datos utilizada pòr la aplicación
$cfg['dbMotor'] = MYSQL;    //Valores posibles: MySQL o SQLite

//Configuración para MySQL
$cfg['mysqlHost'] = 'localhost';        //Nombre del host
$cfg['mysqlUser'] = 'root';             //Nombre del usuario
$cfg['mysqlPassword'] = '';             //Contrasela del usuario
$cfg['mysqlDatabase'] = 'crudpersonas'; //Nombre de la BBDD
$cfg['nombretabla'] = 'personas';       //Nombre de la tabla
