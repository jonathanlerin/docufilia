<?php
/*
    Esto es un router, ayuda a mantenerlo limpio, el 
    te ayuda a mantenerlo todo ordenado y controlado
*/ 


$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/vistas/index.php';
        break;

    case '/index.html' :
        require __DIR__ . '/vistas/index.php';
        break;
        
    case '/como-usar-docufilia.php' :
        require __DIR__ . '/vistas/docufilia/como-usar-docufilia.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/vistas/404.php';
        break;
}

?>