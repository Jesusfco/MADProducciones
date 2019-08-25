function enviar() {

    var correo = $('input[name="email"]').val();
    var mensaje = $('#message_').val();
    var nombre = $('input[name="name"]').val();
    var telefono = $('input[name="phone"]').val();
    var token = $('input[name="_token"]').val();


    $.ajax({
        type: "POST",
        url: baseUrl + "/sendMail",
        async: true,
        data: {
            email: correo,
            name: nombre,
            message: mensaje,
            phone: telefono,
            _token: token
        },
        success: function(data) {                    

            console.log(data);
            cleanContact();

        },
        error: function(xhr, ajaxOptions, thrownError) {

            console.log(thrownError);
            //    cleanContact();

            } //Error
    }); //AJAX     


    return false;
}
function cleanContact() {
    $('input[name="email"]').val('');
    $('#message_').val('');
    $('input[name="name"]').val('');
    $('input[name="phone"]').val('');
}