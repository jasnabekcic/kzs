<div style="display: none;" id="editfrm">

    <div class="form-el">
        <label>ID</label>
        <input type="text" class="form-control" id="id">
    </div>

    <div class="form-el">
        <label>Naziv</label>
        <input type="text" class="form-control" id="naziv">
    </div>

    <div class="form-el">
        <label>Cena</label>
        <input type=" number" class="form-control" id="cena">
    </div>

    <div class="form-el">
        <label>Merna Jedinica</label>
        <input type="text" class="form-control" id="merna_jedinica">
    </div>

    <div class="form-el">
        <label>Količina</label>
        <input type="text" class="form-control" id="kolicina">
    </div>

    <div class="form-el">
        <label>Dobavljač</label>
        <select class="form-select" id="dobavljac_id">
            <?php
            $konekcija = new mysqli("localhost", "root", "", "proizvodi");
            $sql = "SELECT * FROM dobavljac";
            $result_set = $konekcija->query($sql);

            while ($d = $result_set->fetch_object()) {
            ?>
                <option value="<?php echo $d->id; ?>"> <?php echo $d->naziv; ?></option>
            <?php
            }
            ?>
        </select>
    </div>

    <button type="button" class="btn btn-dark mt-3" id="update">UPDATE</button>
</div>