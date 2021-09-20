<?= $this->session->flashdata('message'); ?>
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
      <th>Volume Bahan (g/ml)</th>
      <th>Harga Bahan Per-resep</th>
      <th>Harga per-resep</th>
      <th>HPP per-resep</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1;
    foreach ($resep as $R) : ?>
      <tr>
        <td><?= $i ?></td>
        <td><?= $R['nm_bahan'] ?></td>
        <td><?= $R['volume_bahan'] ?></td>
        <td><?= $R['harga_bahan'] == 0 ? '-' : 'Rp. ' . number_format($R['harga_bahan'], 0, ',', '.') ?></td>
        <td><?= $R['harga_resep'] == 0 ? '-' : 'Rp. ' . number_format($R['harga_resep'], 0, ',', '.') ?></td>
        <td><?= $R['hpp_resep'] == 0 ? '-' : 'Rp. ' . number_format($R['hpp_resep'], 0, ',', '.') ?></td>
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
      <th>Nama Bahan</th>
      <th>Volume Bahan (g/ml)</th>
      <th>Harga Bahan Per-resep</th>
      <th>Harga per-resep</th>
      <th>HPP per-resep</th>
      <th>Action</th>
    </tr>
  </tfoot>
</table>