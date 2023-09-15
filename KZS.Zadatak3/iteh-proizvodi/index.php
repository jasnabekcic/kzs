<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
    <title>ITEH - PROIZVODI</title>
</head>

<body>

    <?php
    include 'editfrm.php';
    ?>

    <input type="text" id="nazivproizvodasearch" />

    <table class="tablesort table table-bordered table-striped border border-3 border-primary" id="proizvoditabela">
        <thead class="table-primary border-primary">
            <tr>
                <th data-tablesort-type="int">ID</th>
                <th data-tablesort-type="string">Naziv</th>
                <th data-tablesort-type="int">Cena</th>
                <th data-tablesort-type="string">Merna Jedinica</th>
                <th data-tablesort-type="int">Količina</th>
                <th data-tablesort-type="string">Dobavljač</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php
            $konekcija = new mysqli("localhost", "root", "", "proizvodi");
            $sql = "SELECT proizvod.*, dobavljac.naziv as dob_naziv FROM proizvod JOIN dobavljac ON proizvod.dobavljac_id = dobavljac.id";
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
        </tbody>

    </table>


    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="auto-tables.js"></script>
    <script src="script.js"></script>
</body>

</html>