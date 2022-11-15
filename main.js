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



var sort = "ASC";

function sortirajPoDanuIVremenu() {

    $.ajax({
        url: 'db-ajax/sort.php',
        method: 'post',
        data: {
            sort_post: sort
        },

        success: function (data) {
            $('tbody').html(data)
            if (sort == "DESC")
                sort = "ASC"
            else
                sort = "DESC"
        }
    })
}

