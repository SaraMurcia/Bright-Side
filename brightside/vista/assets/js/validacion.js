jQuery(function() {
    jQuery( "#registrar" ).validate({
            rules: {
                 pstNombre: {
                            required: true,
                            minlength: 4,
                            maxlength: 10
                 },
                 pstApellidos: {
                            required: true,
                            minlength: 5,
                            maxlength: 30
                 },
                 pstNick: {
                            required: true,
                            minlength: 3,
                            maxlength: 10
                 },
                 pstEmail: {
                            required: true,
                            email: true
                 },
                 pstPwd: {
                     minlength: 5,
                     maxlength: 12
                 },
                 pstPwd2: {
                     equalTo: "#pstPwd"
                 }
            },
            messages: {
                 pstNombre: {
                            required: "Nombre requerido",
                            minlength: $.format("Mínimo {0} caracteres"),
                            maxlength: $.format("{0} caracteres máximos")
                 },
                 pstApellidos: {
                            required: "Apellidos requeridos",
                            minlength: $.format("Mínimo {0} caracteres"),
                            maxlength: $.format("{0} caracteres máximos")
                 },
                 pstNick: {
                            required: "Nombre de usuario necesario",
                            minlength: $.format("Mínimo {0} caracteres"),
                            maxlength: $.format("{0} caracteres máximos")
                 },
                 pstEmail: {
                            required: "Debes introducir un email",
                            email: "Introduce un email correcto"
                 },
                 pstPwd: {
                         required: "Debes introducir una contraseña",
                         minlength: $.format("Mínimo {0} caracteres"),
                         maxlength: $.format("{0} caracteres máximos")
                 },
                 pstPwd2: {
                         required: " ",
                         equalTo: "Las contraseñas no coinciden"
                 }
            }
    });
    jQuery( "#entrar" ).validate({
            rules: {
                 user: {
                            required: true
                 },
                 pwd: {
                            required: true
                 }
            },
            messages: {
                 user: {
                            required: "Nombre de usuario incorrecto"
                 },
                 pwd: {
                            required: "Contraseña incorrecta"
                 }
            }
    });
 });

jQuery(function() {
        jQuery( "#registrar" ).validate();
        jQuery( "#entrar" ).validate();
});