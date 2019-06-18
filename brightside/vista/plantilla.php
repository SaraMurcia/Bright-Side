<!DOCTYPE html>
<html>
<head>
	<title>Bright Side - <?= $usuario->getNick(); ?></title>
	<!-- Remember to include jQuery :) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
</head>
<body>
<img src="vista/assets/images/imagenblog.jpg">
<h3 class="rolUsu"><?php echo $rol; ?></h3>
<div id="lateralPlantilla">
<h1 class="nickname"><?= $usuario->getNick(); ?></h1>
<h4 class="nombreUsu">Nombre: <?= $usuario->getNombre(); ?> 
<?= $usuario->getApellidos(); ?></h4>
<h4 class="nombreUsu">Email: <?= $usuario->getEmail(); ?></h4>
</div>
<div id="lateralPlantilla" class="dchaPlantilla">
	<div class="cajaEstado">
		<h2 class="panelTitulo">Panel de administración</h2>
		<hr>
		<div>
			<h4>Usuarios online</h4>
			<?php foreach($conectados as $item): ?>
				<div class="usuarioConectado"><?= $item->getNombre() ?>
				<?= $item->getApellidos() ?> - 
				<?= $item->getTimeLogin() ?></div><br>
			<?php endforeach; ?>
		</div>
		<div>
			<h4>Últimas conexiones</h4>
			<?php foreach($desconectados as $item): ?>
				<div class="usuarioConectado"><?= $item->getNombre() ?>
				<?= $item->getApellidos() ?> - 
				<?= $item->getTimeLogin() ?></div><br>
			<?php endforeach; ?>
		</div>
		<div>
			<h4>Últimos usuarios registrados</h4>
			<?php foreach($registrados as $item): ?>
				<div class="usuarioConectado"><?= $item->getNombre() ?>
				<?= $item->getApellidos() ?> - 
				<?= $item->getTimeSignin() ?></div><br>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<!-- <?php echo $panelAdmin; ?> -->
</body>
</html>