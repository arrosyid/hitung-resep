<?php
$form = [
  ['Nama Pemesan', 'nm_pemesan', 'isi Nama Pemesan'],
  ['Alamat Pengiriman', 'alamat_pengiriman', 'isi Alamat Pengiriman'],
  ['Nomor HP', 'no_hp', 'isi Nomor HP'],
  ['Jumlah Porsi', 'jml_porsi', 'isi Jumlah Porsi'],
];
$dropdown = [
  ['Menu Utama', 'menu', 'PILIH MENU UTAMA', ['menu1', 'menu2']],
  ['SAYUR', 'sayur1', 'PILIH SAYUR', ['sayur1', 'sayur2']],
  ['Menu Pelengkap', 'menu_pelengkap', 'PILIH MENU PELENGKAP', ['pelengkap1', 'pelengkap2']],
  ['Menu Tambahan', 'menu_tambahan', 'PILIH MENU TAMBAHAN', ['tambahan1', 'tambahan2']],
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

  <?php foreach ($dropdown as $D => $drop) : ?>
    <div class="row">
      <div class="col-sm-2">
        <label><?= $drop[0] ?></label>
      </div>
      <div class="col-sm-10">
        <div class="form-group">
          <select class="form-control <?= form_error($drop[1]) != null ? "is-invalid" : "" ?>" name="<?= $drop[1] ?>" id="<?= $drop[1] ?>">
            <option value=""><?= $drop[2] ?></option>
            <?php foreach ($drop[3] as $DR) : ?>
              <option value="<?= $DR ?>"><?= $DR ?></option>
            <?php endforeach ?>
          </select>
          <?= form_error($drop[1], '<small class="text-danger pl-3">', '</small>'); ?>
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