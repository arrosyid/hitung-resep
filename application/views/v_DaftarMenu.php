<?= $this->session->flashdata('message'); ?>
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
          <a href="#" onclick="deleteBtn('<?= base_url('admin/delete?type=daftarMenu&id=') . $M['id_menu'] ?>')" class="btn btn-danger mb-1">Hapus</a>
          <a href="#" data-toggle="modal" id="<?= $M['id_menu'] ?>" data-target="#editMenu" class="btn btn-warning mb-1 view-data">Edit</a>
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

<!-- Mengubah data Menu -->
<div class="modal fade" id="editMenu" tabindex="-1" aria-labelledby="edit_MenuLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edit_MenuLabel">Edit Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="detailMenu">

      </div>
    </div>
  </div>
</div>