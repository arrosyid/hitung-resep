<?= $this->session->flashdata('message'); ?>
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
          <a href="#" data-toggle="modal" id="<?= $P['id_pembukuan'] ?>" data-target="#editPembukuan" class="btn btn-success mb-1 view-data">Tambah Biaya</a>
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

<!-- Mengubah data Menu -->
<div class="modal fade" id="editPembukuan" tabindex="-1" aria-labelledby="edit_PembukuanLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edit_PembukuanLabel">Biaya Tambahan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="detailPembukuan">

      </div>
    </div>
  </div>
</div>