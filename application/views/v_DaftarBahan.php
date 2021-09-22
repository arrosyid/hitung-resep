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
          <a href="#" data-toggle="modal" id="<?= $B['id_bahan'] ?>" data-target="#editBahan" class="btn btn-warning mb-1 view-data">Edit</a>
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
<!-- Mengubah data sesuai dengan data yang dipilih -->
<div class="modal fade" id="editBahan" tabindex="-1" aria-labelledby="edit_BahanLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edit_BahanLabel">Edit Bahan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="detailBahan">

      </div>
    </div>
  </div>
</div>