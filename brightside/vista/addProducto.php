<!DOCTYPE html>
<html>
<head>
	<title>Bright Side - Añadir Producto</title>
</head>
<body>
<img src="vista/assets/images/entrarfondo.jpg">
<div id="centralBlog">
    <div class="crearProductoForm">
        <form action="index.php" method="get" class="formulario"> 
            <input type="hidden" name="mod" value="producto">
            <input type="hidden" name="ope" value="crear">

            <h1 class="titulo">Crear producto</h2>
            <label for="mar" class="sep">Marca:</label>
            <input id="mar" name="mar" type="text" class="botonRelleno sep" required>
            <br/>
            <label for="nom" class="sep">Nombre:</label>
            <input id="nom" type="text" name="nom" class="botonRelleno sep" required>
            <br/>
            <label for="des" class="sep">Descripción:</label>
            <textarea rows="12" cols="60" name="des" class="botonRelleno sep"></textarea>
            <br/>
            <label for="pre" class="sep">Precio:</label>
            <input id="pre" name="pre" type="text" class="botonRelleno sep" required>
                <br/>
            <label for="tip" class="sep">Tipo:</label>
            <input id="tip" name="tip" type="text" class="botonRelleno sep" required>
                <br/>
            <label for="ima" class="sep">Enlace a imagen:</label>
            <input id="ima" name="ima" type="text" class="botonRelleno sep" required>
            <br/><br/><br/>
            <button type="submit">Añadir producto</button>
        </form>
    </div>
</div>
</body>
</html>