<?php
  if(@$form_edit){
    $title = "Edit Data Pendidikan";
    $url = "profile/do_editpendidikan/".$result->id_pendidikan;
  }else{
    $title = "Tambah Data pengalaman Kerja";
    $url = "profile/do_tambahpendidikan/";
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
      		<label class="control-label">Nama Jenjang</label>
      		<input type="text" class="form-control" id="nama_jenjang" name="nama_jenjang" value="<?= @$result->nama_jenjang ?>">
      	</div>

        <div class="form-group">
      		<label class="control-label">Nama Lulusan</label>
      		<input type="text" class="form-control" id="nama_lulusan" name="nama_lulusan" value="<?= @$result->nama_lulusan ?>">
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
