$(function() {
    var input_busqueda = $('#txt_busqueda');
    listar('');
    tipoListado(input_busqueda);
    crearPaginacion();
    ejecutarAccion();
});

// Resetea la búsqueda
var limpiarBusqueda = () => {
    $('#txt_busqueda').val('');
}

// Paginación
var cambiarPagina = () => {
    $('.page-item>.page-link').on('click', function() {
        $.ajax({
            url: 'controlador/controller.list.php',
            method: 'POST',
            data: {
                pagina: $(this).text()
            },
        }).done(function(data) {
            $('#div_tabla').html(data);
            prepararDatos();
        });
    });
}
var crearPaginacion = () => {
    $.ajax({
        url: 'controlador/controller.paginacion.php',
        method: 'POST'
    }).done(function(data) {
        $('#pagination li').remove();
        for (var i = 1; i <= data; i++) {
            $('#pagination').append('<li class="page-item"><a class="page-link text-muted cursorP">' + i + '</a></li>');
        }
        cambiarPagina();
    });
}

// Mostrar productos
var listar = (param) => {
    $.ajax({
        url: 'controlador/controller.list.php',
        method: 'POST',
        data: {
            termino: param
        }
    }).done(function(data) {
        $('#div_tabla').html(data);
        prepararDatos();
    });
}

var tipoListado = (input) => {
    $(input).on('keyup', function() {
        let termino = '';
        if ($(this).val() != '') {
            termino = $(this).val();
        }
        listar(termino);
    });
}