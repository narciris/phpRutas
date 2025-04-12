<?php
require_once __DIR__ . '/core/Conexion.php';
require_once __DIR__ . '/core/Model.php';
require_once __DIR__ . '/core/Controller.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


// se asegura de que la ruta del controladr exista, si no existe por defecto sera home
$c = isset($_REQUEST['c']) ? $_REQUEST['c'] : 'Home';
http://localhost/
// se asegura de que la ruta del metodo exista, si no existe por defecto sera index
$m = isset($_REQUEST['m']) ? $_REQUEST['m'] : 'index';
$c =  $c . 'Controller'; // concatena controller

$params = [];
foreach ($_REQUEST as $key => $value) {
    if ($key != 'c' && $key != 'm') {
        $params[$key] = $value;
    }
}
if(file_exists("controllers/$c.php")) {
    require_once("controllers/$c.php");
    $c = new $c;
    if(method_exists($c, $m)) {
        if (!empty($params)) {
            call_user_func(array($c, $m), $params);
        } else {
            call_user_func(array($c, $m));

        }
    } else{
        print 'method not found';
    }
} else{
    print 'controller not found';
}
