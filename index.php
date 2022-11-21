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

        <h4 class="text-center text-primary">Internet tehnologije - Prvi domaći zadatak - PHP OOP MySQL AJAX</h4>
        <h1 class="text-center text-success">Bioskop - Rezervacije</h1>
        <a href="allReservations.php"><button class="btn btn-success" id="rezervacije">REZERVACIJE</button></a>

        <div class="row">
            <input type="text" class="form-control" id="p_input">
            <button class="btn btn-primary" id="p_button" onclick="pretraziFilmovePoNazivu()">Pretraži</button>
        </div>

        <?php
        include('allMovies.php');
        ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="main.js"></script>

</body>

</html>