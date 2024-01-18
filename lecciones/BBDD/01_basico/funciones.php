<?php

require_once('config.php');

function conectaDb(){
    global $cfg;

    $dsn_conbbdd = "mysql:host=$cfg[mysqlHost];dbname=$cfg[mysqlDatabase];charset=utf8mb4";
    $dsn_sinbbdd = "mysql:host=$cfg[mysqlHost];charset=utf8mb4";
    $usuario = $cfg['mysqlUser'];
    $password = $cfg['mysqlPassword'];

    try {
        // Conecto a una bbdd concreta
        $tmp = new PDO($dsn_conbbdd, $usuario, $password);
    } catch(PDOException $e){
        // Conecto pero sin escoger la bbdd. Por ejemplo, si voy a crearla
        $tmp = new PDO($dsn_sinbbdd, $usuario, $password);
    } catch(PDOException $e) {
        print "<p>Error: No puede conectarse con la base de datos. {$e->getMessage()}</p>\n";
        // return null;
    } finally {
        $tmp->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
        $tmp->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
        return $tmp;
    }
}