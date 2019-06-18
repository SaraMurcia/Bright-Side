<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Link a los estilos de SASS -->
    <link rel="stylesheet" type="text/css" href="vista/assets/css/styles.css">
    <!-- // jQuery  -->
    <script type="text/javascript" src="vista/assets/js/jquery.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.js" type="text/javascript"></script>
    <!-- // BOOTSTRAP  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <!-- // LLAMADA A LA API DE TWITTER  -->
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

    <script type="text/javascript"> // jQuery
    /* Función para que el header se adapte al hacer scroll */
    $(window).scroll(function() {

     if ($(this).scrollTop() > 1) {

      $('#header').addClass("stickyHeader anchoBarra");
      $('#logo').addClass("logoGrande");
     } else {

      $('#header').removeClass("stickyHeader anchoBarra");
      $('#logo').removeClass("logoGrande");
     }
    });
    </script>
    <script type="text/javascript">
        setTimeout('document.location.reload()', 25000); // Función javascript para recargar la página cada 20 segundos
    </script>
</head>

<!-- // HEADER  -->
<div id="header" class="bigHeader">
<div id="fueraImagen" class="fueraImagen"><a href="inicio"><img src="vista/assets/images/logo.png" id="logo" class="logo"></a></div>
 <nav id="menu">
            <ul>
             <li><a href="blog">Entradas</a>
             <li><a href="productos">Productos</a></li>
             <?= $entrar; ?>
            </ul>
    </nav>
</div>