var intervalMessageMail;
var puntosMessageMail = '';

function enviar() {
    $(".messageSendingMail").removeClass('hide');
    $(".messageSendingMail").addClass('show');

    var correo = $('input[name="email"]').val();
    var mensaje = $('#message_').val();
    var nombre = $('input[name="name"]').val();
    var telefono = $('input[name="phone"]').val();
    var token = $('input[name="_token"]').val();

    intervalMessageMail = setInterval(() => {
        $('#messageMail').text('Enviando Mensaje.' + puntosMessageMail);
        puntosMessageMail += '.';
        if(puntosMessageMail == '...') puntosMessageMail = '';                
    }, 500);

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
            clearInterval(intervalMessageMail);
            setNewMailMessage("Correo Enviado :)");
            closeMessageMailAlert();
            

        },
        error: function(xhr, ajaxOptions, thrownError) {

            console.log(thrownError);
            clearInterval(intervalMessageMail);        
            cleanContact();
            setNewMailMessage("Error en el Servidor. <br>Contacte al Desarrollador.");
            closeMessageMailAlert();

        }, complete: function(data){
            setTimeout(() => 
                setNewMailMessage("Enviando Mensaje.")
            , 3000);
        }}); //AJAX     

    

    
    return false;
}
function cleanContact() {
    $('input[name="email"]').val('');
    $('#message_').val('');
    $('input[name="name"]').val('');
    $('input[name="phone"]').val('');
}

function setNewMailMessage(message){
    $("#messageMail").addClass('hide');
    setTimeout(() => {
        $("#messageMail").text(message);
        $("#messageMail").removeClass('hide');
    }, 600);    
}

function closeMessageMailAlert() {
    setTimeout(() => {
        $(".messageSendingMail").removeClass('show');
        setTimeout(() => $(".messageSendingMail").addClass('hide'),1200);
    }, 1500);
}