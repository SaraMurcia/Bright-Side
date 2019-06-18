<!DOCTYPE html>
<html>
<head>
    <title>Bright Side - Todas las entradas</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="vista/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="vista/assets/css/styles.css">
    <script type="text/javascript" src="vista/assets/js/jquery.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.js" type="text/javascript"></script>
    <script src="vista/assets/js/funciones.js"></script>
</head>

<body>
<img class="ajustarImg" src="vista/assets/images/productoswallp.jpg">
<div id="centro">
<div  class="cuadro">
  <h3 class="productosTitulo">Productos</h3>
  <?php echo $addProducto; ?>
  <div class="form-group">
    <input type="text" id="txt_busqueda" class="form-control ajusteSize" placeholder="Buscar">
  </div>
  <div id="div_tabla" class="productosColocar">
  </div>
    <div class="posicionarPag d-flex justify-content-center" >
    <nav aria-label="Page navigation example" class="">
      <ul class="pagination" id="pagination">
      </ul>
    </nav>
  </div>
</div>
</div>
</body>
</html>