<?php



// se asegura de que la ruta del controladr exista, si no existe por defecto sera home
$c = isset($_REQUEST['c']) ? $_REQUEST['c'] : 'Home';
// se asegura de que la ruta del metodo exista, si no existe por defecto sera index
$m = isset($_REQUEST['m']) ? $_REQUEST['m'] : 'index';
$c =  $c . 'Controller'; // concatena controller
//
if(file_exists("controllers/$c.php")){
    require_once ("controllers/$c.php");
    $c = new $c;
    call_user_func(array($c, $m));
}else{
    print "Controller not found";
}