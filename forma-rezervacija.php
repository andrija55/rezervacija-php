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


        <div class="div-rezervacija-forma">

            <h3>Rezervacija karata</h3>

            <form method="post">

                <div class="form-grupa">
                    <label for="ime" class="form-label">Ime: </label>
                    <input type="text" class="form-control" name="ime">
                </div>

                <div class="form-grupa">
                    <label for="prezime" class="form-label">Prezime: </label>
                    <input type="text" class="form-control" name="prezime">
                </div>

                <div class="form-grupa">
                    <label for="email" class="form-label">Email: </label>
                    <input type="email" class="form-control" name="email">
                </div>

                <div class="form-grupa">
                    <label for="dan" class="form-label">Dan: </label>
                    <input type="text" class="form-control" name="dan">
                </div>

                <div class="form-grupa">
                    <label for="termin" class="form-label">Termin: </label>
                    <select class="form-select" name="termin">
                        <option value="16:00">16:00h</option>
                        <option value="18:00">18:00h</option>
                        <option value="20:00">20:00h</option>
                        <option value="22:00">22:00h</option>
                    </select>
                </div>

                <div class="form-grupa">
                    <label for="broj_karata" class="form-label">Broj karata: </label>
                    <input type="number" class="form-control" name="broj_karata">
                </div>

                <button type="submit" name="dodaj-rezervaciju-button" class="btn btn-primary" id="rez-button">Rezerviši karte</button>

            </form>



            <?php

            include('DB.php');
            include('Rezervacija.php');

            if (isset($_POST['dodaj-rezervaciju-button']) && isset($_POST['ime']) && isset($_POST['prezime']) && isset($_POST['email']) && isset($_POST['dan']) && isset($_POST['termin']) && isset($_POST['broj_karata'])) {
                $rezervacija = new Rezervacija(null, $_POST['ime'], $_POST['prezime'], $_POST['email'], $_GET['film_id'], $_POST['dan'], $_POST['termin'], $_POST['broj_karata']);

                $rezervacija->dodajRezervaciju($rezervacija, $connection);
            }
            ?>


        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="main.js"></script>

</body>

</html>