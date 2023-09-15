$(document).ready(function () {
    edit();
    update();
    deleteProizvod();
    searchProizvod();
});


function edit() {

    $(document).on('click', '#edit', function () {
        $.ajax({
            url: 'edit.php',
            method: 'POST',
            data: {
                proizvod_id: $(this).val()
            },
            dataType: 'json',
            success: function (data) {
                $('#editfrm').show();
                $('#id').val(data.id);
                $('#id').prop('disabled', true);
                $('#naziv').val(data.naziv);
                $('#cena').val(data.cena);
                $('#merna_jedinica').val(data.merna_jedinica);
                $('#kolicina').val(data.kolicina);
                $('#dobavljac_id').val(data.dobavljac_id);
            }
        });
    })
}


function update() {

    $(document).on('click', '#update', function () {
        $.ajax({
            url: 'update.php',
            method: 'POST',
            data: {
                id: $('#id').val(),
                naziv: $('#naziv').val(),
                cena: $('#cena').val(),
                merna_jedinica: $('#merna_jedinica').val(),
                kolicina: $('#kolicina').val(),
                dobavljac_id: $('#dobavljac_id').val(),
            },
            success: function () {
                location.reload()
            }
        });
    })
}




function deleteProizvod() {

    $(document).on('click', '#delete', function () {

        $.ajax({
            url: 'delete.php',
            method: 'POST',
            data: {
                proizvod_id: $(this).val(),
            },
            success: function () {
                location.reload()
            }
        });
    })
}




function searchProizvod() {

    $(document).on('keyup', '#nazivproizvodasearch', function () {

        $.ajax({
            url: 'search.php',
            method: 'POST',
            data: {
                naziv_proizvoda: $(this).val(),
            },
            success: function (data) {
                $('tbody').html(data)
            }
        });
    })
}