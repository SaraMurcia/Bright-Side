<?php 

// Función para cambiar los números por estrellas
function estrellas($stars) {

	$estrellas = "";
	//die(getcwd());
	switch($stars) {
		case 0:
			$estrellas = "★★★★★";
			break;
		case 1:
			$estrellas = "<a href='#' id='colorea'>★</a>★★★★";
			break;
		case 2:
			$estrellas = "<a href='#' id='colorea'>★★</a>★★★";
			break;
		case 3:
			$estrellas = "<a href='#' id='colorea'>★★★</a>★★";
			break;
		case 4:
			$estrellas = "<a href='#' id='colorea'>★★★★</a>★";
			break;
		case 5:
			$estrellas = "<a href='#' id='colorea'>★★★★★</a>";
			break;
		default:
			$estrellas = "No hay reseñas aún para este artículo";
			break;

	}
	return $estrellas;
}

// Rol
function rol($rolito) {

	$rol = "";

	switch($rolito) {
		case 1:
			$rol = "Administradora";
			break;
		case 2:
			$rol = "Usuario";
			break;
		default:
			$rol = "No existe el rol.";
			break;

	}
	return $rol;
}

?>