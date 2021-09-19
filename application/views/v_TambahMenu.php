<?php
$form = [
  ['Nama Menu', 'nm_menu', 'isi Nama Menu', 'text'],
  ['Jumlah Porsi Per-resep', 'jml_porsi', 'isi Jumlah Posri Per-resep', 'number'],
  ['Persentase Keuntungan', 'markup', 'isi Persentase Keuntungan yang ingin diperoleh', 'number'],
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
          <input type="<?= $val[3] ?>" class="form-control <?= form_error($val[1]) != null ? "is-invalid" : "" ?>" name="<?= $val[1] ?>" id="<?= $val[1] ?>" placeholder="<?= $val[2] ?>" value="<?= set_value($val[1]) ?>">
          <?= form_error($val[1], '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>
    </div>
  <?php endforeach ?>

  <div class="row">
    <div class="col-sm-2">
      <label for="jenis_sajian">Jenis Sajian</label>
    </div>
    <div class="col-sm-10">
      <div class="form-group">
        <select class="form-control" name="jenis_sajian" id="jenis_sajian">
          <option value="">PILIH JENIS SAJIAN</option>
          <option value="MENU UTAMA">MENU UTAMA</option>
          <option value="SAYUR">SAYUR</option>
          <option value="MENU TAMBAHAN">MENU TAMBAHAN</option>
          <option value="MENU PELENGKAP">MENU PELENGKAP</option>
        </select>
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