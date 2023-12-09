//Function for Show Errors
function handleErrors(errors) {
   
    $('#errorMessages').empty();

   //Loop Errrors and add to div 
    $.each(errors, function (key, value) {
        var element = $('#' + key);
        element.addClass('is-invalid');
        element.next().text(value[0]);

        
        $('#errorMessages').append('<div class="alert alert-danger">' + value[0] + '</div>');
    });
}
