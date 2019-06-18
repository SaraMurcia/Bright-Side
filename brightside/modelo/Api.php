<?php

	require_once "Database.php";

	$connection = new mysqli("localhost","root","") 
			or	die("**Connection error: $connection->connection_errno : $connection->connection_error");

	$connection->select_db("brightside");
	$connection->set_charset("utf8");

	/* Extraer de la API la información y almacenarla en la base de datos */

	// Maybelline 
	$maybelline_url = "http://makeup-api.herokuapp.com/api/v1/products.json?brand=maybelline";
	$maybelline   = json_decode(file_get_contents($maybelline_url));

	foreach ($maybelline as $obj):
		$idProducto = $obj->id;
		$marca = $obj->brand;
		$nombre = $obj->name;
		$descripcion = $obj->description;
		$precio = $obj->price;
		$votos = $obj->rating;
		$tipo = $obj->product_type;
		$imagen = $obj->image_link;
		$colores = json_encode($obj->product_colors);
		$fechaCreado = $obj->created_at;
		$fechaActualizado = $obj->updated_at;
		$url = $obj->product_link;

		$sentence = "INSERT INTO producto
		    (idProducto, marca, nombre, descripcion, precio, votos, tipo, imagen, colores, fechaCreado, fechaActualizado, url) VALUES ('$idProducto', '$marca','$nombre', '$descripcion', '$precio', '$votos', '$tipo', '$imagen', '$colores', '$fechaCreado', '$fechaActualizado', '$url') ;";
		    
		$connection->query($sentence);

	endforeach;

	// Colourpop
	$colourpop_url = "http://makeup-api.herokuapp.com/api/v1/products.json?brand=colourpop";
	$colourpop   = json_decode(file_get_contents($colourpop_url));

	foreach ($colourpop as $obj):
		$idProducto = $obj->id;
		$marca = $obj->brand;
		$nombre = $obj->name;
		$descripcion = $obj->description;
		$precio = $obj->price;
		$votos = $obj->rating;
		$tipo = $obj->product_type;
		$imagen = $obj->image_link;
		$colores = json_encode($obj->product_colors);
		$fechaCreado = $obj->created_at;
		$fechaActualizado = $obj->updated_at;
		$url = $obj->product_link;

		$sentence = "INSERT INTO producto
		    (idProducto, marca, nombre, descripcion, precio, votos, tipo, imagen, colores, fechaCreado, fechaActualizado, url) VALUES ('$idProducto', '$marca','$nombre', '$descripcion', '$precio', '$votos', '$tipo', '$imagen', '$colores', '$fechaCreado', '$fechaActualizado', '$url') ;";
		    
		$connection->query($sentence);

	endforeach;

	// Zorah Biocosmetiques
	$zorah_biocosmetiques_url = "http://makeup-api.herokuapp.com/api/v1/products.json?brand=zorah biocosmetiques";
	$zorah_biocosmetiques   = json_decode(file_get_contents($zorah_biocosmetiques_url));

	foreach ($zorah_biocosmetiques as $obj):
		$idProducto = $obj->id;
		$marca = $obj->brand;
		$nombre = $obj->name;
		$descripcion = $obj->description;
		$precio = $obj->price;
		$votos = $obj->rating;
		$tipo = $obj->product_type;
		$imagen = $obj->image_link;
		$colores = json_encode($obj->product_colors);
		$fechaCreado = $obj->created_at;
		$fechaActualizado = $obj->updated_at;
		$url = $obj->product_link;

		$sentence = "INSERT INTO producto
		    (idProducto, marca, nombre, descripcion, precio, votos, tipo, imagen, colores, fechaCreado, fechaActualizado, url) VALUES ('$idProducto', '$marca','$nombre', '$descripcion', '$precio', '$votos', '$tipo', '$imagen', '$colores', '$fechaCreado', '$fechaActualizado', '$url') ;";
		    
		$connection->query($sentence);

	endforeach;

	// Rejuva minerals
	$rejuva_minerals_url = "http://makeup-api.herokuapp.com/api/v1/products.json?brand=rejuva minerals";
	$rejuva_minerals   = json_decode(file_get_contents($rejuva_minerals_url));

	foreach ($rejuva_minerals as $obj):
		$idProducto = $obj->id;
		$marca = $obj->brand;
		$nombre = $obj->name;
		$descripcion = $obj->description;
		$precio = $obj->price;
		$votos = $obj->rating;
		$tipo = $obj->product_type;
		$imagen = $obj->image_link;
		$colores = json_encode($obj->product_colors);
		$fechaCreado = $obj->created_at;
		$fechaActualizado = $obj->updated_at;
		$url = $obj->product_link;

		$sentence = "INSERT INTO producto
		    (idProducto, marca, nombre, descripcion, precio, votos, tipo, imagen, colores, fechaCreado, fechaActualizado, url) VALUES ('$idProducto', '$marca','$nombre', '$descripcion', '$precio', '$votos', '$tipo', '$imagen', '$colores', '$fechaCreado', '$fechaActualizado', '$url') ;";
		    
		$connection->query($sentence);

	endforeach;

	// Marienatie
	$marienatie_url = "http://makeup-api.herokuapp.com/api/v1/products.json?brand=marienatie";
	$marienatie   = json_decode(file_get_contents($marienatie_url));

	foreach ($marienatie as $obj):
		$idProducto = $obj->id;
		$marca = $obj->brand;
		$nombre = $obj->name;
		$descripcion = $obj->description;
		$precio = $obj->price;
		$votos = $obj->rating;
		$tipo = $obj->product_type;
		$imagen = $obj->image_link;
		$colores = json_encode($obj->product_colors);
		$fechaCreado = $obj->created_at;
		$fechaActualizado = $obj->updated_at;
		$url = $obj->product_link;

		$sentence = "INSERT INTO producto
		    (idProducto, marca, nombre, descripcion, precio, votos, tipo, imagen, colores, fechaCreado, fechaActualizado, url) VALUES ('$idProducto', '$marca','$nombre', '$descripcion', '$precio', '$votos', '$tipo', '$imagen', '$colores', '$fechaCreado', '$fechaActualizado', '$url') ;";
		    
		$connection->query($sentence);

	endforeach;

	// Lotus Cosmetics USA
	$lotus_cosmetics_usa_url = "http://makeup-api.herokuapp.com/api/v1/products.json?brand=lotus cosmetics usa";
	$lotus_cosmetics_usa   = json_decode(file_get_contents($lotus_cosmetics_usa_url));

	foreach ($lotus_cosmetics_usa as $obj):
		$idProducto = $obj->id;
		$marca = $obj->brand;
		$nombre = $obj->name;
		$descripcion = $obj->description;
		$precio = $obj->price;
		$votos = $obj->rating;
		$tipo = $obj->product_type;
		$imagen = $obj->image_link;
		$colores = json_encode($obj->product_colors);
		$fechaCreado = $obj->created_at;
		$fechaActualizado = $obj->updated_at;
		$url = $obj->product_link;

		$sentence = "INSERT INTO producto
		    (idProducto, marca, nombre, descripcion, precio, votos, tipo, imagen, colores, fechaCreado, fechaActualizado, url) VALUES ('$idProducto', '$marca','$nombre', '$descripcion', '$precio', '$votos', '$tipo', '$imagen', '$colores', '$fechaCreado', '$fechaActualizado', '$url') ;";
		    
		$connection->query($sentence);

	endforeach;

	// Nyx
	$nyx_url = "http://makeup-api.herokuapp.com/api/v1/products.json?brand=nyx";
	$nyx   = json_decode(file_get_contents($nyx_url));

	foreach ($nyx as $obj):
		$idProducto = $obj->id;
		$marca = $obj->brand;
		$nombre = $obj->name;
		$descripcion = $obj->description;
		$precio = $obj->price;
		$votos = $obj->rating;
		$tipo = $obj->product_type;
		$imagen = $obj->image_link;
		$colores = json_encode($obj->product_colors);
		$fechaCreado = $obj->created_at;
		$fechaActualizado = $obj->updated_at;
		$url = $obj->product_link;

		$sentence = "INSERT INTO producto
		    (idProducto, marca, nombre, descripcion, precio, votos, tipo, imagen, colores, fechaCreado, fechaActualizado, url) VALUES ('$idProducto', '$marca','$nombre', '$descripcion', '$precio', '$votos', '$tipo', '$imagen', '$colores', '$fechaCreado', '$fechaActualizado', '$url') ;";
		    
		$connection->query($sentence);

	endforeach;

	// Glossier
	$glossier_url = "http://makeup-api.herokuapp.com/api/v1/products.json?brand=glossier";
	$glossier   = json_decode(file_get_contents($glossier_url));

	foreach ($glossier as $obj):
		$idProducto = $obj->id;
		$marca = $obj->brand;
		$nombre = $obj->name;
		$descripcion = $obj->description;
		$precio = $obj->price;
		$votos = $obj->rating;
		$tipo = $obj->product_type;
		$imagen = $obj->image_link;
		$colores = json_encode($obj->product_colors);
		$fechaCreado = $obj->created_at;
		$fechaActualizado = $obj->updated_at;
		$url = $obj->product_link;

		$sentence = "INSERT INTO producto
		    (idProducto, marca, nombre, descripcion, precio, votos, tipo, imagen, colores, fechaCreado, fechaActualizado, url) VALUES ('$idProducto', '$marca','$nombre', '$descripcion', '$precio', '$votos', '$tipo', '$imagen', '$colores', '$fechaCreado', '$fechaActualizado', '$url') ;";
		    
		$connection->query($sentence);

	endforeach;

	// Fenty
	$fenty_url = "http://makeup-api.herokuapp.com/api/v1/products.json?brand=fenty";
	$fenty   = json_decode(file_get_contents($fenty_url));

	foreach ($fenty as $obj):
		$idProducto = $obj->id;
		$marca = $obj->brand;
		$nombre = $obj->name;
		$descripcion = $obj->description;
		$precio = $obj->price;
		$votos = $obj->rating;
		$tipo = $obj->product_type;
		$imagen = $obj->image_link;
		$colores = json_encode($obj->product_colors);
		$fechaCreado = $obj->created_at;
		$fechaActualizado = $obj->updated_at;
		$url = $obj->product_link;

		$sentence = "INSERT INTO producto
		    (idProducto, marca, nombre, descripcion, precio, votos, tipo, imagen, colores, fechaCreado, fechaActualizado, url) VALUES ('$idProducto', '$marca','$nombre', '$descripcion', '$precio', '$votos', '$tipo', '$imagen', '$colores', '$fechaCreado', '$fechaActualizado', '$url') ;";
		    
		$connection->query($sentence);

	endforeach;

	// Clinique
	$clinique_url = "http://makeup-api.herokuapp.com/api/v1/products.json?brand=clinique";
	$clinique   = json_decode(file_get_contents($clinique_url));

	foreach ($clinique as $obj):
		$idProducto = $obj->id;
		$marca = $obj->brand;
		$nombre = $obj->name;
		$descripcion = $obj->description;
		$precio = $obj->price;
		$votos = $obj->rating;
		$tipo = $obj->product_type;
		$imagen = $obj->image_link;
		$colores = json_encode($obj->product_colors);
		$fechaCreado = $obj->created_at;
		$fechaActualizado = $obj->updated_at;
		$url = $obj->product_link;

		$sentence = "INSERT INTO producto
		    (idProducto, marca, nombre, descripcion, precio, votos, tipo, imagen, colores, fechaCreado, fechaActualizado, url) VALUES ('$idProducto', '$marca','$nombre', '$descripcion', '$precio', '$votos', '$tipo', '$imagen', '$colores', '$fechaCreado', '$fechaActualizado', '$url') ;";
		    
		$connection->query($sentence);

	endforeach;

	// Iman
	$iman_url = "http://makeup-api.herokuapp.com/api/v1/products.json?brand=iman";
	$iman   = json_decode(file_get_contents($iman_url));

	foreach ($iman as $obj):
		$idProducto = $obj->id;
		$marca = $obj->brand;
		$nombre = $obj->name;
		$descripcion = $obj->description;
		$precio = $obj->price;
		$votos = $obj->rating;
		$tipo = $obj->product_type;
		$imagen = $obj->image_link;
		$colores = json_encode($obj->product_colors);
		$fechaCreado = $obj->created_at;
		$fechaActualizado = $obj->updated_at;
		$url = $obj->product_link;

		$sentence = "INSERT INTO producto
		    (idProducto, marca, nombre, descripcion, precio, votos, tipo, imagen, colores, fechaCreado, fechaActualizado, url) VALUES ('$idProducto', '$marca','$nombre', '$descripcion', '$precio', '$votos', '$tipo', '$imagen', '$colores', '$fechaCreado', '$fechaActualizado', '$url') ;";
		    
		$connection->query($sentence);

	endforeach;

	// Dior
	$dior_url = "http://makeup-api.herokuapp.com/api/v1/products.json?brand=dior";
	$dior   = json_decode(file_get_contents($dior_url));

	foreach ($dior as $obj):
		$idProducto = $obj->id;
		$marca = $obj->brand;
		$nombre = $obj->name;
		$descripcion = $obj->description;
		$precio = $obj->price;
		$votos = $obj->rating;
		$tipo = $obj->product_type;
		$imagen = $obj->image_link;
		$colores = json_encode($obj->product_colors);
		$fechaCreado = $obj->created_at;
		$fechaActualizado = $obj->updated_at;
		$url = $obj->product_link;

		$sentence = "INSERT INTO producto
		    (idProducto, marca, nombre, descripcion, precio, votos, tipo, imagen, colores, fechaCreado, fechaActualizado, url) VALUES ('$idProducto', '$marca','$nombre', '$descripcion', '$precio', '$votos', '$tipo', '$imagen', '$colores', '$fechaCreado', '$fechaActualizado', '$url') ;";
		    
		$connection->query($sentence);

	endforeach;

	// Benefit
	$benefit_url = "http://makeup-api.herokuapp.com/api/v1/products.json?brand=benefit";
	$benefit   = json_decode(file_get_contents($benefit_url));

	foreach ($benefit as $obj):
		$idProducto = $obj->id;
		$marca = $obj->brand;
		$nombre = $obj->name;
		$descripcion = $obj->description;
		$precio = $obj->price;
		$votos = $obj->rating;
		$tipo = $obj->product_type;
		$imagen = $obj->image_link;
		$colores = json_encode($obj->product_colors);
		$fechaCreado = $obj->created_at;
		$fechaActualizado = $obj->updated_at;
		$url = $obj->product_link;

		$sentence = "INSERT INTO producto
		    (idProducto, marca, nombre, descripcion, precio, votos, tipo, imagen, colores, fechaCreado, fechaActualizado, url) VALUES ('$idProducto', '$marca','$nombre', '$descripcion', '$precio', '$votos', '$tipo', '$imagen', '$colores', '$fechaCreado', '$fechaActualizado', '$url') ;";
		    
		$connection->query($sentence);

	endforeach;

	// SmashBox
	$smashbox_url = "http://makeup-api.herokuapp.com/api/v1/products.json?brand=smashbox";
	$smashbox   = json_decode(file_get_contents($smashbox_url));

	foreach ($smashbox as $obj):
		$idProducto = $obj->id;
		$marca = $obj->brand;
		$nombre = $obj->name;
		$descripcion = $obj->description;
		$precio = $obj->price;
		$votos = $obj->rating;
		$tipo = $obj->product_type;
		$imagen = $obj->image_link;
		$colores = json_encode($obj->product_colors);
		$fechaCreado = $obj->created_at;
		$fechaActualizado = $obj->updated_at;
		$url = $obj->product_link;

		$sentence = "INSERT INTO producto
		    (idProducto, marca, nombre, descripcion, precio, votos, tipo, imagen, colores, fechaCreado, fechaActualizado, url) VALUES ('$idProducto', '$marca','$nombre', '$descripcion', '$precio', '$votos', '$tipo', '$imagen', '$colores', '$fechaCreado', '$fechaActualizado', '$url') ;";
		    
		$connection->query($sentence);

	endforeach;

	// Milani
	$milani_url = "http://makeup-api.herokuapp.com/api/v1/products.json?brand=milani";
	$milani   = json_decode(file_get_contents($milani_url));

	foreach ($milani as $obj):
		$idProducto = $obj->id;
		$marca = $obj->brand;
		$nombre = $obj->name;
		$descripcion = $obj->description;
		$precio = $obj->price;
		$votos = $obj->rating;
		$tipo = $obj->product_type;
		$imagen = $obj->image_link;
		$colores = json_encode($obj->product_colors);
		$fechaCreado = $obj->created_at;
		$fechaActualizado = $obj->updated_at;
		$url = $obj->product_link;

		$sentence = "INSERT INTO producto
		    (idProducto, marca, nombre, descripcion, precio, votos, tipo, imagen, colores, fechaCreado, fechaActualizado, url) VALUES ('$idProducto', '$marca','$nombre', '$descripcion', '$precio', '$votos', '$tipo', '$imagen', '$colores', '$fechaCreado', '$fechaActualizado', '$url') ;";
		    
		$connection->query($sentence);

	endforeach;

	// L'oreal
	$loreal_url = "http://makeup-api.herokuapp.com/api/v1/products.json?brand=l'oreal";
	$loreal   = json_decode(file_get_contents($loreal_url));

	foreach ($loreal as $obj):
		$idProducto = $obj->id;
		$marca = $obj->brand;
		$nombre = $obj->name;
		$descripcion = $obj->description;
		$precio = $obj->price;
		$votos = $obj->rating;
		$tipo = $obj->product_type;
		$imagen = $obj->image_link;
		$colores = json_encode($obj->product_colors);
		$fechaCreado = $obj->created_at;
		$fechaActualizado = $obj->updated_at;
		$url = $obj->product_link;

		$sentence = "INSERT INTO producto
		    (idProducto, marca, nombre, descripcion, precio, votos, tipo, imagen, colores, fechaCreado, fechaActualizado, url) VALUES ('$idProducto', '$marca','$nombre', '$descripcion', '$precio', '$votos', '$tipo', '$imagen', '$colores', '$fechaCreado', '$fechaActualizado', '$url') ;";
		    
		$connection->query($sentence);

	endforeach;

	// E.L.F
	$e_l_f_url = "http://makeup-api.herokuapp.com/api/v1/products.json?brand=e.l.f.";
	$e_l_f   = json_decode(file_get_contents($e_l_f_url));

	foreach ($e_l_f as $obj):
		$idProducto = $obj->id;
		$marca = $obj->brand;
		$nombre = $obj->name;
		$descripcion = $obj->description;
		$precio = $obj->price;
		$votos = $obj->rating;
		$tipo = $obj->product_type;
		$imagen = $obj->image_link;
		$colores = json_encode($obj->product_colors);
		$fechaCreado = $obj->created_at;
		$fechaActualizado = $obj->updated_at;
		$url = $obj->product_link;

		$sentence = "INSERT INTO producto
		    (idProducto, marca, nombre, descripcion, precio, votos, tipo, imagen, colores, fechaCreado, fechaActualizado, url) VALUES ('$idProducto', '$marca','$nombre', '$descripcion', '$precio', '$votos', '$tipo', '$imagen', '$colores', '$fechaCreado', '$fechaActualizado', '$url') ;";
		    
		$connection->query($sentence);

	endforeach;

	// Revlon
	$revlon_url = "http://makeup-api.herokuapp.com/api/v1/products.json?brand=revlon";
	$revlon   = json_decode(file_get_contents($revlon_url));

	foreach ($revlon as $obj):
		$idProducto = $obj->id;
		$marca = $obj->brand;
		$nombre = $obj->name;
		$descripcion = $obj->description;
		$precio = $obj->price;
		$votos = $obj->rating;
		$tipo = $obj->product_type;
		$imagen = $obj->image_link;
		$colores = json_encode($obj->product_colors);
		$fechaCreado = $obj->created_at;
		$fechaActualizado = $obj->updated_at;
		$url = $obj->product_link;

		$sentence = "INSERT INTO producto
		    (idProducto, marca, nombre, descripcion, precio, votos, tipo, imagen, colores, fechaCreado, fechaActualizado, url) VALUES ('$idProducto', '$marca','$nombre', '$descripcion', '$precio', '$votos', '$tipo', '$imagen', '$colores', '$fechaCreado', '$fechaActualizado', '$url') ;";
		    
		$connection->query($sentence);

	endforeach;

	// Covergirl
	$covergirl_url = "http://makeup-api.herokuapp.com/api/v1/products.json?brand=covergirl";
	$covergirl   = json_decode(file_get_contents($covergirl_url));

	foreach ($covergirl as $obj):
		$idProducto = $obj->id;
		$marca = $obj->brand;
		$nombre = $obj->name;
		$descripcion = $obj->description;
		$precio = $obj->price;
		$votos = $obj->rating;
		$tipo = $obj->product_type;
		$imagen = $obj->image_link;
		$colores = json_encode($obj->product_colors);
		$fechaCreado = $obj->created_at;
		$fechaActualizado = $obj->updated_at;
		$url = $obj->product_link;

		$sentence = "INSERT INTO producto
		    (idProducto, marca, nombre, descripcion, precio, votos, tipo, imagen, colores, fechaCreado, fechaActualizado, url) VALUES ('$idProducto', '$marca','$nombre', '$descripcion', '$precio', '$votos', '$tipo', '$imagen', '$colores', '$fechaCreado', '$fechaActualizado', '$url') ;";
		    
		$connection->query($sentence);

	endforeach;

	// Anna sui
	$annasui_url = "http://makeup-api.herokuapp.com/api/v1/products.json?brand=anna sui";
	$annasui   = json_decode(file_get_contents($annasui_url));

	foreach ($annasui as $obj):
		$idProducto = $obj->id;
		$marca = $obj->brand;
		$nombre = $obj->name;
		$descripcion = $obj->description;
		$precio = $obj->price;
		$votos = $obj->rating;
		$tipo = $obj->product_type;
		$imagen = $obj->image_link;
		$colores = json_encode($obj->product_colors);
		$fechaCreado = $obj->created_at;
		$fechaActualizado = $obj->updated_at;
		$url = $obj->product_link;

		$sentence = "INSERT INTO producto
		    (idProducto, marca, nombre, descripcion, precio, votos, tipo, imagen, colores, fechaCreado, fechaActualizado, url) VALUES ('$idProducto', '$marca','$nombre', '$descripcion', '$precio', '$votos', '$tipo', '$imagen', '$colores', '$fechaCreado', '$fechaActualizado', '$url') ;";
		    
		$connection->query($sentence);

	endforeach;

	// Anabelle
	$anabelle_url = "http://makeup-api.herokuapp.com/api/v1/products.json?brand=anabelle";
	$anabelle   = json_decode(file_get_contents($anabelle_url));

	foreach ($anabelle as $obj):
		$idProducto = $obj->id;
		$marca = $obj->brand;
		$nombre = $obj->name;
		$descripcion = $obj->description;
		$precio = $obj->price;
		$votos = $obj->rating;
		$tipo = $obj->product_type;
		$imagen = $obj->image_link;
		$colores = json_encode($obj->product_colors);
		$fechaCreado = $obj->created_at;
		$fechaActualizado = $obj->updated_at;
		$url = $obj->product_link;

		$sentence = "INSERT INTO producto
		    (idProducto, marca, nombre, descripcion, precio, votos, tipo, imagen, colores, fechaCreado, fechaActualizado, url) VALUES ('$idProducto', '$marca','$nombre', '$descripcion', '$precio', '$votos', '$tipo', '$imagen', '$colores', '$fechaCreado', '$fechaActualizado', '$url') ;";
		    
		$connection->query($sentence);

	endforeach;

	// Marcelle
	$marcelle_url = "http://makeup-api.herokuapp.com/api/v1/products.json?brand=marcelle";
	$marcelle   = json_decode(file_get_contents($marcelle_url));

	foreach ($marcelle as $obj):
		$idProducto = $obj->id;
		$marca = $obj->brand;
		$nombre = $obj->name;
		$descripcion = $obj->description;
		$precio = $obj->price;
		$votos = $obj->rating;
		$tipo = $obj->product_type;
		$imagen = $obj->image_link;
		$colores = json_encode($obj->product_colors);
		$fechaCreado = $obj->created_at;
		$fechaActualizado = $obj->updated_at;
		$url = $obj->product_link;

		$sentence = "INSERT INTO producto
		    (idProducto, marca, nombre, descripcion, precio, votos, tipo, imagen, colores, fechaCreado, fechaActualizado, url) VALUES ('$idProducto', '$marca','$nombre', '$descripcion', '$precio', '$votos', '$tipo', '$imagen', '$colores', '$fechaCreado', '$fechaActualizado', '$url') ;";
		    
		$connection->query($sentence);

	endforeach;

	// Pacifica
	$pacifica_url = "http://makeup-api.herokuapp.com/api/v1/products.json?brand=pacifica";
	$pacifica   = json_decode(file_get_contents($pacifica_url));

	foreach ($pacifica as $obj):
		$idProducto = $obj->id;
		$marca = $obj->brand;
		$nombre = $obj->name;
		$descripcion = $obj->description;
		$precio = $obj->price;
		$votos = $obj->rating;
		$tipo = $obj->product_type;
		$imagen = $obj->image_link;
		$colores = json_encode($obj->product_colors);
		$fechaCreado = $obj->created_at;
		$fechaActualizado = $obj->updated_at;
		$url = $obj->product_link;

		$sentence = "INSERT INTO producto
		    (idProducto, marca, nombre, descripcion, precio, votos, tipo, imagen, colores, fechaCreado, fechaActualizado, url) VALUES ('$idProducto', '$marca','$nombre', '$descripcion', '$precio', '$votos', '$tipo', '$imagen', '$colores', '$fechaCreado', '$fechaActualizado', '$url') ;";
		    
		$connection->query($sentence);

	endforeach;

	// China glaze
	$chinaglaze_url = "http://makeup-api.herokuapp.com/api/v1/products.json?brand=china glaze";
	$chinaglaze   = json_decode(file_get_contents($chinaglaze_url));

	foreach ($chinaglaze as $obj):
		$idProducto = $obj->id;
		$marca = $obj->brand;
		$nombre = $obj->name;
		$descripcion = $obj->description;
		$precio = $obj->price;
		$votos = $obj->rating;
		$tipo = $obj->product_type;
		$imagen = $obj->image_link;
		$colores = json_encode($obj->product_colors);
		$fechaCreado = $obj->created_at;
		$fechaActualizado = $obj->updated_at;
		$url = $obj->product_link;

		$sentence = "INSERT INTO producto
		    (idProducto, marca, nombre, descripcion, precio, votos, tipo, imagen, colores, fechaCreado, fechaActualizado, url) VALUES ('$idProducto', '$marca','$nombre', '$descripcion', '$precio', '$votos', '$tipo', '$imagen', '$colores', '$fechaCreado', '$fechaActualizado', '$url') ;";
		    
		$connection->query($sentence);

	endforeach;

	// Suncoat
	$suncoat_url = "http://makeup-api.herokuapp.com/api/v1/products.json?brand=suncoat";
	$suncoat   = json_decode(file_get_contents($suncoat_url));

	foreach ($suncoat as $obj):
		$idProducto = $obj->id;
		$marca = $obj->brand;
		$nombre = $obj->name;
		$descripcion = $obj->description;
		$precio = $obj->price;
		$votos = $obj->rating;
		$tipo = $obj->product_type;
		$imagen = $obj->image_link;
		$colores = json_encode($obj->product_colors);
		$fechaCreado = $obj->created_at;
		$fechaActualizado = $obj->updated_at;
		$url = $obj->product_link;

		$sentence = "INSERT INTO producto
		    (idProducto, marca, nombre, descripcion, precio, votos, tipo, imagen, colores, fechaCreado, fechaActualizado, url) VALUES ('$idProducto', '$marca','$nombre', '$descripcion', '$precio', '$votos', '$tipo', '$imagen', '$colores', '$fechaCreado', '$fechaActualizado', '$url') ;";
		    
		$connection->query($sentence);

	endforeach;

	// Physicians formula
	$physiciansformula_url = "http://makeup-api.herokuapp.com/api/v1/products.json?brand=physicians formula";
	$physiciansformula   = json_decode(file_get_contents($physiciansformula_url));

	foreach ($physiciansformula as $obj):
		$idProducto = $obj->id;
		$marca = $obj->brand;
		$nombre = $obj->name;
		$descripcion = $obj->description;
		$precio = $obj->price;
		$votos = $obj->rating;
		$tipo = $obj->product_type;
		$imagen = $obj->image_link;
		$colores = json_encode($obj->product_colors);
		$fechaCreado = $obj->created_at;
		$fechaActualizado = $obj->updated_at;
		$url = $obj->product_link;

		$sentence = "INSERT INTO producto
		    (idProducto, marca, nombre, descripcion, precio, votos, tipo, imagen, colores, fechaCreado, fechaActualizado, url) VALUES ('$idProducto', '$marca','$nombre', '$descripcion', '$precio', '$votos', '$tipo', '$imagen', '$colores', '$fechaCreado', '$fechaActualizado', '$url') ;";
		    
		$connection->query($sentence);

	endforeach;
?>