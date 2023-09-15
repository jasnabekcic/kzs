<?php


$konekcija = new mysqli("localhost", "root", "", "proizvodi");
$sql = "DELETE FROM proizvod WHERE id=" . $_POST["proizvod_id"];

$konekcija->query($sql);
