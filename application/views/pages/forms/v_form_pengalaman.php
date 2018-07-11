<?php
  if(@$form_edit){
    $title = "Edit Data Pengalaman Kerja";
    $url = "profile/do_editpengalaman/".$result->id_pengalaman;
  }else{
    $title = "Tambah Data pengalaman Kerja";
    $url = "profile/do_tambahpengalaman/";
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
      		<label class="control-label">Jangka Waktu</label>
      		<input type="text" class="form-control" id="jangka_waktu" name="jangka_waktu" value="<?= @$result->jangka_waktu ?>">
      	</div>

        <div class="form-group">
      		<label class="control-label">Tempat Kerja</label>
      		<input type="text" class="form-control" id="tempat_kerja" name="tempat_kerja" value="<?= @$result->tempat_kerja ?>">
      	</div>

        <div class="form-group">
      		<label class="control-label">Nama Pekerjaan</label>
      		<input type="text" class="form-control" id="nama_pekerjaan" name="nama_pekerjaan" value="<?= @$result->nama_pekerjaan ?>">
      	</div>

        <div class="form-group hidden">
      		<label class="control-label">ID Detail Account</label>
      		<input type="text" class="form-control" id="id_detail_account" name="id_detail_account" value="<?= $id_det->id_detail_account ?>">
      	</div>

        <div class="form-group">
      		<button type="submit" class="btn btn-primary">Submit!</button>
      	</div>

      </form>
    </div>
  </div>
</div>
