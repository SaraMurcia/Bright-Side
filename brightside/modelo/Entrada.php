<?php
  require_once "Usuario.php";
  require_once "Database.php";

  class Entrada {

  	private $idEntrada;
  	private $idUsuario;
    private $nombre;
    private $apellidos;
    private $fechaEntrada;
    private $imagenEntrada;
    private $imagenPeque;
    private $titulo;
    private $textoEntrada;
    private $textoResumen;

  	public function __construct() {
  	}

    public function setIdEntrada($idEntrada)          { $this->idEntrada = $idEntrada; }
    public function setIdUsuario($idUsuario)          { $this->idUsuario = $idUsuario; }
    public function setNombre($nombre)          { $this->nombre = $nombre; }
    public function setApellidos($apellidos)          { $this->apellidos = $apellidos; }
    public function setFechaEntrada($fechaEntrada)          { $this->fechaEntrada = $fechaEntrada; }
    public function setImagenEntrada($imagenEntrada)          { $this->imagenEntrada = $imagenEntrada; }
    public function setTitulo($titulo)          { $this->titulo = $titulo; }
    public function setTextoEntrada($textoEntrada)          { $this->textoEntrada = $textoEntrada; }
    public function setTextoResumen($textoDestacado)          { $this->textoDestacado = $textoDestacado; }

  	public function getIdEntrada()       { return $this->idEntrada; }
    public function getIdUsuario()       { return $this->idUsuario; }
    public function getNombre()       { return $this->nombre; }
    public function getApellidos()       { return $this->apellidos; }
    public function getFechaEntrada()       { return $this->fechaEntrada; }
    public function getImagenEntrada()       { return $this->imagenEntrada; }
    public function getTitulo()       { return $this->titulo; }
    public function getTextoEntrada()       { return $this->textoEntrada; }
    public function getTextoResumen()       { return $this->textoResumen; }
    public function getTextoDestacado()       { return $this->textoDestacado; }

  	public function crearEntrada() {

  		$bd = Database::getInstancia();
  		$bd->doQuery("INSERT INTO entrada(idEntrada, idUsuario, fechaEntrada, imagenEntrada, imagenPeque, titulo, textoEntrada, textoResumen) VALUES (:idEnt, :idUsu, :fechEnt, :imgEnt, :imgPeque, :tit, :txtEnt, :txtRes);",
  	                  [":idEnt"    => $this->idEntrada,
                       ":idUsu"    => $this->idUsuario,
                       ":fechEnt"    => $this->fechaEntrada,
                       ":imgEnt"    => $this->imagenEntrada,
                       ":imgPeque" => $this->imagenPeque,
                       ":tit"    => $this->titulo,
                       ":txtEnt"    => $this->textoEntrada,
                       ":txtRes" => $this->textoResumen]);
  		$this->idEntrada = $bd->getLastId();
  	}

  	public function editarEntrada() {
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

  	public static function muestraEntradas() { 

      $bd = Database::getInstancia();

      $bd->doQuery("SELECT idEntrada, entrada.idUsuario, fechaEntrada, imagenEntrada, titulo, textoEntrada, textoResumen, nombre, apellidos
                    FROM entrada
                    INNER JOIN usuario
                    ON entrada.idUsuario = usuario.idUsuario
                    ORDER BY fechaEntrada DESC;");
      $entradas = [];

      while ($item = $bd->getRow("Entrada")):
      	array_push($entradas,$item);
      endwhile;

      return $entradas;
    }
    
    public static function getAllEntradas() {
      $bd = Database::getInstancia();
      $bd->doQuery("SELECT * FROM entrada;");
      
      $entradas = [];

      while ($item = $bd->getRow("Entrada")):
      	array_push($entradas, $item);
      endwhile;
      return $entradas;
  	}

    public static function cogeEntradaPorId($ide) {

      $bd = Database::getInstancia();
      $bd->doQuery("SELECT * FROM entrada e, usuario u WHERE idEntrada=:ide AND e.idUsuario=u.idUsuario;",
                   [":ide" => $ide]);

      $entrada = [];

      while ($item = $bd->getRow("Entrada")):
        array_push($entrada, $item);
      endwhile;

      return $entrada[0];
    }
  }
?>