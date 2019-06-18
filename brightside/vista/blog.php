<!DOCTYPE html>
<html>
<head>
	<title>Bright Side - Blog</title>
</head>
<body>
<img class="ajustarImg" src="vista/assets/images/imagenblog.jpg">
<div id="centralBlog">
    <?php foreach($entradas as $item): ?>
    <div class="posNoti">
        <h1 class="mayus"><?=  $item->getTitulo(); ?></h1>
        <h5 class="txtResumen"><?=  $item->getTextoResumen(); ?></h5>
        <div class="autor1"><a href="index.php?mod=usuario&ope=entradilla&idEntrada=<?= $item->getIdEntrada(); ?>" class="leerMas">Leer más</a> |<?= $item->getNombre(); ?>
        <?= $item->getApellidos(); ?> | 
        <b class="fechaEntrada"><?= $item->getFechaEntrada(); ?></b></div>
        <hr>
    </div>
    <div class="posNoti">
    <img class="noticia1" src="<?= $item->getImagenEntrada(); ?>">
    </div>
    <?php endforeach; ?>
</div>
</body>
</html>