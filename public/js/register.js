$(document).ready(function () {
    loadUsers();

    $('#userTable').DataTable();
});

function handleSubmitForm() {
    $.ajax({
        type: 'POST',
        url: '/register-user',
        data: $('#registrationForm').serialize(),
        success: function (data) {
            
            $('#registrationForm')[0].reset();
            loadUsers();
        },
        error: function (data) {
            console.log('Error:', data.responseJSON);

          
            handleErrors(data.responseJSON.errors);
        }
    });
}

function loadUsers() {
    $.ajax({
        type: 'GET',
        url: '/get-users',
        success: function (data) {
            displayUsers(data);
        },
        error: function (data) {
            console.log('Error:', data);
        }
    });
}
function displayUsers(users) {
    var table = $('#userTable').DataTable();
    table.clear().draw();

    users.forEach(function (user) {
        table.row.add([
            user.name,
            user.email,
            user.created_at
        ]).draw(false);
    });
}