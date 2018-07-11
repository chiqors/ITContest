<?php
 if(@$form_edit){
    $title = "Edit Data Request";
    $url = "request/do_edit/".$result->id_request;
 }else{
    $title = "Tambah Data Request";
    $url = "request/do_tambah/";
 }
?>

<!-- Include the default theme -->
<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/sceditor/themes/default.min.css" />

<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"><?= $title ?></h3>
    </div>
    <div class="panel-body">
      <form class="form" action="<?= site_url($url) ?>" method="POST">

        <div class="form-group"> <!-- Full Name -->
      		<label class="control-label">ID Account</label>
      		<input type="text" class="form-control" id="id_account" name="id_account" value="<?= $this->session->userdata('id_account') ?>">
      	</div>

        <div class="form-group"> <!-- Full Name -->
      		<label class="control-label">ID Perusahaan</label>
      		<input type="text" class="form-control" id="id_perusahaan" name="id_perusahaan" value="<?php if(@$form_edit){ echo $perusahaan_id; } else { echo $result_id_per->id_perusahaan; } ?>">
      	</div>

      	<div class="form-group"> <!-- Full Name -->
      		<label class="control-label">Judul Permintaan</label>
      		<input type="text" class="form-control" id="judul_request" name="judul_request" placeholder="Judul" value="<?= @$result->judul_request ?>">
      	</div>

        <div class="form-group">
      		<label class="control-label">Syarat Permintaan</label>
      		<textarea class="form-control" id="syarat" name="syarat" placeholder="Syarat Permintaan"><?= @$result->syarat ?></textarea>
      	</div>

      	<div class="form-group"> <!-- Street 2 -->
      		<label class="control-label">Persiapan</label>
      		<textarea class="form-control" id="prepare" name="prepare" placeholder="Persiapan"><?= @$result->prepare?></textarea>
      	</div>
        <?php
          if(@$form_edit){
        ?>
        <div class="form-group"> <!-- Street 2 -->
      		<label class="control-label">Status</label>
      		<select class="form-control" id="status" name="status">
            <option value="buka">Buka</option>
            <option value="tutup">Tutup</option>
          </select>
      	</div>
        <?php
          }
        ?>
        <div class="form-group"> <!-- Street 2 -->
      		<label class="control-label">Tanggal Publish</label>
      		<input type="text" class="form-control" id="tgl_publish" name="tgl_publish" value="<?= date("Y-m-d H:i:s") ?>" readonly>
      	</div>

        <div class="form-group"> <!-- Submit Button -->
          <?php
            if(@$form_edit){
          ?>
          <button type="submit" class="btn btn-warning">Update Permintaan</button>
          <?php
            } else {
          ?>
          <button type="submit" class="btn btn-primary">Buat Permintaan!</button>
          <?php
            }
          ?>
      	</div>

      </form>
    </div>
  </div>
</div>

<!-- Include the editors JS -->
<script src="<?= base_url() ?>assets/plugins/sceditor/sceditor.min.js"></script>
<script src="minified/formats/xhtml.js"></script>
<script>
  var context = document.getElementById('prepare');
  sceditor.create(context, {
    format: 'xhtml',
    width: 'default',
    height: 'default',
    style: '<?= base_url() ?>assets/plugins/sceditor/themes/content/default.min.css'
  });
</script>
