<?php

include "vista/assets/partials/helpers.php";
require_once "modelo/Usuario.php";
require_once "modelo/Entrada.php";
require_once "modelo/Producto.php";
require_once "modelo/Database.php";
require_once "modelo/Comentario.php";

class controllerUsuario {

  private $usuario = null;

  public function __construct() {
  }

  public function index() {
    $entrar = null;

    if(!empty($_SESSION)) {
      $entrar = "<li><a href='index.php?mod=usuario&ope=plantilla'>" . $_SESSION['nick'] . "</a></li>
      <li><a href='index.php?mod=usuario&ope=cerrarSesion'>Cerrar Sesión</a></li>";
    } else {
      $entrar = "<li><a href='acceder'>Acceder</a></li>";
    }
    
    $destacados = Producto::mejorValorados();

  	require_once "vista/index.php";
  }

  public function entrar() {
    $entrar = null;

    if(!empty($_SESSION)) {
      $entrar = "<li><a href='index.php?mod=usuario&ope=plantilla'>" . $_SESSION['nick'] . "</a></li>
      <li><a href='index.php?mod=usuario&ope=cerrarSesion'>Cerrar Sesión</a></li>";
    } else {
      $entrar = "<li><a href='acceder'>Acceder</a></li>";
    }

  	require_once "vista/entrar.php";
  }

  public function registrar() {
    if (isset($_GET["pstNombre"])) {

      if (Usuario::cogeUsuarioPorNick($_GET["pstNick"]) || Usuario::cogeUsuarioPorEmail($_GET["pstEmail"])) {
        $mensaje = '<div>usuario o email no válido</div>';
      } else {
        $user = new Usuario();
        $user->setNombre($_GET["pstNombre"]);
        $user->setApellidos($_GET["pstApellidos"]);
        $user->setNick($_GET["pstNick"]);
        $user->setEmail($_GET["pstEmail"]);
        $user->setPwd($_GET["pstPwd"]);
        $user->setImagen($_GET['pstImg']);
        $user->setIdRol(2);
        $user->registrar();
        
        $this-> index();
        //header('Location: index.php?mod=usuario&ope=index');
      }
    } else {
      require_once "vista/index.php";
    }
  }

  public function blog() {
    
    $entradas = Entrada::muestraEntradas();

    require_once "vista/blog.php";
  }

  public function login() {

    if(isset($_GET['user']) && isset($_GET['pwd'])) {

      Usuario::obtenerUsuario();
      header("Location: index.php");
    }
  }

  public function plantilla() {

    $idUsuario = $_SESSION["id"];
    $usuario = Usuario::cogeUsuarioPorId($idUsuario);
    $rol = rol($usuario->getIdRol());

    $conectados = Usuario::ultimosConectados();
    $desconectados = Usuario::ultimosDesconectados();
    $registrados = Usuario::ultimosRegistrados();

    if($_SESSION['rol'] == 1) {
      $panelAdmin = '';
    }

    require_once "vista/plantilla.php";
  }

  public function entradilla() {

    if(empty($_SESSION)){
      $datosUsuario = "";
      $botonComentario = "Debes estar logueado para poder comentar.";
    } else {
      $datosUsuario = "Comentando como <b>" . $_SESSION["nick"] . "</b>";
      $botonComentario = "<button type='submit'>Añadir comentario</button>";
    }
    $idEntrada = $_GET["idEntrada"];
    if (!empty($idEntrada)) {
      $entrada = Entrada::cogeEntradaPorId($idEntrada);
      $comentarioEntrada = Comentario::cogeComentarioPorEntrada($idEntrada);

      require_once "vista/entradilla.php";
    } else {
      echo "No hay ID de producto";
    }
  }

  public function addComentario() {

    if(empty($_GET["idUsuario"])) {
      echo "Debes estar registrado para poder comentar";
    } else {
      $idUsuario = $_GET["idUsuario"];
      $idEntrada = $_GET["idEntrada"];
      if (isset($_GET["txtComentario"])) {
          $cmt = new Comentario();

          $cmt->setIdUsuario($idUsuario);
          $cmt->setIdEntrada($idEntrada);
          $cmt->setTextoComentario($_GET["txtComentario"]);
          $cmt->crearComentario();
          header("Location: index.php");

      } else {
      }
    }
  }

  public function cerrarSesion() {
    Usuario::logout();
    header ("Location: index.php");
  }
}
?>