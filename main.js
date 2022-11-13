function pretraziFilmovePoNazivu() {

    var naziv = $('#p_input').val()

    $.ajax({
        url: 'db-ajax/search.php',
        method: 'post',
        data: {
            naziv_filma: naziv
        },

        success: function (data) {
            $('.div-movies').html(data);
        }
    })



}