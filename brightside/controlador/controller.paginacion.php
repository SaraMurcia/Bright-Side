<?php

// Para que la paginación funcione, necesito recibir parámetros AJAX
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

    require_once '../modelo/Productos.php';
    $producto    = new Productos();
    $paginacion = array();
    $paginacion = $producto->getPagination();
    echo ceil($paginacion['filasTotal'] / $paginacion['filasPagina']);

} else {

    header('Location: index.php');
}

