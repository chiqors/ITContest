<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Pengisian Form</h3>
    </div>
    <div class="panel-body">
      <form class="form" action="<?= site_url("request/do_sendmsg/".$id_requ) ?>" method="POST">

        <div class="form-group">
      		<label class="control-label">ID Account <?= $id_requ ?></label>
      		<input type="text" class="form-control" id="id_account" name="id_account" value="<?= $result_id_account_form->id_account ?>">
      	</div>

        <div class="form-group">
      		<label class="control-label">ID Form</label>
      		<input type="text" class="form-control" id="id_form" name="id_form" value="<?= $id_formulir ?>">
      	</div>

        <div class="form-group">
      		<label class="control-label">Pesan</label>
      		<textarea class="form-control" id="pesan" name="pesan" placeholder="Masukkan Pesan Informasi"></textarea>
      	</div>

        <div class="form-group">
      		<label class="control-label">Tanggal Waktu</label>
      		<input type="datetime" class="form-control" id="tgl_waktu" name="tgl_waktu" value="<?= date('Y-m-d H:i:s') ?>">
      	</div>

        <div class="form-group">
      		<button type="submit" class="btn btn-primary">Submit!</button>
      	</div>

      </form>
    </div>
  </div>
</div>
