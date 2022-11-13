<?php

include('../DB.php');
include('../Movie.php');

$data = Movie::searchMovies($_POST['naziv_filma'], $connection);

while ($film = mysqli_fetch_object($data)) {
?>

    <div class="card" style="width: 25rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $film->naziv; ?></h5>
            <hr>
            <p class="card-text"><?php echo $film->opis; ?></p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Žanr: <?php echo $film->zanr; ?></li>
            <li class="list-group-item">Glumac: <?php echo $film->glumac; ?></li>
            <li class="list-group-item">Režiser: <?php echo $film->reziser; ?></li>
        </ul>
        <div class="card-body">
            <button class="btn btn-primary" id="rezervisi-button">Rezerviši</button>
        </div>
    </div>

<?php
}
?>