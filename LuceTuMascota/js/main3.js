

$.validator.addMethod("dominio", function(value, element) {
 // return this.optional(element) || /\w+@epn.edu.ec$/.test(value);
 return this.optional(element) || /\w+@hotmail.com$/.test(value);
}, "Por favor ingrese un correo de hotmail.com");

$( "#registro" ).validate({
  rules: {
    nombre: {
      required: true
    },
    usuario: {
      required: true
    },
    email: {
      required: true,
      email: true,
      remote: {
        url: "validar_email.php",
        type: "post",
        data: {
          email: function () {
            return $("#email").val();
          }
        }
      },
      dominio: true
    },
    clave: {
      required: true,
      minlength: 5
    },
    'repetirclave': {
      minlength: 5,
      equalTo: '#clave'
    }
  },
  messages: {
    nombre: "Ingresa tu nombre.",
    email: {
      required: "No te olvides de ingresar tu correo.",
      email: "Tu correo debe cumplir con el formato usuario@email.com",
      remote: "Este correo ya está registrado"

    }
  },

  highlight: function(element, errorClass, validClass) {
    $(element).addClass('form-control-danger').removeClass('form-control-success');
    $(element).parent().addClass('has-danger').removeClass('has-success')
  },

  unhighlight: function(element, errorClass, validClass) {
    $(element).removeClass('form-control-danger').addClass('form-control-success');
    $(element).parent().removeClass('has-danger').addClass('has-success')

  }
});
