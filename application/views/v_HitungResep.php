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
      <th>Sayur Tambahan</th>
      <th>Sayur Tambahan</th>
      <th>Menu Tambahan</th>
      <th>Jumlah Porsi</th>
      <th>Biaya</th>
      <th>Tanggal Pesanan</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Nama Pemesan</td>
      <td>Alamat Pengiriman</td>
      <td>Nomor HP pemesan</td>
      <td>Menu</td>
      <td>Sayur</td>
      <td>Sayur Tambahan</td>
      <td>Sayur Tambahan</td>
      <td>Menu Tambahan</td>
      <td>Jumlah Porsi</td>
      <td>Biaya</td>
      <td>Tanggal Pesanan</td>
      <td>
        <a href="" class="btn btn-danger mb-1">Hapus</a>
        <a href="" class="btn btn-warning mb-1">Edit</a>
      </td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <th>No</th>
      <th>Nama Pemesan</th>
      <th>Alamat Pengiriman</th>
      <th>Nomor HP pemesan</th>
      <th>Menu</th>
      <th>Sayur</th>
      <th>Sayur Tambahan</th>
      <th>Sayur Tambahan</th>
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
    <tr>
      <td>1</td>
      <td>Nama Menu</td>
      <td>Jenis Sajian</td>
      <td>Harga Per-Porsi</td>
      <td>HPP Per-Porsi</td>
      <td>Mark up</td>
      <td>
        <a href="" class="btn btn-danger">Hapus</a>
        <a href="" class="btn btn-warning">Edit</a>
      </td>
    </tr>
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