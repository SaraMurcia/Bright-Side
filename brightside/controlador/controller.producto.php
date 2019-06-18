<?php

include "vista/assets/partials/helpers.php";
require_once "modelo/Producto.php";
require_once "modelo/Database.php";

class controllerProducto {

  private $product;

  public function __construct() {
    $this->product = new Producto();
  }

  public function crear() {

  	if (isset($_GET["mar"])) {
        $prd = new Producto();

        $prd->setMarca($_GET["mar"]);
        $prd->setNombre($_GET["nom"]);
        $prd->setDescripcion($_GET["des"]);
        $prd->setPrecio($_GET["pre"]);
        $prd->setTipo($_GET["tip"]);
        $prd->setImagen($_GET["ima"]);
        $prd->crearProducto();
        header("Location: productos");

  	} else {
  		require_once "vista/addProducto.php";
    }
  }
  
  public function editar() {

    $id = $_GET["idProducto"]??"";

    if(!empty($id)):
      $prd = Producto::getProducto($_GET["idProducto"]);

      if(isset($_GET["mar"])):
        $prd->setMarca($_GET["mar"]);
        $prd->setNombre($_GET["nom"]);
        $prd->setDescripcion($_GET["des"]);
        $prd->setPrecio($_GET["pre"]);
        $prd->setTipo($_GET["tip"]);
        $prd->setImagen($_GET["ima"]);
        $prd->setUrl($_GET["url"]);
        $prd->editarProducto();
        header("Location: productos");

      else:
        $marca = $prd->getMarca();
        $nombre = $prd->getNombre();
        $descripcion = $prd->getDescripcion();
        $tipo = $prd->getTipo();
        $precio = $prd->getPrecio();
        $imagen = $prd->getImagen();
        $url = $prd->getUrl();

        require_once "vista/editarProducto.php"; 
      endif;
      
      else:
        $this->index();
      endif;
  }

  public function borrar() {

    if (isset($_GET["idProducto"])) {
      Producto::borrarProducto($_GET["idProducto"]);
      $this->controlar(); 
    }
  }

  public function controlar() {

    //Boton de añadir para administrador.
    $addProducto;

    if(!empty($_SESSION) && ($_SESSION['rol'] == 1)) {
        $addProducto = "<div id='botonAdd'><a href='index.php?mod=producto&ope=crear'><img class='iconoEB' src='vista/assets/images/add.png'></a></div>";
    } else {
        $addProducto = '';
    }
    $datos = Producto::getAllProductos();

      require_once "vista/productos.php";
  }

  public function detalles() {
    

    $idProducto = $_GET["idProducto"];
    $tipo = $_GET["tipo"];

    if (!empty($idProducto)) {
    $relacionados = Producto::cogeProductosRelacionados($tipo); // Extraigo los productos que tienen el mismo tipo que estoy pasando por GET
    $producto = Producto::cogeProductoPorId($idProducto);
    $stars = estrellas($producto->getVotos()); // Cojo la función que me va a devolver las imágenes de las estrellas (de los helpers)
    $productos=Producto::getAllProductos();

    //Botones de CRUD para administrador.
    $editarBorrar;
    if(!empty($_SESSION) && ($_SESSION['rol'] == 1)) {
        $editarBorrar = "<div id='botonesProducto'>" .
        "<a href=" . "'index.php?mod=producto&ope=editar&idProducto=" .  $_GET["idProducto"] . "'" . "><img class='iconoEB' src='vista/assets/images/editar.png'></a>" .
        "<a href=" . "'index.php?mod=producto&ope=borrar&idProducto=" . $_GET["idProducto"] . "'" . " onclick='javascript:return asegurar();'><img class='iconoEB' src='vista/assets/images/borrar.png'></a>" .
        "</div>";
    } else {
        $editarBorrar = '';
    }

    if(empty($producto->getColores())) { // Transformo el encode de los colores para trabajar con ellos
      echo "";
    } else {
      $array[] = json_decode($producto->getColores());
    }

    foreach ($productos as $key => $value) { // Controlo que el anterior y el siguiente vuelvan al principio/final
        if($value->getIdProducto()==$producto->getIdProducto()){
          $anterior=$productos[$key-1]->getIdProducto();
          $siguiente=$productos[$key+1]->getIdProducto();
          if ($productos[$key]->getIdProducto() == 8) {
            $anterior = 1045;
            $siguiente = 9;
          }
          if ($productos[$key]->getIdProducto() == 1045) {
            $anterior = 1028;
            $siguiente = 8;
          }
        }
    }
    require_once "vista/producto.php";
    } else {
      echo "nada";
    }
  }


}
?>