<?php

class Proizvod
{
    public $id;
    public $naziv;
    public $cena;
    public $merna_jedinica;
    public $kolicina;
    public $dobavljac_id;

    public function __construct($id, $naziv, $cena, $merna_jedinica, $kolicina, $dobavljac_id)
    {
        $this->id = $id;
        $this->naziv = $naziv;
        $this->cena = $cena;
        $this->merna_jedinica = $merna_jedinica;
        $this->kolicina = $kolicina;
        $this->dobavljac_id = $dobavljac_id;
    }

    public function update($proizvod)
    {
        $sql = "UPDATE proizvod 
        SET naziv='" . $proizvod->naziv . "', cena='" . $proizvod->cena . "', merna_jedinica='" . $proizvod->merna_jedinica . "',
         kolicina='" . $proizvod->kolicina . "', dobavljac_id='" . $proizvod->dobavljac_id . "' where id=" . $proizvod->id;

        $konekcija = new mysqli("localhost", "root", "", "proizvodi");
        $konekcija->query($sql);
    }
}
