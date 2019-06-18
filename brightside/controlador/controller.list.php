<?php

if ($_POST) {

    require_once '../modelo/Productos.php';
    $producto = new Productos();
    $data    = array();

    // Paginación
    $paginacion  = array();
    $pagina      = $_POST['pagina'] ?? 1;
    $termino     = $_POST['termino'] ?? '';
    $paginacion  = $producto->getPagination();
    $filasTotal  = $paginacion['filasTotal'];
    $filasPagina = $paginacion['filasPagina'];

    $empezarDesde = ($pagina - 1) * $filasPagina;

    if ($termino != '') {
        $data = $producto->getSearch($termino);
    } else {
        $data = $producto->getAll($empezarDesde, $filasPagina);
    }
    echo $producto->showTable($data);
} else {
    header('Location: index.php');
}
