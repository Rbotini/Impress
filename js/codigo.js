
var form = $('formlogin');
form.submit(function(event){
    event.preventDefault();
    var usuario = $.trim ($('#email').val());
    console.log(usuario);

})
