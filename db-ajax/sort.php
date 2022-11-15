<?php

include('../DB.php');
include('../Rezervacija.php');

$data = Rezervacija::sortRezervacije($_POST['sort_post'], $connection);

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