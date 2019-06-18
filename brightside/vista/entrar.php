<!DOCTYPE html>
<html>
<head>
	<title>Bright Side - Entrar</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script language="javascript" type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="vista/assets/js/validacion.js"></script>
</head>
<body>
<img class="entrarFondo" src="vista/assets/images/entrarfondo.jpg">
	<div id="registro">
	<img class="lineasFondo" src="vista/assets/images/fondoentrar.png">
		<div class="nuevoUsuario">
			<form action="index.php" method="GET" id="registrar" name="registrar" enctype="multipart/form-data">
				<input type="hidden" name="mod" value="usuario">
				<input type="hidden" name="ope" value="registrar">

				<h1 class="titulo">Nuevo usuario</h1>

				<label for="pstNombre">Nombre: *</label>
				<input id="pstNombre" type="text" name="pstNombre" required>
				<br/>
				<label for="pstApellidos">Apellidos: *</label>
				<input id="pstApellidos" type="text" name="pstApellidos" required>
				<br/>
				<label for="pstNick">Usuario: *</label>
				<input id="pstNick" type="text" name="pstNick" required>
				<br/>
				<label for="pstEmail">Email: *</label>
				<input id="pstEmail" type="pstEmail" name="pstEmail" required>
				<br/>
				<label for="pstPwd">Contraseña: *</label>
				<input id="pstPwd" type="password" name="pstPwd" minlength="5" maxlength="12" required>
				<br/>
				<label for="pstPwd2">Repite contraseña: *</label>
				<input id="pstPwd2" type="password" name="pstPwd2" required>
				<br/>
				<label for="pstImg">Imagen:</label>
				<input id="pstImg" type="url" name="pstImg">
				<br/><br/><br/>
				<button type="submit">Unirse</button>
			</form>
		</div>
		<div class="nuevoUsuario">
			<form action="index.php" id="entrar" name="entrar" method="GET">
			<h1 class="titulo centrado">Usuario registrado</h1>
				<input type="hidden" name="mod" value="usuario">
				<input type="hidden" name="ope" value="login">

					<label for="user">Usuario: </label>
					<input id="user" type="text" name="user" required="" autofocus=""/>
					<label for="pwd">Contraseña: </label>
					<input class="centrarBoton" id="pwd" type="password" name="pwd" required=""/>
					<button type="submit">Entrar</button>
			</form>
		</div>
		</div>
	</div>
</body>
</html>