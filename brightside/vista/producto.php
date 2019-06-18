<!DOCTYPE html>
<html>
<title>Producto - <?= $producto->getNombre(); ?> </title>
<script>
function asegurar () {
      rc = confirm("¿Seguro que desea eliminar?");
      return rc;
}
</script>
<body>
<img class="ajustarImg" src="vista/assets/images/productswallp.jpg">
<div id="centro">
    <div id="contenidoCentro">
        <div id="barraCentralProducto">
           <table>
            <tbody>
                <tr>
                  <td><img src="<?= $producto->getImagen() ?>" class="imageSizeBig"></td>
                  <td>
                    <div id="tituloMarca"><?= $producto->getMarca() ?></div>
                    <div id="tituloNombreProducto"><?= $producto->getNombre() ?></div>
                    <div id="tipoProducto"><?= $producto->getTipo() ?></div>
                    <div id="precioProducto"><?= $producto->getPrecio() ?> $</div>
                    <div id="valoracion">Puntuación del producto en Bright Side: 
                      <?php echo $stars; ?>
                      </div>
                    <hr>
                    <div id="txtDescripcion"><?= $producto->getDescripcion() ?></div>
                    <a href="<?= $producto->getUrl() ?>" class="botonComprar">Comprar</a>
                    <div id="siguienteAnterior">
                    <a href="index.php?mod=producto&ope=detalles&idProducto=<?= $anterior; ?>&tipo=<?= $producto->getTipo() ?>" class="siguienteAnterior ant">Producto anterior</a><a href="index.php?mod=producto&ope=detalles&idProducto=<?= $siguiente; ?>&tipo=<?= $producto->getTipo() ?>" class="siguienteAnterior sig"> Producto siguiente</a>
                    </div>
                  </td>
                </tr>
            </tbody>
            </table>
              <div id="cajaColor">
              <div id="coloresTitulo"><button type="button" class="btn btn-secondary btn-lg" data-toggle="modal" data-target="#myModal">Colores disponibles</button></div>
              </div>
            <br>
            <?php echo $editarBorrar; ?>
            <br><br><br><br>
            <div id="titulo">Productos relacionados</div><br><br>
            <?php foreach($relacionados as $item): ?>
              <div id="cajaProductoIndex">
                <div id="imagenProductoIndex">
                  <div class="zoomProductoIndex">
                            <div class="imageCardProductoIndex">
                                <a href="index.php?mod=producto&ope=detalles&idProducto=<?= $item->getIdProducto() ?>&tipo=<?= $item->getTipo() ?>"><img src="<?= $item->getImagen(); ?>" style="width: 100%; height: 100%;"></a>
                            </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Modal de la lista de colores -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div id="colorcitos">
      <?php foreach($array[0] as $key => $object): ?>
        <div id="cajaColores">
          <div id="color" style="background-color: <?= $object->hex_value; ?>;"></div>
          <div id="colorNombre" style="color: <?= $object->hex_value; ?>;"><?= $object->colour_name; ?></div>
        </div>
      <?php endforeach; ?>
    </div>
</div>
</body>
</html>