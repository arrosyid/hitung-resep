<form action="" method="post">
  <div class="row">
    <div class="col-sm-2">
      <label for="id_bahan">Nama Bahan</label>
    </div>
    <div class="col-sm-10">
      <div class="form-group">
        <select class="form-control <?= form_error('id_bahan') != null ? 'is-invalid' : '' ?>" name="id_bahan" id="id_bahan">
          <option value="">PILIH BAHAN</option>
          <?php foreach ($bahan as $B) : ?>
            <option <?= set_select('id_bahan') != null ? set_select('id_bahan', $resep['id_bahan']) : ($B['id_bahan'] == $resep['id_bahan'] ? 'selected' : '') ?> value="<?= $B['id_bahan'] ?>"><?= $B['nm_bahan'] ?></option>
          <?php endforeach ?>
        </select>
        <?= form_error('id_bahan', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
    </div>
  </div>
  <input type="hidden" name="id_resep" value="<?= $resep['id_resep'] ?>">
  <div class="row">
    <div class="col-sm-2">
      <label>Volume Bahan (g/ml)</label>
    </div>
    <div class="col-sm-10">
      <div class="form-group">
        <input type="number" class="form-control <?= form_error('volume_bahan') != null ? 'is-invalid' : '' ?>" name="volume_bahan" id="volume_bahan" placeholder="Isi Volume Bahan (g/ml)" value="<?= set_value('volume_bahan') == null ? $resep['volume_bahan'] : set_value('volume_bahan') ?>">
        <?= form_error('volume_bahan', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-4">
      <input type="submit" value="submit" class="btn btn-primary"></input>
    </div>
  </div>
</form>