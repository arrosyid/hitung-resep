<?php
$text = [
  ['Nama Pemesan', 'Iqbal'],
  ['Alamat Pengiriman', 'Alamat'],
  ['Nomor HP', 'Nomor HP'],
  ['', ''],
  ['Menu Utama', 'Menu Utama'],
  ['Sayur', 'Sayur'],
  ['Menu Pelengkap', 'Menu Pelengkap'],
  ['Menu Tambahan', 'Menu Tambahan'],
  ['', ''],
  ['Harga per-Porsi', 'Rp. 20.000 @porsi'],
  ['Jumlah Porsi', '<b>20 porsi</b>'],
  ['Biaya yang harus dibayarkan', '<b>Rp. 400.000</b>'],
  ['Tanggal Pemesanan', 'Tanggal Pemesanan'],
];
?>
<div class="card">
  <div class="card-body">
    <?php foreach ($text as $T => $val) : ?>
      <div class="row">
        <div class="col-5"><?= $val[0] ?></div>
        <div class="col-7 text-secondary"><?= $val[1] == '' ? '<hr>' : ': ' . $val[1] ?></div>
      </div>
    <?php endforeach ?>
    <hr>
    <strong>Note :</strong>
    <style>
      p {
        margin-bottom: 0%;
      }
    </style>
    <p>Harap Segera Mengirim Uang Muka/ DP sebesar 50% dari biaya yang harus di bayarkan jika tidak maka pesanan otomatis dihapus dalam waktu 2x24 jam</p>
    <p>Jangan Lupa Untuk mengonfirmasi Pemesanan di nomor berikut 08912345678 (cs iqbal)</p>
  </div>
  <div class="card-footer">
    <a href="#" class="btn btn-secondary mb-1">Kembali</a>
    <a href="#" class="btn btn-primary mb-1">Konfirmasi</a>
    <a href="#" class="btn btn-danger mb-1">Batal</a>
  </div>
</div>