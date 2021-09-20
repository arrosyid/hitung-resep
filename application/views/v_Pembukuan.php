<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Pemesan</th>
      <th>Tanggal Pemesan</th>
      <th>Uang Muka/DP yang dibayar</th>
      <th>Biaya Produksi</th>
      <th>Biaya Tambahan</th>
      <th>Harga Per-Porsi</th>
      <th>Jumlah harga</th>
      <th>Pendapatan</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1;
    foreach ($pembukuan as $P) : ?>
      <tr>
        <td><?= $i ?></td>
        <td><?= $P['nm_pemesan'] ?></td>
        <td><?= date('d-m-Y', $P['tgl_pesanan']) ?></td>
        <td><?= $P['dp'] == 0 ? '-' : 'Rp. ' . number_format($P['dp'], 0, ',', '.') ?></td>
        <td><?= $P['biaya_produksi'] == 0 ? '-' : 'Rp. ' .  number_format($P['biaya_produksi'], 0, ',', '.')  ?></td>
        <td><?= $P['biaya_tambahan'] == 0 ? '-' : 'Rp. ' .  number_format($P['biaya_tambahan'], 0, ',', '.')  ?></td>
        <td><?= $P['harga_porsi'] == 0 ? '-' : 'Rp. ' .  number_format($P['harga_porsi'], 0, ',', '.')  ?></td>
        <td><?= $P['jumlah_harga'] == 0 ? '-' : 'Rp. ' .  number_format($P['jumlah_harga'], 0, ',', '.')  ?></td>
        <td><?= $P['pendapatan'] == 0 ? '-' : 'Rp. ' .  number_format($P['pendapatan'], 0, ',', '.')  ?></td>
        <td>
          <a href="#" class="btn btn-danger mb-1">Hapus</a>
          <a href="#" class="btn btn-warning mb-1">Edit</a>
        </td>
      </tr>
    <?php $i++;
    endforeach; ?>
  </tbody>
  <tfoot>
    <tr>
      <th>No</th>
      <th>Nama Pemesan</th>
      <th>Tanggal Pemesan</th>
      <th>Uang Muka/DP yang dibayar</th>
      <th>Biaya Produksi</th>
      <th>Biaya Tambahan</th>
      <th>Harga Per-Porsi</th>
      <th>Jumlah harga</th>
      <th>Pendapatan</th>
      <th>Action</th>
    </tr>
  </tfoot>
</table>