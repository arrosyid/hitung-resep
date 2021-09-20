<?= $this->session->flashdata('message'); ?>
<a href="<?= base_url('admin/tambahBahan') ?>" class="btn btn-primary">Tambah Bahan</a>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Bahan</th>
      <th>Harga Per-KG/Liter</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1;
    foreach ($bahan as $B) : ?>
      <tr>
        <td><?= $i ?></td>
        <td><?= $B['nm_bahan'] ?></td>
        <td><?= $B['harga_perkg'] ?></td>
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
      <th>Harga Per-KG/Liter</th>
      <th>Action</th>
    </tr>
  </tfoot>
</table>
<hr>