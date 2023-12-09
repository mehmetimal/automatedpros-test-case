$(document).ready(function () {
    $('#image').change(function () {
        showImagePreview(this);
    });

    $('#uploadForm').submit(function (e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            url: '/upload-image',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (data) {
                $('#image').val('');
                $('#previewImage').hide();
                $('#uploadResult').html('<div class="alert alert-success" role="alert">Success!</div>');

            },
            error: function (data) {
               handleErrors(data.responseJSON.errors);
            }
        });
    });
});

function showImagePreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#previewImage').attr('src', e.target.result).show();
        };

        reader.readAsDataURL(input.files[0]);
    }
}