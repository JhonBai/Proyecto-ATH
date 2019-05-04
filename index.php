<?php

if(!isset($_REQUEST['c'])){
    $controller='bienvenido';
    require_once('controllers/'.$controller.'Controller.php');
    $controller=$controller.'Controller';
    $controller= new $controller();
    $controller->bienvenido();
}else{
    $controller=$_REQUEST['c'];
    require_once('controllers/'.$controller.'Controller.php');
    $controller=$controller.'Controller';
    $controller= new $controller();
    $metodo=isset($_REQUEST['m']) ? $_REQUEST['m'] : 'bienvenido';
    call_user_func(array($controller,$metodo));
}
?>