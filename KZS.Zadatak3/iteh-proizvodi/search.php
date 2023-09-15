<?php
$konekcija = new mysqli("localhost", "root", "", "proizvodi");
$sql = "SELECT proizvod.*, dobavljac.naziv as dob_naziv FROM proizvod JOIN dobavljac ON proizvod.dobavljac_id = dobavljac.id WHERE proizvod.naziv LIKE '%" . $_POST['naziv_proizvoda'] . "%'";
$result_set = $konekcija->query($sql);

while ($p = $result_set->fetch_object()) {
?>
    <tr>
        <td><?php echo $p->id;  ?></td>
        <td><?php echo $p->naziv;  ?></td>
        <td><?php echo $p->cena;  ?></td>
        <td><?php echo $p->merna_jedinica; ?></td>
        <td><?php echo $p->kolicina; ?></td>
        <td><?php echo $p->dob_naziv; ?></td>
        <td>
            <button class="btn btn-dark" value="<?php echo $p->id; ?>" id="edit">EDIT</button>
            <button class="btn btn-dark" value="<?php echo $p->id; ?>" id="delete">DELETE</button>
        </td>
    </tr>
<?php }
?>