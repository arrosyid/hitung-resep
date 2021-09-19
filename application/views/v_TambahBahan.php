<?php
$form = [
  ['Nama Bahan', 'nm_bahan', 'isi Nama Bahan'],
  ['Harga Bahan Per-KG/L', 'harga_perkg', 'isi Harga Bahan Per-KG/L'],
];
?>
<form action="" method="post">
  <?php foreach ($form as $F => $val) : ?>
    <div class="row">
      <div class="col-sm-2">
        <label><?= $val[0] ?></label>
      </div>
      <div class="col-sm-10">
        <div class="form-group">
          <input type="text" class="form-control <?= form_error($val[1]) != null ? "is-invalid" : "" ?>" name="<?= $val[1] ?>" id="<?= $val[1] ?>" placeholder="<?= $val[2] ?>" value="<?= set_value($val[1]) ?>">
          <?= form_error($val[1], '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>
    </div>
  <?php endforeach ?>
  <div class="row">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-4">
      <input type="submit" value="submit" class="btn btn-primary"></input>
    </div>
  </div>
</form>