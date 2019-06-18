<?php

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);
ini_set("default_charset", "UTF-8");
// Header
session_start();
$entrar = null;
if(!empty($_SESSION)) {
      $entrar = "<li><a href='perfil'>" . $_SESSION['nick'] . "</a></li>
      <li><a href='index.php?mod=usuario&ope=cerrarSesion'>Cerrar Sesión</a></li>";

      if(isset($_SESSION['tiempo'])) {

            $tiempoInactividad = 500;
            $tiempoSesion = time() - $_SESSION['tiempo'];
            if($tiempoSesion > $tiempoInactividad) {
                  header("Location: index.php?mod=usuario&ope=cerrarSesion");
            }
      } else {
            $_SESSION['tiempo'] = time();
      }
} else {
      $entrar = "<li><a href='acceder'>Acceder</a></li>";
}


include "vista/assets/partials/header.php";

// Controladores
  $mod = $_GET["mod"]??"usuario";
  $ope = $_GET["ope"]??"index";

  require_once "controlador/controller.$mod.php";

  $nme = "controller$mod";

   $cont = new $nme();

   if(method_exists($cont, $ope)) $cont->$ope();
   else
     die ("**Error: se ha producido un error de la aplicación"); 


include "vista/assets/partials/footer.php";
?>