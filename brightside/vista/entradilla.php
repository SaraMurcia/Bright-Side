<!DOCTYPE html>
<html>
<head>
	<title>Bright Side - <?= $entrada->getTitulo(); ?></title>
</head>
<body>
<img class="ajustarImg" src="vista/assets/images/imagenblog.jpg">
<div id="centralBlog">
<img src="<?= $entrada->getImagenEntrada(); ?>" alt="<?= $entrada->getTitulo(); ?>" class="imagenEntradilla">
<div class="tituloEntradilla"><?= $entrada->getTitulo(); ?></div>
<div class="entradaEntradilla"><?= $entrada->getTextoEntrada(); ?></div>
<div class="datosEntradilla"><?= $entrada->getNombre(); ?> 
<?= $entrada->getApellidos(); ?> | 
<?= $entrada->getFechaEntrada(); ?></div>
<div id="cajaComentario">
	<h1 class="tituloComentario">Comentarios de la publicación</h1>
	<?php foreach($comentarioEntrada as $item): ?>
	<div class="cajaBordeComentario">
		<p class="datosUsuarioComentario">Por <?=  $item->getNombre(); ?> <?=  $item->getApellidos(); ?> en <?=  $item->getFechaComentario(); ?></p>
		<p class="parrafoComentario"><?=  $item->getTextoComentario(); ?></p>
	</div>
	<?php endforeach; ?>
	<form action="index.php" method="get" class="formularioComentario"> 
            <input type="hidden" name="mod" value="usuario">
			<input type="hidden" name="ope" value="addComentario">
			<input type="hidden" name="idUsuario" value="<?php echo $_SESSION["id"]; ?>">
			<input type="hidden" name="idEntrada" value="<?= $entrada->getIdEntrada(); ?>">

            <label class="addComent" for="txtComentario">Añadir comentario:</label><br>
            <textarea rows="5" cols="120" name="txtComentario"></textarea>
            <br/>
			<?php echo $botonComentario ?> <div id="comentandoComo"><?php echo $datosUsuario; ?></div>
	</form>
	<br><br><br><br><br><br>
</div>
</div>
</body>
</html>