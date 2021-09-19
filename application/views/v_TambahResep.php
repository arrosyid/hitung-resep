<form action="" method="post">
  <!-- untuk looping form -->
  <div class="form-group">
    <input type="number" class="form-control" maxlength="3" name="jml_bahan" id="jml_bahan" placeholder="Isi Jumlah Bahan" value="<?= set_value('jml_bahan') ?>">
  </div>

  <!-- form yg dilooping -->
  <div class="jml-bahan">
    <div class="row">
      <div class="col-sm-2">
        <label for="jenis_sajian">Nama Bahan</label>
      </div>
      <div class="col-sm-10">
        <div class="form-group">
          <select class="form-control" name="jenis_sajian" id="jenis_sajian">
            <option value="">PILIH BAHAN</option>
          </select>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-2">
        <label>Volume Bahan (g/ml)</label>
      </div>
      <div class="col-sm-10">
        <div class="form-group">
          <input type="number" class="form-control <?= form_error('volume_bahan') != null ? "is-invalid" : "" ?>" name="volume_bahan" id="volume_bahan" placeholder="Isi Volume Bahan (g/ml)" value="<?= set_value('volume_bahan') ?>">
          <?= form_error('volume_bahan', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>
    </div>
    <hr>
  </div>
  <!-- /looping form -->

  <div class="row">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-4">
      <input type="submit" value="submit" class="btn btn-primary"></input>
    </div>
  </div>
</form>