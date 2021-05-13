
$("#formulario").submit(function (event) {
    event.preventDefault();
    var email = $.trim($('#email').val());
    var senha = $.trim($('#senha').val());

   if(email.length == "" || senha == ""){
    Swal.fire({
        icon: 'success',
        title: 'Conectado com Sucesso',
        timer: 1500
      })
   }

})
