<!-- untuk looping form -->
<form action="" method="get">
  <div class="row">
    <div class="col-sm-4">
      <div class="form-group">
        <select class="form-control <?= form_error("id_menu") != null ? "is-invalid" : "" ?>" name="id_menu" id="id_menu">
          <option value="">PILIH MENU</option>
          <?php foreach ($menu as $M) : ?>
            <option <?= set_select('id_menu') != null ? set_select('id_menu', $id_menu) : ($M['id_menu'] == $id_menu ? 'selected' : '') ?> value="<?= $M['id_menu'] ?>"><?= $M['nm_menu'] ?></option>
          <?php endforeach ?>
        </select>
        <?= form_error("id_menu", '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-4">
        <input type="number" class="form-control" maxlength="3" name="jml_bahan" id="jml_bahan" placeholder="Isi Jumlah Bahan" value="<?= set_value('jml_bahan') != null ? set_value('jml_bahan') : $loop ?>">
      </div>
      <div class="col-1">
        <input type="submit" value="submit" class="btn btn-primary"></input>
      </div>
    </div>
  </div>
</form>
<hr>

<form action="" method="post">
  <!-- form yg dilooping -->
  <div class="jml-bahan">
    <?php if (isset($loop)) :
      for ($i = 0; $i < $loop; $i++) : ?>
        <div class="row">
          <div class="col-sm-2">
            <label for="id_bahan<?= $i ?>">Nama Bahan</label>
          </div>
          <div class="col-sm-10">
            <div class="form-group">
              <select class="form-control <?= form_error("id_bahan$i") != null ? "is-invalid" : "" ?>" name="id_bahan<?= $i ?>" id="id_bahan<?= $i ?>">
                <option value="">PILIH BAHAN</option>
                <?php foreach ($bahan as $B) : ?>
                  <option value="<?= $B['id_bahan'] ?>"><?= $B['nm_bahan'] ?></option>
                <?php endforeach ?>
              </select>
              <?= form_error("id_bahan$i", '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-2">
            <label>Volume Bahan (g/ml)</label>
          </div>
          <div class="col-sm-10">
            <div class="form-group">
              <input type="number" class="form-control <?= form_error("volume_bahan$i") != null ? "is-invalid" : "" ?>" name="volume_bahan<?= $i ?>" id="volume_bahan<?= $i ?>" placeholder="Isi Volume Bahan (g/ml)" value="<?= set_value("volume_bahan$i") ?>">
              <?= form_error("volume_bahan$i", '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
        </div>
        <hr>
      <?php endfor;
    else : ?>
      <div class="row">
        <div class="col-sm-2">
          <label for="id_bahan">Nama Bahan</label>
        </div>
        <div class="col-sm-10">
          <div class="form-group">
            <select class="form-control" name="id_bahan" id="id_bahan">
              <option value="">PILIH BAHAN</option>
            </select>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-2">
          <label>Volume Bahan (g/ml)</label>
        </div>
        <div class="col-sm-10">
          <div class="form-group">
            <input type="number" class="form-control <?= form_error("volume_bahan") != null ? "is-invalid" : "" ?>" name="volume_bahan" id="volume_bahan" placeholder="Isi Volume Bahan (g/ml)" value="<?= set_value("volume_bahan") ?>">
            <?= form_error("volume_bahan", '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
      </div>
      <hr>
    <?php endif ?>
  </div>
  <!-- /looping form -->

  <div class="row">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-4">
      <input type="submit" value="submit" class="btn btn-primary"></input>
    </div>
  </div>
</form>