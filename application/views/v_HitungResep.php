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

<h3>Daftar Menu</h3>
<a href="<?= base_url('admin/tambahMenu') ?>" class="btn btn-primary">Tambah Menu</a>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Menu</th>
      <th>Jenis Sajian</th>
      <th>Harga Per-Porsi</th>
      <th>HPP Per-Porsi</th>
      <th>Mark up</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1;
    foreach ($menu as $M) : ?>
      <tr>
        <td><?= $i ?></td>
        <td><?= $M['nm_menu'] ?></td>
        <td><?= $M['jenis_sajian'] ?></td>
        <td><?= $M['harga_porsi']  == 0 ? '-' : 'Rp. ' .  number_format($M['hpp_porsi'], 0, ',', '.') ?></td>
        <td><?= $M['hpp_porsi']  == 0 ? '-' : 'Rp. ' .  number_format($M['markup'], 0, ',', '.') ?></td>
        <td><?= $M['markup'] ?>%</td>
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
      <th>Nama Menu</th>
      <th>Jenis Sajian</th>
      <th>Harga Per-Porsi</th>
      <th>HPP Per-Porsi</th>
      <th>Mark up</th>
      <th>Action</th>
    </tr>
  </tfoot>
</table>
<hr>