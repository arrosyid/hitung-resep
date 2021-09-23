<?= $this->session->flashdata('message'); ?>
<h3>Daftar Pesanan</h3>
<a href="<?= base_url('admin/TambahPesanan') ?>" class="btn btn-primary">Tambah Pesanan</a>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Pemesan</th>
      <th>Alamat Pengiriman</th>
      <th>Nomor HP pemesan</th>
      <th>Menu</th>
      <th>Sayur</th>
      <th>Menu Pelengkap</th>
      <th>Menu Tambahan</th>
      <th>Jumlah Porsi</th>
      <th>Biaya</th>
      <th>Tanggal Pesanan</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1;
    foreach ($pesanan as $P) : ?>
      <tr>
        <td><?= $i ?></td>
        <td><?= $P['nm_pemesan'] ?></td>
        <td><?= $P['alamat_pengiriman'] ?></td>
        <td><?= $P['no_hp'] ?></td>
        <td><?= $P['menu'] ?></td>
        <td><?= $P['sayur'] ?></td>
        <td><?= $P['menu_pelengkap'] ?></td>
        <td><?= $P['menu_tambahan'] == null ? '-' : $P['menu_tambahan'] ?></td>
        <td><?= $P['jml_porsi'] ?></td>
        <td><?= $P['biaya'] == 0 ? '-' : 'Rp. ' .  number_format($P['biaya'], 0, ',', '.') ?></td>
        <td><?= date('d-m-Y', $P['tgl_pesanan']) ?></td>
        <td>
          <a href="#" onclick="deleteBtn('<?= base_url('admin/delete?type=pesanan&id=') . $P['id_pesanan'] ?>')" class="btn btn-danger mb-1">Hapus</a>
          <a href="#" data-toggle="modal" id="<?= $P['id_pesanan'] ?>" data-target="#editPesanan" class="btn btn-warning mb-1 view-data">Edit</a>
        </td>
      </tr>
    <?php $i++;
    endforeach; ?>
  </tbody>
  <tfoot>
    <tr>
      <th>No</th>
      <th>Nama Pemesan</th>
      <th>Alamat Pengiriman</th>
      <th>Nomor HP pemesan</th>
      <th>Menu</th>
      <th>Sayur</th>
      <th>Menu Pelengkap</th>
      <th>Menu Tambahan</th>
      <th>Jumlah Porsi</th>
      <th>Biaya</th>
      <th>Tanggal Pesanan</th>
      <th>Action</th>
    </tr>
  </tfoot>
</table>
<hr>
<!-- Mengubah data Pesanan -->
<div class="modal fade" id="editPesanan" tabindex="-1" aria-labelledby="edit_PesananLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edit_PesananLabel">Edit Pesanan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="detailPesanan">

      </div>
    </div>
  </div>
</div>