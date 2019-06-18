<?php
	require_once "Database.php" ;

	class Usuario {

		private $idUsuario;
		private $idRol;
		private $nombre;
		private $apellidos;
		private $nick;
		private $email;
		private $password;
		private $imagen;
		private $timeLogin;
		private $timeLogout;
		private $timeSignin;


		public function __construct() {
		}

		public function setIdUsuario($idUsuario)    { $this->idUsuario = $idUsuario ;}
		public function setIdRol($idRol)    { $this->idRol = $idRol ;}
		public function setNombre($nombre)    { $this->nombre = $nombre ;}
		public function setApellidos($apellidos)    { $this->apellidos = $apellidos ;}
		public function setNick($nick)   { $this->nick = $nick ;}
		public function setEmail($email)    {$this->email = $email ;}
		public function setPwd($pwd)  { $this->pwd = $pwd ;}
		public function setImagen($imagen)  { $this->imagen = $imagen ;}
		public function setTimeLogin($timeLogin)  { $this->timeLogin = $timeLogin ;}
		public function setTimeLogout($timeLogout)  { $this->timeLogout = $timeLogout ;}
		public function setTimeSignin($timeSignin)  { $this->timeSignin = $timeSignin ;}

		public function getIdUsuario()   	 { return $this->idUsuario; }
		public function getIdRol()   	 { return $this->idRol; }
  	    public function getNombre()      { return $this->nombre; }
  	    public function getApellidos()      { return $this->apellidos; }
  	    public function getNick()     { return $this->nick; }
  	    public function getEmail()       { return $this->email; }
		public function getPwd()    { return $this->pwd; }
		public function getImagen()    { return $this->imagen; }
		public function getTimeLogin()    { return $this->timeLogin; }
		public function getTimeLogout()    { return $this->timeLogout; }
		public function getTimeSignin()    { return $this->timeSignin; }

		public function registrar() {

			$bd = Database::getInstancia();
            $bd->doQuery("INSERT INTO usuario(idUsuario, idRol, nombre, apellidos, nick, email, pwd, imagen) VALUES (:idUsu, :rol, :nom, :ape, :nick, :ema, :pass, :img);",
                [ ":idUsu" => $this->idUsuario,
                  ":rol" => $this->idRol,
                  ":nom" => $this->nombre,
                  ":ape" => $this->apellidos,
                  ":nick" => $this->nick,
                  ":ema" => $this->email,
				  ":pass" => $this->pwd,
				  ":img" => $this->imagen]);
		}

		public static function cogeUsuarioPorNick($user) {

			$bd = Database::getInstancia();
			$bd->doQuery("SELECT nick FROM usuario WHERE nick=:nick;",
						 [":nick" => $user]);
	  
			$user = [];
	  
			while ($item = $bd->getRow("Usuario")):
			  array_push($user, $item);
			endwhile;
	  
			return $user;
		}

		public static function cogeUsuarioPorEmail($mail) {

			$bd = Database::getInstancia();
			$bd->doQuery("SELECT email FROM usuario WHERE email=:email;",
						 [":email" => $mail]);
	  
			$mail = [];
	  
			while ($item = $bd->getRow("Usuario")):
			  array_push($mail, $item);
			endwhile;
	  
			return $mail;
		}
		  
		public static function obtenerUsuario() { // Obtengo el usuario del login indicado, si existe.

			if(isset($_GET["user"]) && isset($_GET["pwd"])) {

                $usrNick = $_GET["user"];
                $usrPwd = $_GET["pwd"];
           
                $bd = Database::getInstancia();
                $bd->doQuery("SELECT * FROM usuario WHERE nick=:user AND pwd=:pwd;",
                                [":user" => $usrNick,
                                ":pwd" => $usrPwd]);
        
				$devuelve = $bd->getRow();

				date_default_timezone_set("Europe/Paris");
				$ultimaConexion = date("Y-m-d H:i:s");
				$actualizaConexion = Database::getInstancia();
				$actualizaConexion->doQuery("UPDATE usuario SET estado='online', timeLogin=:ultimaConexion WHERE nick=:user;",
														[":user" => $usrNick,
														":ultimaConexion" => $ultimaConexion]);

				//print_r($devuelve);
				if(!is_null($devuelve)) {

					$_SESSION["nick"] = $devuelve->nick;
					$_SESSION["rol"] = $devuelve->idRol;
					$_SESSION["id"] = $devuelve->idUsuario;
					("Location: index.php");
				} else {
					return false;
				}
            } else{
				return false;
            }
		}

		public static function logout() { // Cierro sesión

			$nick = $_SESSION["nick"];
			date_default_timezone_set("Europe/Paris");
			$ultimaConexion = date("Y-m-d H:i:s");
			$actualizaConexion = Database::getInstancia();
			$actualizaConexion->doQuery("UPDATE usuario SET estado='offline', timeLogout=:ultimaConexion WHERE nick=:user;",
													[":user" => $nick,
													":ultimaConexion" => $ultimaConexion]);
			
			$_SESSION = [];
			session_destroy();
			session_unset();
		}

		public static function ultimosConectados() {
			$bd = Database::getInstancia();
			$bd->doQuery("SELECT * FROM usuario WHERE estado='online' LIMIT 5;");
			
			$datos = []; 

			while ($item = $bd->getRow("Usuario")):
				array_push($datos, $item);
			endwhile;
			return $datos;
		}

		public static function ultimosDesconectados() {
			$bd = Database::getInstancia();
			$bd->doQuery("SELECT * FROM usuario WHERE estado='offline' ORDER BY timeLogout DESC LIMIT 5;");
			
			$datos = []; 

			while ($item = $bd->getRow("Usuario")):
				array_push($datos, $item);
			endwhile;
			return $datos;
		}

		public static function ultimosRegistrados() {
			$bd = Database::getInstancia();
			$bd->doQuery("SELECT * FROM usuario ORDER BY timeSignin DESC LIMIT 5;");
			
			$registrados = []; 

			while ($item = $bd->getRow("Usuario")):
				array_push($registrados, $item);
			endwhile;
			return $registrados;
		}
		
		public static function cogeUsuarioPorId($idus) {

			$bd = Database::getInstancia();
			$bd->doQuery("SELECT * FROM usuario WHERE idUsuario=:idus;",
						 [":idus" => $idus]);
	  
			$usuario = [];
	  
			while ($item = $bd->getRow("Usuario")):
			  array_push($usuario, $item);
			endwhile;
	  
			return $usuario[0];
		  }
	}








