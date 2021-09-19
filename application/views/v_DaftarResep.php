<div class="row">
  <div class="col-sm-8">
    <a href="<?= base_url('admin/tambahResep') ?>" class="btn btn-primary mb-1">Tambah Resep</a>
  </div>
  <div class="col-sm-4">
    <div class="form-grup">
      <select class="form-control" name="menu" id="menu">
        <option value="">PILIH MENU</option>
      </select>
    </div>
  </div>
</div>
<br>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Bahan</th>
      <th>Volume Bahan</th>
      <th>Harga Bahan Per-resep</th>
      <th>Harga per-resep</th>
      <th>HPP per-resep</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Nama Bahan</td>
      <td>Volume Bahan</td>
      <td>Harga Bahan Per-resep</td>
      <td>Harga per-resep</td>
      <td>HPP per-resep</td>
      <td>
        <a href="" class="btn btn-danger mb-1">Hapus</a>
        <a href="" class="btn btn-warning mb-1">Edit</a>
      </td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <th>No</th>
      <th>Nama Bahan</th>
      <th>Volume Bahan</th>
      <th>Harga Bahan Per-resep</th>
      <th>Harga per-resep</th>
      <th>HPP per-resep</th>
      <th>Action</th>
    </tr>
  </tfoot>
</table>