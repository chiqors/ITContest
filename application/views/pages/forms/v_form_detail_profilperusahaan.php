<?php
  if(@$form_edit){
    $title = "Edit Data Perusahaan";
    $url = "profilperusahaan/do_edit/".$result->id_perusahaan;
  }else{
    $title = "Tambah Data Perusahaan";
    $url = "profilperusahaan/do_tambah/";
  }
?>
<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"><?= $title ?></h3>
    </div>
    <div class="panel-body">
      <form class="form" action="<?= site_url($url) ?>" method="POST">

      	<div class="form-group">
      		<label class="control-label">No. SIUP</label>
      		<input type="text" class="form-control" id="no_siup" name="no_siup" placeholder="SIUP" value="<?= @$result->no_siup ?>">
      	</div>

        <div class="form-group">
      		<label class="control-label">ID Perusahaan</label>
      		<input type="text" class="form-control" id="id_perusahaan" name="id_perusahaan" value="<?= @$result->id_perusahaan ?>">
      	</div>

        <div class="form-group">
      		<label class="control-label">Deskripsi Perusahaan</label>
      		<textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi Lengkap Perusahaan"><?= @$result->deskripsi ?></textarea>
      	</div>

        <div class="form-group">
      		<label class="control-label">Alamat Perusahaan</label>
      		<textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat Lengkap Perusahaan"><?= @$result->alamat ?></textarea>
      	</div>

      	<div class="form-group">
      		<label class="control-label">Pemilik / CEO</label>
      		<input type="text" class="form-control" id="owner" name="owner" placeholder="Owner / CEO" value="<?= @$result->owner ?>">
      	</div>

      	<div class="form-group">
      		<label class="control-label">Kategori</label>
      		<input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori" value="<?= @$result->kategori ?>">
      	</div>

      	<div class="form-group"> <!-- Submit Button -->
      		<button type="submit" class="btn btn-primary">Daftarkan Perusahaan!</button>
      	</div>

      </form>
    </div>
  </div>
</div>
