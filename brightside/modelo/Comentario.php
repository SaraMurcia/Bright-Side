<?php

  require_once "Database.php";

  class Comentario {

      private $idComentario;
      private $idUsuario;
      private $idEntrada;
      private $fechaComentario;
      private $textoComentario;
      private $idRol;
      private $nombre;
      private $apellidos;
      private $nick;
      private $email;
      private $password;
      private $imagen;


      public function __construct() {

      }

      public function setIdComentario($idComentario)          { $this->idComentario = $idComentario; }
      public function setIdUsuario($idUsuario)          { $this->idUsuario = $idUsuario; }
      public function setIdEntrada($idEntrada)          { $this->idEntrada = $idEntrada; }
      public function setIdProducto($idProducto)          { $this->idProducto = $idProducto; }
      public function setFechaComentario($fechaComentario)          { $this->fechaComentario = $fechaComentario; }
      public function setTextoComentario($textoComentario)          { $this->textoComentario = $textoComentario; }
      public function setIdRol($idRol)    { $this->idRol = $idRol ;}
      public function setNombre($nombre)    { $this->nombre = $nombre ;}
      public function setApellidos($apellidos)    { $this->apellidos = $apellidos ;}
      public function setNick($nick)   { $this->nick = $nick ;}
      public function setEmail($email)    {$this->email = $email ;}
      public function setPwd($pwd)  { $this->pwd = $pwd ;}
      public function setImagen($imagen)  { $this->imagen = $imagen ;}

      public function getIdComentario()       { return $this->idComentario; }
      public function getIdUsuario()       { return $this->idUsuario; }
      public function getIdEntrada()       { return $this->idEntrada; }
      public function getIdProducto()       { return $this->idProducto; }
      public function getFechaComentario()       { return $this->fechaComentario; }
      public function getTextoComentario()       { return $this->textoComentario; }
      public function getIdRol()   	 { return $this->idRol; }
      public function getNombre()      { return $this->nombre; }
      public function getApellidos()      { return $this->apellidos; }
      public function getNick()     { return $this->nick; }
      public function getEmail()       { return $this->email; }
      public function getPwd()    { return $this->pwd; }
      public function getImagen()    { return $this->imagen; }

      
      public static function cogeComentarioPorEntrada($idce) {

        $bd = Database::getInstancia();
        $bd->doQuery("SELECT * FROM comentario c, usuario u WHERE c.idEntrada=:idce AND c.idUsuario = u.idUsuario ORDER BY fechaComentario DESC LIMIT 5;",
                     [":idce" => $idce]);
  
        $comentarioEntrada = [];
  
        while ($item = $bd->getRow("Comentario")):
          array_push($comentarioEntrada, $item);
        endwhile;
  
        return $comentarioEntrada;
      }

      public function crearComentario() {
        $bd = Database::getInstancia();
        $bd->doQuery("INSERT INTO comentario(idUsuario, idEntrada, textoComentario) VALUES (:idUsu, :idEn, :txtCmt);",
                        [":idUsu"    => $this->idUsuario,
                         ":idEn"    => $this->idEntrada,
                         ":txtCmt"    => $this->textoComentario]);
        $this->idComentario = $bd->getLastId();
      }

    }