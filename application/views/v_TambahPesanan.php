<?php
$form = [
  ['Nama Pemesan', 'nm_pemesan', 'isi Nama Pemesan', 'text'],
  ['Alamat Pengiriman', 'alamat_pengiriman', 'isi Alamat Pengiriman', 'text'],
  ['Nomor HP', 'no_hp', 'isi Nomor HP', 'number'],
  ['Jumlah Porsi', 'jml_porsi', 'isi Jumlah Porsi', 'number'],
];
$dropdown = [
  ['Menu Utama', 'menu', 'PILIH MENU UTAMA', $menu_utama],
  ['SAYUR', 'sayur', 'PILIH SAYUR', $sayur],
  ['Menu Pelengkap', 'menu_pelengkap', 'PILIH MENU PELENGKAP', $menu_tambahan],
  ['Menu Tambahan', 'menu_tambahan', 'PILIH MENU TAMBAHAN', $menu_pelengkap],
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
              <option value="<?= $DR['nm_menu'] ?>"><?= $DR['nm_menu'] ?></option>
            <?php endforeach ?>
          </select>
          <?= form_error($drop[1], '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>
    </div>
  <?php endforeach ?>
  <div class="row">
    <div class="col-sm-2">
      <label for="tgl_pesanan">Tanggal Pengiriman</label>
    </div>
    <div class="col-sm-5">
      <div class="form-group">
        <input type="date" class="form-control <?= form_error('tgl_pesanan') != null ? "is-invalid" : "" ?>" name="tgl_pesanan" id="tgl_pesanan" value="<?= set_value('tgl_pesanan') ?>">
        <?= form_error('tgl_pesanan', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-2">
      <label for="waktu">Waktu Pengiriman</label>
    </div>
    <div class="col-sm-5">
      <div class="form-group">
        <input type="time" class="form-control <?= form_error('waktu') != null ? "is-invalid" : "" ?>" name="waktu" id="waktu" value="<?= set_value('waktu') ?>">
        <?= form_error('waktu', '<small class="text-danger pl-3">', '</small>'); ?>
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