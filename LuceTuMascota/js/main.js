
console.log("Hola Mundo!");

$(document).ready(function () {

    $('#usuario').fadeOut();

    /*var left = $('.left').html();
    console.log(left);
    
    left = $('.left').text();
    console.log(left);
    
    var id_right = $('.right').attr('class');
    console.log(id_right);*/

    var nombre = $('#nombre').val();
    console.log("Nombre: " + nombre);

    var apellido = $('#apellido').val();
    console.log("Apellido: " + apellido);


    /*$('.left').attr('id', 'nuevo_id');
    $('.left').attr('atributo', 'valorDelAtributo');
    $('.left').attr({
        'atributo2': 'valorDelAtributo',
        'atributo3': 'otroValor'
    });*/

    $('#nombre').val();
    $('#apellido').val();

    $('#enviar').on('click', function (event) {
        event.preventDefault();
        var nombre = $('#nombre').val();
        //alert(nombre);
        $('#sesion').fadeOut(1000);
        $('#registro').fadeOut(1000);
        $('#usuario').fadeIn(1000);
        $('#usuario').val('Bievenido '+nombre);
        //document.write(nombre);

        $.ajax({
            url: 'formularios.php',
            type: 'post',
            dataType: 'json',
            data: {
                nombre: $('#nombre').val(),
                apellido: $('#apellido').val(),
                email: $('#email').val(),
                password: $('#clave').val(),
                password2: $('#repetirclave').val()
            },
        })
        .done(function(data) {
            console.log("success");
            console.log(data.mensaje);

            var clase_msg = 'alert-success';
            if (data.error) {
                clase_msg = 'alert-danger';
                print('mal');
            }
            var html = '<div id="mensaje" class="alert ' + clase_msg +  ' alert-dismissible" role="alert">';
            html += '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
            html += '<span aria-hidden="true">&times;</span>';
            html += '</button>';
            html += data.mensaje;
            html += '</div>';
    
            $('.container').prepend(html);

            $('#mensaje').slideUp(10000);
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
    });

    
    
    
});

$(document).ready(function () {
    $('#logo').on('click', function (e) {
        e.preventDefault();
        $('.comentarios').toggle();
    })
    $('#logo').mouseover(function(){
        $('#logo').css("color", "yellow");
    });
    $('#logo').mouseout(function(){
        $('#logo').addClass("color", "gray");
    });
});

    /*$('#mostrar').on('click', function (e) {
        e.preventDefault();
        $('img').fadeIn(1000);
    });

    $('#ocultar').on('click', function (e) {
        e.preventDefault();
        $('img').fadeOut(3000);
    });

    $('#toggle').on('click', function (e) {
        e.preventDefault();

        $('img').toggle();
    })*/

/**/
$(document).ready(function () {
$('#enviar').on('click', function (e){;
    e.preventDefault();
        var nom = $('[name="nombre"]').val();
        var email = $('[name="email"]').val();
        var tel =$ ('[name="telefono"]').val(); 
        $('#informacion').text("Informacion: "+nom+" "+email+" telefono: "+tel);
});
});