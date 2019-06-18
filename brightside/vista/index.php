<!DOCTYPE html>
<html>
<body>
<div class="slider">
    <ul>
        <li><div id="wallpaper"></div></li>
        <li><div id="wallpaper2"></div></li>
        <li><div id="wallpaper3"></div></li>
        <li><div id="wallpaper4"></div></li>
    </ul>
</div>
<img class="sitParteAbajo" src="vista/assets/images/parteabajo.png">
<h2 class="tituloPpal">Qué encontrarás en Bright Side</h2>
    <div class="flipcards">
    <img class="lineasFondo" src="vista/assets/images/lineasfondo.png">
    <a href="productos" class="productosFlip">
        <div class="card-container">
            <div class="card">
                <figure class="front flipcard1">
                    <h4 class="flipTitulo">Productos</h4>
                </figure>
                <figure class="back flipcard4">
                    <h4 class="flipTitulo">Productos</h4>
                </figure>
            </div>
        </div>
    </a>
    <a href="blog" class="blogFlip">
        <div class="card-container">
            <div class="card">
                <figure class="front flipcard3">
                    <h4 class="flipTitulo">Noticias</h4>
                </figure>
                <figure class="back flipcard2">
                    <h4 class="flipTitulo">Noticias</h4>
                </figure>
            </div>
        </div>
    </a>
    </div>
<img class="separador1" src="vista/assets/images/separador1.png">
<div class="ParallaxVideo">
  <video autoplay muted loop>
    <source src="vista/assets/images/maquillaje.mp4" type="video/mp4">
  </video>
</div>
<div class="otraParte">
    <h1>Productos destacados</h1>
    <div id="productosDestacados">
    <?php foreach($destacados as $item): ?>
              <div id="cajaEfecto">
                            <div id="cajaProducto">
                              <div id="lineaCaja"><img src="vista/assets/images/linea.png"></div>
                              <a href="index.php?mod=producto&ope=detalles&idProducto=<?= $item->getIdProducto() ?>&tipo=<?= $item->getTipo() ?>"><div class="nombreProducto"><?= $item->getNombre() ?></div></a>
                              <a href="index.php?mod=producto&ope=detalles&idProducto=<?= $item->getIdProducto() ?>&tipo=<?= $item->getTipo() ?>"><img class="imagenProducto" src="<?= $item->getImagen(); ?>"></a>
                              <div class="precioProducto"><?= $item->getPrecio() ?> €</div>
                              <a href="index.php?mod=producto&ope=detalles&idProducto=<?= $item->getIdProducto() ?>&tipo=<?= $item->getTipo() ?>"><div id="cajaComprar">Comprar</div></a>
                            </div>
                </div>
            <?php endforeach; ?>
    </div>
</div>
</body>
</html>