<?php
include 'Proizvod.php';

$proizvod = new Proizvod($_POST['id'], $_POST['naziv'], $_POST['cena'], $_POST['merna_jedinica'], $_POST['kolicina'], $_POST['dobavljac_id']);
$proizvod->update($proizvod);
