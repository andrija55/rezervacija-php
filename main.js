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


function obrisiRezervacijuId(id) {

    $.ajax({
        url: 'db-ajax/delete.php',
        method: 'post',
        data: {
            rezervacija_id: id
        },

        success: function () {
            window.location.reload()
        }
    })
}




function sortirajPoDanuIVremenu() {

    var asc_desc = $('#asc_desc').val()

    $.ajax({
        url: 'db-ajax/sort.php',
        method: 'post',
        data: {
            sort_post: asc_desc
        },

        success: function (data) {
            $('tbody').html(data)

        }
    })

    if (asc_desc == 'asc')
        $('#asc_desc').val('desc')
    else
        $('#asc_desc').val('asc')

}

