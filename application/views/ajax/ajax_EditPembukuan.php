<form action="" method="post">
  <input type="hidden" name="id_pembukuan" value="<?= $pembukuan['id_pembukuan'] ?>">
  <div class="row">
    <div class="col-sm-2">
      <label>Uang Muka/DP</label>
    </div>
    <div class="col-sm-10">
      <div class="form-group">
        <input type="number" class="form-control <?= form_error('dp') != null ? "is-invalid" : "" ?>" name="dp" id="dp" placeholder="isi Uang Muka/DP" value="<?= set_value('dp') == null ? $pembukuan['dp'] : set_value('dp') ?>">
        <?= form_error('dp', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-2">
      <label>Biaya Produksi</label>
    </div>
    <div class="col-sm-10">
      <div class="form-group">
        <input type="number" class="form-control <?= form_error('biaya_produksi') != null ? "is-invalid" : "" ?>" name="biaya_produksi" id="biaya_produksi" placeholder="isi Biaya Produksi" value="<?= set_value('biaya_produksi') == null ? $pembukuan['biaya_produksi'] : set_value('biaya_produksi') ?>">
        <?= form_error('biaya_produksi', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-2">
      <label>Biaya Tambahan</label>
    </div>
    <div class="col-sm-10">
      <div class="form-group">
        <input type="number" class="form-control <?= form_error('biaya_tambahan') != null ? "is-invalid" : "" ?>" name="biaya_tambahan" id="biaya_tambahan" placeholder="isi Biaya Tambahan" value="<?= set_value('biaya_tambahan') == null ? $pembukuan['biaya_tambahan'] : set_value('biaya_tambahan') ?>">
        <?= form_error('biaya_tambahan', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-4">
      <input type="submit" value="submit" class="btn btn-primary"></input>
    </div>
  </div>
</form>