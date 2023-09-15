<?php

$konekcija = new mysqli("localhost", "root", "", "proizvodi");
$sql = "SELECT * FROM proizvod WHERE id=" . $_POST["proizvod_id"];
$result_set = $konekcija->query($sql);
$proizvod = $result_set->fetch_object();
echo json_encode($proizvod);
