<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <div class="div-home">

        <h4 class="text-center text-secondary">Internet tehnologije - Prvi domaći zadatak - PHP OOP MySQL AJAX</h4>
        <h1 class="text-center text-success">Bioskop - Rezervacije</h1>

        <button class="btn btn-danger" onclick="sortirajPoDanuIVremenu()" id="filter-button">FILTER</button>


        <div class="div-reservations">

            <table class="table table-bordered table-striped border border-2 border-dark">
                <thead>
                    <tr>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Email</th>
                        <th>Film</th>
                        <th>Dan</th>
                        <th>Termin</th>
                        <th>Broj karata</th>
                        <th>X</th>
                    </tr>
                </thead>

                <tbody>
                    <?php


                    include('DB.php');
                    include('Rezervacija.php');

                    $data = Rezervacija::getAllReservations($connection);

                    while ($rezervacija = $data->fetch_object()) {
                    ?>
                        <tr>
                            <td><?php echo $rezervacija->ime;  ?></td>
                            <td><?php echo $rezervacija->prezime;  ?></td>
                            <td><?php echo $rezervacija->email;  ?></td>
                            <td><?php echo $rezervacija->naziv; ?></td>
                            <td><?php echo $rezervacija->dan; ?></td>
                            <td><?php echo $rezervacija->termin; ?></td>
                            <td><?php echo $rezervacija->broj_karata; ?></td>
                            <td><button class="btn btn-danger" onclick="obrisiRezervacijuId(<?php echo $rezervacija->rezervacija_id; ?>)">Obriši rezervaciju</button></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="main.js"></script>

</body>

</html>