<?php

  require_once "Database.php";

  class Producto {

  	private $idProducto;
  	private $nombre;
    private $marca;
    private $precio;
    private $votos;
    private $tipo;
    private $colores;
    private $descripcion;
    private $imagen;
    private $fechaCreado;
    private $fechaActualizado;
    private $url;

  	public function __construct() {
  	}

    public function setIdProducto($idProducto)          { $this->idProducto = $idProducto; }
  	public function setNombre($nombre)          { $this->nombre = $nombre; }
    public function setMarca($marca)          { $this->marca = $marca; }
    public function setPrecio($precio)          { $this->precio = $precio; }
    public function setVotos($votos)          { $this->votos = $votos; }
    public function setTipo($tipo)          { $this->tipo = $tipo; }
    public function setColores($colores)          { $this->colores = $colores; }
    public function setDescripcion($descripcion)          { $this->descripcion = $descripcion; }
    public function setImagen($imagen)          { $this->imagen = $imagen; }
    public function setFechaCreado($fechaCreado)          { $this->fechaCreado = $fechaCreado; }
    public function setFechaActualizado($fechaActualizado)          { $this->fechaActualizado = $fechaActualizado; }
    public function setUrl($url)          { $this->url = $url; }

  	public function getIdProducto()       { return $this->idProducto; }
    public function getNombre()       { return $this->nombre; }
    public function getMarca()       { return $this->marca; }
    public function getPrecio()       { return $this->precio; }
  	public function getVotos()       { return $this->votos; }
    public function getTipo()       { return $this->tipo; }
    public function getColores()       { return $this->colores; }
    public function getDescripcion()       { return $this->descripcion; }
    public function getImagen()       { return $this->imagen; }
    public function getFechaCreado()       { return $this->fechaCreado; }
    public function getFechaActualizado()       { return $this->fechaActualizado; }
    public function getUrl()       { return $this->url; }

  	public function crearProducto() {
  		$bd = Database::getInstancia();
  		$bd->doQuery("INSERT INTO producto(nombre, marca, precio, tipo, descripcion, imagen) VALUES (:nom, :mar, :pre, :tip, :des, :ima);",
  	                  [":mar"    => $this->marca,
                       ":nom"    => $this->nombre,
                       ":des"    => $this->descripcion,
                       ":pre"    => $this->precio,
                       ":tip"    => $this->tipo,
                       ":ima"    => $this->imagen]);
  		$this->idProducto = $bd->getLastId();
  	}

  	public function editarProducto() {
      $bd = Database::getInstancia();
      $bd->doQuery("UPDATE producto SET marca=:mar, nombre=:nom, descripcion=:des, precio=:pre, tipo=:tip, imagen=:ima, url=:url WHERE idProducto=:idp;",
      	           [":idp"    => $this->idProducto,
                    ":mar"    => $this->marca,
      	            ":nom"    => $this->nombre,
                    ":des"    => $this->descripcion,
                    ":pre"    => $this->precio,
                    ":tip"    => $this->tipo,
                    ":ima"    => $this->imagen,
                    ":url"    => $this->url]);
  	}

  	public function borrar() {
      $bd = Database::getInstancia();
      $bd->doQuery("DELETE FROM producto WHERE idProducto=:idp;",
      	           [":idp" => $this->idProducto]);
  	}

  	public static function getAllProductos() {

      $bd = Database::getInstancia();
      $bd->doQuery("SELECT * FROM producto;");
      
      $datos = []; 

      while ($item = $bd->getRow("Producto")):
      	array_push($datos, $item);
      endwhile;
      return $datos;
  	}

    public static function mejorValorados() { 
      $bd = Database::getInstancia();
      $bd->doQuery("SELECT * FROM producto WHERE votos = 5 ORDER BY RAND() DESC LIMIT 6;");

      $valorados = []; 

      while ($item = $bd->getRow("Producto")):
        array_push($valorados, $item);
      endwhile;
      return $valorados;
    }

    public static function ultimosSubidos() { 
      $bd = Database::getInstancia();
      $bd->doQuery("SELECT * FROM producto ORDER BY fechaCreado DESC LIMIT 4;");

      $subidos = []; 

      while ($item = $bd->getRow("Producto")):
        array_push($subidos, $item);
      endwhile;
      return $subidos;
    }

    public static function ultimosActualizados() { 
      $bd = Database::getInstancia();
      $bd->doQuery("SELECT * FROM producto ORDER BY fechaActualizado DESC LIMIT 4;");

      $actualizados = []; 

      while ($item = $bd->getRow("Producto")):
        array_push($actualizados, $item);
      endwhile;
      return $actualizados;
    }

    public static function getProducto($id) {
      $bd = Database::getInstancia();
      $bd->doQuery("SELECT * FROM producto WHERE idProducto=:idp;",
                   [":idp" => $id]);

      return $bd->getRow("Producto"); 
    }

  	public static function borrarProducto($id) { 
      $bd = Database::getInstancia();
      $bd->doQuery("DELETE FROM producto WHERE idProducto=:idp;",
      	           [":idp" => $id]);
  	}

    public static function cogeProductoPorId($idp) {

      $bd = Database::getInstancia();
      $bd->doQuery("SELECT * FROM producto WHERE idProducto=:idp;",
                   [":idp" => $idp]);

      $producto = [];

      while ($item = $bd->getRow("Producto")):
        array_push($producto, $item);
      endwhile;

      return $producto[0];
    }

    public static function cogeProductosRelacionados($tip) {

      $bd = Database::getInstancia();
      $bd->doQuery("SELECT * FROM producto WHERE tipo=:tip ORDER BY RAND() LIMIT 16;",
                   [":tip" => $tip]);

      $tipo = [];

      while ($item = $bd->getRow("Producto")):
        array_push($tipo, $item);
      endwhile;

      return $tipo;
    }
  }